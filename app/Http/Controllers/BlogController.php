<?php

namespace App\Http\Controllers;

use App\Category;
use App\User;
use Illuminate\Support\Facades\Input;
use Intervention\Image\ImageManagerStatic as Image;
//use Illuminate\Http\Request;
use Request;
use DB;
use Illuminate\Support\Facades\App;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use View;
use App\Posts;

use Session;

class BlogController extends Controller
{

    public function __construct() {
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Category::with('posts')->get();
        $posts = Posts::paginate(30);
        return View('front.posts.index', array(
            'categories' => $categories,
            'posts' => $posts
        ));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {



        /* $title = $request['title'];
         $body = $request['body'];
         $author_id = $request['author_id'];

          $image = $request->file('image');;


         $filename = time().'.'.$request->image->getClientOriginalExtension();

         $request->image->move(public_path('uploads/posts/'), $filename);







        $post = Posts::create($request->only('title', 'meta', 'body', 'image', 'author_id'));*/


        $post = new Posts();

        $post->title = Input::get('title');
        $post->meta = Input::get('meta');
        $post->body = Input::get('body');
        $post->author_id = Input::get('author_id');

        if (Input::hasFile('image')){
            $file = Input::file('image');
            $file->move(public_path(). '/uploads/posts/', $file->getClientOriginalName());

            $post->image = $file->getClientOriginalName();
        }

        $post->save();



        //Display a successful message upon save
        return redirect()->route('posts.index')
            ->with('flash_message', 'Article,
             '. $post->title.' created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Posts::find($id);

        $likes = Posts::find($id)->orderBy(DB::raw('count(\'likes\')'));

        //foreach ($post as $val){
        //  $author_id = $val['author_id'];
        //}

        $category_id = $post['category'];
        $category = User::find($category_id);

        $author_id = $post['author_id'];

        $author = User::find($author_id);

        return View::make('admin.posts.show', compact('likes', 'category'))->with('post', $post, 'author', $author);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $post = Posts::findOrFail($id);

        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $this->validate($request, [
            'title'=>'required|max:100',
            'body'=>'required',
        ]);

        $post = Posts::findOrFail($id);
        $post->title = $request->input('title');
        $post->meta = $request->input('meta');
        $post->body = $request->input('body');
        $post->author_id = $request->input('author_id');

        if (Input::hasFile('image')){
            $file = Input::file('image');
            $file->move(public_path(). '/uploads/posts/', $file->getClientOriginalName());

            $post->image = $file->getClientOriginalName();
        }


        $post->save();

        return redirect()->route('posts.show',
            $post->id)->with('flash_message',
            'Article, '. $post->title.' updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $post = Posts::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index')
            ->with('flash_message',
                'Article successfully deleted');

    }


    public function get(){
        $posts = Posts::all();
        $response = [
            'posts' => $posts
        ];
        return response()->json($response, 200);
    }



    public function search(Request $request)
    {
        // Gets the query string from our form submission
        $query = Request::input('search');
        // Returns an array of articles that have the query string located somewhere within
        // our articles titles. Paginates them so we can break up lots of search results.
        $articles = DB::table('posts')->where('title', 'LIKE', '%' . $query . '%')->paginate(50);

        // returns a view and passes the view the list of articles and the original query.
        return view('admin.pages.search', compact('articles', 'query'));
    }

}

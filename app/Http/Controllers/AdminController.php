<?php

namespace App\Http\Controllers;

use App\Like;
use App\User;
use Cmgmyr\Messenger\Models\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Posts;

//Enables us to output flash messaging

use Session;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware(['auth', 'isAdmin']);//isAdmin middleware lets only users with a //specific permission permission to access these resources
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $threads = Thread::getAllLatest()->get();
        return view('admin.home', compact('threads'));
    }



    public function update(Request $request, $id) {
        $user = User::findOrFail($id); //Get role specified by id

        //Validate name, email and password fields
        $this->validate($request, [
            'name'=>'required|max:120',
            'email'=>'required|email|unique:users,email,'.$id,
            'password'=>'required|min:6|confirmed'
        ]);
        $input = $request->only(['name', 'email', bcrypt('password')]); //Retreive the name, email and password fields
        $roles = $user['role_id']; //Retreive all roles
        $user->fill($input)->save();

        if (isset($roles)) {
            $user->roles()->sync($roles);  //If one or more role is selected associate user to roles
        }
        else {
            $user->roles()->detach(); //If no role is selected remove exisiting role associated to a user
        }
        return redirect()->route('account.{id}')
            ->with('flash_message',
                'User successfully edited.');
    }


    public function makeStatcsv()
    {
        $excel = App::make('excel');
        Excel::create('app_stat', function($excel) {

            $likecount = Like::where('like','=','1')->count();

            dd($likecount);
        })->export('csv');
    }

}

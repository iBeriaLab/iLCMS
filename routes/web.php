<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    $posts = App\Posts::all();
    return view('front.index')->with('posts', $posts);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/blog', 'BlogController@index');


Route::auth();



Route::get('/com', function () {
    return view('components');
});




//


    Route::group(['prefix' => 'app'], function () {


        Route::resource('users', 'UserController');

        Route::resource('roles', 'RolesController');

        Route::resource('permissions', 'PermissionController');



        Route::resource('posts', 'PostsController');


        Route::resource('', 'AdminController');
        Route::get('/account', 'UserController@account');


       // Route::any('/account', [ 'as' => 'account.update', 'uses' => 'AdminController@update']);

        Route::post('account', 'UserController@up_avatar');

        Route::get('/account/{id}', 'UserController@getUserProfile');

        //Route::post('accupdate', 'UserController@accupdate');

        //Route::get('/', 'AdminController')->name('Admin');


        //სტატიები, სტატიების ძებნა, სტატიების შეფასება

        //Route::get('/posts', 'PostsController@index')->name('Posts');
        Route::get('/post/{id}', 'PostsController@show')->name('Posts');
        Route::get('/post/edit/{id}', 'PostsController@edit');
        //Route::get('/post/create', 'PostsController@create');

        Route::post('like', [
            'uses' => 'LikeController@store',
            'as' => 'like',
        ]);



        Route::get('/search', [
            'as' => 'api.search',
            'uses' => 'PostsController@search'
        ]);


        //ლოკაცია

        Route::get('/countries', 'CountriesController@getCountries')->name('countries');
        Route::get('/country/{id}', 'CountriesController@getCountry')->name('country');

        Route::get('/capitals', 'CountriesController@getCapitals')->name('capitals');
        Route::get('/capitals/{capitalname}', 'CountriesController@getCapital')->name('country');
        Route::get('/capital/{id}', 'CountriesController@getCapital')->name('country');

        Route::get('/continents', 'CountriesController@getContinents')->name('Continents');
        Route::get('/continent/{id}', 'CountriesController@getCContinent')->name('Continent');




        //ვიდეოები

        Route::get('/videos', 'VideoController@index')->name('videos');
        Route::get('/video/{id}', 'VideoController@show')->name('videos');

        //კატეგორიები

        Route::resource('categories', 'CategoryController');
        Route::get('/category/{id}', 'CategoryController@show_posts');


        //შეტყობინებები

        Route::group(['prefix' => 'messages'], function () {
            Route::get('/', ['as' => 'messages', 'uses' => 'MessagesController@index']);
            Route::get('create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
            Route::post('/', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
            Route::get('{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
            Route::put('{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
        });


        //სტატესტიკა

        Route::resource('stats', 'StatsController');


        //დახმარება

        Route::get('help', function (){
            return view('admin.layouts.help');
        });



    });


Route::get('/settings', 'SettingsController@index')->name('settings');

Route::get('/test', function() { $user = App\Posts::where('id', 1)->firstOrFail(); dd($user); });


Route::get('/youtube', 'YoutubeController@index');


Route::get('/csv', function() {
    $table = \App\User::all();
    $output='';
    foreach ($table as $row) {
        $output.=  implode(",",$row->toArray());
    }
    $headers = array(
        'Content-Type' => 'text/csv',
        'Content-Disposition' => 'attachment; filename="app_stat.csv"',
    );

    return Response::make(rtrim($output, "\n"), 200, $headers);
});
<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/



Route::pattern('n', '[1-9][0-9]*'); 



Route::get('login', function(){

	return View::make('admin.login');
});


Route::get('logout', function(){
	Auth::logout();
	return Redirect::to('/');
});


Route::post("admin",'AdminController@connexion');

Route::group(['prefix'=>'admin', 'before' => 'auth'], function(){

	Route::get("/index",'AdminController@index');
	// Route::resource('admPost', 'AdmPostController');
});


Route::group(['before' => 'auth'], function() {

// Admin des posts RESTful gestion des posts
	Route::resource('admPost', 'AdmPostController');
	
	Route::get('change/{id}', 'AdmPostController@changeStatus');
});


// Route::get('/',function(){
// 	return "page Accueil";
// });

Route::get('/','HomeController@showHome');


Route::get('experiences','ExperienceController@home');



Route::get('user/{id}','HomeController@showPostsUser@id');


Route::group(['before'=>'csrf'], function(){
	Route::post('comment',  'CommentController@putComment');
});

Route::get('presentation', function(){

return View::make('public.presentation'); 
});

// Route::ressource('post', 'PostController');


Route::get('experience/{id}',function($id)
{
	// $posts=DB::table('posts')->where('id', $id)->get();
	$exp=Experience::find($id);


	return View::make('public.single',['exp'=> $exp]); 
});


Route::get('testuser', function(){

	$users=DB::table('users')->get();
	var_dump($users);

});

Route::get('testpost', function(){

	$posts=DB::table('experiences')->get();
	var_dump($posts);

});

Route::get('testAkismet', function() {
	$apiKey = Config::get('app.akismet_api_key');
	$siteURL = Config::get('app.url');
	$akismet = new Akismet($siteURL, $apiKey);
	if ($akismet->isKeyValid()) { echo 'valid!'; } else { echo 'error!'; }
});



App::error(function(\Illuminate\Database\Eloquent\ModelNotFoundException $e)
{
	return Response::view('error404', [], 404);
});

App::error(function(\Symfony\Component\HttpKernel\Exception\NotFoundHttpException $e)
{
	return Response::view('error404', [], 404);
});



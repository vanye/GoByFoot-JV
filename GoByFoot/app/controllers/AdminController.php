<?php

class AdminController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function connexion()
	{
		
		if(Input::server('REQUEST_METHOD')=='POST'){

			$rules=[
			'email'=>'required|email',
			'password'=>'required',
			];

			$validator=Validator::make(Input::all(), $rules);
			

			if($validator->fails()){
				//die("error");
				return Redirect::back()->withInput()->withErrors($validator);

			}else{


				if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
				{
					//\Log::write('info', 'This is just an informational message!');
					
					$event = Event::fire('user.login', array(Auth::user()));

					Session::flash('message', "<p style='color:aqua;'>Connecion réussie.</p>");
					// return Redirect::to("admin/index");
					return Redirect::to("admPost");


				}else{
					return "erreur de connexion";
				}	
			}
		}
	}


	public function index()
	{
		return View::make('admin.index'); 
	}

}

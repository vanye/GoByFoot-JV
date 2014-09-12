<?php

class AdmPostController extends \BaseController {


	private function upload(){


		$file = Input::file('photo')->getClientOriginalName();

		// if (Input::file('photo')->isValid())
		// {



		return md5($file);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$exps=Experience::paginate(3);

		return View::make("admin.admin", ['exps'=>$exps]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make("admin.newPost");

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		



		$post = new Experience;

		$post->title=$_POST['titre'];
		$post->description=$_POST['description'];
		$post->type=$_POST['type'];
		$post->comment=$_POST['comment'];
		$post->start=$_POST['start'];
		$post->arrival=$_POST['arrival'];






		if (Input::hasFile('photo'))
		{
    //
			if (Input::file('photo')->isValid())
			{


				$destinationPath=public_path()."\assets\images";

				$extention= Input::file('photo')->getClientOriginalExtension();
				($fileName=$this->upload()) or $fileName='';

		// var_dump($fileName);

				try {

					Input::file('photo')->move($destinationPath, $fileName.".".$extention);
			// return "okk";

				} catch(Exception $e) {

			// return "KOO : ".$destinationPath.$fileName.$extention;
				}



				$post->link_thumbnail=$fileName.".".$extention;

			}
		}
		else{
			$post->link_thumbnail="";			
		}


		$event = Event::fire('user.postlog', array(Auth::user()));

		$post->user_id=3; // voir pour mettre Auth::user()->id
		$post->save();


		/* Ecriture dans le fichier de log */


		return Redirect::to("admPost");

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$exp=Experience::find($id);

		return View::make("admin.show", ['exp'=>$exp]);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$exp = Experience::find($id);

		return View::make("admin.edit", ['exp'=>$exp]);

	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
		// var_dump($_POST);

		try{

			$post = Experience::find($id);
			$data = $_POST;

			// var_dump($post->categories()->get());

			DB::transaction(function() use ($post, $data){

				$post->title=$data['titre'];
				$post->description=$data['description'];
				$post->type=$data['type'];
				$post->comment=$data['comment'];
				$post->start=$data['start'];
				$post->arrival=$data['arrival'];




				if (Input::hasFile('photo'))
				{
    //
					if (Input::file('photo')->isValid())
					{


						$destinationPath=public_path()."\assets\images";

						$extention= Input::file('photo')->getClientOriginalExtension();
						($fileName=$this->upload()) or $fileName='';

		// var_dump($fileName);

						try {

							Input::file('photo')->move($destinationPath, $fileName.".".$extention);
			// return "okk";

						} catch(Exception $e) {

			// return "KOO : ".$destinationPath.$fileName.$extention;
						}

						$post->link_thumbnail=$fileName.".".$extention;

					}
				}
				else{
					$post->link_thumbnail="";			
				}

				$post->save();


			});
			return Redirect::to("admPost");

		}catch(Exception $ex){

			var_dump($ex);

		}


	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		Experience::destroy($id);

		return Redirect::to("admPost");
	}

	public function changeStatus($id)
	{
		$post = Experience::find($id);


		if($post->status=="published"){
			$post->status = 'unpublished';
		}else{
			$post->status = 'published';

		}
		$post->save();


		return Redirect::to("admPost");

	}
}
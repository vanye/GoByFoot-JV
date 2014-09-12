<?php

class CommentController extends BaseController {



	public function putComment()
	{


		if(Input::server('REQUEST_METHOD')=='POST'){

			$rules=[
			'pseudo'=>'required',
			'email'=>'required|email',
			'message'=>'required',
			];

			$validator=Validator::make(Input::all(), $rules);
			

			if($validator->fails()){
				//die("error");
				return Redirect::back()->withInput()->withErrors($validator);

			}else{

		// var_dump($_POST);


				$apiKey = Config::get('app.akismet_api_key');
				$siteURL = Config::get('app.url');

				$akismet = new Akismet($siteURL ,$apiKey);
				$akismet->setCommentAuthor(Input::get('pseudo'));
				$akismet->setCommentAuthorEmail(Input::get('email'));
				$akismet->setCommentContent(Input::get('message'));
				//$akismet->setPermalink($siteURL);

/*
				var_dump($apiKey);
				var_dump($siteURL);
				var_dump($akismet->isCommentSpam());
				var_dump($akismet);

*/


				$comment = new Comment;
				$comment->email = Input::get('email');
				$comment->pseudo = Input::get('pseudo');
				$comment->content = Input::get('message');
				$comment->post_id = Input::get('post_id');

				if($akismet->isCommentSpam()){
					$comment->spam = 1;
				}else{
					$comment->spam = 2;
				}


				$comment->save();
				$data['email']=Input::get('email');

				Mail::send('emails.newComment', $data, function($message)
				{
					$message->to('julien_binet@hotmail.fr', 'julien')->subject('Nouveau commentaire !!!');
				});

				Session::flash('message', "<p style='color:aqua;'>Merci pour votre commentaire.</p>");

				return Redirect::back();
				
			}

		}

	}


}

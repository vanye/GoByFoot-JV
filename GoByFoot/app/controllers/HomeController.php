<?php

class HomeController extends BaseController {

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
	

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showHome(){
		// return View::make('blog.home', ['data'=>'Hello world']); 

		// $posts=DB::table('posts')->get();

		// $exps=Experience::publish()->paginate(3);
		// $exps=Experience::all();


		$exps=Experience::all();
		// $exps=Experience::all();


	// 	foreach ($exps as $exp) {
	// # code...
	// 		$html.='&markers=color:blue%7Clabel:S%7C'.$exp->start.','.$exp->arrival;
	// 	}



// $html = '<script type="text/javascript"
        // src="http://maps.google.com/maps/api/js?sensor=false"></script>';


$map_id = 'id'.md5(rand(10,100));

$lat  =48.856614;
$long  = 2.352222;
$zoom = 12;
$address= "c'est ici";
$width=500;
$height=200;


$html = <<<CODE
  
<script type="text/javascript"
        src="http://maps.google.com/maps/api/js?sensor=false"></script>    <div id="al_map"></div>
    
    <script type="text/javascript">
    function generate() {
        var latlng = new google.maps.LatLng( 48.862004474432936, 2.35107421875 );
        var options = {
            zoom: 12,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }

        var map = new google.maps.Map(
            document.getElementById("al_map"),
            options
        );

        var legend = '<div class="map_legend"><p>Une adresse </p><p><a href="http://arbre-helices.com/map/paris-en-ce-moment/">lire la suite...</a></p></div>';
            
        var infowindow = new google.maps.InfoWindow({
            content: legend,
        });

        var marker = new google.maps.Marker({
            position: latlng,
            map: map,
        });
        
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map,marker);
        });
    }

    generate();
    
    </script>
    
    <style type"text/css">
    .map_legend{
        width:200px;
        max-height:200px;
        min-height:100px;
    }
    #al_map {
        position: relative;
        padding-bottom: 56.25%;
        padding-top: 30px;
        height: 0;
        overflow: hidden;
    }
    </style>


    
CODE;







		$last_exp=Experience::all()->last();


		return View::make('public.home',[
			'last_exp'		=> $last_exp,
			'map'	=> $html, 
			]); 
	}


	public function showPostsUser($id){
		// return View::make('blog.home', ['data'=>'Hello world']); 

		// $posts=DB::table('posts')->get();

		$user=User::find($id);
		return View::make('blog.user',['user'=> $user]); 
	}


	public function showPostCategorie($id){
		$category=Category::findOrFail($id);
		return View::make('blog.category',[
			'categories'=> $category,
			'posts'=> $category->posts,
			'title'=>$category->title,
			'active'=>$category->id,
			'breadcrumbs'=>$category->title,
			]);
	}
}

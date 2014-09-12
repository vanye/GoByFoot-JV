<?php 


class ExperienceTableSeeder extends Seeder {
	public function run() {
		DB::table('experiences')->delete(); // supprimer les enregistrements de la table posts
		DB::unprepared('ALTER TABLE experiences AUTO_INCREMENT=1'); // remettre l'auto increment à 1
// insérer des données dans la table posts
		DB::table('experiences')->insert(
			[
			[
			'title' => 'Mon premier post',
			'comment' => '1er commentaire',
			'type' => 'En tongs',
			'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
			'ges' => '7',
			'user_id' => 3,
			"start"=> "44.759629",
			"arrival"=>"4.562443",
			],
			[
			'title' => 'Mon second post',
			'comment' => '1er commentaire',
			'type' => 'En espadrilles',
			'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
			'ges' => '18',
			'user_id' => 1,
			"start"=> "49.182863",
			"arrival"=> "-0.370679",
			],
			[
			'title' => 'Mon troisième post',
			'comment' => '1er commentaire',
			'type' => 'En baskets',
			'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
			'ges' => '4',
			'user_id' => 2,
			"start"=>"48.856614",
			"arrival"=> "2.352222",
			],
			[
			'title' => 'Mon quetrième post',
			'comment' => '1er commentaire',
			'type' => 'En talons aiguilles',
			'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
			'ges' => '0',
			'user_id' => 3,
			"start"=> "43.610769",
			"arrival"=> "3.876716",
			],
				[
			'title' => 'Mon quatrième post',
			'comment' => '1er commentaire',
			'type' => 'En talons aiguilles',
			'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
			'ges' => '0',
			'user_id' => 3,
			"start"=> "41.3850639",
			"arrival"=>"2.173403",
			],
				[
			'title' => 'Mon cinquième post',
			'comment' => '1er commentaire',
			'type' => 'En echasses',
			'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
			'ges' => '0',
			'user_id' => 2,
			"start"=> '50.0755381',
			"arrival"=> '14.4378',
			],
				[
			'title' => 'Mon sixième post',
			'comment' => '1er commentaire',
			'type' => 'En mocassins',
			'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
			'ges' => '20',
			'user_id' => 1,
			"start"=> "28.2915637",
			"arrival"=> '-16.62913',
			],
				[
			'title' => 'Mon septième post',
			'comment' => '1er commentaire',
			'type' => 'En bottes',
			'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
			'ges' => '0',
			'user_id' => 3,
			"start"=> '-33.867',
			"arrival"=> '151.20699',
			],
				[
			'title' => 'Mon huitième post',
			'comment' => '1er commentaire',
			'type' => 'En rangers',
			'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
			'ges' => '0',
			'user_id' => 2,
			"start"=>'52.939916',
			"arrival"=>'-73.549136',
			],
				[
			'title' => 'Mon neuvième post',
			'comment' => '1er commentaire',
			'type' => 'En boots',
			'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
			'ges' => '10',
			'user_id' => 1,
			"start"=>"50.8503396",
			"arrival"=>"4.35171",
			],
				[
			'title' => 'Mon dixième post',
			'comment' => '1er commentaire',
			'type' => 'En chaussons',
			'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
			'ges' => '9',
			'user_id' => 2,
			"start"=> "49.026733",
			"arrival"=> '0.9006620000000112',
			],
			]);
	}
}

?>
<?php 


class UserTableSeeder extends Seeder {
	public function run() {
		DB::table('users')->delete(); // supprimer les enregistrements de la table users
		DB::unprepared('ALTER TABLE users AUTO_INCREMENT=1'); // remettre l'auto increment à 1
// insérer des données dans la table users
		DB::table('users')->insert(
			[
			[
			'username' => 'Vanessa',
			'password' => Hash::make('vanessa'),
			'status' => 'admin',
			'email' => 'vanessa@mail.fr',
			],
			[
			'username' => 'Julien',
			'password' => Hash::make('julien'),
			'status' => 'admin',
			'email' => 'julien@mail.fr',
			],
			[
			'username' => 'Admin',
			'password' => Hash::make('admin'),
			'status' => 'admin',
			'email' => 'admin@mail.fr',
			],
			]);
	}
}

?>
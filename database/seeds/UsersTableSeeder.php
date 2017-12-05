<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {

		// $this->call('UserTableSeeder');
		$this->call( 'UsersTableSeeder' );
	}

}


class UsersTableSeeder extends Seeder {

	public function run() {
		DB::table( 'users' )->delete();

		User::create( [
			'name'     => 'Admin',
			'email'    => 'admin@test.com',
			'password' => bcrypt( '123456' )
		] );

	}

}
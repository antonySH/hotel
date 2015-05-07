<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

	public function run() {

		//Add the master administrator, user id of 1
		DB::table(Config::get('auth.table'))->truncate();

		$user = array(
			'name' => 'Shvab Anton',
			'email' => 'shvab_a@iuca.kg',
			'password' => Hash::make('StalkerShawn600363'),
			'created_at' => Carbon\Carbon::now(),
			'updated_at' => Carbon\Carbon::now()
		);

		DB::table(Config::get('auth.table'))->insert($user);
	}
}
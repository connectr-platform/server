<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('ConnectionsTableSeeder');
		$this->call('PostsTableSeeder');
		$this->call('MediaTableSeeder');
		$this->call('PushesTableSeeder');
		$this->call('IndentiysTableSeeder');
		$this->call('IndentitiesTableSeeder');
	}

}
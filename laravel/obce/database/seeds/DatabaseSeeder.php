<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
    }
}

class UsersTableSeeder extends Seeder {

	public function run()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS=0');
		DB::table('users')->truncate();
		factory(App\User::class, 3)->create();
	}

}

class CitiesTableSeeder extends Seeder {

    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('cities')->truncate();
        factory(App\City::class, 500)->create();
    }

}

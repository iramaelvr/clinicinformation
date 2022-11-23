<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('registrations')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // create user
        App\User::create([
            'name'     => 'Adones Evangelista',
            'username' => str_slug('Admin'),
            'email'    => 'admin@gmail.com',
            'password' => bcrypt('iloveyou')
        ]);
    }
}

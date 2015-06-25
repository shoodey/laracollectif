<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'shoodey',
            'email' => 'shoodey@gmail.com',
            'password' => bcrypt('230074'),
        ]);
        factory(User::class, 9)->create();
    }
}

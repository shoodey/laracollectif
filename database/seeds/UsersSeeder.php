<?php

use App\User;
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
        DB::table('users')->insert(
            [
                'name' => 'shoodey',
                'email' => 'shoodey@gmail.com',
                'password' => bcrypt('230074'),
            ]);
        DB::table('users')->insert(
            [
                'name' => 'user',
                'email' => 'user@user.com',
                'password' => bcrypt('user'),
            ]
        );
        factory(User::class, 9)->create();
    }
}

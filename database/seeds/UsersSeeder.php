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
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin'),
            ]);
        DB::table('users')->insert(
            [
                'name' => 'user',
                'email' => 'user@user.com',
                'password' => bcrypt('user'),
            ]
        );
        factory(User::class, 8)->create();
    }
}

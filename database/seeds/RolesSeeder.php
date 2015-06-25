<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(
            [
                'name' => 'super-admin',
                'display_name' => 'Super Administrateur',
                'description' => "Accès total à toute l'administration",
            ]
        );

        DB::table('role_user')->insert(
            [
                'user_id' => '1',
                'role_id' => '1'
            ]
        );
    }
}

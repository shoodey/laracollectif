<?php

use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert(
        // Utilisateurs
            [
                'model' => 'utilisateurs',
                'name' => 'index-users',
                'display_name' => 'Lister les utilisateurs'
            ]);
        DB::table('permissions')->insert(
            [
                'model' => 'utilisateurs',
                'name' => 'edit-users',
                'display_name' => 'Editer les utilisateurs'
            ]);
        DB::table('permissions')->insert(
            [
                'model' => 'utilisateurs',
                'name' => 'update-users',
                'display_name' => 'Mettre à jour les utilisateurs'
            ]);

        // Pôles
        DB::table('permissions')->insert(
            [
                'model' => 'pôles',
                'name' => 'index-poles',
                'display_name' => 'Lister les pôles'
            ]);
        DB::table('permissions')->insert(
            [
                'model' => 'pôles',
                'name' => 'create-poles',
                'display_name' => 'Créer les pôles'
            ]);
        DB::table('permissions')->insert(
            [
                'model' => 'pôles',
                'name' => 'store-poles',
                'display_name' => 'Enregistrer les pôles'
            ]);
        DB::table('permissions')->insert(
            [
                'model' => 'pôles',
                'name' => 'edit-poles',
                'display_name' => 'Editer les pôles'
            ]);
        DB::table('permissions')->insert(
            [
                'model' => 'pôles',
                'name' => 'update-poles',
                'display_name' => 'Mettre à jour les pôles'
            ]);
        DB::table('permissions')->insert(
            [
                'model' => 'pôles',
                'name' => 'destory-poles',
                'display_name' => 'Supprimer les pôles'
            ]);

        // Rôles
        DB::table('permissions')->insert(
            [
                'model' => 'rôles',
                'name' => 'index-roles',
                'display_name' => 'Lister les rôles'
            ]);
        DB::table('permissions')->insert(
            [
                'model' => 'rôles',
                'name' => 'create-roles',
                'display_name' => 'Créer les rôles'
            ]);
        DB::table('permissions')->insert(
            [
                'model' => 'rôles',
                'name' => 'store-roles',
                'display_name' => 'Enregistrer les rôles'
            ]);
        DB::table('permissions')->insert(
            [
                'model' => 'rôles',
                'name' => 'edit-roles',
                'display_name' => 'Lister les rôles'
            ]);
        DB::table('permissions')->insert(
            [
                'model' => 'rôles',
                'name' => 'update-roles',
                'display_name' => 'Mettre à jour les rôles'
            ]);
        DB::table('permissions')->insert(
            [
                'model' => 'rôles',
                'name' => 'destory-roles',
                'display_name' => 'Supprimer les rôles'
            ]);

        // Permissions
        DB::table('permissions')->insert(
            [
                'model' => 'permissions',
                'name' => 'index-permissions',
                'display_name' => 'Lister les permissions'
            ]);
        DB::table('permissions')->insert(
            [
                'model' => 'permissions',
                'name' => 'create-permissions',
                'display_name' => 'Créer les permissions'
            ]);
        DB::table('permissions')->insert(
            [
                'model' => 'permissions',
                'name' => 'store-permissions',
                'display_name' => 'Enregistrer les permissions'
            ]);
        DB::table('permissions')->insert(
            [
                'model' => 'permissions',
                'name' => 'edit-permissions',
                'display_name' => 'Lister les permissions'
            ]);
        DB::table('permissions')->insert(
            [
                'model' => 'permissions',
                'name' => 'update-permissions',
                'display_name' => 'Mettre à jour les permissions'
            ]);
        DB::table('permissions')->insert(
            [
                'model' => 'permissions',
                'name' => 'destory-permissions',
                'display_name' => 'Supprimer les permissions'
            ]
        );
    }
}
<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'admin',
        ]);

        DB::table('roles')->insert([
            'name' => 'content_manager',
        ]);

        DB::table('roles')->insert([
            'name' => 'user',
        ]);

        DB::table('user_roles')->insert([
           'user_id' => 1,
            'role_id' => 1,
        ]);
    }
}

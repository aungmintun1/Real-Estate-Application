<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB:: table('roles')->insert([
            'title' => 'Admin'
        ]);

        DB::table('roles')->insert([
            'title' => 'Agent',
        ]);
        DB::table('roles')->insert([
            'title' => 'User',
        ]);

        //assigned user a role
        DB::table('role_user')->insert([
                'role_id' => 1,
                'user_id' => 1,
                //we make aung an admin. 1
                //john is an agent. 2
        ]);

        DB::table('role_user')->insert([
                'role_id' => 2,
                'user_id' => 2,
        ]);
        DB::table('role_user')->insert([
            'role_id' => 3,
            'user_id' => 3,
    ]);
    }
}

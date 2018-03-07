<?php

use Illuminate\Database\Seeder;

class UsersRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users_roles = \Illuminate\Support\Facades\DB::select('select * from model_has_roles');
        if (count($users_roles) == 0) {
            $users = \App\User::all();
            foreach ($users as $user) {
                $user->assignRole('admin');
            }
        }
    }
}

<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = \Spatie\Permission\Models\Role::all();
        if (count($roles) == 0) {
            \Spatie\Permission\Models\Role::create([
                'name' => 'admin',
            ]);
        }
    }
}

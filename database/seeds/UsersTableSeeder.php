<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usersArray = [
            [
                'name' => 'Степа Кузовов',
                'email' => 'xolms111@bmb-design.ru',
                'password' => bcrypt('657216as')
            ],
            [
                'name' => 'Свешников Александр',
                'email' => 'info@bmb-design.ru',
                'password' => bcrypt('23011985')
            ]
            
        ];
        $users = \App\User::all();
        if (count($users) != 0) {
            \App\User::create();

        }
    }
}

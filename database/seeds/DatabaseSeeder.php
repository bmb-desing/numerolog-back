<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersRolesTableSeeder::class);
        $this->call(PredictionTableSeeder::class);
        $this->call(PredictionsNumberTableSeeder::class);
        $this->call(SocialTableSeeder::class);
    }
}

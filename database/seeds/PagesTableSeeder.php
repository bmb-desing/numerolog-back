<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = \App\Page::all();
        if (count($count) == 0) {
            $pageArray = [
                [
                    'alias' => '/',
                    'title' => 'Главная',
                    'description' => 'Главная страница'
                ],
                [
                    'alias' => 'journal',
                    'title' => 'Статьи',
                    'description' => 'Страница статей'
                ]
            ];
            foreach ($pageArray as $item) {
                \App\Page::create($item);
            }
        }
    }
}

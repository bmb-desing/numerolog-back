<?php

use Illuminate\Database\Seeder;

class SocialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(\App\Http\Helpers\TranslateHelper $translateHelper)
    {
        $socialArray = [
            'WhatsApp',
            'Instagram',
            'Vk',
            'Telegram',
            'Youtube'
        ];
        $social = \App\Social::all();
        if (count($social) == 0) {
            foreach ($socialArray as $item) {
                \App\Social::create([
                    'name_rus' => $item,
                    'name' => $translateHelper->tourl($translateHelper->translite($item))
                ]);
            }
        }
    }
}

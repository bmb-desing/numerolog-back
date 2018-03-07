<?php

use Illuminate\Database\Seeder;

/**
 * Class PredictionTableSeeder
 */
class PredictionTableSeeder extends Seeder
{

    /**
     * @param \App\Http\Helpers\TranslateHelper $translateHelper
     */
    public function run(\App\Http\Helpers\TranslateHelper $translateHelper)
    {
        $predictionsArray = [
            'Характер', 'Энергия', 'Интерес', 'Здоровье', 'Логика', 'Труд', 'Удача', 'Долг', 'Память', 'Темперамент', 'Цель', 'Семья', 'Привычки', 'Быт', 'Число судьбы'
        ];
        $predictions = \App\Prediction::all();
        if (count($predictions) == 0) {
            foreach ($predictionsArray as $item) {
                \App\Prediction::create([
                    'name_rus' => $item,
                    'name' => $translateHelper->tourl($translateHelper->translite($item))
                ]);
            }
        }
    }
}

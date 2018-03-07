<?php

use Illuminate\Database\Seeder;

class PredictionsNumberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = \App\PredictionNumber::all();
        if (count($count) == 0) {
            $prediction = \App\Prediction::all();
            foreach ($prediction as $key => $item) {
                if ($item->id <= 9) {
                    $number = $key+1;
                    for ($i = 0; $i <= 10; $i++) {
                        \App\PredictionNumber::create([
                            'prediction_id' => $item->id,
                            'number' => $number
                        ]);
                        $number = (string)$number.''.$key+1;
                    }
                }
                else {
                    for ($i = 1; $i <= 20; $i++) {
                        \App\PredictionNumber::create([
                            'prediction_id' => $item->id,
                            'number' => $i
                        ]);
                    }
                }

            }
        }
    }
}

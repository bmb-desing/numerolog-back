<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 09.03.2018
 * Time: 15:59
 */

namespace App\Http\Composer;


use App\Prediction;
use Illuminate\Contracts\View\View;


class PredictionComposer
{
    protected $page;
    public function __construct(Prediction $prediction)
    {
        $this->prediction = $prediction;
    }
    public function compose(View $view) {
        $prediction = $this->prediction->all();
        return $view->with(['prediction' => $prediction]);
    }

}
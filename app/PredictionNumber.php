<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\PredictionNumber
 *
 * @property int $id
 * @property int $prediction_id
 * @property string $number
 * @property string|null $text
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PredictionNumber whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PredictionNumber whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PredictionNumber whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PredictionNumber wherePredictionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PredictionNumber whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PredictionNumber whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PredictionNumber extends Model
{
    protected $fillable = [
        'prediction_id', 'number', 'text'
    ];
    public function prediction() {
        return $this->belongsTo('App\Prediction', 'prediction_id');
    }
}

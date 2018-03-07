<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Prediction
 *
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string $name
 * @property string $name_rus
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Prediction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Prediction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Prediction whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Prediction whereNameRus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Prediction whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Prediction extends Model
{
    protected $fillable = [
        'name', 'name_rus'
    ];
    public function numbers() {
        return $this->hasMany('App\PredictionNumber', 'prediction_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Social
 *
 * @property int $id
 * @property string $name
 * @property string $name_rus
 * @property string|null $value
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Social whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Social whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Social whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Social whereNameRus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Social whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Social whereValue($value)
 * @mixin \Eloquent
 */
class Social extends Model
{
    protected $fillable = [
        'name', 'name_rus', 'value'
    ];
}

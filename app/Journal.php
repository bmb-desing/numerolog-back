<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Journal
 *
 * @property int $id
 * @property string $meta
 * @property string|null $thumbnail
 * @property string|null $short_text
 * @property string $text
 * @property int $social_network
 * @property int $publish
 * @property int $telegram_link
 * @property string|null $telegram_text
 * @property int $vk_link
 * @property string|null $vk_text
 * @property int $inst_link
 * @property int|null $inst_text
 * @property string|null $published_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Journal whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Journal whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Journal whereInstLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Journal whereInstText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Journal whereMeta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Journal wherePublish($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Journal wherePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Journal whereShortText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Journal whereSocialNetwork($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Journal whereTelegramLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Journal whereTelegramText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Journal whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Journal whereThumbnail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Journal whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Journal whereVkLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Journal whereVkText($value)
 * @mixin \Eloquent
 */
class Journal extends Model
{
    protected $table = 'journals';
    protected $fillable = [
        'meta', 'thumbnail', 'short_text', 'text', 'social_network', 'publish', 'telegram_link', 'telegram_text', 'inst_link', 'vk_link', 'inst_text', 'vk_text', 'published_at'
    ];
    protected $casts = [
        'meta' => 'array'
    ];
}

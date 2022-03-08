<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $url
 * @property bool $is_wedding
 * @property string $title_names
 * @property Carbon $event_start_time
 * @property string $social_image_location
 * @property string $youtube_hash
 */
class ClientPage extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'url',
        'is_wedding',
        'title_names',
        'event_start_time',
        'social_image_location',
        'youtube_hash',
    ];

    protected $table = 'client_pages';

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'event_start_time' => 'datetime',
    ];
}

<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $display_date
 * @property string $type
 * @property string $image_path
 * @property string $image_alt_text
 * @property int $category_sort_order
 * @property int $main_sort_order
 * @property string $facebook_share_link
 * @property string $twitter_link
 * @property string $linkedin_link
 */
class Post extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = 'posts';

    protected $fillable = ['title', 'slug', 'display_date', 'type', 'image_path', 'image_alt_text', 'category_sort_order', 'main_sort_order', 'facebook_share_link', 'twitter_link', 'linkedin_link'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}

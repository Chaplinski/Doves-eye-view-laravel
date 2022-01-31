<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $post_id
 * @property string $type
 * @property string $header
 * @property string $content
 * @property string $image_path
 * @property string $image_alt_text
 * @property string $image_caption
 * @property int $sort_order
 */
class PostSection extends Model
{
    use HasFactory;

    protected $table = 'post_sections';

    protected $fillable = ['post_id', 'type', 'header', 'content', 'image_path', 'image_alt_text', 'image_caption', 'sort_order',];
}

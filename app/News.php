<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'post_date', 'news_category_id', 'content', 'viewer_count', 'image_path', 'created_user_id'
    ];

    protected $dates = ['deleted_at'];
}

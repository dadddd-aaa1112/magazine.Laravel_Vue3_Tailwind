<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function tags() {
        return $this->belongsToMany(Tag::class, 'article_tags', 'article_id', 'tag_id' );
    }

    public function categories() {
        return $this->belongsToMany(Category::class, 'article_categories', 'article_id', 'category_id');
    }

    public function images() {
        return $this->hasMany(Image::class, 'article_id', 'id');
    }
}

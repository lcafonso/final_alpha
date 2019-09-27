<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'id',
        'name',
        'slug',
        'excerpt',
        'body',
        'file',
        'status',
        'user_id',
        'category_id',
        'created',
        'post_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function detail(){
        return $this->hasOne(Detail::class);
    }

    public function place(){
        return $this->hasOne(Place::class,'place_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }

}

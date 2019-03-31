<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function Categories()
    {
        return $this->belongsToMany(Category::class,'category_book');
    }

    public function photos()
    {
        return $this->morphMany(Photo::class,'photo');
    }
    public function files()
    {
        return $this->morphMany(File::class,'fileable');
    }
}

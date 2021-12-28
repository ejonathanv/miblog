<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function categories()
    {
        return $this->hasMany(PostCategory::class);
    }
    public function getCoverImgAttribute()
    {
        return asset('/img/posts/' . $this->cover);
    }
    public function getCategoriesStringAttribute()
    {
        $categories = $this->categories->pluck('name');
        return $categories->implode(', ');
    }
}

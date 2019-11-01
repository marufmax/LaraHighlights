<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id', 'id');
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

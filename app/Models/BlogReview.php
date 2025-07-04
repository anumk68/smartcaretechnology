<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogReview extends Model
{
   protected $fillable = ['blog_id', 'name', 'email', 'rating', 'comment', 'status'];


    public function blog()
    {
      return $this->belongsTo(Blog::class, 'blog_id', 'id');


    }
}

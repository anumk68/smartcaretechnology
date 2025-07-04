<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $table    = 'blog_categories';
    protected $fillable = [
        'category_name',
        'slug',
    ];
    public function blog()
    {
        return $this->hasMany(Blog::class, 'category_id', 'id');
    }

}

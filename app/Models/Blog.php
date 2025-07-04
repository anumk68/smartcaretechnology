<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'short_description',
        'description',
        'banner',
        'banner_alt',
        'meta_title',
        'meta_img',
        'meta_description',
        'meta_keywords',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(BlogCategory::class);
    }

    public function reviews()
    {
        return $this->hasMany(BlogReview::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicesBrand extends Model
{


    protected $fillable = [
        'brand_name',
        'icon_image',
        'slug',
        'description',
        'banner_image',
        'status',
        'seo_content',
        'additional_image',
    ];
    public function services()
{
    return $this->hasMany(Service::class, 'brand_id');
}
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    protected $fillable = [
        'service_name',
        'brand_id',
        'slug',
        'icon',
        'banner_image',
        'description',
        'status'
    ];

    public function brand() {
        return $this->belongsTo(ServicesBrand::class);
    }
}

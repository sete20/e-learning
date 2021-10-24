<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categore extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'is_published',
        'seo_description',
        'seo_keywords',
        'seo_title',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/categores/'.$this->getKey());
    }
}

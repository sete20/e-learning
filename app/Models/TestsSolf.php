<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestsSolf extends Model
{
    protected $fillable = [
        'test_id',
        'user_id',
        'solve',
        'grade',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/tests-solves/'.$this->getKey());
    }
}

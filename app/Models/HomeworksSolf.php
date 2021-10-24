<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeworksSolf extends Model
{
    protected $fillable = [
        'test_id',
        'user_id',
        'solve',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/homeworks-solves/'.$this->getKey());
    }
}

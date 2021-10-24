<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'teacher_id',
        'name',
        'slug',
        'description',
        'price',
        'discount',
        'image',
        'material_id',
        'times',
        'live',
        'activated',

    ];


    protected $dates = [
        'created_at',
        'updated_at',

    ];

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        if(isTeacher()){
            return url('/teacher/courses/'.$this->getKey());
        }
        else {
            return url('/admin/courses/'.$this->getKey());
        }

    }
}

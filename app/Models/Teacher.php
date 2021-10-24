<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\Models\Media;

class Teacher extends Authenticatable
{

    use Notifiable;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
        'enabled',
        'image',
        'email_verified_at',
        'material_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $dates = [
        'email_verified_at',
        'created_at',
        'updated_at',

    ];

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/teachers/'.$this->getKey());
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'service', 'size', 'hours', 'freq', 'info', 'name', 'phone', 'email', 'address', 'time', 'gift'
        ];
        protected $hidden = [
        'created_at', 'updated_at',
        ];
}

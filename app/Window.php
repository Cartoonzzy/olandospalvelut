<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Window extends Model
{
    protected $fillable = [
        'window', 'small', 'pane', 'info', 'name', 'phone', 'email', 'address', 'time', 'gift'
        ];
        protected $hidden = [
        'created_at', 'updated_at',
        ];
}

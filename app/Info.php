<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = [
        'name', 'phone', 'email', 'message'
        ];
        protected $hidden = [
        'created_at', 'updated_at',
        ];
}

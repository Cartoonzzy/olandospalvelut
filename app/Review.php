<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'occu', 'review'
        ];
        protected $hidden = [
        'created_at', 'updated_at',
        ];
}

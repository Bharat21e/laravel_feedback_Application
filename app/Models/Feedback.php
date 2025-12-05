<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{

        protected $table = 'feedbacks';   // <-- ADD THIS LINE

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'message',
        'status',
    ];
}

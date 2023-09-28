<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    function emiiter() {
        return $this->hasOne(User::class);
    }

    function receiver() {
        return $this->hasOne(User::class);
    }
}

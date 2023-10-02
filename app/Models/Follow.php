<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    use HasFactory;

    /**
     * Consigue el usuario que sigue.
     */
    public function users() {
        return $this->hasOne(User::class);
    }

    /**
     * Consigue el usuario que es seguido
     */
    public function followed() {
        return $this->hasOne(User::class);
    }
}

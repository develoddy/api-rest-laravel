<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $fillable = [
        'text',
        'file',
    ];

    use HasFactory;

    /**
     * Consigue el usuario asociado a la publicación.
     */
    public function user()
    {
       return $this->hasOne(User::class); 
    }
}

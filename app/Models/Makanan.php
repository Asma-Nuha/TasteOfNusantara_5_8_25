<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'place',
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

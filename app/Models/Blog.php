<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'description_short',
        'slug',
        'image',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}

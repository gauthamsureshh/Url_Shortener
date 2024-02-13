<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class url extends Model
{
    use HasFactory;
    protected $fillable=[
        'long_url','shorturl'
    ];
    protected $attributes = [
        'long_url' => null,
    ];
}

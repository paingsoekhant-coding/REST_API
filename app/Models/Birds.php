<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Birds extends Model
{
    use HasFactory;

    protected $fillable = [
        'BirdMyanmarName',
        'BirdEnglishName',
        'Description',
        'ImagePath'
    ];
}

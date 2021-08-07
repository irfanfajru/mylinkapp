<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pages extends Model
{
    protected $fillable = [
        'user_id',
        'page_name',
        'theme',
        'picture',
    ];
    use HasFactory;
}

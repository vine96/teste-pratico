<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    use HasFactory;
    protected $fillable = [
        'icon_nav','link_nav_1','link_nav_2','link_nav_3'
    ];
}

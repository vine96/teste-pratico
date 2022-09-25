<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    use HasFactory;
    protected $fillable = [
        // Navbar
        'icon_nav','link_nav_1','link_nav_2','link_nav_3',

        // Banner
        'title_banner', 'article_banner', 'btn_banner'
    ];
}

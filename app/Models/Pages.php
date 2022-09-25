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
        'title_banner', 'article_banner', 'btn_banner',

        // Centerbar
        'center_title', 'center_item_1', 'center_item_2', 'center_item_3',

        //Firstcard
        'title_first_card', 'article_first_card',

        //Secondcard
        'title_second_card', 'article_second_card', 'btn_second_card'
    ];
}

<?php

namespace App\Http\Controllers;

use App\Models\Images;
use App\Models\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(){
        return view('index', [
            'pages' => Pages::first()
        ]);
    }

    public function indexBanner(){
        return view('banner', [
            'pages' => Pages::first()
        ]);
    }

    public function saveNavbar(Request $request){
        $navbar = new Pages();
        $navbar->icon_nav = $request->link_icon;
        $navbar->link_nav_1 = $request->link_url_1;
        $navbar->link_nav_2 = $request->link_url_2;
        $navbar->link_nav_3 = $request->link_url_3;
        $navbar->save();

        Session::flash('alert', 'success|Navbar atualizado com sucesso!');
        return redirect()->back();
    }

    public function saveBanner(Request $request){
        $banner = new Pages();
        $banner->title_banner = $request->title_banner;
        $banner->btn_banner = $request->btn_banner;
        $banner->article_banner = $request->article_banner;
        $banner->save();

        Session::flash('alert', 'success|Banner atualizado com sucesso!');
        return redirect()->back();
    }

    public function saveCenterbar(Request $request){
        $centerbar = new Pages();
        $centerbar->center_title = $request->center_title;
        $centerbar->center_item_1 = $request->center_item_1;
        $centerbar->center_item_2 = $request->center_item_2;
        $centerbar->center_item_3 = $request->center_item_3;
        $centerbar->save();

        Session::flash('alert', 'success|Centerbar atualizado com sucesso!');
        return redirect()->back();
    }

    public function indexFirstcard(){
        return view('firstCard', [
            'pages' => Pages::first()
        ]);
    }

    public function saveFirstcard(Request $request){
        $firstcard = new Pages();
        $firstcard->title_first_card = $request->title_first_card;
        $firstcard->article_first_card = $request->article_first_card;
        $firstcard->save();

        if($request->image_first_card){
            foreach($request->image_first_card as $image){
              $img_ext = $image->extension();
              $imgName = uniqid() . '.' . $img_ext;
              $path = base_path() . '/public/storage/images/';
              $image->move($path, $imgName);

              $imageFirstcard = new Images();
              $imageFirstcard->image = $imgName;
              $imageFirstcard->content = 'first';
              $imageFirstcard->save();
            }
        }

        Session::flash('alert', 'success|Primeiro card atualizado com sucesso!');
        return redirect()->back();
    }
}

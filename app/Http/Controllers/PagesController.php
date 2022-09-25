<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
}

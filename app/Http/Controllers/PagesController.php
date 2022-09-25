<?php

namespace App\Http\Controllers;

use App\Models\Images;
use App\Models\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class PagesController extends Controller
{
    public function index(){
        return view('index', [
            'pages' => Pages::first(),
            'images_firstcard' => Images::where('content', 'first')->get()
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
            'pages' => Pages::first(),
            'images' => Images::where('content', 'first')->get()
        ]);
    }

    public function indexSecondcard(){
        return view('secondCard', [
            'pages' => Pages::first(),
            'images' => Images::where('content', 'second')->get()
        ]);
    }

    public function saveFirstcard(Request $request){
        $firstcard = new Pages();
        $firstcard->title_first_card = $request->title_first_card;
        $firstcard->article_first_card = $request->article_first_card;
        $firstcard->save();

        Session::flash('alert', 'success|Conteúdo do Primeiro card atualizado com sucesso!');
        return redirect()->back();
    }

    public function saveSecondcard(Request $request){
        $secondcard = new Pages();
        $secondcard->title_second_card = $request->title_second_card;
        $secondcard->article_second_card = $request->article_second_card;
        $secondcard->btn_second_card = $request->btn_second_card;
        $secondcard->save();

        Session::flash('alert', 'success|Conteúdo do Segundo card atualizado com sucesso!');
        return redirect()->back();
    }

    public function saveFirstcardImages(Request $request){
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

        Session::flash('alert', 'success|Imagens do Primeiro card atualizadas com sucesso!');
        return redirect()->back();
    }

    public function saveSecondcardImage(Request $request){
        $image = $request->image_second_card;
        if($request->image_second_card){
              $img_ext = $image->extension();
              $imgName = uniqid() . '.' . $img_ext;
              $path = base_path() . '/public/storage/images/';
              $image->move($path, $imgName);

              $imageSecondcard = new Images();
              $imageSecondcard->image = $imgName;
              $imageSecondcard->content = 'second';
              $imageSecondcard->save();
        }

        Session::flash('alert', 'success|Imagens do Primeiro card atualizadas com sucesso!');
        return redirect()->back();
    }

    public function delImageFirst($id){
        $image = Images::find($id);
        unlink(public_path('storage\images\\'.$image->image));
        $image->delete();

        Session::flash('alert', 'success|Imagem deletada com sucesso!');
        return redirect()->back();
    }

    public function downImageFirst($id){
        $image = Images::find($id);
        $path = public_path('storage\images\\'.$image->image);

        if (file_exists($path)) {
            return Response::download($path);
        }else{
            Session::flash('alert', 'error|Houve algum problema ao realizar o download da imagem.');
        }
    }
}

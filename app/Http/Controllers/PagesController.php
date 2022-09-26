<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Images;
use App\Models\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
    public function index(){
        return view('index', [
            'pages' => Pages::first(),
            'images_firstcard' => Images::where('content', 'first')->get(),
            'images_secondcard' => Images::where('content', 'second')->first(),
            'image_info' => Images::where('content', 'last')->first()
        ]);
    }

    public function indexBanner(){
        return view('banner', [
            'pages' => Pages::first()
        ]);
    }

    public function saveNavbar(Request $request){
        $navbarConsult = Pages::first();
        if($navbarConsult){
            $navbarConsult->update([
                'icon_nav' => $request->link_icon,
                'link_nav_1' => $request->link_url_1,
                'link_nav_2' => $request->link_url_2,
                'link_nav_3' => $request->link_url_3
            ]);
        }else{
            $navbar = new Pages();
            $navbar->icon_nav = $request->link_icon;
            $navbar->link_nav_1 = $request->link_url_1;
            $navbar->link_nav_2 = $request->link_url_2;
            $navbar->link_nav_3 = $request->link_url_3;
            $navbar->save();
        }

        Session::flash('alert', 'success|Navbar atualizado com sucesso!');
        return redirect()->back();
    }

    public function saveBanner(Request $request){
        $bannerConsult = Pages::first();
        if($bannerConsult){
            $bannerConsult->update([
                'title_banner' => $request->title_banner,
                'btn_banner' => $request->btn_banner,
                'article_banner' => $request->article_banner
            ]);
        }else{
            $banner = new Pages();
            $banner->title_banner = $request->title_banner;
            $banner->btn_banner = $request->btn_banner;
            $banner->article_banner = $request->article_banner;
            $banner->save();
        }

        Session::flash('alert', 'success|Banner atualizado com sucesso!');
        return redirect()->back();
    }

    public function saveCenterbar(Request $request){
        $centerConsult = Pages::first();
        if($centerConsult){
            $centerConsult->update([
                'center_title' => $request->center_title,
                'center_item_1' => $request->center_item_1,
                'center_item_2' => $request->center_item_2,
                'center_item_3' => $request->center_item_3
            ]);
        }else{
            $centerbar = new Pages();
            $centerbar->center_title = $request->center_title;
            $centerbar->center_item_1 = $request->center_item_1;
            $centerbar->center_item_2 = $request->center_item_2;
            $centerbar->center_item_3 = $request->center_item_3;
            $centerbar->save();
        }

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
            'image_second' => Images::where('content', 'second')->first()
        ]);
    }

    public function indexInfocard(){
        return view('infoCard', [
            'pages' => Pages::first(),
            'image_info' => Images::where('content', 'last')->first()
        ]);
    }

    public function indexContactcard(){
        return view('contactCard', [
            'pages' => Pages::first()
        ]);
    }

    public function saveFirstcard(Request $request){
        $firstConsult = Pages::first();
        if($firstConsult){
            $firstConsult->update([
                'title_first_card' => $request->title_first_card,
                'article_first_card' => $request->article_first_card
            ]);
        }else{
            $firstcard = new Pages();
            $firstcard->title_first_card = $request->title_first_card;
            $firstcard->article_first_card = $request->article_first_card;
            $firstcard->save();
        }

        Session::flash('alert', 'success|Conteúdo do Primeiro card atualizado com sucesso!');
        return redirect()->back();
    }

    public function saveSecondcard(Request $request){
        $secondConsult = Pages::first();
        if($secondConsult){
            $secondConsult->update([
                'title_second_card' => $request->title_second_card,
                'article_second_card' => $request->article_second_card,
                'btn_second_card' => $request->btn_second_card
            ]);
        }else{
            $secondcard = new Pages();
            $secondcard->title_second_card = $request->title_second_card;
            $secondcard->article_second_card = $request->article_second_card;
            $secondcard->btn_second_card = $request->btn_second_card;
            $secondcard->save();
        }

        Session::flash('alert', 'success|Conteúdo do Segundo card atualizado com sucesso!');
        return redirect()->back();
    }

    public function saveInfocard(Request $request){
        $infoConsult = Pages::first();
        if($infoConsult){
            $infoConsult->update([
                'title_info_card' => $request->title_info_card,
                'article_info_card' => $request->article_info_card,
                'btn_info_card' => $request->btn_info_card
            ]);
        }else{
            $infocard = new Pages();
            $infocard->title_info_card = $request->title_info_card;
            $infocard->article_info_card = $request->article_info_card;
            $infocard->btn_info_card = $request->btn_info_card;
            $infocard->save();
        }

        Session::flash('alert', 'success|Conteúdo do card de Informações atualizado com sucesso!');
        return redirect()->back();
    }

    public function saveContactcard(Request $request){
        $contactConsult = Pages::first();
        if($contactConsult){
            $contactConsult->update([
                'title_contact_card' => $request->title_contact_card,
                'article_contact_card' => $request->article_contact_card,
                'label_contact_card' => $request->label_contact_card,
                'placeholder_contact_card' => $request->placeholder_contact_card,
                'btn_contact_card' => $request->btn_contact_card,
                'footer_contact_card' => $request->footer_contact_card
            ]);
        }else{
            $contactcard = new Pages();
            $contactcard->title_contact_card = $request->title_contact_card;
            $contactcard->article_contact_card = $request->article_contact_card;
            $contactcard->label_contact_card = $request->label_contact_card;
            $contactcard->placeholder_contact_card = $request->placeholder_contact_card;
            $contactcard->btn_contact_card = $request->btn_contact_card;
            $contactcard->footer_contact_card = $request->footer_contact_card;
            $contactcard->save();
        }

        Session::flash('alert', 'success|Conteúdo do card de Contato atualizado com sucesso!');
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

        Session::flash('alert', 'success|Imagem do Segundo card atualizada com sucesso!');
        return redirect()->back();
    }

    public function saveInfocardImage(Request $request){
        $image = $request->image_info_card;
        if($image){
              $img_ext = $image->extension();
              $imgName = uniqid() . '.' . $img_ext;
              $path = base_path() . '/public/storage/images/';
              $image->move($path, $imgName);

              $imageInfocard = new Images();
              $imageInfocard->image = $imgName;
              $imageInfocard->content = 'last';
              $imageInfocard->save();
        }

        Session::flash('alert', 'success|Imagem do card de Informações atualizada com sucesso!');
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

    public function sendEmail(Request $request){
        Mail::to($request->subscribe)->send(new SendMail());
        Session::flash('alert', 'success|Email enviado com sucesso!');
        return redirect()->back();
    }
}

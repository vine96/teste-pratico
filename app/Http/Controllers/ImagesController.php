<?php

namespace App\Http\Controllers;

use App\Models\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;

class ImagesController extends Controller
{
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
}

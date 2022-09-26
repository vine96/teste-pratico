<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function indexProfile(){
        return view('pages.profile', [
            'user' => User::first()
        ]);
    }

    public function saveProfile(Request $request){
        $user = User::first();
        $user->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        Session::flash('alert', 'success|As informações do perfil foram atualizadas!');
        return redirect()->back();

    }
}

<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class usuarioController extends Controller
{

    public function index()
    {
        return view('content.login');
    }

    public function index_registro(){

        return view('content.registro');

    }


    public function registrar(Request $request){
        $User = new User;
        $User -> nombre = $request -> input('nombre');
        $User -> correo = $request -> input('correo');
        $User -> fecha_nacimiento = $request -> input('fecha_nacimiento');
        $User -> contrasenia = $request -> input('contrasenia');

        $User -> save();

        return redirect('/');

    }



    public function login(Request $request)
    {
        $usu = $request->get('email');
        $pwd = $request->get('password');
        $user = User::where('correo',$usu)->where('contrasenia',$pwd)->first();
        if(!is_null($user)){
            session()->put('user_name', $user->nombre);
            return redirect('/');
        }else{
            return redirect('login');
        }
    }
    public function logout()
    {
        session()->flush();
        return redirect('login');
    }

}

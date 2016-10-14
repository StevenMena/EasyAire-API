<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Hash;
use App;
use Auth;  
use Session; 
use App\User;
//use Illuminate\Contracts\Auth\Authenticatable;

class CustomAuthController extends Controller
{
    //
    public function getLogin(){
		$data = ['title' 			=> 'Inicio'
				,'subtitle'			=> ''];
		//Verificamos si ya esta logueado de lo contrario se redirige al login
		if(Auth::check()){
			return view('inicio.inicio',$data); 
		}else{
			return view('login.login'); 	
		}
    }  
  	
    public function postLogin(Request $request) {  
        //dd(bcrypt($request->password));
     // dd($request->all());
      dd(Auth::attempt(['name' => $request->name, 'password' => Hash::make($request->password)]));
        //Verificamos si el usuario existe y cumple las condiciones
        if(Auth::attempt(['name' => $request->name, 'password' => $request->password])){
     			//dd($request->all());
			    return redirect()->route('doInicio');
		    
		}else{
			dd($request->all());
		 	return redirect()->route('doLogin')->withErrors(['error' => 'Usuario y/o Contraseña Invalidos!']);  
		}
    }  
    public function getLogout()
	{
		//Deslogueamos al usuario
		Auth::logout();
		//Eliminamos de session la variable
		Session::forget('PERMISOS');
		//Redireccion a ruta inicial
		return redirect()->route('doLogin');
	}

}


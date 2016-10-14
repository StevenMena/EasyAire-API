<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use Session; 
use App\User;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/inicio';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

     public function postLogin(Request $request) {  
        //dd(bcrypt($request->password));
      dd(Auth::attempt(['name' => $request->name, 'password' => $request->password]));
        //Verificamos si el usuario existe y cumple las condiciones
        if(Auth::attempt(['name' => $request->name, 'password' => $request->password])){
                //dd($request->all());
                return redirect()->route('doInicio');
            
        }else{
            dd($request->all());
            return redirect()->route('doLogin')->withErrors(['error' => 'Usuario y/o Contraseña Invalidos!']);  
        }
    }  
}

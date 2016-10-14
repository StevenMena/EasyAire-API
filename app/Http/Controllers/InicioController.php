<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class InicioController extends Controller
{
    //

    public function index(){
    	
    	$data = ['title' 			=> 'Inicio' 
				,'subtitle'			=> ''];

    	return view('inicio.inicio',$data);
    }
}

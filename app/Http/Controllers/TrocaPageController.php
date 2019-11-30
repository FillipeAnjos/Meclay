<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrocaPageController extends Controller
{
   	public function index(){
		//$rodape = true;  //Essa variavel rodape é para não aparecer o rodapé na pagina index!
   		return view('index', compact('rodape'));
   	}

   	public function contato(){
   		return view('contato');
   	}

   	public function servicos(){
   		return view('servicos');
   	}

   	public function nossaHistoria(){
   		return view('nossaHistoria');
	}
	   
	public function filiado(){
		return view('filiado');
	}

}

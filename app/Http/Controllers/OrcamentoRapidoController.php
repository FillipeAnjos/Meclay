<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrcamentoRapidoModel;

use Session;// import!! para poder manipular sessões

class OrcamentoRapidoController extends Controller
{
    /*
     public function __construct(){
        
        //Obriga o usuario está logado
        $this->middleware('auth');    
    }
    */

    public function orcamentoRapido(Request $or){
        
        /*
            Abaixo o debugue Laravel
            dd();
        */

        $orcamentoRapido = new OrcamentoRapidoModel();

        $inserirOR = $orcamentoRapido->create([
                        'nome'      => $or->nomeOR,
                        'email'     => $or->emailOR,
                        'orcamento' => $or->orcamentoOR,
                    ]);
        
        if($inserirOR){
            Session::Flash('or_cadastrado_sucesso', 'Orçamento realizado com sucesso! Favor aguardar nosso retorno. Obrigado!');
            return view('/index');
        }else{
            Session::Flash('or_cadastrado_erro', 'Desculpe ocorreu um erro! Favor nos envie uma mensagem pelo chat ou por email. Obrigado!');
            return view('/index');
        }


        return view('/contato');
    }

}

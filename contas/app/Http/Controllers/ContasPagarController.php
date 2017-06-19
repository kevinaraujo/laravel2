<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\DB;
use App\ContasPagar;

class ContasPagarController extends Controller
{
    public function listar(){
    	$contas_pagar = ContasPagar::all();


    	return view('listar')->with('contas_pagar',$contas_pagar);
    }

    public function cadastro(){
    	return view('cadastro');
    }

    public function salvar(){
    	$descricao = Request::input('descricao');
    	$valor = Request::input('valor');

    	//DB::insert('INSERT INTO contas_pagar(descricao,valor) VALUES(?,?)',
    				//array($descricao,$valor));
    	
    	$contas_pagar = new ContasPagar();
    	$contas_pagar->descricao = $descricao;
    	$contas_pagar->valor = $valor;
    	$contas_pagar->save();

    	return redirect()->action('ContasPagarController@listar');
    }
}

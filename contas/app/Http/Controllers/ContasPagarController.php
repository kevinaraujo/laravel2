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

    public function editar($id){

       $contas_pagar = ContasPagar::find($id);
       if(empty($contas_pagar)){
            return 'Conta Pagar não existe';
       }else{
           return view('editar')->with('contas_pagar',$contas_pagar);
       }
    }

    public function update($id){
        $descricao = Request::input('descricao');
        $valor = Request::input('valor');

        //DB::insert('INSERT INTO contas_pagar(descricao,valor) VALUES(?,?)',
        //array($descricao,$valor));
        
        $contas_pagar = ContasPagar::find($id);
        $contas_pagar->descricao = $descricao;
        $contas_pagar->valor = $valor;
        $contas_pagar->save();

        return redirect()->action('ContasPagarController@listar');
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


     public function apagar($id){
       return view('editar');
    }
}

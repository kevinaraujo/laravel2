<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContasPagarController extends Controller
{
    public function listar(){
    	$contas_pagar = DB::select('select * FROM contas_pagar');

    	$html = '';
    	foreach($contas_pagar as $v){
    		$html .= 'Descrição:'.$v->descricao.'<br>';
    		$html .= 'Descrição:'.$v->valor.'<br>';
    	}

    	return $html;
    }
}

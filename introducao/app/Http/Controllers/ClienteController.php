<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    public function index(){
        $c = new Cliente();
        $dados = [
            'cliente' => $c->getCliente()
        ];

        return view("cliente.index", $dados);
    }

}

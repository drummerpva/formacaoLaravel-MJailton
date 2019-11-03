<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index($name = ""){
        $idCompra   = 10;
        $saldo      = 150;
        $status     = "Pago";
        $cliente    = [
            "nome"  => "Douglas Poma",
            "email" => "douglaspoma@yahoo.com",
            "senha" => "123"
        ];
        $dados = [
            "idCompra"  => $idCompra,
            "status"    => $status,
            "cliente"   => $cliente,
            "saldo"     => $saldo
        ];
        return view("imprime", $dados);
    }
    public function blade($name = ""){
        $idCompra   = 10;
        $saldo      = 150;
        $status     = "À Pagar";
        $cliente    = [
            "nome"  => "Douglas Poma",
            "email" => "douglaspoma@yahoo.com",
            "senha" => "123"
        ];
        $dados = [
            "idCompra"  => $idCompra,
            "status"    => $status,
            "cliente"   => $cliente,
            "saldo"     => $saldo,
            "tete"      => "VCAA"
        ];
        return view("imprime2", $dados);
    }
    public function site($name = ""){
        $idCompra   = 10;
        $saldo      = 150;
        $status     = "À Pagar";
        $cliente    = [
            "nome"  => "Douglas Poma",
            "email" => "douglaspoma@yahoo.com",
            "senha" => "123"
        ];
        $dados = [
            "idCompra"  => $idCompra,
            "status"    => $status,
            "cliente"   => $cliente,
            "saldo"     => $saldo,
            "tete"      => "VCAA"
        ];
        return view("site", $dados);
    }
    public function formulario(Request $req){
        return "Formulário! ".$req['valor'];
    }
}

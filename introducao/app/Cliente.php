<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function getCliente(){
        $cliente    = (object) [
            "nome"  => "Douglas Poma",
            "email" => "douglaspoma@yahoo.com",
            "senha" => "123"
        ];

        return $cliente;
    }
}

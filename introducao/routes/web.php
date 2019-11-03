<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return "<h1>Home do Laravel</h1>";
});
/*
Route::get("cliente/{cli}/{id}", function($cli, $id){
    return "Olá ".$cli." ID: ".$id;
})->where('cli', "[A-Za-z]+")->where('id', "[0-9]+");
*/
/*
Route::get("cliente", function(){
    $data = [];
    return view("vCliente", $data);
});

Route::post("cliente", function(Symfony\Component\HttpFoundation\Request $req){
    $data = ['valor' => $req->valor ?? ""];

    return view("resultado",$data);
});*/

Route::get("cliente", ["uses" =>"ClienteController@index"]);
Route::get("teste/{name?}", ["uses" =>"TesteController@index"]);
Route::get("teste2", ["uses" =>"TesteController@blade"]);
Route::get("teste3", ["uses" =>"TesteController@site"]);
Route::post("teste", ["uses" =>"TesteController@formulario"]);
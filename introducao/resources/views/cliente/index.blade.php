@extends("template.template")
@section('titulo',"Cliente")

@section('conteudo')
    <h1>Os resultados vindo foram:</h1>
    <p>Cliente: {{$cliente->nome}}</p>
@endsection
@extends("template.templateinc")
@section('titulo',"Vendo site")
@section('conteudo')
    @for ($i=1; $i <=10;$i++)
        Item {{$i}}<br/>
    @endfor
@endsection
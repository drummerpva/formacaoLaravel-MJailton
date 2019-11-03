@extends("template.templateinc")
@section('titulo',"Curso de Laravel alterado via Blade")
@section('conteudo')
    <h1>Os resultados vindo foram:</h1>
    <p>Saldo: {{ $saldo}}</p>
    <p>Status: {{$status}}</p>
    <p>Cliente: {{$cliente['nome']}}</p>
    <p>Email: <?php echo $cliente['email']; ?></p>
    <p>teste: {{ ($tete == "VCA") ?"Deu certo":"ABC"}}</p>
    @for ($i=1; $i <=10;$i++)
        Item {{$i}}<br/>
    @endfor
@endsection
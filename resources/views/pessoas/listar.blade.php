<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Pessoas</title>
</head>

<style>
    label{
        float: left;
        display: block;
        width: 90px;   
    }
    th{
        color: red;
    }
    table, th, td {
        border: 1px solid gray; 
    }
</style>

<body>
    @if (session('msg_excluiu'))
        <div class="alert alert-success">
            {{ session('msg_excluiu') }}
        </div>
    @endif
    <div><a href="{{ url('/pessoa/cadastrar') }}" title="Cadastrar Pessoas">Cadastrar</a></div>
    <br>
    <table>
        <tr><th style="color: green;">Pessoas</th></tr>
        <tr><th>ID</th><th>NOME</th><th>IDADE</th><th>CPF</th><th></th><th></th></tr>
        @foreach($pessoas as $pessoa)
            <tr>
                <td>{{$pessoa->id}}</td>
                <td>{{$pessoa->nome}}</td>
                <td>{{$pessoa->idade}}</td>
                <td>{{$pessoa->cpf}}</td>
                <td><a href="{{ route('editar_pessoa', ['id'=>$pessoa->id]) }}" title="Editar pessoa {{ $pessoa->nome }}">Editar</a> </td>
                <td><a href="{{ route('excluir_pessoa', ['id'=>$pessoa->id]) }}" title="Excluir pessoa {{ $pessoa->nome }}">Excluir</a> </td>
            </tr>
        @endforeach
    </table>
    
</body>
</html>
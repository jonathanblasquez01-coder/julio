  <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pessoa</title>
</head>

<style>
    label{
        float: left;
        display: block;
        width: 90px;   
    }
</style>

<body>
    @if (session('msg_editou'))
        <div class="alert alert-success">
            {{ session('msg_editou') }}
        </div>
    @endif

    <form action="{{ route('atualizar_pessoa', ['id' => $pessoa->id]) }}" method="post">
        @csrf
        <div><label for="nome">Nome</label>
        <input name="nome" type="text" value="{{$pessoa->nome}}"></div>
        <div><label for="idade">Idade</label>
        <input name="idade" type="text" value="{{$pessoa->idade}}"></div>
        <div><label for="cpf">CPF</label>
        <input name="cpf" type="text" value="{{$pessoa->cpf}}"></div>
        <button type="submit">Editar</button>
        <div><a href="{{ url('/pessoa/listar') }}" title="Listar Pessoas">Listar</a> </div>
    </form>
    
</body>
</html>
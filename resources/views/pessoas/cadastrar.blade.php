<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Pessoa</title>
</head>

<style>
    label{
        float: left;
        display: block;
        width: 90px;   
    }
</style>

<body>
    @if (session('msg_salvou'))
        <div class="alert alert-success">
            {{ session('msg_salvou') }}
        </div>
    @endif
    <form action="{{ route('salvar_pessoa') }}" method="post">
        @csrf
        <div><label for="nome">Nome</label>
        <input name="nome" type="text"></div>
        <div><label for="idade">Idade</label>
        <input name="idade" type="text"></div>
        <div><label for="cpf">CPF</label>
        <input name="cpf" type="text"></div>
        <button type="submit">Salvar</button>
        <div><a href="{{ url('/pessoa/listar') }}" title="Listar Pessoas">Listar</a></div>
    </form>
    
</body>
</html>
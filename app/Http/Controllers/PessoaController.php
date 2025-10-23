<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa; //adicionar a classe model Pessoa para nao dar erros

class PessoaController extends Controller
{
    public function create(){
        // pasta -> resources/views/pessoas/cadastrar.blade.php
        return view('pessoas.cadastrar');
    }

    public function store(Request $request){
        Pessoa::create([
            'nome' => $request->nome,
            'idade' => $request->idade,
            'cpf' => $request->cpf,
        ]);
        return back()->with('msg_salvou', 'Registro salvo com sucesso!');
        //return "Pessoa cadastrada com sucesso!";
    }

    public function show(){
        $pessoas = Pessoa::all();
        // pasta -> resources/views/pessoas/listar.blade.php
        return view('pessoas.listar', ['pessoas' => $pessoas]);
    }

    public function destroy($id){
        $pessoa = Pessoa::findOrFail($id);
        $pessoa->delete();
        return back()->with('msg_excluiu', 'Registro Excluido com sucesso!');
        //return "Pessoa excluida com Sucesso!";
    }

    public function edit($id){
        $pessoa = Pessoa::findOrFail($id);
        // pasta -> resources/views/pessoas/editar.blade.php
        return view('pessoas.editar', ['pessoa' => $pessoa]);
    }

    public function update(Request $request, $id){
        $pessoa = Pessoa::findOrFail($id);
        $pessoa->update([
           'nome' => $request->nome,
           'idade' => $request->idade,
           'cpf' => $request->cpf, 
        ]); 
        return back()->with('msg_editou', 'Registro Editado com sucesso!');
        //return "Pessoa Atualizada com Sucesso!";
    }

}

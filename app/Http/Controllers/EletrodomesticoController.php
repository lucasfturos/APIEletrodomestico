<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eletrodomesticos;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;;

class EletrodomesticoController extends Controller
{
    public function index()
    {
        $eletrodomestico = Eletrodomesticos::all();
        return view('eletrodomestico.index', ['eletrodomesticos' => $eletrodomestico]);
    }
    public function create()
    {
        $eletrodomestico = Eletrodomesticos::all();
        return view(('eletrodomestico.create'), ['eletrodomesticos' => $eletrodomestico]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'tensao' => 'required',
            'marca' => 'required'
        ], [
            'nome.required' => 'Informe um nome para continuar',
            'descricao.required' => 'Informe a descrição para continuar',
            'tensao.required' => 'Selecione uma das tensões para continuar',
            'marca.required' => 'Informe uma marca para continuar'
        ]);
        Eletrodomesticos::create(
            [
                'nome' => $request->nome,
                'descricao' => $request->descricao,
                'tensao' => $request->tensao,
                'marca' => $request->marca
            ]
        );
        return Redirect::route('home')->with('menssage-success', 'Eletrodoméstico foi cadastrado com Sucesso');
    }

    public function edit($id)
    {
        $eletrodomestico = Eletrodomesticos::findOrFail($id);
        return view(('eletrodomestico.edit'), ['eletrodomesticos' => $eletrodomestico]);
    }

    public function update(Request $request)
    {
        Eletrodomesticos::findOrFail($request->id)->update($request->all());
        return redirect('/')->with('menssage-update', 'Eletrodoméstico foi Atualizado com Sucesso');
    }

    public function destroy($id)
    {
        Eletrodomesticos::findOrFail($id)->delete();
        return redirect('/')->with('menssage-delete', 'Eletrodoméstico foi Excluído com Sucesso');
    }
}

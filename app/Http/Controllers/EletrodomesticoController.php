<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eletrodomesticos;

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
        $eletrodomestico = new Eletrodomesticos;
        $eletrodomestico->nome = $request->nome;
        $eletrodomestico->descricao = $request->descricao;
        $eletrodomestico->tensao = $request->tensao;
        $eletrodomestico->marca = $request->marca;
        $eletrodomestico->save();

        return redirect('/')->with('menssage-success', 'Eletrodoméstico foi cadastrado com Sucesso');
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

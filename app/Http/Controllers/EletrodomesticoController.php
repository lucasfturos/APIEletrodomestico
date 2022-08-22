<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eletrodomesticos;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class EletrodomesticoController extends Controller
{
    public function index()
    {
        $eletrodomestico = Eletrodomesticos::all();
        return Inertia::render(
            'Home',
            ['eletrodomesticos' => $eletrodomestico]
        );
    }
    public function create()
    {
        $eletrodomestico = Eletrodomesticos::all();
        return Inertia::render(
            'Create',
            ['eletrodomesticos' => $eletrodomestico]
        );
    }

    public function store(Request $request)
    {
        Eletrodomesticos::create($request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'tensao' => 'required',
            'marca' => 'required'
        ], [
            'nome.required' => 'Informe um nome para continuar',
            'descricao.required' => 'Informe a descrição para continuar',
            'tensao.required' => 'Selecione uma das tensões para continuar',
            'marca.required' => 'Informe uma marca para continuar'
        ]));
        return Redirect::route('home')
            ->with('message-success', 'Eletrodoméstico foi cadastrado com Sucesso');
    }

    public function edit(Eletrodomesticos $eletrodomestico)
    {
        return Inertia::render('Edit', [
            'eletrodomesticos' => [
                'id' => $eletrodomestico->id,
                'nome' => $eletrodomestico->nome,
                'descricao' => $eletrodomestico->descricao,
                'tensao' => $eletrodomestico->tensao,
                'marca' => $eletrodomestico->marca
            ]
        ]);
    }

    public function update(Request $request, Eletrodomesticos $eletrodomestico)
    {
        $data = $request->validate([
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
        $eletrodomestico->update($data);
        return Redirect::route('home')
            ->with('message-update', 'Eletrodoméstico foi atulizado com Sucesso');
    }

    public function destroy(Eletrodomesticos $eletrodomestico, $id)
    {
        $eletrodomestico::findOrfail($id)->delete();
        if ($eletrodomestico)
            return Redirect::route('home')
                ->with('message-delete', 'Eletrodoméstico foi Excluído com Sucesso');
    }
}

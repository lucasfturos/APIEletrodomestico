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
        return view(('eletrodomestico.create_update'), ['eletrodomesticos' => $eletrodomestico]);
    }

    public function store(Request $request)
    {
        $eletrodomestico = new Eletrodomesticos;
        $eletrodomestico->nome = $request->nome;
        $eletrodomestico->descricao = $request->descricao;
        $eletrodomestico->tensao = $request->tensao;
        $eletrodomestico->marca = $request->marca;
        $eletrodomestico->save();

        return redirect('/');
    }

    public function update()
    {
    }
    public function destroy()
    {
    }
}

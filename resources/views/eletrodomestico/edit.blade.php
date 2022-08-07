@extends('layout.main')
@section('title','Editação')
@section('content')

<h1 class="text-center">Editar Eletrodoméstico</h1>
<div class="card">
    <div class="card-body">
        <form action="/update/{{ $eletrodomesticos->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="title">Nome do Eletrodoméstico</label>
                <input type="text" class="form-control" id="nome" name="nome" 
                value="{{ $eletrodomesticos->nome }}" placeholder="Ex: Geladeira Frost Free">
            </div>
            <div class="form-group mb-3">
                <label for="title">Descrição do Eletrodoméstico</label>
                <textarea class="form-control" name="descricao" id="descricao"
                placeholder="Ex: Este produto é totalmente versátil. Tudo para ser personalizado para comportar o que você preferir.">
                    {{ $eletrodomesticos->descricao }}
                </textarea>
            </div>
            <div class="form-group mb-3">
                <label for="title">Tensão do Eletrodoméstico</label>
                <select class="form-select" id="tensao" name="tensao">
                    @if ($eletrodomesticos->tensao == '220V')
                    <option selected>{{$eletrodomesticos->tensao}}</option>
                    <option value="110V">110V</option>
                    <option value="Bivolt">Bivolt</option>
                    @endif
                    @if ($eletrodomesticos->tensao == '110V')
                    <option selected>{{$eletrodomesticos->tensao}}</option>
                    <option value="220V">220V</option>
                    <option value="Bivolt">Bivolt</option>
                    @endif
                    @if ($eletrodomesticos->tensao == 'Bivolt')
                    <option selected>{{$eletrodomesticos->tensao}}</option>
                    <option value="220V">220V</option>
                    <option value="110V">110V</option>
                    @endif
                  </select>
            </div>
            <div class="form-group mb-3">
                <label for="title">Marca do Eletrodoméstico</label>
                <input type="text" class="form-control" id="marca" name="marca" 
                value="{{ $eletrodomesticos->marca }}" placeholder="Ex: Electrolux, Brastemp, Fischer, Samsung ou LG">
            </div>
            <div class="form-group mb-3 d-flex justify-content-center">
                <button class="btn btn-dark" type="submit">Cadastrar</button>
            </div>
        </form>
</div>
</div>
@endsection
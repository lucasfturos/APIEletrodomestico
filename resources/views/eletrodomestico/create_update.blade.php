@extends('layout.main')
@section('title','Eletrodomestico')
@section('content')

{{-- @if () --}}
<h1 class="text-center">Cadastro do Eletrodoméstico</h1>
{{-- @else
<h1 class="text-center">Editação do Eletrodoméstico</h1>
@endif --}}
<div class="card">
    <div class="card-body">
        <form action="/" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="title">Nome do Eletrodoméstico</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex: Geladeira Frost Free">
            </div>
            <div class="form-group mb-3">
                <label for="title">Descrição do Eletrodoméstico</label>
                <textarea class="form-control" name="descricao" id="descricao" 
                placeholder="Ex: Este produto é totalmente versátil. Tudo para ser personalizado para comportar o que você preferir."></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="title">Tensão do Eletrodoméstico</label>
                <input type="text" class="form-control" id="tensao" name="tensao" placeholder="Ex: 220V, 110V ou Bivolt">
            </div>
            <div class="form-group mb-3">
                <label for="title">Marca do Eletrodoméstico</label>
                <input type="text" class="form-control" id="marca" name="marca" placeholder="Ex: Electrolux, Brastemp, Fischer, Samsung ou LG">
            </div>
            <div class="form-group mb-3 d-flex justify-content-center">
                <button class="btn btn-dark" type="submit">Cadastrar</button>
            </div>
        </form>
</div>
</div>
@endsection
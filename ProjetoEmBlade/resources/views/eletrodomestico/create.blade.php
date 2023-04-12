@extends('layout.main')
@section('title','Cadastro')
@section('content')

@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger alert-dismissible fade show" id="alert-delete" role="alert">
    {{ $error }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endforeach
@endif

<h1 class="text-center">Cadastro do Eletrodoméstico</h1>
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
                <select class="form-select" id="tensao" name="tensao">
                    <option selected>Selecione a tensão...</option>
                    <option value="220V">220V</option>
                    <option value="110V">110V</option>
                    <option value="Bivolt">Bivolt</option>
                  </select>
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
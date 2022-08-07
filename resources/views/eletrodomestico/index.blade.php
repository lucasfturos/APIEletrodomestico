@extends('layout.main')
@section('title','Eletrodomestico')
@section('content')

<h1>Listagem e Exclusão dos Eletrodomésticos</h1>
<div class="card">
    <div class="card-body">
        <table class="table table-hover">
            <thead class="table-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Tensão</th>
                <th scope="col">Marca</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            @if (count($eletrodomesticos) > 0)
            @foreach ($eletrodomesticos as $item)    
                <tbody>
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->nome }}</td>
                        <td>{{ $item->descricao }}</td>
                        <td>{{ $item->tensao }}</td>
                        <td>{{ $item->marca }}</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <button class="btn btn-success"><ion-icon name="create-outline"></ion-icon></button>
                                <button class="btn btn-danger"><ion-icon name="close-outline"></ion-icon></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            @endforeach
            @else
                <tbody>
                    <tr>
                    <th scope="row"></th>
                    <td colspan="6"><h3 class="text-center">Nenhum dado cadastrado</h3></td>
                    </tr>
                </tbody>
            @endif
          </table>        
    </div>
</div>

@endsection
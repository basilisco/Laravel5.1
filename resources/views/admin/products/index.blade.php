@extends('app')

@section('content')

    <div class="container">
        <h3>Produtos</h3>

    <a href="{{ route('admin.products.create') }}" class="btn btn-default">Novo Produto</a>



    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Produto</th>
            <th>Categoria</th>
            <th>Preço</th>
            <th>AÇÃO</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category->name }}</td>
            <td>{{ $product->price }}</td>
            <td>
                <a href="{{ route('admin.products.edit',['id'=>$product->id]) }}" class="btn btn-default">
                    Edit
                </a>
                <a href="{{ route('admin.products.destroy',['id'=>$product->id]) }}" class="btn btn-danger">
                    Excluir
                </a>
            </td>

        </tr>
        @endforeach

        </tbody>
    </table>

    {!! $products->render() !!}

@endsection

    </div>
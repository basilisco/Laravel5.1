@extends('app')

@section('content')

    <div class="container">
        <h3>Categorias</h3>

    <a href="{{ route('admin.categories.create') }}" class="btn btn-default">Nova Categoria</a>



    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>AÇÃO</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $categorie)
        <tr>
            <td>{{ $categorie->id }}</td>
            <td>{{ $categorie->name }}</td>
            <td>
                <a href="{{ route('admin.categories.edit',['id'=>$categorie->id]) }}" class="btn btn-default">
                    Edit
                </a>
            </td>

        </tr>
        @endforeach

        </tbody>
    </table>

    {!! $categories->render() !!}

@endsection

    </div>
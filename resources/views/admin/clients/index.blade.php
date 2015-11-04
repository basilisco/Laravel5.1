@extends('app')

@section('content')

    <div class="container">
        <h3>Categorias</h3>

    <a href="{{ route('admin.clients.create') }}" class="btn btn-default">Novo Cliente</a>



    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>AÇÃO</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clients as $client)
        <tr>
            <td>{{ $client->id }}</td>
            <td>{{ $client->user->name }}</td>
            <td>
                <a href="{{ route('admin.clients.edit',['id'=>$client->id]) }}" class="btn btn-default">
                    Edit
                </a>
            </td>

        </tr>
        @endforeach

        </tbody>
    </table>

    {!! $clients->render() !!}

@endsection

    </div>
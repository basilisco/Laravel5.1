@extends('app')

@section('content')

    <div class="container">
        <h3>Cupoms</h3>

    <a href="{{ route('admin.cupoms.create') }}" class="btn btn-default">Novo cupom</a>



    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Código</th>
            <th>Valor</th>
            <th>AÇÃO</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cupoms as $cupom)
        <tr>
            <td>{{ $cupom->id }}</td>
            <td>{{ $cupom->code }}</td>
            <td>{{ $cupom->value }}</td>
            <td>
                <a href="{{ route('admin.cupoms.edit',['id'=>$cupom->id]) }}" class="btn btn-default">
                    Edit
                </a>
            </td>

        </tr>
        @endforeach

        </tbody>
    </table>

    {!! $cupoms->render() !!}

@endsection

    </div>
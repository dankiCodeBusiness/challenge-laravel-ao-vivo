@extends('welcome')

@section('content')

    <div class="row">
        <div class="col-12 mb-5">
            <a href="{{ route('user.create') }}" class="btn btn-primary">Novo usuário</a>
        </div>
        <div class="col-12">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Data de Cadastro</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td class="align-center">{{ $user->full_name }}</td>
                        <td class="align-center">{{ $user->email }}</td>
                        <td class="align-center">{{ $user->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop
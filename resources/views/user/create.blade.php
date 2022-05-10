@extends('welcome')

@section('content')
    <h2>Cadastro de usuário</h2>

    <div class="row">
        <div class="col-12 mb-5">
            <a href="{{ route('user.index') }}" class="btn btn-primary">Lista de usuários</a>
        </div>
        <div class="col-12">
            <form method="post" class="row">
                @csrf
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="first_name" class="col-form-label">Nome</label>
                        <input type="text" name="first_name" value="{{ old('first_name') }}"
                               class="form-control  @error('first_name') is-invalid @enderror" id="first_name">
                        @error('first_name')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="last_name" class="col-form-label">Sobrenome</label>
                        <input type="text" name="last_name" value="{{ old('last_name') }}"
                               class="form-control  @error('last_name') is-invalid @enderror" id="last_name">
                        @error('last_name')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="email" class="col-form-label">E-mail</label>
                        <input type="email" name="email" value="{{ old('email') }}"
                               class="form-control @error('email') is-invalid @enderror" id="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="password" class="col-form-label">Senha</label>
                        <input type="password" name="password"
                               class="form-control @error('password') is-invalid @enderror" id="password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-success">
                        Cadastrar
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

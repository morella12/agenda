@extends('adminlte::layouts.app')
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Editar Contato</h1>
                </div>
                <form action="{{ url('contatos/'.$data->id) }}" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        @method('PUT')

                        @csrf
                        <img src="{{ asset(old('foto_image',$data->foto_image)) }}" class="img-foto-xs"/>
                        <div class="form-group">
                            <input type="text" required class="form-control{{$errors->has('nome') ? ' is-invalid':''}}" value="{{ old('nome', $data->nome) }}" id="nome" name="nome">
                            <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
                        </div>
                        <div class="form-group">
                            <input type="text" required class="form-control{{$errors->has('telefone') ? ' is-invalid':''}}" value="{{ old('telefone', $data->telefone) }}" id="telefone" name="telefone">
                            <div class="invalid-feedback">{{ $errors->first('telefone') }}</div>
                        </div>
                        <div class="form-group">
                            <input type="e-mail" class="form-control{{$errors->has('email') ? ' is-invalid':''}}" value="{{ old('email', $data->email) }}" id="email" name="email">
                            <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control{{$errors->has('dataNascimento') ? ' is-invalid':''}}" id="dataNascimento" value="{{ old('dataNascimento', $data->dataNascimento) }}" name="dataNascimento">
                            <div class="invalid-feedback">{{ $errors->first('dataNascimento') }}</div>
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control-file{{$errors->has('foto') ? ' is-invalid':''}}" id="foto" name="foto" accept=".jpg, .jpeg, .png .gif">
                            <div class="invalid-feedback" style="display:inherit">{{ $errors->first('foto') }}</div>
                            <!-- https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/file -->
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="#" onclick="history.back()" class="btn btn-secondary">Voltar</a>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
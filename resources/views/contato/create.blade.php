@extends('adminlte::layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Novo Contato</h1>
                    </div>
                    <form action="{{ url('/contatos') }}" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            {{ csrf_field() }}

                
                            <div class="form-group">
                                <input type="text" required class="form-control{{$errors->has('nome') ? ' is-invalid':''}}" id="nome" name="nome" placeholder="Nome Completo">
                                <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
                            </div>

                            <div class="form-group">
                                <input type="tel" class="form-control{{$errors->has('telefone') ? ' is-invalid':''}}" id="telefone" name="telefone" placeholder="Telefone">
                                <div class="invalid-feedback" style="display:inherit; margin-bottom: 15px;">{{ $errors->first('telefone') }}</div>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control{{$errors->has('email') ? ' is-invalid':''}}" id="email" name="email" placeholder="Digite o seu e-mail">
                                <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                            </div>
                            
                            <div class="form-group">
                                <input type="date" class="form-control{{$errors->has('dataNascimento') ? ' is-invalid':''}}" id="dataNascimento"  name="dataNascimento" placeholder="Data de Nascimento">
                                <div class="invalid-feedback">{{ $errors->first('data_nascimento') }}</div>
                            </div>
                            <!-- https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/file -->
                            <div class="form-group">
                                <label for="foto">Foto</label>
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
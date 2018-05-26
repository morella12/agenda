@extends('adminlte::layouts.app')

@section('main-content')
    <div class="card">
        <div class="card-header">
            Contatos
            <a href="{{ url('contatos/add') }}" class="btn btn-primary btn-sm float-right">Novo</a>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive border-0">
                <table class="table table-hover" style="margin-bottom: inherit">
                    <tbody>
                        @foreach ($contatos as $contato)
                            <tr>
                                <td>
                                    <img src="{{ $contato->foto_image }}" class="img-foto-xs"/>
                                </td>
                                <td>
                                    {{ $contato->nome }}
                                </td>
                                <td class="cas">
                                    {{ $contato->telefone }}
                                </td>
                                <td class="teste">
                                    {{ $contato->email }}
                                </td>
                                <td>
                                    <a href="{{ url('contatos/edit/'.$contato->id) }}"><i class="fa fa-edit"></i>Editar</a>
                                </td>
                                <td>
                                    <a href="{{ url('contatos/'.$contato->id) }}" style="color: red;"><i class="fa fa-times"></i>Apagar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
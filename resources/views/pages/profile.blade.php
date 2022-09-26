@extends('adminlte::page')

@section('title', 'Edição do perfil')

@section('content_header')
    <h1 class="m-0 text-dark">Estilização do perfil</h1>
@stop

 {{-- Jquery --}}
 <script src="{{ URL::asset("vendor/jquery/jquery.js") }}"></script>

@section('content')
    @if (Session::has('alert'))
        <div class="mt-3 alert alert-{{ explode('|', Session::get('alert'))[0] ?? 'info' }} alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ explode('|', Session::get('alert'))[1] }}
        </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5>Conteúdo</h5>
                    <form action="{{ route('saveProfile') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <label for="name">Nome:</label>
                                <input type="text" name="name" class="form-control" value="{{ $user ? $user->name : null }}" id="name" required>
                            </div>
                            <div class="col-md-4">
                                <label for="email">Email:</label>
                                <input type="email" name="email" class="form-control" value="{{ $user ? $user->email : null }}" id="email" required>
                            </div>
                            <div class="col-md-4 d-flex align-items-end">
                                <a href="/password/reset" class="btn btn-warning">Alterar senha</a>
                            </div>

                        </div>
                        <button class="btn btn-primary mt-3">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<script></script>

@stop

@extends('adminlte::page')

@section('title', 'Edição de segundo card')

@section('content_header')
    <h1 class="m-0 text-dark">Estilização segundo card</h1>
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
                    <form action="{{ route('saveSecondcard') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <label for="title_second_card">Título</label>
                                <input type="text" name="title_second_card" class="form-control" value="{{ $pages ? $pages->title_second_card : null }}" id="title_second_card" required>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label for="article_second_card">Parágrafo</label>
                                <textarea name="article_second_card" class="form-control" id="article_second_card" cols="30" rows="8" required>{{ $pages ? $pages->article_second_card : null }}</textarea>
                            </div>
                            <div class="col-md-3 mt-3">
                                <label for="btn_second_card">Botão</label>
                                <input type="text" name="btn_second_card" class="form-control" value="{{ $pages ? $pages->btn_second_card : null }}" id="btn_second_card" required>
                            </div>
                        </div>
                        <button class="btn btn-primary mt-3">Salvar</button>
                    </form>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <h5>Imagem de fundo</h5>
                    <form action="{{ route('saveSecondcardImage') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <label for="image_first_card">Imagem</label>
                                <input type="file" name="image_second_card" class="form-control" id="image_second_card">
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

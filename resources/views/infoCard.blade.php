@extends('adminlte::page')

@section('title', 'Edição do card de Informações')

@section('content_header')
    <h1 class="m-0 text-dark">Estilização card de Informações</h1>
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
                    <form action="{{ route('saveInfocard') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <label for="title_info_card">Título</label>
                                <input type="text" name="title_info_card" class="form-control" value="{{ $pages ? $pages->title_info_card : null }}" id="title_info_card" required>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label for="article_info_card">Parágrafo</label>
                                <textarea name="article_info_card" class="form-control" id="article_info_card" cols="30" rows="8" required>{{ $pages ? $pages->article_info_card : null }}</textarea>
                            </div>
                            <div class="col-md-3 mt-3">
                                <label for="btn_info_card">Botão</label>
                                <input type="text" name="btn_info_card" class="form-control" value="{{ $pages ? $pages->btn_info_card : null }}" id="btn_info_card" required>
                            </div>
                        </div>
                        <button class="btn btn-primary mt-3">Salvar</button>
                    </form>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <h5>Imagem</h5>
                    <form action="{{ route('saveInfocardImage') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <label for="image_info_card">Imagem</label>
                                <input type="file" name="image_info_card" class="form-control" id="image_info_card">
                            </div>
                            @if ($image_info)
                                <div class="col-md-3 d-flex align-items-end">
                                    <a href="{{ route('delImageFirst', $image_info->id) }}" class="btn btn-danger" id="delImageFirst" onclick="return confirm('Deseja realmente excluir esta imagem?')">Excluir</a>
                                    <a href="{{ route('downImageFirst', $image_info->id) }}" class="btn btn-info ml-2" type="button" id="downImageFirst">Download</a>
                                </div>
                            @endif
                        </div>
                        <button class="btn btn-primary mt-3">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<script></script>

@stop

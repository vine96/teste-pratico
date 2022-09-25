@extends('adminlte::page')

@section('title', 'Edição de banner')

@section('content_header')
    <h1 class="m-0 text-dark">Estilização banner</h1>
@stop

@if(Session::has('alert'))
    <div class="mt-3 alert alert-{{ explode('|', Session::get('alert'))[0] ?? 'info' }} alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ explode('|', Session::get('alert'))[1] }}
    </div>
@endif

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5>Navbar links</h5>
                    <small class="text-danger mb-2">Atenção! O ícone deverá ser uma classe de ícone da tag < i > e os links deverão ser nomes</small>
                    <form action="{{ route('saveNavbar') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <label for="link_icon">Ícone</label>
                                <input type="text" name="link_icon" class="form-control" value="{{ $pages ? $pages->icon_nav : null }}" id="link_icon" required>
                            </div>
                            <div class="col-md-3">
                                <label for="link_url_1">Link 1</label>
                                <input type="text" name="link_url_1" class="form-control" value="{{ $pages ? $pages->link_nav_1 : null }}" id="link_url_1" required>
                            </div>
                            <div class="col-md-3">
                                <label for="link_url_2">Link 2</label>
                                <input type="text" name="link_url_2" class="form-control" value="{{ $pages ? $pages->link_nav_2 : null }}" id="link_url_2" required>
                            </div>
                            <div class="col-md-3">
                                <label for="link_url_3">Link 3</label>
                                <input type="text" name="link_url_3" class="form-control" value="{{ $pages ? $pages->link_nav_3 : null }}" id="link_url_2" required>
                            </div>
                        </div>
                        <button class="btn btn-primary mt-3">Salvar</button>
                    </form>
                </div>
            </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <h5>Banner</h5>
                        <form action="{{ route('saveBanner') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-9">
                                    <label for="title_banner">Título banner</label>
                                    <input type="text" name="title_banner" class="form-control" value="{{ $pages ? $pages->title_banner : null }}" id="title_banner" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="btn_banner">Texto botão</label>
                                    <input type="text" name="btn_banner" class="form-control" value="{{ $pages ? $pages->article_banner : null }}" id="btn_banner" required>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for="article_banner">Parágrafo</label>
                                    <textarea name="article_banner" class="form-control" id="article_banner" cols="30" rows="8" required>{{ $pages ? $pages->article_banner : null }}</textarea>
                                </div>
                            </div>
                            <button class="btn btn-primary mt-3">Salvar</button>
                        </form>
                    </div>
                </div>
        </div>
    </div>
@stop

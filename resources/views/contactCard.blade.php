@extends('adminlte::page')

@section('title', 'Edição do card de Contato')

@section('content_header')
    <h1 class="m-0 text-dark">Estilização card de Contato</h1>
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
                    <form action="{{ route('saveContactcard') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <label for="title_contact_card">Título</label>
                                <input type="text" name="title_contact_card" class="form-control" value="{{ $pages ? $pages->title_contact_card : null }}" id="title_contact_card" required>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label for="article_contact_card">Parágrafo</label>
                                <textarea name="article_contact_card" class="form-control" id="article_contact_card" cols="30" rows="8" required>{{ $pages ? $pages->article_contact_card : null }}</textarea>
                            </div>
                            <div class="col-md-3 mt-3">
                                <label for="label_contact_card">Label botão</label>
                                <input type="text" name="label_contact_card" class="form-control" value="{{ $pages ? $pages->label_contact_card : null }}" id="label_contact_card" required>
                            </div>
                            <div class="col-md-3 mt-3">
                                <label for="placeholder_contact_card">Placeholder input</label>
                                <input type="text" name="placeholder_contact_card" class="form-control" value="{{ $pages ? $pages->placeholder_contact_card : null }}" id="placeholder_contact_card" required>
                            </div>
                            <div class="col-md-3 mt-3">
                                <label for="btn_contact_card">Botão</label>
                                <input type="text" name="btn_contact_card" class="form-control" value="{{ $pages ? $pages->btn_contact_card : null }}" id="btn_contact_card" required>
                            </div>
                            <div class="col-md-3 mt-3">
                                <label for="footer_contact_card">Footer</label>
                                <input type="text" name="footer_contact_card" class="form-control" value="{{ $pages ? $pages->footer_contact_card : null }}" id="footer_contact_card" required>
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

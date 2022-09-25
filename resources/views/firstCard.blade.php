@extends('adminlte::page')

@section('title', 'Edição de primeiro card')

@section('content_header')
    <h1 class="m-0 text-dark">Estilização primeiro card</h1>
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
                    <form action="{{ route('saveFirstcard') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="title_first_card">Título</label>
                                <input type="text" name="title_first_card" class="form-control" value="{{ $pages ? $pages->title_first_card : null }}" id="title_first_card" required>
                            </div>
                            <div class="col-md-6">
                                <label for="article_first_card">Parágrafo</label>
                                <input type="text" name="article_first_card" class="form-control" value="{{ $pages ? $pages->article_first_card : null }}" id="article_first_card" required>
                            </div>
                        </div>
                        <div class="row mt-3" id="div-firstcard-0">
                            <div class="col-md-4">
                                <label for="image_first_card">Imagem 1</label>
                                <input type="file" name="image_first_card[]" class="form-control" value="{{ $pages ? $pages->image_first_card : null }}" id="image_first_card-0" required>
                            </div>
                            <div class="col-md-3 d-flex align-items-end">
                                <button class="btn btn-primary" type="button" id="addImageFirst">Adicionar</button>
                            </div>
                            <div class="col-md-5"></div>
                        </div>
                        <button class="btn btn-primary mt-3">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<script>
    var count = 1;
    $('#addImageFirst').on('click', function(){
        count++
        $('#div-firstcard-0').append(
            `<div class="col-md-4" id="div-firstcard-${count}">`+
            `<label for="image_first_card">Imagem ${count}</label>`+
            `<input type="file" name="image_first_card[]" class="form-control" value="" id="image_first_card-${count}" required>`+
            `</div>`+
            `<div class="col-md-3 d-flex align-items-end" id="btn-excluir-img-${count}">`+
            `<button type="button" class="btn btn-danger" onclick="delcomponent(${count})">Excluir</button>`+
            `</div>`+
            `<div class="col-md-5" id="div-espaco-img-${count}">`+
            `</div>`
        );
    });

    function delcomponent(val){
        $('#div-firstcard-'+val).remove();
        $('#div-espaco-img-'+val).remove();
        $('#btn-excluir-img-'+val).remove();
        count--
    }
 </script>

@stop

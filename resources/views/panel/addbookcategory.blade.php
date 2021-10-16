@extends('layout.index')

@section('custom_top_script')
@stop

@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Ajouter une categorie de memoire</h3>
        </div>
        <div class="module-body">
            <form class="form-horizontal row-fluid">
                <div class="control-group">
                    <label class="control-label">Categorie</label>
                    <div class="controls">
                        <input type="text" id="category" data-form-field="category" placeholder="Enterer la categorie..." class="span8">
                        <input type="hidden"  data-form-field="token"  value="{{ csrf_token() }}">
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <button type="button" class="btn btn-inverse" id="addbookcategory">Ajouter memoires</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop

@section('custom_bottom_script')

    <script type="text/javascript" src="{{ asset('static/custom/js/script.addbookcategory.js') }}"></script>

@stop

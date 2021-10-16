@extends('layout.index')

@section('custom_top_script')
@stop

@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Preter une mémoire</h3>
        </div>
        <div class="module-body">
            <form class="form-horizontal row-fluid">
                <div class="control-group">
                    <label class="control-label">ID etudiant</label>
                    <div class="controls">
                        <input type="number" id="issue_student_id" data-form-field="student-issue-id" placeholder="Entre le code de l'etudiant" class="span8">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">ID mémoire</label>
                    <div class="controls">
                        <input type="number" id="issue_book_id" data-form-field="book-issue-id" placeholder="Entrer le code de la mémoire" class="span8">
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <button type="button" class="btn btn-inverse" id="issuebook">Preter Mémoire</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="module">
        <div class="module-head">
            <h3>Rendre une mémoire</h3>
        </div>
        <div class="module-body">
            <form class="form-horizontal row-fluid">
                <div class="control-group">
                    <label class="control-label">Memoire ID</label>
                    <div class="controls">
                        <input type="number" id="return_book_id" data-form-field="book-issue-id" placeholder="Entrer le code de la mémoire" class="span8">
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <button type="button" class="btn btn-inverse" id="returnbook">Rendre memoire</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <input type="hidden" id="_token"  data-form-field="token"  value="{{ csrf_token() }}">
</div>
@stop

@section('custom_bottom_script')
<script type="text/javascript" src="{{asset('static/custom/js/script.logs.js') }}"></script>
<script type="text/template" id="all_logs_display">
    @include('underscore.all_logs_display')
</script>
@stop

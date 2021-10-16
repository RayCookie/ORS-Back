@extends('layout.index')

@section('custom_top_script')
@stop

@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Logs Prets</h3>
        </div>
        <div class="module-body">
            <div class="row-fluid">
                <table class="table table-striped table-bordered table-condensed">
                    <thead>
                        <tr>
                            <th>Log ID</th>
                            <th>Memoire ID</th>
                            <th>Titre Memoire</th>
                            <th>ID etudiant</th>
                            <th>Nom etudiant</th>
                            <th>prété le</th>
                            <th>Date retour</th>
                        </tr>
                    </thead>
                    <tbody id="issue-logs-table">
                        <tr class="text-center">
                            <td colspan="99">Chargement...</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop

@section('custom_bottom_script')
<script type="text/javascript" src="{{ asset('static/custom/js/script.logs.js') }}"></script>
<script type="text/template" id="all_logs_display">
    @include('underscore.all_logs_display')
</script>
@stop

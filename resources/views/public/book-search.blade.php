@extends('account.index')

@section('content')

@include('account.style')

<div class="wrapper  wrapper1">
	<div class="container">
		<div class="row">
			<div class="module span12">
				<div class="module-head">
					<h3>Recherche mémoire</h3>
				</div>
				<div class="module-body">
					<form class="form-horizontal row-fluid">
						<div class="control-group">
							<label class="control-label">Nom auteur<br>de la mémoire</label>
							<div class="controls">
								<textarea class="span12" rows="2"></textarea>
							</div>
						</div>

						<div class="control-group">
							<div class="controls" id="search_book_button">
								<a class="btn btn-default">Recherche mémoire</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="row" style="display: none;">
			<div class="module span12">
				<div class="module-body">
		            <table class="table table-striped table-bordered table-condensed">
		                <thead>
		                    <tr>
		                        <th>ID Mémoire</th>
		                        <th>Titre Mémoire</th>
		                        <th>Auteur</th>
		                        <th>Description</th>
		                        <th>Categorie</th>
		                        <th>Status</th>
		                    </tr>
		                </thead>
		                <tbody id="book-results"></tbody>
		            </table>
				</div>
			</div>
		</div>
	</div>
	<input type="hidden" name="categories_list" id="categories_list" value="{{ json_encode($categories_list) }}">
</div>



@stop

@section('custom_bottom_script')
<script type="text/javascript">
    var categories_list = $('#categories_list').val();
</script>
<script type="text/javascript" src="{{  asset('static/custom/js/script.searchbook.js') }}"></script>

<script type="text/template" id="search_book">
    @include('underscore.search_book')
</script>
@stop

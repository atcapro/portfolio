{{-- resources/views/admin/dashboard.blade.php --}} @extends('adminlte::page') @section('title', 'Dashboard') @section('content_header')
<h1>Dashboard
	<small>Projets panel</small>
</h1>
<ol class="breadcrumb">
	<li>
		<a href="#">
			<i class="fa fa-dashboard"></i> Home</a>
	</li>
	<li class="active">Projets</li>

</ol>
@stop @section('content')

<div class="content-projet">

	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<form class="" action="{{route('projets.update', ['id' => $projet->id ])}}" method="post" enctype="multipart/form-data">
		{{csrf_field()}}
		<div class="form-group">
			<input type="text" class="form-control" id="titre" name="titre" placeholder="Titre" value="{{old('titre') ? old('titre') : $projet->titre }}">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" id="description" name="description" placeholder="Description" value="{{old('description') ? old('description') : $projet->description }}">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" id="categorie" name="categorie" placeholder="Categorie" value="{{old('categorie') ? old('categorie') : $projet->categorie }}">
		</div>

		<div>
			<label for="image_uploads">Choose images to upload (PNG, JPG)</label>
			<input type="file" id="image_uploads" name="image_uploads" accept=".jpg, .jpeg, .png" multiple>
		</div>
		<div class="preview">
			<p>No files currently selected for upload</p>
		</div>


		<button type="submit" class="btn btn-default">Envoyer</button>
		<a href="{{ route('projets.delete', [ 'id' => $projet->id])}}"> DELETE </a>
	</form>
</div>

@stop @section('css')
<link rel="stylesheet" href="/css/admin_custom.css"> @stop @section('js') @stop
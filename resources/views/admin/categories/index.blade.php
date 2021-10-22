@extends('layouts.admin')

@section('content')
	
	<div class="d-flex justify-content-between align-items-center my-4">
		<h4>Producten</h4>
		<div>
			<a href="{{ route('admin.categories.create') }}">Nieuwe categorie toevoegen</a>
		</div>
	</div>

	<table class="table table-striped table-hover">
		<tr>
			<th>Naam</th>
            <th colspan="4">&nbsp;</th>
		</tr>
		@foreach($categories as $categorie)
			<tr>
				<td>{{ $categorie->name }}</td>
				<td>
					<a href="{{ route('admin.categories.edit', $categorie->id) }}">Aanpassen</a>
				</td>
			</tr>
		@endforeach
	</table>
@endsection

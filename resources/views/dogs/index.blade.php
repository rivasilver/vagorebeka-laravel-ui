@extends('layouts.app')

@section("content")
	<div class="container">
		<div class="card">
			<div class="card-header">
				<h4>List of dogs</h4>
			</div>
			<div class="card-body">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Color</th>
							<th>Purebred</th>
							<th>Age</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($dogs as $dog)
							<tr>
								<td> {{ $dog->id }} </td>
								<td> {{ $dog->name }} </td>
								<td> {{ $dog->color }} </td>
								<td> {{ $dog->purebred ? "yes" : "no" }} </td>
								<td> {{ $dog->age }} </td>
								<td>
									<a href="{{ route("dogs.show", $dog->id) }}" class="btn btn-secondary">Details</a>
									<a href="{{ route("dogs.edit", $dog->id) }}" class="btn btn-secondary">Edit</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection

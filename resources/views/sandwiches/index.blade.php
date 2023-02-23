@extends('layouts.app')

@section("content")
	<div class="container">
		<div class="card">
			<div class="card-header">
				<h4>List of sandwiches</h4>
			</div>
			<div class="card-body">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Number of toppings</th>
							<th>Toppings</th>
							<th>Vegetarian</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($sandwiches as $sandwich)
							<tr>
								<td> {{ $sandwich->id }} </td>
								<td> {{ $sandwich->name }} </td>
								<td> {{ $sandwich->number_of_toppings }} </td>
								<td> {{ $sandwich->toppings }} </td>
								<td> {{ $sandwich->vegetarian ? "yes" : "no" }} </td>
								<td>
									<a href="{{ route("sandwiches.show", $sandwich->id) }}" class="btn btn-secondary">Details</a>
									<a href="{{ route("sandwiches.edit", $sandwich->id) }}" class="btn btn-secondary">Edit</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection

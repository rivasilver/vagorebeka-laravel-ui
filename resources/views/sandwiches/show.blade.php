@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4>{{ $sandwich->name }}</h4>
        </div>
        <div class="card-body">
            <table class="table table-hover table-striped">
                <tbody>
                    <tr>
                        <th>Color</th>
                        <td>{{ $sandwich->number_of_toppings }}</td>
                    </tr>
                    <tr>
                        <th>Purebred</th>
                        <td>{{ $sandwich->toppings }}</td>
                    </tr>
                    <tr>
                        <th>Age</th>
                        <td>{{ $sandwich->vegetarian ? "yes" : "no" }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <a href="{{ route('dogs.edit', $sandwich->id) }}" class="btn btn-outline-secondary">Edit</a>
        </div>
    </div>
</div>
@endsection

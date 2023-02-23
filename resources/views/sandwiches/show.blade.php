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
                        <th>Number of toppings</th>
                        <td>{{ $sandwich->number_of_toppings }}</td>
                    </tr>
                    <tr>
                        <th>Toppings</th>
                        <td>{{ $sandwich->toppings }}</td>
                    </tr>
                    <tr>
                        <th>Vegetarian</th>
                        <td>{{ $sandwich->vegetarian ? "yes" : "no" }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <a href="{{ route('sandwiches.edit', $sandwich->id) }}" class="btn btn-outline-secondary">Edit</a>
        </div>
    </div>
</div>
@endsection

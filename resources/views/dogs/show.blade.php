@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4>{{ $dog->name }}</h4>
        </div>
        <div class="card-body">
            <table class="table table-hover table-striped">
                <tbody>
                    <tr>
                        <th>Color</th>
                        <td>{{ $dog->color }}</td>
                    </tr>
                    <tr>
                        <th>Purebred</th>
                        <td>{{ $dog->purebred ? "yes" : "no" }}</td>
                    </tr>
                    <tr>
                        <th>Age</th>
                        <td>{{ $dog->age }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <a href="{{ route('dogs.edit', $dog->id) }}" class="btn btn-outline-secondary">Edit</a>
        </div>
    </div>
</div>
@endsection

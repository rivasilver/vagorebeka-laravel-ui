@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Edit {{ $sandwich->name }}</h4>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        @foreach ($errors->all() as $error)
                            {{ $error }} <br>
                        @endforeach
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form action={{ route('sandwiches.update', $sandwich->id) }} method="post">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" name="name" placeholder="Name" value="{{ old('name') ? old('name') : $sandwich->name }}"
                            @class([
                                'form-control',
                            ])>

                    </div>

                    <div class="mb-3">
                        <label for="number_of_toppings" class="form-label">Number of toppings</label>
                        <input type="number" id="number_of_toppings" name="number_of_toppings" class="form-control"
                            placeholder="Number of toppings" value="{{ old('number_of_toppings') ? old('number_of_toppings') : $sandwich->number_of_toppings }}"
                            @class([
                                'form-control',
                            ])>
                    </div>

                    <div class="mb-3">
                        <label for="toppings" class="form-label">Toppings</label>
                        <input type="text" id="toppings" name="toppings" placeholder="Toppings" value="{{ old('toppings') ? old('toppings') : $sandwich->toppings }}"
                            @class([
                                'form-control',
                            ])>
                    </div>

                    <div class="mb-3">
                        <label for="vegetarian" class="form-label">Vegetarian</label>
                        <input type="radio" id="vegetarian1" name="vegetarian" value="1">
                        <label for="vegetarian1">Yes</label>
                        <input type="radio" id="vegetarian2" name="vegetarian" value="0">
                        <label for="vegetarian2">No</label>
                    </div>

                    <button type="submit" class="btn btn-secondary">Update</button>
                </form>
            </div>
        </div>

    </div>
@endsection

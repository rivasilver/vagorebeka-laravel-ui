@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Edit {{ $dog->name }}</h4>
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

                <form action={{ route('dogs.update', $dog->id) }} method="post">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" name="name" placeholder="Name" value="{{ old('name') ? old('name') : $dog->name }}"
                            @class([
                                'form-control',
                            ])>

                    </div>

                    <div class="mb-3">
                        <label for="color" class="form-label">Color</label>
                        <input type="text" id="color" name="color" placeholder="Color" value="{{ old('color') ? old('color') : $dog->color }}"
                            @class([
                                'form-control',
                            ])>
                    </div>

                    <div class="mb-3">
                        <label for="purebred" class="form-label">Purebred</label>
                        <input type="radio" id="purebred1" name="purebred" value="1">
                        <label for="purebred1">Yes</label>
                        <input type="radio" id="purebred2" name="purebred" value="0">
                        <label for="purebred2">No</label>
                    </div>

                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" id="age" name="age" class="form-control"
                            placeholder="Age" value="{{ old('age') ? old('age') : $dog->age }}"
                            @class([
                                'form-control',
                            ])>
                    </div>

                    <button type="submit" class="btn btn-secondary">Update</button>
                </form>
            </div>
        </div>

    </div>
@endsection

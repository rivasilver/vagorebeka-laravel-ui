<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Http\Response;
use App\Models\Dog;
use App\Http\Requests\StoreDogRequest;
use App\Http\Requests\UpdateDogRequest;

class DogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dogs = Dog::all();
        return response()->json($dogs);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDogRequest $request)
    {
        $dog = new Dog();
        $dog->fill($request->all());
        $dog->save();
        return response()->json($dog, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dog = Dog::find($id);
        if (is_null($dog)){
            return response()->json(["message"=>"Dog not found"], 404);
        }
        return response()->json($dog);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDogRequest $request, $id)
    {
        $dog = Dog::find($id);
        if (is_null($dog)){
            return response()->json(["message"=>"Dog not found"], 404);
        }
        $dog->fill($request->all());
        $dog->save();
        return response()->json($dog);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dog = Dog::find($id);
        if (is_null($dog)){
            return response()->json(["message"=>"Dog not found"], 404);
        }
        Dog::destroy($id);
        return response()->noContent();
    }
}

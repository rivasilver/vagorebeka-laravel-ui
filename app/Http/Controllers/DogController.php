<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use App\Http\Requests\StoreDogRequest;
use App\Http\Requests\UpdateDogRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class DogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dogs = Dog::all();
        return view("dogs.index", ['dogs'=>$dogs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dogs.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDogRequest $request)
    {
        $dog = new Dog();
        $dog->fill($request->all());
        $dog->save();
        return redirect()->route("dogs.show", $dog->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Dog $dog)
    {
        return view("dogs.show", ["dog"=>$dog]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dog $dog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDogRequest $request, Dog $dog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dog $dog)
    {
        //
    }
}

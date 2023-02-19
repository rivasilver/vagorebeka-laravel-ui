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
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDogRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Dog $dog): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dog $dog): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDogRequest $request, Dog $dog): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dog $dog): RedirectResponse
    {
        //
    }
}

<?php

namespace App\Http\Controllers\API;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Illuminate\Http\Response;
use App\Models\Sandwich;
use App\Http\Requests\StoreSandwichRequest;
use App\Http\Requests\UpdateSandwichRequest;

class SandwichController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sandwiches = Sandwich::all();
        return response()->json($sandwiches);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSandwichRequest $request)
    {
        $sandwich = new Sandwich();
        $sandwich->fill($request->all());
        $sandwich->save();
        return response()->json($sandwich, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $sandwich = Sandwich::find($id);
        if (is_null($sandwich)){
            return response()->json(["message"=>"Sandwich not found"], 404);
        }
        return response()->json($sandwich);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSandwichRequest $request, $id)
    {
        $sandwich = Sandwich::find($id);
        if (is_null($sandwich)){
            return response()->json(["message"=>"Sandwich not found"], 404);
        }
        $sandwich->fill($request->all());
        $sandwich->save();
        return response()->json($sandwich);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sandwich = Sandwich::find($id);
        if (is_null($sandwich)){
            return response()->json(["message"=>"Sandwich not found"], 404);
        }
        $sandwich->destroy($id);
        return response()->noContent();
    }
}

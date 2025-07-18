<?php

namespace App\Http\Controllers;

use App\Models\Trainingcenter;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainingCenters=Trainingcenter::included()->filter()->sort()->getOrPaginate();;

        return response()->json($trainingCenters);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $trainingCenter=Trainingcenter::create($request->all());

        return response()->json($trainingCenter);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $trainingCenter=Trainingcenter::find($id);

        return response()->json($trainingCenter);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trainingcenter $training_center)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trainingcenter $training_center)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trainingcenter $trainingCenter)
    {
        $trainingCenter->delete();

        return response()->json($trainingCenter);
    }
}

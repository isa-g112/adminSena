<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use Illuminate\Http\Request;


class AprenticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apprentices = Apprentice::included()->filter()->sort()->getOrPaginate();

        return response()->json($apprentices);
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
        $apprentice = Apprentice::create($request->all());

        return response()->json($apprentice);
    }

    /**
     * Display the specified resource.
     */
    public function show(Apprentice $aprentice)
    {
         return response()->json($aprentice);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Apprentice $apprentice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Apprentice $aprentice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Apprentice $apprentice)
    {
        $apprentice->delete();

        return response()->json($apprentice);
    }
}

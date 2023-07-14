<?php

namespace App\Http\Controllers;

use App\Models\Ibges;
use Illuminate\Http\Request;

class IbgesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Ibges::all();
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
        // $alimento = $request->all();
        return $request->all();
    }

    /**
     * Display the specified resource.
     */
    public function show(Ibges $ibges)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ibges $ibges)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ibges $ibges)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ibges $ibges)
    {
        //
    }
}

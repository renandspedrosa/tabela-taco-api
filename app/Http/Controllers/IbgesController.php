<?php

namespace App\Http\Controllers;

use App\Models\Ibges;
use Illuminate\Http\Request;

class IbgesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Ibges::query();
        
        if($request->has('categoria')){
            $query->where('Categoria',$request->categoria);
        }
        
        if($request->has('descricao')){
            $query->where('descricacao_do_alimento',$request->descricao);
        }
        
        return $query->paginate(5);
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
        return response()
                ->json(Ibges::create($request->all()),201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $ibgeModel = Ibges::find($id);
        if($ibgeModel === null) {
            return response()->json(['message'=>'Alimento não encontrado'],404);
        }
        return $ibgeModel;
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
    public function update(Request $request, $id)
    {
        $ibges = Ibges::findOrFail($id);
        $ibges->descricacao_do_alimento = $request->descricacao_do_alimento;
        $ibges->save();
        return $ibges;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Int $ibge)
    {
        Ibges::destroy($ibge);
        return response()->noContent();
    }

    public function status(Ibges $ibges, Request $request)
    {
        $ibges->status = $request->status;
        $ibges->save();

        return $ibges->status;
    }
}

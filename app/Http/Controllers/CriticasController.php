<?php

namespace App\Http\Controllers;

use App\Models\Criticas;
use Illuminate\Http\Request;

class CriticasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['criticas'] = Criticas::all();
        return view('Criticas.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('criticas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $critData = request()->except("_token");
        Criticas::insert($critData);
        return redirect()->route('critica.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $critica=Criticas::findOrFail($id);
        return view('critica.edit', compact('critica'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $critData=request()->except(['_token', '_method']);
        Criticas::where('id', '=', $id)->update($critData);
        return redirect('critica');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Criticas::destroy($id);
        return redirect('critica');
    }
}

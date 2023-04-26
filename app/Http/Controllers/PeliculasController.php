<?php

namespace App\Http\Controllers;
use App\Models\Peliculas;
use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data[peliculas] = Peliculas::All;
        return view('peliculas.index', $data);
        return view('peliculas.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('peliculas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         
         $peliculasData = request()->except('_token');
         
         Peliculas::insert($peliculasData);
         
         return redirect()->route('peliculas.index');
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
        $peli=Peliculas::findOrFail($id);
        return view('peliculas.edit', compact('peliculas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $peliculasData = request()->except(['_token', '_method']);
        Peliculas::where('id', '=', $id)->update($peliculasData);
        return redirect('peliculas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Pelicylas::destroy($id);
        return redirect('peliculas');
    }
}

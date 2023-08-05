<?php

namespace App\Http\Controllers;

use App\Models\libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Libros = libro::all();
        return view('libros.index',compact('Libros'));
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
        $Libros= new libro;
        $Libros->nombre=$request->input('nombre');
        $Libros->genero=$request->input('genero');
        $Libros->autor=$request->input('autor');
        $Libros->editorial=$request->input('editorial');
        $Libros->save();
        session()->flash('success', 'El Libro se ha registrado correctamente.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request,$id)
    {
        $Libros=libro::find($id);
        $Libros->nombre=$request->input('nombre');
        $Libros->genero=$request->input('genero');
        $Libros->autor=$request->input('autor');
        $Libros->editorial=$request->input('editorial');
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $Libros=libro::find($id);
        $Libros->nombre=$request->input('nombre');
        $Libros->genero=$request->input('genero');
        $Libros->autor=$request->input('autor');
        $Libros->editorial=$request->input('editorial');
        $Libros->update();
        session()->flash('update', 'El Libro se ha actualizado correctamente.');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Libros=libro::find($id);
        $Libros->delete();
        session()->flash('delete', 'El Libro se ha eliminado correctamente.');

        return redirect()->back();
    }
}

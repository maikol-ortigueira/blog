<?php

namespace App\Http\Controllers;

use App\Models\Etiqueta;
use Illuminate\Http\Request;

class EtiquetaController extends Controller
{
    public function __construct()
    {
        // Controlar el acceso a las vistas en función de los permisos de usuario
        $this->middleware(['auth:sanctum', 'verified']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etiquetas = Etiqueta::orderBy('nombre');

        return view('etiquetas.index', ['etiquetas' => Etiqueta::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('etiquetas.edit');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etiqueta  $etiqueta
     * @return \Illuminate\Http\Response
     */
    public function show(Etiqueta $etiqueta)
    {
        //
    }

    /**
     * Guarda la etiqueta creada en la bbdd
     *
     * @param Request $request
     * @param Etiqueta $etiqueta
     * @return void
     */
    public function store(Request $request, Etiqueta $etiqueta)
    {
        $this->validate($request, [
            'nombre' => 'required'
        ]);

        Etiqueta::create($request->all());

        return redirect(route('etiquetas.index'))->with('success', 'Tag saved succesfully!!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etiqueta  $etiqueta
     * @return \Illuminate\Http\Response
     */
    public function edit(Etiqueta $etiqueta)
    {
        return view('etiquetas.edit', ['etiqueta' => $etiqueta]);
    }

    /**
     * Actualiza el valor de la etiqueta
     *
     * @param Request $request
     * @param Etiqueta $etiqueta
     * @return void
     */
    public function update(Request $request, Etiqueta $etiqueta)
    {
        $data = $this->validate($request, [
            'nombre' => 'required'
        ]);

        $etiqueta->update($data);

        return redirect()->route('etiquetas.index')->with('success', 'Tag updated succesfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etiqueta  $etiqueta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etiqueta $etiqueta)
    {
        $etiqueta->delete();

        return redirect()->route('etiquetas.index')->with('success', 'Tag removed succesfully!!');
    }
}

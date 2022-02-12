<?php

namespace App\Http\Controllers;

use App\Models\Artigo;
use Illuminate\Http\Request;

class ArtigoController extends Controller
{
    public function __construct()
    {
        // Controlar el acceso a las vistas en función de los permisos de usuario
        $this->middleware(['auth:sanctum', 'verified'])->except(['index', 'show']);
    }

    /**
     * Muestra un listado de artículos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blog.index', ['artigos' => Artigo::all()]);
    }

    /**
     * Muestra un formulario para crear un nuevo artículo.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.article.create');
    }

    /**
     * Guarda el artículo creado en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validación del artículo
        $this->validate($request, [
            'titulo' => 'required',
            'texto' => 'required'
        ]);

        // Guardar el artículo en la base de datos
        Artigo::create($request->all());

        return back()->with('success', 'El artículo de ha guardado correctamente en la base de datos.');
    }

    /**
     * Muestra un determinado artículo.
     *
     * @param  \App\Models\Artigo  $artigo
     * @return \Illuminate\Http\Response
     */
    public function show(Artigo $artigo)
    {
        return view('blog.article.show', ['artigo' => $artigo]);
    }

    /**
     * Muestra un formulario con la edición de un artículo para modificar.
     *
     * @param  \App\Models\Artigo  $artigo
     * @return \Illuminate\Http\Response
     */
    public function edit(Artigo $artigo)
    {
        return view('blog.article.edit');
    }

    /**
     * Guarda los datos actualizados de un artículo editado.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artigo  $artigo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artigo $artigo)
    {
        //
    }

    /**
     * Elimina un artículo determinado.
     *
     * @param  \App\Models\Artigo  $artigo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artigo $artigo)
    {
        //
    }
}
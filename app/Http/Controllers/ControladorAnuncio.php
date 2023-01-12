<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tipo_anuncio;
use App\Models\tipo_pet;
use App\Models\anuncio;

class ControladorAnuncio extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo_anuncios = tipo_anuncio::all();
        $tipo_pets     = tipo_pet::all();

        //return view('index-painel-anuncio');
        return view('index-painel-anuncio', compact('tipo_anuncios','tipo_pets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path1 = $request->file('arquivo1')->store('imagens','public');
        $path2 = $request->file('arquivo2')->store('imagens','public');
        $path3 = $request->file('arquivo3')->store('imagens','public');
        $path4 = $request->file('arquivo4')->store('imagens','public');

        $date = date('Y-m-d H:i:s');

        $anuncios = new anuncio();
        $anuncios->dado_id    = $request->input('user_id');
        $anuncios->tipo       = $request->input('tipo_anuncio');
        $anuncios->pet        = $request->input('tipo_pet');
        $anuncios->nome       = $request->input('nome_pet');
        $anuncios->descricao  = $request->input('descricao');
        $anuncios->foto1      = $request->$path1;
        $anuncios->foto2      = $request->$path2;
        $anuncios->foto3      = $request->$path3;
        $anuncios->foto4      = $request->$path4;
        $anuncios->dt_anuncio = $date;
        $anuncios->save();

        return redirect('/index'); //Redireciona para a página do panel principal onde fica a listagem de anuncios.
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

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
        return view('index-painel-anuncio', compact('tipo_anuncios', 'tipo_pets'));
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
        $name_randon = uniqid(date('HisYmd'));

        if ($request->hasFile('arquivo1')) {
            $request->file('arquivo1');
            $extension1 = $request->arquivo1->extension();
            echo $namefile1 = "arq1-{$name_randon}.{$extension1}";
            $path1 = $request->arquivo1->storeAs('imagens', $namefile1, 'public'); //StoreAs: salva na pasta criada,renomeia,salva no disco destino

        }else{ $path1 = 'Null';}

        if ($request->hasFile('arquivo2')) {
            $request->file('arquivo2');
            $extension2 = $request->arquivo2->extension();
            echo $namefile2 = "arq2-{$name_randon}.{$extension2}";
            $path2 = $request->arquivo2->storeAs('imagens', $namefile2, 'public');
        
        }else{$path2 = 'Null';}
        
        if ($request->hasFile('arquivo3')) {
            $request->file('arquivo3');
            $extension3 = $request->arquivo3->extension();
            echo $namefile3 = "arq3-{$name_randon}.{$extension3}";
            $path3 = $request->arquivo3->storeAs('imagens', $namefile3, 'public');
        
        }else{$path3 = 'Null';}
        

        if ($request->hasFile('arquivo4')) {
            $request->file('arquivo4');
            $extension4 = $request->arquivo4->extension();
            echo $namefile4 = "arq4-{$name_randon}.{$extension4}";
            $path4 = $request->arquivo4->storeAs('imagens', $namefile4, 'public');
        
        }else{$path4 = 'Null';}
        
        $date = date('Y-m-d H:i:s');

        $anuncios = new anuncio();
        $anuncios->dado_id    = $request->input('user_id');
        $anuncios->tipo       = $request->input('tipo_anuncio');
        $anuncios->pet        = $request->input('tipo_pet');
        $anuncios->nome       = $request->input('nome_pet');
        $anuncios->descricao  = $request->input('descricao');
        $anuncios->foto1      = $path1;
        $anuncios->foto2      = $path2;
        $anuncios->foto3      = $path3;
        $anuncios->foto4      = $path4;
        $anuncios->dt_anuncio = $date;
        $anuncios->save();

        return redirect('/painel'); //Redireciona para a página do panel principal onde fica a listagem de anuncios.
        
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

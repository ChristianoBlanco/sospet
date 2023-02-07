<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
    public function store_fotos(Request $request)
    {
        //
        return redirect('/painel');
    }
    public function store(Request $request)
    {
        $date = date('Y-m-d H:i:s');
        $date_folder = date('Y-m-d-H.i.s');
        $name_randon = uniqid(date('HisYmd'));
        $name_folder = "imagens/users/ID-{$request->input('user_id')}/{$date_folder}";

        if ($request->hasFile('arquivo1')) {
            $request->file('arquivo1');
            $extension1 = $request->arquivo1->extension();
            $namefile1 = "arq1-{$name_randon}.{$extension1}";
            $path1 = $request->arquivo1->storeAs($name_folder, $namefile1, 'public'); //StoreAs: salva na pasta criada,renomeia,salva no disco destino

        } else {
            $path1 = 'Null';
        }

        if ($request->hasFile('arquivo2')) {
            $request->file('arquivo2');
            $extension2 = $request->arquivo2->extension();
            $namefile2 = "arq2-{$name_randon}.{$extension2}";
            $path2 = $request->arquivo2->storeAs($name_folder, $namefile2, 'public');
        } else {
            $path2 = 'Null';
        }

        if ($request->hasFile('arquivo3')) {
            $request->file('arquivo3');
            $extension3 = $request->arquivo3->extension();
            $namefile3 = "arq3-{$name_randon}.{$extension3}";
            $path3 = $request->arquivo3->storeAs($name_folder, $namefile3, 'public');
        } else {
            $path3 = 'Null';
        }


        if ($request->hasFile('arquivo4')) {
            $request->file('arquivo4');
            $extension4 = $request->arquivo4->extension();
            $namefile4 = "arq4-{$name_randon}.{$extension4}";
            $path4 = $request->arquivo4->storeAs($name_folder, $namefile4, 'public');
        } else {
            $path4 = 'Null';
        }

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
        $anuncios->num_status = "1";
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
        //$id_anuncio = $id;
        //
        $tipo_anuncios = tipo_anuncio::all();
        $tipo_pets     = tipo_pet::all();

        $anuncios = anuncio::where('id', $id)->first();
        $lista_anuncios = anuncio::where('id', $id)->get();
        if (isset($anuncios)) {
            return view('index-painel-anuncio-edit', compact('anuncios', 'lista_anuncios', 'tipo_anuncios', 'tipo_pets')); // views direcionam para pasta de Views
        }
        return redirect('/painel'); //redirects direcionam para Routes/web.php
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
        $date = date('Y-m-d H:i:s');
        $date_folder = date('Y-m-d-H.i.s');
        $name_randon = uniqid(date('HisYmd'));
        $name_folder = "imagens/users/ID-{$request->input('user_id')}/{$date_folder}";

        if ($request->hasFile('arquivo1')) {
            $request->file('arquivo1');
            $extension1 = $request->arquivo1->extension();
            $namefile1 = "arq1-{$name_randon}.{$extension1}";
            $path1 = $request->arquivo1->storeAs($name_folder, $namefile1, 'public'); //StoreAs: salva na pasta criada,renomeia,salva no disco destino

        } else {
            $path1 = 'Null';
        }

        if ($request->hasFile('arquivo2')) {
            $request->file('arquivo2');
            $extension2 = $request->arquivo2->extension();
            $namefile2 = "arq2-{$name_randon}.{$extension2}";
            $path2 = $request->arquivo2->storeAs($name_folder, $namefile2, 'public');
        } else {
            $path2 = 'Null';
        }

        if ($request->hasFile('arquivo3')) {
            $request->file('arquivo3');
            $extension3 = $request->arquivo3->extension();
            $namefile3 = "arq3-{$name_randon}.{$extension3}";
            $path3 = $request->arquivo3->storeAs($name_folder, $namefile3, 'public');
        } else {
            $path3 = 'Null';
        }


        if ($request->hasFile('arquivo4')) {
            $request->file('arquivo4');
            $extension4 = $request->arquivo4->extension();
            $namefile4 = "arq4-{$name_randon}.{$extension4}";
            $path4 = $request->arquivo4->storeAs($name_folder, $namefile4, 'public');
        } else {
            $path4 = 'Null';
        }

        $anuncios = anuncio::find($id);
        $anuncios->dado_id    = $request->user_id;
        $anuncios->tipo       = $request->tipo_anuncio;
        $anuncios->pet        = $request->tipo_pet;
        $anuncios->nome       = $request->nome_pet;
        $anuncios->descricao  = $request->descricao;
        if ($path1 !== "Null") {
            $anuncios->foto1      = $path1;
        }
        if ($path2 !== "Null") {
            $anuncios->foto2      = $path2;
        }
        if ($path3 !== "Null") {
            $anuncios->foto3      = $path3;
        }
        if ($path4 !== "Null") {
            $anuncios->foto4      = $path4;
        }
        $anuncios->num_status = "1";
        $anuncios->dt_anuncio = $date;
        $anuncios->save();

        return redirect('/anuncios-edit/' . $id); //Redireciona para a página do panel principal onde fica a listagem de anuncios.
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
        $anuncios = anuncio::find($id);
        $anuncios->delete();

        return redirect('/painel');

    }
}

 //$p = new  App\Models\anuncio();
 //$p->onlyTrashed()->where('id', '2')->restore(); //Para recuperar o softdelete
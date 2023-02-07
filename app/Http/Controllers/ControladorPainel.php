<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\anuncio;
use App\Models\status;
use Auth;

class ControladorPainel extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        return view('index-painel');
    }
    public function indexjson()
    {
        //return  anuncio::paginate(10); //Pagina todos os campos da tabela anuncio
        //$id_login = Auth::user()->get(); //Pega todos os campos de login de usu�rios
        $id_login = Auth::user()->id; //Pega as informa��es da tabela escolhida como acesso dentro do arquivo auth.php

        $status = DB::table('anuncios AS a')->select('a.*', 's.tipo_status')->join('status AS s', 'a.num_status', '=', 's.num_status')
        ->where('a.dado_id', $id_login)
        ->where('a.deleted_at','=', Null) 
        ->paginate(10);

        //return anuncio::where('dado_id', $id_login)->paginate(10);
        return $status;
    }

    public function indexForm()
    {
        return view('index-painel-form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

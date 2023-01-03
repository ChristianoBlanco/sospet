<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use App\Models\cad_dado;
use App\Models\User;
//use Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Validator;
//use Illuminate\Validation\Rules\Password;

use geekcom\ValidatorDocs\Rules\Cpf;
use geekcom\ValidatorDocs\Rules\Cnpj;
use geekcom\ValidatorDocs\Rules\Cnh;
use geekcom\ValidatorDocs\Rules\Renavam;
use geekcom\ValidatorDocs\Rules\Placa;
use geekcom\ValidatorDocs\Rules\Ddd;
use geekcom\ValidatorDocs\Rules\InscricaoEstadual;
use geekcom\ValidatorDocs\Rules\Nis;
use geekcom\ValidatorDocs\Rules\Cns;
use geekcom\ValidatorDocs\Rules\Certidao;
use geekcom\ValidatorDocs\Rules\TituloEleitoral;

use App\Http\Controllers\Helpers;



class ControladorUsuario extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('index-painel-usuario');
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
        //$id_login = Auth::user()->get(); //Pega todos os campos de login de usu�rios
        //$id_login = Auth::user()->id;
        //$id_email = Auth::user()->email;

        /* $usuario = new cad_dado();
        $usuario->id_log_usuario   = $request->id_login;
        $usuario->nome             = $request->nome;
        $usuario->sobrenome        = $request->sobrenome;
        $usuario->cpf              = $request->cpf;
        $usuario->tel1             = $request->tel1;
        $usuario->tel2             = $request->tel2;
        $usuario->email            = $request->email;
        $usuario->endereco         = $request->endereco;
        $usuario->cidade           = $request->cidade;
        $usuario->uf               = $request->uf;
        $usuario->save();
        return redirect('/painel');
        //return  $id_login; */
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

        $usuarios = User::find($id);
        if(isset($usuarios)) {
            return view('index-painel-usuario', compact('usuarios')); // views direcionam para pasta de Views
        }
        return redirect('/painel'); //redirects direcionam para Routes/web.php
    }

    public function editSenha($id)
    {
        //

        $usuarios = User::find($id);
        if(isset($usuarios)) {
            return view('index-painel-usuario-senha', compact('usuarios')); // views direcionam para pasta de Views
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
        /* $request->validate([
            'password' => ['required', 'confirmed', Password::min(8)],
        ]); */

       include('../Includes/validacao_dados/validacao_dados.php');

       $help = new Helpers;

        $usuarios = User::find($id);
        if(isset($usuarios)){
            $usuarios->name             = $request->nome;
            $usuarios->sobrenome        = $request->sobrenome;
            $usuarios->cpf              = $help->formatacpf($request->cpf);
            $usuarios->tel1             = $help->formataTelefone($request->tel1);
            $usuarios->tel2             = $help->formataTelefone($request->tel2);
            $usuarios->email            = $request->email;
            //$usuarios->password         = Hash::make($request->password);
            $usuarios->endereco         = $request->endereco;
            $usuarios->cidade           = $request->cidade;
            $usuarios->uf               = $request->uf;
            $usuarios->save();
        }
        return redirect('/painel-edit-usuario/'.$id)->with('msg_status', 'Dados atualizados com sucesso !');

    }

    public function updateSenha(Request $request, $id)
    {
        include('../Includes/validacao_dados/validacao_dados_senha.php');

        $usuarios = User::find($id);
        if (isset($usuarios)) {
             $usuarios->password = Hash::make($request->password);
             $usuarios->save();
        }
        return redirect('/painel-edit-usuario-senha/'.$id)->with('msg_status', 'Senha alterada com sucesso !');
    }

    public function softDelete(Request $request, $id)
    {


        User::find($id)->delete();

        return redirect('/index');
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

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

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

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        include('../Includes/validacao_dados/validacao_dados.php');

        $user = User::create([
            'name'       => $request->name,
            'email'      => $request->email,
            'password'   => Hash::make($request->password),
            'sobrenome'  => $request->sobrenome,
            'cpf'        => $request->cpf,
            'tel1'       => $request->tel1,
            'tel2'       => $request->tel2,
            'email'      => $request->email,
            'endereco'   => $request->endereco,
            'cidade'    => $request->cidade,
            'uf'        => $request->uf,
        ]);

        event(new Registered($user));

        Auth::login($user);

       return redirect(RouteServiceProvider::HOME);
       //protected $redirectTo = '/painel';

    }
}

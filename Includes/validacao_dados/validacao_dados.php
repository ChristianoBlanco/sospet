<?php
    use Illuminate\Validation\Rules\Password;

  

    $rules = [
        'nome' => ['min:3'],
        'name' => ['min:3'],
        'sobrenome' => ['min:3'],
        'cpf' => 'required|Cpf',
        'email' => 'email:filter|unique:users',
        'tel1' => ['min:14'],
        //'tel2' => ['min:14'],
        //'password' => ['required', 'confirmed', Password::min(8)],
    ];
    $message = [
        'nome.min' => 'Mínimo de 3 caracteres',
        'name.min' => 'Mínimo de 3 caracteres',
        'nome.max' => 'Excedeu o número de Caracteres',
        'sobrenome.min' => 'Mínimo de 3 caracteres',
        'cpf.min' => 'O CPF deve conter 11 números',
        //'cpf.cpf' => 'O CPF Inválido',
        'cpf.Cpf' => 'Formato falso CPF !',
        'email.email' => 'E-mail invalido',
        'tel1.min' => 'Numero invalido: verifique o DDD e a quantidade de caracteres',
        //'tel2.min' => 'Numero invalido: verifique o DDD e a quantidade de caracteres',
        //'password.confirmed' => 'Os campos senha e confirmar senha não conferem',
    ];

    $request->validate($rules, $message);
?>

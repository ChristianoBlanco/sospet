<?php
    use Illuminate\Validation\Rules\Password;
    $rules = [
        'nome' => ['min:3'],
        'sobrenome' => ['min:3'],
        'cpf' => ['min:11'],
        'email' => ['email:filter'],
        'tel1' => ['min:10'],
        'tel2' => ['min:10'],
        'password' => ['required', 'confirmed', Password::min(8)],
    ];
    $message = [
        'nome.min' => 'Numero minimo de caracters invalido',
        'nome.max' => 'Excedeu o Número maximo de Caracteres',
        'sobrenome.min' => 'Numero minimo de caracters invalido',
        'cpf.min' => 'O CPF deve conter 11 numeros',
        'email.email' => 'E-mail invalido',
        'tel1.min' => 'Numero invalido: verifique o DDD e a quantidade de caracteres',
        'tel2.min' => 'Numero invalido: verifique o DDD e a quantidade de caracteres',
         'password.confirmed' => utf8_encode('Os campos senha e confirmar senha não conferem'),
    ];

    $request->validate($rules, $message);
?>

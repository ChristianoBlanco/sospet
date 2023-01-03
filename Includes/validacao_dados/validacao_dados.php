<?php
    use Illuminate\Validation\Rules\Password;

  

    $rules = [
        'nome' => ['min:3'],
        'sobrenome' => ['min:3'],
        'cpf' => 'required|Cpf',
        'email' => ['email:filter'],
        'tel1' => ['min:10'],
        'tel2' => ['min:10'],
        //'password' => ['required', 'confirmed', Password::min(8)],
    ];
    $message = [
        'nome.min' => utf8_encode('Nome deve conter m�nimo de 3 caracteres'),
        'nome.max' => 'Excedeu o N�mero maximo de Caracteres',
        'sobrenome.min' => utf8_encode('Sobrenome deve conter m�nimo de 3 caracteres'),
        'cpf.min' => utf8_encode('O CPF deve conter 11 numeros'),
        //'cpf.cpf' => utf8_encode('O CPF Inv�lido'),
        'cpf.Cpf' => 'Formato falso CPF !',
        'email.email' => 'E-mail invalido',
        'tel1.min' => 'Numero invalido: verifique o DDD e a quantidade de caracteres',
        'tel2.min' => 'Numero invalido: verifique o DDD e a quantidade de caracteres',
        //'password.confirmed' => utf8_encode('Os campos senha e confirmar senha n�o conferem'),
    ];

    $request->validate($rules, $message);
?>

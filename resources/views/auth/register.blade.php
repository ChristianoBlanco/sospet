@extends('layouts.appLogin')

@section('body')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card" style="margin-top:50px;margin-left:250px;">
                    <div class="form-login">
                        <div class="card-header"
                            style="font-family:'Arial';font-weight:700;font-size:1.143em;color:rgba(5,38,55,1); text-align: center; margin-bottom:15px;">
                            <?= 'Cadastro de usuário' ?></div>

                        <form method="POST" action="{{ route('register') }}" class="login-form">
                            @csrf

                            <div class="col-md-4" style="padding-right:10px;">
                                <!-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label> -->
                                @if ($errors->has('name'))
                                    <label for="inputNome" class="form-label"
                                        style="color:red">{{ $errors->first('name') }}</label>
                                @else
                                    <label for="inputNome" class="form-label">Nome</label>
                                @endif
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" placeholder="Nome" maxlength="25" required
                                    autocomplete="name" autofocus>

                                

                            </div>
                            <div class="col-md-8" style="padding-right:10px;">

                                @if ($errors->has('sobrenome'))
                                    <label for="inputSobrenome" class="form-label"
                                        style="color:red">{{ $errors->first('sobrenome') }}</label>
                                @else
                                    <label for="inputSobrenome" class="form-label">Sobrenome</label>
                                @endif
                                <input type="text" class="form-control" id="sobrenome" name="sobrenome"
                                    value="{{ old('sobrenome') }}" placeholder="Sobrenome" maxlength="50" required>
                            </div>
                            <div class="col-md-4" style="padding-right:10px; margin-top:15px;">
                                @if ($errors->has('cpf'))
                                    <label for="inputCpf" class="form-label"
                                        style="color:red">{{ $errors->first('cpf') }}</label>
                                @else
                                    <label for="inputCpf" class="form-label">CPF</label>
                                @endif

                                <input type="text" class="form-control cpf" id="cpf" name="cpf"
                                    value="{{ old('cpf') }}" placeholder="CPF" maxlength="14" required>
                            </div>

                            <div class="col-md-8" style="padding-right:10px; margin-top:15px;">
                                <label for="inputEndereco" class="form-label"><?= 'Endereço' ?></label>
                                <input type="text" class="form-control" id="endereco" name="endereco"
                                    value="{{ old('endereco') }}" placeholder="<?= 'Endereço completo' ?>" maxlength="100"
                                    required>
                            </div>

                            <div class="col-md-4" style="padding-right:10px; margin-top:15px;">
                                <label for="inputState" class="form-label" style="padding-right:10px;">Cidade</label>
                                <select id="inputState" class="form-select" name="cidade" required>
                                    <option selected>{{ old('cidade') }}</option>
                                    <option value="Espírito Santo"><?= 'Espírito Santo' ?></option>
                                    <option value="Minas Gerais"><?= 'Minas Gerais' ?></option>
                                    <option value="Rio de Janeiro"><?= 'Rio de Janeiro' ?></option>
                                    <option value="São Paulo"><?= 'São Paulo' ?></option>
                                </select>
                            </div>

                            <div class="col-md-8" style="padding-right:10px; margin-top:15px;">
                                @if ($errors->has('email'))
                                    <label for="inputEmail" class="form-label"
                                        style="color:red">{{ $errors->first('email') }}</label>
                                @else
                                    <label for="inputEmail" class="form-label">E-mail</label>
                                @endif
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" placeholder="E-mail" maxlength="100" required
                                    autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4" style="padding-right:10px; margin-top:15px;">
                                <label for="inputState" class="form-label">UF</label>
                                <select id="inputState" class="form-select" name="uf" required>
                                    <option selected>{{ old('uf') }}</option>
                                    <option value="ES">ES</option>
                                    <option value="MG">MG</option>
                                    <option value="RJ">RJ</option>
                                    <option value="SP">SP</option>
                                </select>
                            </div>

                            <div class="col-md-4" style="padding-right:10px; margin-top:15px; ">
                                @if ($errors->has('tel1'))
                                    <label for="inputTel1" class="form-label"
                                        style="color:red">{{ $errors->first('tel1') }}</label>
                                @else
                                    <label for="inputTel1" class="form-label">Telefone 1</label>
                                @endif
                                <input type="text" class="form-control tel" id="tel1" name="tel1"
                                    value="{{ old('tel1') }}" placeholder="Celular ou Convencional" maxlength="14"
                                    required>
                            </div>

                            <div class="col-md-4" style="padding-right:10px; margin-top:15px; ">
                                <label for="inputTel2" class="form-label">Telefone 2 (opcional)</label>
                                <input type="text" class="form-control tel" id="tel2" name="tel2"
                                    value="{{ old('tel2') }}" placeholder="Celular ou Convencional" maxlength="14">
                            </div>



                            <div class="col-md-8" style="padding-right:10px; margin-top:15px;">
                                <label for="inputEmail" class="form-label">Alterar Senha</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    placeholder="Senha" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="col-md-8" style="padding-right:10px; margin-top:15px;">
                                <label for="inputEmail" class="form-label">Confirmar senha</label>
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" placeholder="Confirmar senha" required
                                    autocomplete="new-password">
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="botao-login"
                                        style="margin-top:35px; margin-left:145px;">
                                        {{ __('Registrar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

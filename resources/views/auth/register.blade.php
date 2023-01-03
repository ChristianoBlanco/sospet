@extends('layouts.appLogin')

@section('body')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card" style="margin-top:50px;margin-left:250px;">
                <div class="form-login">
                 <div class="card-header" style="font-family:'Arial';font-weight:700;font-size:1.143em;color:rgba(5,38,55,1); text-align: center; margin-bottom:15px;"><?php  echo utf8_encode('Cadastro de usuário'); ?></div>

                    <form method="POST" action="{{ route('register') }}" class="login-form">
                        @csrf

                        <div class="col-md-4" style="padding-right:10px;">
                            <!-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label> -->
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nome" maxlength="100" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>
                        <div class="col-md-8" style="padding-right:10px;">
                            <!-- <label for="inputSobrenome" class="form-label">Sobrenome</label> -->
                            <input type="text" class="form-control" id="sobrenome" name="sobrenome" value="{{ old('sobrenome') }}" placeholder="Sobrenome" maxlength="50" required>
                        </div>
                        <div class="col-md-4" style="padding-right:10px; margin-top:15px;">
                            <!-- <label for="inputCPF" class="form-label">CPF</label> -->
                            <input type="text" class="form-control" id="cpf" name="cpf" value="{{ old('cpf') }}" placeholder="CPF" maxlength="11" required>
                        </div>

                        <div class="col-md-8" style="padding-right:10px; margin-top:15px;">
                            <!-- <label for="inputEndereco" class="form-label"><?= utf8_encode('Endereço') ?></label> -->
                            <input type="text" class="form-control" id="endereco" name="endereco" value="{{ old('endereco') }}"
                                placeholder="<?= utf8_encode('Endereço completo') ?>" maxlength="100" required>
                        </div>

                        <div class="col-md-4" style="padding-right:10px; margin-top:15px;">
                            <!-- <label for="inputState" class="form-label" style="padding-right:10px;">Cidade</label> -->
                            <select id="inputState" class="form-select" name="cidade" required>
                                <option>Cidade...</option>
                                <option><?= utf8_encode('Espírito Santo') ?></option>
                                <option><?= utf8_encode('Minas Gerais') ?></option>
                                <option><?= utf8_encode('Rio de Janeiro') ?></option>
                                <option><?= utf8_encode('São Paulo') ?></option>
                            </select>
                        </div>

                        <div class="col-md-8" style="padding-right:10px; margin-top:15px;">
                            <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label> -->
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-mail" maxlength="100" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="col-md-4" style="padding-right:10px; margin-top:15px;">
                            <!-- <label for="inputState" class="form-label">UF</label> -->
                            <select id="inputState" class="form-select" name="uf" required>
                                <option>UF...</option>
                                <option>ES</option>
                                <option>MG</option>
                                <option>RJ</option>
                                <option>SP</option>
                            </select>
                        </div>

                        <div class="col-md-4" style="padding-right:10px; margin-top:15px; ">
                          <!--  <label for="inputTel1" class="form-label">Telefone 1</label> -->
                            <input type="text" class="form-control" id="tel1" name="tel1" value="{{ old('tel1') }}"
                                placeholder="Celular ou Convencional" maxlength="11" required>
                        </div>

                        <div class="col-md-4" style="padding-right:10px; margin-top:15px; ">
                           <!-- <label for="inputTel2" class="form-label">Telefone 2</label> -->
                            <input type="text" class="form-control" id="tel2" name="tel2" value="{{ old('tel2') }}"
                                placeholder="Celular ou Convencional" maxlength="11">
                        </div>



                        <div class="col-md-8" style="padding-right:10px; margin-top:15px;">
                            <!-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label> -->
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Senha" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="col-md-8" style="padding-right:10px; margin-top:15px;">
                            <!--  <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Senha') }}</label> -->
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar senha" required autocomplete="new-password">
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="botao-login" style="margin-top:35px; margin-left:192px;">
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

<div class="box content">
    <h1 style="font-size: 20px; font-weight: 900; color:#000000; margin-bottom:50px;">
        <?= 'Dados do usuário' ?></h1>


    @if (session('msg_status'))
        <div id="mensagem" class="alert alert-success" autofocus>
            {{ session('msg_status') }}
        </div>
    @endif


    <form action="{{ url('/usuarios') }}{{ '/' }}{{ Auth::user()->id }}" method="POST"
        style="margin-top: 20px; font-size:15px;">
        @csrf


        <input type="hidden" name="id_login" value="{{ $usuarios->id }}">

        <div class="col-md-4" style="padding-right:10px;">

            @if ($errors->has('nome'))
                <label for="inputNome" class="form-label" style="color:red">{{ $errors->first('nome') }}</label>
            @else
                <label for="inputNome" class="form-label">Nome</label>
            @endif
            <input type="text" class="form-control " id="nome" name="nome" placeholder="Seu nome"
                value="{{ $usuarios->name }}" maxlength="25" autocomplete="nome" required>

        </div>
        <div class="col-md-4" style="padding-right:10px;">
            <label for="inputSobrenome" class="form-label">Sobrenome</label>
            <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Sobrenome"
                value="{{ $usuarios->sobrenome }}" maxlength="50" autocomplete="sobrenome" required>
        </div>

        <div class="col-md-4" style="padding-right:10px;">
            @if ($errors->has('cpf'))
                <label for="inputNome" class="form-label" style="color:red">{{ $errors->first('cpf') }}</label>
            @else
                <label for="inputNome" class="form-label">CPF</label>
            @endif
            <input type="text" class="form-control cpf" id="cpf" name="cpf" placeholder="CPF"
                value="{{ $usuarios->cpf }}" required>
        </div>

        <div class="col-md-6" style="padding-right:10px; margin-top:15px;">
            <label for="inputEndereco" class="form-label"><?= 'Endereço' ?></label>
            <input type="text" class="form-control" id="endereco" name="endereco"
                placeholder="<?= 'Endereço completo)' ?>" value="{{ $usuarios->endereco }}"
                maxlength="100"required>
        </div>
        <div class="col-md-3" style="padding-right:10px; margin-top:15px;">
            <label for="inputState" class="form-label" style="padding-right:10px;">Cidade</label>
            <select id="inputState" class="form-select" name="cidade" required>
                <option selected>{{ $usuarios->cidade }}</option>
                <option><?= utf8_encode('Esp�rito Santo') ?></option>
                <option><?= utf8_encode('Minas Gerais') ?></option>
                <option><?= utf8_encode('Rio de Janeiro') ?></option>
                <option><?= utf8_encode('S�o Paulo') ?></option>
            </select>
        </div>

        <div class="col-md-3" style="padding-right:10px; margin-top:15px;">
            <label for="inputState" class="form-label">UF</label>
            <select id="inputState" class="form-select" name="uf" required>
                <option selected>{{ $usuarios->uf }}</option>
                <option>ES</option>
                <option>MG</option>
                <option>RJ</option>
                <option>SP</option>
            </select>
        </div>

        <div class="col-md-6" style="padding-right:10px;  margin-top:15px;">
            <label for="inputEmail" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $usuarios->email }}"
                placeholder="E-mail" maxlength="100">
        </div>

        <div class="col-md-3" style="padding-right:10px; margin-top:15px; ">
            <label for="inputTel1" class="form-label">Telefone 1</label>
            <input type="text" class="form-control tel" id="tel1" name="tel1"
                placeholder="Celular ou Convencional" value="{{ $usuarios->tel1 }}" maxlength="14"
                onkeypress="return onlynumber();" required>
        </div>
        <div class="col-md-3" style="padding-right:10px; margin-top:15px; ">
            <label for="inputTel2" class="form-label">Telefone 2</label>
            <input type="text" class="form-control tel" id="tel2" name="tel2"
                placeholder="Celular ou Convencional" value="{{ $usuarios->tel2 }}"
                onkeypress="return onlynumber();" maxlength="14">
        </div>

        <div class="col-md-12" style="padding-top: 55px;">
            <input type="submit" class="btn btn-primary" value="Atualizar Dados" name="atualizar">
            <!-- <a href="{{ url()->previous() }}" class="btn btn-primary">Cancelar</a> -->
            <a href="#" class="btn btn-danger" style="margin-left:35px;" data-toggle="modal"
                data-target="#exampleModal">Excluir minha conta</a>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" >
                        <h5 class="modal-title" id="exampleModalLabel"><?= utf8_encode('Dados do usu�rio'); ?></h5>
                    </div>
                    <div class="modal-body">
                        Deseja exluir realmente sua conta ?

                        <ul style="margin-left:30px;margin-top:15px;">
                            <li><?= utf8_encode('Depois de Exlu�da somente o Administrador pode recuperar.'); ?></li>
                            <li><?= utf8_encode('Ou criar uma nova conta mas com e-mail novo.'); ?></li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Sair</button>
                        <a href="{{ url('/usuarios-softdelete') }}{{'/'}}{{Auth::user()->id}}" ><button type="button" class="btn btn-success" >Excluir</button></a>
                    </div>
                </div>
            </div>
        </div>



    </form>

</div>

</div>

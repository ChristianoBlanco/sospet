<div class="wrapper-nav" style="margin:50px 0px 25px 100px;">
    <div class="box sidebar">

     <a href="{{ url('/painel') }}" ><button class="button-24" role="button"><?= "Meus anúncios" ?></button></a>
     <a href="{{ url('/painel-edit-usuario') }}{{'/'}}{{Auth::user()->id}}" ><button class="button-24" role="button"><?= "Dados Cadastrais" ?></button></a>
     <a href="{{ url('/painel-edit-usuario-senha') }}{{'/'}}{{Auth::user()->id}}" ><button class="button-24" role="button"><?= "Atualizar Senha" ?></button></a>
     <a href="{{ url('/painel-edit-usuario-email') }}{{'/'}}{{Auth::user()->id}}" ><button class="button-24" role="button"><?= "Atualizar E-mail" ?></button></a>
     <a href="{{ url('/painel-cad-anuncio') }}" ><button class="button-24" role="button">Anunciar</button></a>
     <a class="dropdown-item" href="{{ url('/index') }}"><button class="button-24b" role="button"><?= utf8_encode("Voltar para o Site") ?></button></a>

    </div>

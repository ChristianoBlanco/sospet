
<div class="box content">
    <h1 style="font-size: 20px; font-weight: 900; color:#000000; margin-bottom:50px;"><?= utf8_encode('Alterar Senha usuário'); ?></h1>


      @if (session('msg_status'))
      <div id="mensagem" class="alert alert-success" autofocus>
          {{session('msg_status')}}
      </div>
      @endif


    <form action="{{url('/usuarios-senha')}}{{'/'}}{{Auth::user()->id}}" method="POST" style="margin-top: 20px; font-size:15px;">
        @csrf

        @if ($errors->any())
          <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
             <ul>
              <li> {{ $error }}<br></li>
            </ul>

            @endforeach
          </div>
        @endif

        <input type="hidden" name="id_login" value="{{ $usuarios->id }}" >

        <div class="col-md-6" style="padding-right:10px;  margin-top:5px;">
            <label for="inputEmail" class="form-label">Alterar Senha</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Senha"  autocomplete="new-password" maxlength="11" required>
        </div>

        <div class="col-md-6" style="padding-right:10px;  margin-top:5px;">
            <label for="inputEmail" class="form-label">Confirmar senha</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar senha"  autocomplete="new-password" required>
        </div>

        <div class="col-md-12" style="padding-top: 55px;">
            <input type="submit" class="btn btn-primary" value="Altarar Senha" name="atualizar">
            <!-- <a href="{{ url()->previous() }}" class="btn btn-primary">Cancelar</a> -->
        </div>

    </form>

</div>

</div>

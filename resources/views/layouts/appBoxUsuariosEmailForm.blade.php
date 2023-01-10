<div class="box content">
    <h1 style="font-size: 20px; font-weight: 900; color:#000000; margin-bottom:50px;">
        <?= 'Atualizar E-mail' ?></h1>


    @if (session('msg_status'))
        <div id="mensagem" class="alert alert-success" autofocus>
            {{ session('msg_status') }}
        </div>
    @endif


    <form action="{{ url('/usuarios-email') }}{{ '/' }}{{ Auth::user()->id }}" method="POST"
        style="margin-top: 20px; font-size:15px;">
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

        <input type="hidden" name="id_login" value="{{ $usuarios->id }}">

        <div class="col-md-6" style="padding-right:10px;  margin-top:15px;">
            @if ($errors->has('email'))
                <label for="inputEmail" class="form-label" style="color:red">{{ $errors->first('email') }}</label>
            @else
                <label for="inputEmail" class="form-label">E-mail</label>
            @endif
            <input type="email" class="form-control" id="email" name="email" value="{{ $usuarios->email }}"
                placeholder="E-mail" maxlength="100">
        </div>

        <div class="col-md-12" style="padding-top: 55px;">
            <input type="submit" class="btn btn-primary" value="Altarar E-mail" name="atualizar">
            <!-- <a href="{{ url()->previous() }}" class="btn btn-primary">Cancelar</a> -->
        </div>

    </form>

</div>

</div>

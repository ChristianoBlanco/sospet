@extends('layouts.appLogin')

@section('body')

<!--[if lte IE 8]>
<!--[if lte IE 8]>
<link rel="stylesheet"  href="menuie.css" type="text/css" media="screen"/>
<link rel="stylesheet"  href="vmenuie.css" type="text/css" media="screen"/>
<![endif]-->

<!--[if IE 7]>
<style type="text/css" media="screen">
#ttr_vmenu_items  li.ttr_vmenu_items_parent {margin-left:-16px;font-size:0px;}
</style>
<![endif]-->
<!--[if lt IE 9]>
<script type="text/javascript" src="html5shiv.js">
</script>
<script type="text/javascript" src="respond.min.js">
</script>
<![endif]-->
</head>
<body>

<div class="login-page" style="margin-top:50px;" id="login-form">
    <div class="form">
    <label style="font-family:'Arial';font-weight:700;font-size:1.143em;color:rgba(5,38,55,1);margin-bottom:15px;"><?php echo utf8_encode("Área do usuário"); ?></label>
     <!-- <form class="register-form">
        <input type="text" placeholder="name"/>
        <input type="password" placeholder="password"/>
        <input type="text" placeholder="email address"/>
        <button>create</button>
        <p class="message">Already registered? <a href="#">Sign In</a></p>
      </form> -->
      <form method="POST" action="{{url('/login')}}" class="login-form">
        @csrf

        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="<?php echo utf8_encode("Digite seu E-mail"); ?>" autofocus />
        @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror

        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Digite sua Senha"/>
        @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror

       <button type="submit" value="Acessar">
            {{ __('Login') }}
        </button>

        @if (Route::has('password.request'))
           <p class="message">
             <a href="{{ route('password.request') }}">
              {{ __('Esqueci minha senha') }}
             </a>
           </p>
        @endif

        <p class="message"><?php echo utf8_encode("Não é Cadastrado ?"); ?> <a href="{{ route('register') }}"><b>Cadastre-se Aqui !</b></a></p>
      </form>
    </div>
</div>

@endsection


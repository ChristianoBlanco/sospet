
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>SOS.Pets</title>
<meta name="viewport" content="width=device-width, initial-scale=1">


<script src="//code.jquery.com/jquery-3.4.1.js"></script>



<script type="text/javascript" src="{{ asset('js/jquery.js')}}">
</script>
<script type="text/javascript" src="{{ asset('js/jquery.min.js')}}">
</script>
<script type="text/javascript" src="{{ asset('js/popper.js')}}">
</script>
<script type="text/javascript" src="{{ asset('js/main.js')}}">
</script>
<script type="text/javascript" src="{{ asset('js/jquery-ui.min.js')}}">
</script>
<script type="text/javascript" src="{{ asset('js/tt_slideshow.js')}}">
</script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}">
</script>
<script type="text/javascript" src="{{ asset('js/Customjs.js')}}">
</script>
<!-- Foi retirado o script ContacForm.js para funcionar a envio de post para a web route -->
<script type="text/javascript" src="{{ asset('js/unslider.js')}}">
</script>

<script src="{{ asset('js/app-style-switcher.js')}}"></script>
<!--Wave Effects -->
<script src="{{ asset('js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{ asset('js/sidebarmenu.js')}}"></script>
<!--Custom -->
<script src="{{ asset('js/custom.js')}}"></script>
<!--Somente números  -->
<script src="{{ asset('js/somente_numeros.js')}}"></script>
<!--Confirmações de ações de butões, links.... -->
<script src="{{ asset('js/ConfirmaOpcoes.js')}}"></script>


<!--Mascara de Inputs -->
<script src="{{ asset('js/plugin/jquery.inputmask.bundle.min.js')}}"></script>
<script src="{{ asset('js/AppMask.js')}}"></script>





<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}"  type="text/css" media="screen"/>
<link rel="stylesheet" href="{{ asset('css/style.css')}}"      type="text/css" media="screen"/>
<link rel="stylesheet" href="{{ asset('css/unslider.css')}}"   type="text/css" media="screen"/>
<link rel="stylesheet" href="{{ asset('css/navbarDrop1.css')}}"   type="text/css" media="screen"/>
<link rel="stylesheet" href="{{ asset('css/style_menu_side.css')}}"   type="text/css" media="screen"/>


<!--[if lte IE 8]>
<!--[if lte IE 8]>
<link rel="stylesheet"  href="menuie.css" type="text/css" media="screen"/>
<link rel="stylesheet"  href="vmenuie.css" type="text/css" media="screen"/>
<![endif]-->
<script type="text/javascript" src="{{ asset('js/totop.js')}}">
</script>
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
<body class="Home">
<div class="totopshow">
<a href="#" class="back-to-top"><img alt="Back to Top" src="{{ asset('images/gototop0.png')}}"/></a>
</div>
<header id="ttr_header" >
<div id="ttr_header_inner" >
<div class="headerforeground01">
</div>
<div class="ttr_headershape01" >
<div class="html_content" style="width:175px;"><p><span style="font-size:0.857em;color:rgba(243,243,243,1);"></span></p></div>
</div>
<div class="ttr_headershape02">
<div class="html_content"><p><span style="font-size:0.857em;color:rgba(243,243,243,1);">

</span></p></div>
</div>
</div>
</header>
<nav id="ttr_menu" class="navbar-default navbar">
   <div id="ttr_menu_inner_in">
<div class="menuforeground">
</div>
<div class="ttr_menushape1">
<div class="html_content"><p><span style="font-family:'Arial';font-weight:700;font-size:2.571em;color:rgba(78,78,78,1);">DOG CLUB</span></p></div>
</div>
<div id="navigationmenu">
<div class="navbar-header">
<button id="nav-expander" data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
<span class="sr-only">
</span>
<span class="icon-bar">
</span>
<span class="icon-bar">
</span>
<span class="icon-bar">
</span>
</button>
<a href="http://www.templatetoaster.com" target="_self">
<img  class="ttr_menu_logo" src="{{ asset('images/menulogo.png')}}" >
</a>
</div>
<div class="menu-center collapse navbar-collapse">
<ul class="ttr_menu_items nav navbar-nav navbar-right">
<li class="ttr_menu_items_parent dropdown active"><a href="#" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Home</a>
<hr class ="horiz_separator"/>
</li>
<li class="ttr_menu_items_parent dropdown"><a href="#" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span><?php  echo utf8_encode('Sobre o site'); ?></a>
<hr class ="horiz_separator"/>
</li>
<!-- <li class="ttr_menu_items_parent dropdown"><a href="#" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span><?//php echo utf8_encode('Serviços'); ?></a>
<hr class ="horiz_separator"/>  -->
</li>
<li class="ttr_menu_items_parent dropdown"><a href="#" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Parceiros</a>
<hr class ="horiz_separator"/>
</li>
<!-- <li class="ttr_menu_items_parent dropdown"><a href="#login-form" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span><?php  //echo utf8_encode('Login do usuário'); ?> </a> -->
    @auth
      <hr class ="horiz_separator"/>
    @endauth

    @guest
<li class="ttr_menu_items_parent dropdown">
    <a href="{{ route('register') }}" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span><?php  echo utf8_encode('Cadastrar'); ?> </a>
    <hr class ="horiz_separator"/>

    @endguest

</li>
<li class="ttr_menu_items_parent dropdown">
    @auth

    <a href="#" class="ttr_menu_items_parent_link nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <span class="menuchildicon"><span class="menuchildicon"></span><?= utf8_encode("Bem-vindo(a), ") ?> {{ Auth::user()->name }} </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="width:200px; ">
        <li><a class="dropdown-item" href="{{url('/painel')}}"><?= utf8_encode("Painel do usuário") ?></a></li>
        <li><a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Sair') }}
         </a>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
         </form>
        </li>
        </ul>
    <hr class ="horiz_separator"/>

    @endauth

    @guest

    <a href="{{ route('login') }}" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span><?php  echo utf8_encode('Login do usuário'); ?> </a>
    <hr class ="horiz_separator"/>

    @endguest

</li>
</ul>
</div>
</div>
</div>
</nav>



  @hasSection ('body')
   @yield('body')
  @endif



  <div style="height:0px;width:0px;overflow:hidden;"></div>
  <footer id="ttr_footer">
  <div class="ttr_footerHome_html_row0 row">
  <div class="post_column col-lg-3 col-md-6 col-sm-6 col-xs-12">
  <div class="ttr_footerHome_html_column00">
  <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
  <div class="html_content"><p style="margin:0.36em 0em 0.36em 4.29em;"><br style="font-family:'Arial';font-weight:700;font-size:1.286em;color:rgba(255,255,255,1);" /></p><p style="margin:0.36em 0em 0.36em 4.29em;"><br style="font-family:'Arial';font-weight:700;font-size:1.286em;color:rgba(255,255,255,1);" /></p><p style="margin:0.36em 0em 0.36em 4.29em;"><span style="font-family:'Arial';font-weight:700;font-size:1.286em;color:rgba(255,255,255,1);">LOCATION</span></p><p style="margin:1.43em 0em 0.36em 4.29em;line-height:1.40845070422535;"><span style="font-family:'Arial';font-weight:700;color:rgba(255,255,255,1);">125, First Flore, Golden Suit,New York</span></p><p style="margin:0.36em 0em 0.36em 4.29em;line-height:1.40845070422535;"><span style="font-family:'Arial';font-weight:700;color:rgba(255,255,255,1);">Phone: 1800 125 2000</span></p><p style="margin:0.36em 0em 0.36em 4.29em;line-height:1.40845070422535;"><span style="font-family:'Arial';font-weight:700;color:rgba(255,255,255,1);">Fax: 1800 125 2000</span></p></div>
  <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
  </div>
  </div>
  <div class="clearfix visible-xs-block">
  </div>
  <div class="post_column col-lg-3 col-md-6 col-sm-6 col-xs-12">
  <div class="ttr_footerHome_html_column01">
  <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
  <div class="html_content"><p style="margin:0.36em 0em 0.36em 4.29em;"><br style="font-family:'Arial';font-weight:700;font-size:1.286em;color:rgba(255,255,255,1);" /></p><p style="margin:0.36em 0em 0.36em 4.29em;"><br style="font-family:'Arial';font-weight:700;font-size:1.286em;color:rgba(255,255,255,1);" /></p><p style="margin:0.36em 0em 0.36em 4.29em;"><span style="font-family:'Arial';font-weight:700;font-size:1.286em;color:rgba(255,255,255,1);">INFORMATION</span></p><p style="margin:1.43em 0em 0.36em 4.29em;line-height:1.40845070422535;"><span style="color:rgba(255,255,255,1);">Aliquam </span></p><p style="margin:0.36em 0em 0.36em 4.29em;line-height:1.40845070422535;"><span style="color:rgba(255,255,255,1);">L</span><span style="color:rgba(255,255,255,1);">ibero nisi</span></p><p style="margin:0.36em 0em 0.36em 4.29em;line-height:1.40845070422535;"><span style="color:rgba(255,255,255,1);">I</span><span style="color:rgba(255,255,255,1);">perdiet at </span></p><p style="margin:0.36em 0em 0.36em 4.29em;line-height:1.40845070422535;"><span style="color:rgba(255,255,255,1);">T</span><span style="color:rgba(255,255,255,1);">incidunt </span></p><p style="margin:0.36em 0em 0.36em 4.29em;line-height:1.40845070422535;"><span style="color:rgba(255,255,255,1);">G</span><span style="color:rgba(255,255,255,1);">ravida </span></p><p style="margin:0.36em 0em 0.36em 4.29em;line-height:1.40845070422535;"><span style="color:rgba(255,255,255,1);">V</span><span style="color:rgba(255,255,255,1);">ehicula</span></p></div>
  <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
  </div>
  </div>
  <div class="clearfix visible-sm-block visible-md-block visible-xs-block">
  </div>
  <div class="post_column col-lg-3 col-md-6 col-sm-6 col-xs-12">
  <div class="ttr_footerHome_html_column02">
  <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
  <div class="html_content"><p style="margin:0.36em 0em 0.36em 4.29em;"><br style="font-family:'Arial';font-weight:700;font-size:1.286em;color:rgba(255,255,255,1);" /></p><p style="margin:0.36em 0em 0.36em 4.29em;"><br style="font-family:'Arial';font-weight:700;font-size:1.286em;color:rgba(255,255,255,1);" /></p><p style="margin:0.36em 0em 0.36em 4.29em;"><span style="font-family:'Arial';font-weight:700;font-size:1.286em;color:rgba(255,255,255,1);">EXTRAS</span></p><p style="margin:1.43em 0em 0.36em 4.29em;line-height:1.40845070422535;"><span style="color:rgba(255,255,255,1);">Aliquam </span></p><p style="margin:0.36em 0em 0.36em 4.29em;line-height:1.40845070422535;"><span style="color:rgba(255,255,255,1);">L</span><span style="color:rgba(255,255,255,1);">ibero nisi</span></p><p style="margin:0.36em 0em 0.36em 4.29em;line-height:1.40845070422535;"><span style="color:rgba(255,255,255,1);">I</span><span style="color:rgba(255,255,255,1);">perdiet at </span></p><p style="margin:0.36em 0em 0.36em 4.29em;line-height:1.40845070422535;"><span style="color:rgba(255,255,255,1);">T</span><span style="color:rgba(255,255,255,1);">incidunt </span></p><p style="margin:0.36em 0em 0.36em 4.29em;line-height:1.40845070422535;"><span style="color:rgba(255,255,255,1);">G</span><span style="color:rgba(255,255,255,1);">ravida </span></p><p style="margin:0.36em 0em 0.36em 4.29em;line-height:1.40845070422535;"><span style="color:rgba(255,255,255,1);">V</span><span style="color:rgba(255,255,255,1);">ehicula</span></p></div>
  <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
  </div>
  </div>
  <div class="clearfix visible-xs-block">
  </div>
  <div class="post_column col-lg-3 col-md-6 col-sm-6 col-xs-12">
  <div class="ttr_footerHome_html_column03">
  <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
  <div class="html_content"><p style="margin:0.36em 0em 0.36em 4.29em;"><br style="font-family:'Arial';font-weight:700;font-size:1.286em;color:rgba(255,255,255,1);" /></p><p style="margin:0.36em 0em 0.36em 4.29em;"><br style="font-family:'Arial';font-weight:700;font-size:1.286em;color:rgba(255,255,255,1);" /></p><p style="margin:0.36em 0em 0.36em 4.29em;"><span style="font-family:'Arial';font-weight:700;font-size:1.286em;color:rgba(255,255,255,1);">FOLLOW US</span></p><p style="margin:1.43em 0em 0.36em 4.29em;line-height:1.40845070422535;"><span style="color:rgba(255,255,255,1);">Facebook</span></p><p style="margin:0.36em 0em 0.36em 4.29em;line-height:1.40845070422535;"><span style="color:rgba(255,255,255,1);">Twitter</span></p><p style="margin:0.36em 0em 0.36em 4.29em;line-height:1.40845070422535;"><span style="color:rgba(255,255,255,1);">Linkedin</span><span style="color:rgba(255,255,255,1);"> </span></p><p style="margin:0.36em 0em 0.36em 4.29em;line-height:1.40845070422535;"><span style="color:rgba(255,255,255,1);">RSS</span><span style="color:rgba(255,255,255,1);"> </span></p></div>
  <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
  </div>
  </div>
  <div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block">
  </div>
  </div>
  <div class="ttr_footer_bottom_footer">
  <div class="ttr_footer_bottom_footer_inner">
  <div id="ttr_footer_designed_by_links">
  <a href="http://templatetoaster.com" target="_self" >
  Website
  </a>
  <span id="ttr_footer_designed_by">
  Designed With TemplateToaster
  </span>
  </div>
  </div>
  </div>
  </footer>
  <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-bottom-collapse: separate;"></div>
  <script type="text/javascript">
  WebFontConfig = {
  google: { families: [ 'Open+Sans','Open+Sans:700'] }
  };
  (function() {
  var wf = document.createElement('script');
  wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.0.31/webfont.js';
  wf.type = 'text/javascript';
  wf.async = 'true';
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(wf, s);
  })();
  </script>
  </body>
  </html>

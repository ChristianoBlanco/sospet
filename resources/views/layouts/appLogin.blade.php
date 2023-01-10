
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SOS.Pets</title>
<script src="//code.jquery.com/jquery-3.4.1.js"></script>
<script type="text/javascript" src="{{ asset('js/jquery.js')}}"></script>
<script src="{{ asset('js/plugin/jquery.inputmask.bundle.min.js')}}"></script>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet"  href="{{ asset('css/bootstrap.css')}}" type="text/css" media="screen"/>
<link rel="stylesheet"  href="{{ asset('css/style.css')}}" type="text/css" media="screen"/>
<link rel="stylesheet" href="{{ asset('css/unslider.css')}}"type="text/css" media="screen"/>
<link rel="stylesheet" href="{{ asset('css/navbarDrop.css')}}"type="text/css" media="screen"/>

</head>
<body class="Home">
<div class="totopshow">
<a href="#" class="back-to-top"><img alt="Back to Top" src="{{ asset('images/gototop0.png')}}"/></a>
</div>
<header id="ttr_header">
<div id="ttr_header_inner">
<div class="headerforeground01">
</div>
<div class="ttr_headershape01">
<div class="html_content"><p><span style="font-size:0.857em;color:rgba(243,243,243,1);"></span></p></div>
</div>
<div class="ttr_headershape02">
<div class="html_content"><p><span style="font-size:0.857em;color:rgba(243,243,243,1);">
   <a href="{{url()->previous()}}" style="font-size:15px;color:rgba(243,243,243,1);font-weight:bold" >Voltar</a>
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
<a href="#" target="_self">
<img  class="ttr_menu_logo" src="{{ asset('images/menulogo.png')}}" >
</a>
</div>
<div class="menu-center collapse navbar-collapse">

</div>
</div>
</div>
</nav>

        <main class="py-4">
          @hasSection ('body')
           @yield('body')
          @endif
        </main>


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


        $(document).ready(function(){

         $(".cpfcnpj").keydown(function(){
            try {
               $(".cpfcnpj").unmask();
            } catch (e) {}

            var tamanho = $(".cpfcnpj").val().length;

            if(tamanho <= 11){
               $(".cpfcnpj").inputmask("999.999.999-99");
            } else {
               $(".cpfcnpj").inputmask("99.999.999/9999-99");
            }
            });

         $('.cpf').inputmask('999.999.999-99');
         $('.cnpj').inputmask('99.999.999/9999-99');
         $('.titulo').inputmask('999999999/99');
         $('.cnh').inputmask('99999999999');
         $('.inscricao_estadual').inputmask('99.999.99-9');
         $('.nis').inputmask('999.99999.99-9');
         $('.cns').inputmask('999999999999999');
         $('.renavam').inputmask('99999999999');
         $('.certidao').inputmask('999999999999999999999999999999-99');
         $('.ddd').inputmask('999');
         $('.tel').inputmask('(99)99999-9999');


          });      






  </script>
       


        </body>
        </html>

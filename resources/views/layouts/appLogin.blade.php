
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<!-- <script src="//code.jquery.com/jquery-3.4.1.js"></script>

-->




<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
TemplateToaster.com
</title>



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet"  href="{{ asset('css/bootstrap.css')}}" type="text/css" media="screen"/>
<link rel="stylesheet"  href="{{ asset('css/style.css')}}" type="text/css" media="screen"/>
<link rel="stylesheet" href="{{ asset('css/unslider.css')}}"type="text/css" media="screen"/>
<link rel="stylesheet" href="{{ asset('css/navbarDrop.css')}}"type="text/css" media="screen"/>

<!--[if lte IE 8]>
<!--[if lte IE 8]>
<link rel="stylesheet"  href="menuie.css" type="text/css" media="screen"/>
<link rel="stylesheet"  href="vmenuie.css" type="text/css" media="screen"/>
<![endif]-->
<!-- <script type="text/javascript" src="{{ asset('js/totop.js')}}">
</script> -->
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
        </script>
        </body>
        </html>

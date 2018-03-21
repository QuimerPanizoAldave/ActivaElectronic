<!DOCTYPE html>
<html>
    <head>
        <title>Activa Electronic - @yield('title') @section('sidebar')</title>
    </head>

{!!Html::style('css/css/bootstrap.css')!!}

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
{!!Html::script('js/js/jquery.min.js')!!}

<!-- Custom Theme files -->
<!--theme-style-->
{!!Html::style('css/miestilo.css')!!}
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Mooroodool Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
{!!Html::style('http://fonts.googleapis.com/css?family=Vollkorn:400,700')!!}
{!!Html::style('http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900')!!}
<!--//fonts-->
<!-- Libraries CSS Files -->
 {!!Html::style('lib/font-awesome/css/font-awesome.min.css')!!}
  {!!Html::style('lib/animate/animate.min.css')!!}
   {!!Html::style('lib/ionicons/css/ionicons.min.css')!!}
    {!!Html::style('lib/owlcarousel/assets/owl.carousel.min.css')!!}
     {!!Html::style('lib/lightbox/css/lightbox.min.css')!!}
  <!--fin css-->
  {!!Html::script('js/js/move-top.js')!!}
  {!!Html::script('js/js/easing.js')!!}
                <script type="text/javascript">
                    jQuery(document).ready(function($) {
                        $(".scroll").click(function(event){     
                            event.preventDefault();
                            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                        });
                    });
                    </script>

{!!Html::script('js/js/menuslider.js')!!}
<!--llamado de web supra-->
  <!-- Font Awesome -->
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <link href="https://fonts.googleapis.com/css?family=Orbitron:400,500" rel="stylesheet"> 
  <!-- Google Web Fonts -->
{!!Html::style('http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700')!!}
{!!Html::style('http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400')!!}


  <!-- CSS Files -->
         {!!Html::style('font-awesome/css/font-awesome.min.css')!!}
         {!!Html::style('css/owl.carousel.css')!!}
         {!!Html::style('css/style.css')!!}
         {!!Html::style('css/responsive.css')!!}
         
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/style-icon.css" />
<link rel="shortcut icon" href="imagenes/icon.png" type="image/x-icon" />

  <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script>
  <![endif]-->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     {!!Html::style('css/slideshow.css')!!}
      {!!Html::style('css/carousel.css')!!}

  <!-- Fav and touch icons -->
    {!!Html::style('images/fav-144.png')!!}
    {!!Html::style('images/fav-72.png')!!}
{!!Html::style('images/fav-57.png')!!}
{!!Html::style('images/fav.png')!!}


  <link rel="apple-touch-icon-precomposed" href="images/fav-57.png">
  <link rel="shortcut icon" href="images/fav.png">

  {!!Html::style('./slick/slick.css')!!}
  {!!Html::style('./slick/slick-theme.css')!!}

    <style type="text/css">
    html, body {
      margin: 0;
      padding: 0;
    }

    * {
      box-sizing: border-box;
    }

    .slider {
        width: 100%;
        margin: 0px auto;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
        color: #fcf8e3;
    }
  </style>

</head>
<body >

    <!--header-->
    <div class="header">
        <div class="container">
        <!---->
                <div class="logo">
                <a href="{!!URL::to('/')!!}"><img src="imagenes/logo.png" alt="Logo" class="logo-menu"></a>
                </div>


                <div class="header-right">

            <div class="header-bottom">
                <div class="top-nav">
                    <span class="menu"> Menu </span>
                    <ul>
                        <li> <a href="{!!URL::to('/')!!}">INICIO</a> </li>
                        <li><a href="{!!URL::to('/nosotros')!!}" > NOSOTROS</a></li>
                        <li><a href="{!!URL::to('/productos')!!} " >  PRODUCTOS</a></li>
                        <li><a href="{!!URL::to('/contactenos')!!}">CONTACTENOS </a></li>
                    </ul>
                    <!--script-->
                <script>
                    $("span.menu").click(function(){
                        $(".top-nav ul").slideToggle(200, function(){
                        });
                    });
            </script>               
        </div>
        <div class="modallog">
<!-- Small modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-sm"> <i class="fa fa-user" aria-hidden="true"></i>
 Login </button>
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
       <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Iniciar Session</h4>
      </div>
      @include('alerts.errors')
      @include('alerts.request')
      <div class="modal-body">
      {!!Form::open(['route'=>'log.store','method'=>'POST'])!!}
            <div class="form-group">
            {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingrese su Correo','id'=>'exampleInputEmail1'])!!}
            </div>
            <div class="form-group">
              {!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingrese su contraseña','id'=>'exampleInputPassword1'])!!}
            </div>

            <div>
        
            </div>
            <div class="modal-footer">
            {!!Form::submit('Iniciar',['class'=>'btn btn-primary'])!!}
            {!!Form::submit('Cerrar',['class'=>'btn btn-danger'])!!}

            </div>
             {!!Form::close()!!}
      </div>

    </div>
  </div>
 </div>
</div>

        </div>

        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!---->


    </div>
    <!---->


   

</body>
</html>

@show
<div class="container">
  @yield('content')
</div>


    </body>


           <div class="footer">
                <div class="container">
                     <p class="footer-grid">Copyright &copy; 2018 Activa Electronic desarollado por <a href="http://suprasac.com/" target="_blank">Supra soluciones S.A.C</a> </p>
                    
                </div>  
                 <script type="text/javascript">
                        $(document).ready(function() {
                            /*
                            var defaults = {
                                containerID: 'toTop', // fading element id
                                containerHoverID: 'toTopHover', // fading element hover id
                                scrollSpeed: 1200,
                                easingType: 'linear' 
                            };
                            */
                            
                            $().UItoTop({ easingType: 'easeOutQuart' });
                            
                        });
                    </script>
                <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

            </div>
            <!-- JavaScript Libraries -->
            {!!Html::script('lib/jquery/jquery.min.js')!!}
            {!!Html::script('lib/jquery/jquery-migrate.min.js')!!}
            {!!Html::script('lib/bootstrap/js/bootstrap.bundle.min.js')!!}
            {!!Html::script('lib/easing/easing.min.js')!!}
            {!!Html::script('lib/superfish/hoverIntent.js')!!}
            {!!Html::script('lib/superfish/superfish.min.js')!!}
            {!!Html::script('lib/wow/wow.min.js')!!}
            {!!Html::script('lib/waypoints/waypoints.min.js')!!}
            {!!Html::script('lib/counterup/counterup.min.js')!!}
            {!!Html::script('lib/owlcarousel/owl.carousel.min.js')!!}
            {!!Html::script('lib/isotope/isotope.pkgd.min.js')!!}
            {!!Html::script('lib/lightbox/js/lightbox.min.js')!!}
            {!!Html::script('lib/touchSwipe/jquery.touchSwipe.min.js')!!}          
 <!-- Template Main Javascript File -->
  {!!Html::script('js/js/main.js')!!}       
<!-- JavaScript Files -->

  {!!Html::script('ad/jquery-1.11.1.min.js')!!}
{!!Html::script('ad/jquery-migrate-1.2.1.min.js')!!}

{!!Html::script('ad/bootstrap.min.js')!!}

{!!Html::script('ad/bootstrap-hover-dropdown.min.js')!!}
{!!Html::script('ad/jquery.magnific-popup.min.js')!!}

{!!Html::script('ad/owl.carousel.min.js')!!}
{!!Html::script('ad/custom.js')!!}

{!!Html::script('https://code.jquery.com/jquery-2.2.0.min.js')!!}
{!!Html::script('./slick/slick.js')!!}
{!!Html::script('js/ckeditor.js')!!}



  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".regular").slick({

        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 6
      });
      $(".center").slick({

        infinite: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".variable").slick({

        infinite: true,
        variableWidth: true
      });
    });
  </script>
  <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">

    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
<script type="text/javascript"><!--
$('#carousel0 ul').jcarousel({
  vertical: false,
  visible: 5,
  scroll: 3});
//--></script>




</body>
</html>

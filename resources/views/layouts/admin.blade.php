<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Activa Electronic | Panel administracion</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
      {!!Html::style('bootstrap/css/bootstrap.min.css')!!}
  <!-- Font Awesome -->
   {!!Html::style('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css')!!}
  <!-- Ionicons -->
   {!!Html::style('bootstrap/https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css')!!}
  <!-- Theme style -->
   {!!Html::style('dist/css/AdminLTE.min.css')!!}
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
        {!!Html::style('dist/css/skins/_all-skins.min.css')!!}
  <!-- iCheck -->
   {!!Html::style('plugins/iCheck/flat/blue.css')!!}
  <!-- Morris chart -->
   {!!Html::style('plugins/morris/morris.css')!!}
  <!-- jvectormap -->
   {!!Html::style('plugins/jvectormap/jquery-jvectormap-1.2.2.css')!!}
  <!-- Date Picker -->
   {!!Html::style('plugins/datepicker/datepicker3.css')!!}
  <!-- Daterange picker -->
   {!!Html::style('plugins/daterangepicker/daterangepicker.css')!!}
  <!-- bootstrap wysihtml5 - text editor -->
   {!!Html::style('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')!!}

{!!Html::style('plugins/chosen/chosen.min.css')!!}   

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{!!URL::to('/')!!}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Ap</b>hus</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Act</b>iva</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Menu accesible</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="imagenes/{!!Auth::user()->foto!!}" class="user-image" alt="User Image">
              <span class="hidden-xs">{!!Auth::user()->name!!}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="imagenes/{!!Auth::user()->foto!!}" class="img-circle" alt="User Image">

                <p>
                 {!!Auth::user()->name!!} </small>
                </p>
              </li>

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="/logout" class="btn btn-default btn-flat">Salir</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="imagenes/{!!Auth::user()->foto!!}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{!!Auth::user()->name!!}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Activo</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">NAVEGACIÓN PRINCIPAL</li>
        <li class="active treeview">
          <a href="{!!URL::to('/admin')!!}">
            <i class="fa fa-dashboard"></i> <span>Panel principal</span>
          </a>
        </li>

@if(Auth::user()->id==1)
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Usuarios</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">+</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!!URL::to('/usuario')!!}"><i class="fa fa-users"></i>Lista de Usuarios</a></li>
            <li><a href="{!!URL::to('/usuario/create')!!}"><i class="fa fa-user-plus"></i> Crear Nuevo Usuario</a></li>
          </ul>
        </li>
@endif
@if(Auth::user()->id==1)
        <li>
          <a href="#">
            <i class="fa fa-th"></i> <span>Categorias</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">+</small>
            </span>
          </a>
                    <ul class="treeview-menu">
            <li><a href="{!!URL::to('/categori')!!}"><i class="fa fa-sitemap"></i>Lista de Categorias</a></li>
            <li><a href="{!!URL::to('/categori/create')!!}"><i class="fa fa-plus"></i> Crear Nuevo Categoria</a></li>
          </ul>
        </li>
@endif
@if(Auth::user()->id==1)
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-barcode"></i>
            <span>Productos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!!URL::to('/product')!!}"><i class="fa  fa-pencil-square-o"></i> Lista de Productos</a></li>
            <li><a href="{!!URL::to('/product/create')!!}"><i class="fa fa-plus-square"></i> Nuevos Productos</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Opcional</a></li>
          </ul>
        </li>
@endif
@if(Auth::user()->id==1)
        <li class="treeview">
          <a href="#">
            <i class="fa fa-desktop"></i> <span>Control de Sliders</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!!URL::to('/slider')!!}"><i class="fa  fa-pencil-square-o"></i> Lista de sliders</a></li>
            <li><a href="{!!URL::to('/slider/create')!!}"><i class="fa fa-plus-square"></i> Nuevos sliders</a></li>
          </ul>
        </li>
@endif

        <li><a href=" "><i class="fa fa-book"></i> <span>Manual de uso</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

        
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Menu Principal
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Menu Principal</li>
      </ol>
    </section>

@yield('content')


  </div>



  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.1
    </div>
    <strong>Copyright &copy; 2018 <a href="http://almsaeedstudio.com">Supra soluciones sac</a>.</strong> Todos los derechos Reservados.
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
   {!!Html::script('js/jquery-2.2.3.min.js')!!}
<!-- jQuery UI 1.11.4 -->
{!!Html::script('https://code.jquery.com/ui/1.11.4/jquery-ui.min.js')!!}
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
{!!Html::script('bootstrap/js/bootstrap.min.js')!!}
<!-- Morris.js charts -->
{!!Html::script('https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js')!!}
{!!Html::script('plugins/morris/morris.min.js')!!}
<!-- Sparkline -->
{!!Html::script('plugins/sparkline/jquery.sparkline.min.js')!!}
<!-- jvectormap -->
{!!Html::script('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')!!}
{!!Html::script('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')!!}
<!-- jQuery Knob Chart -->
{!!Html::script('plugins/knob/jquery.knob.js')!!}
<!-- daterangepicker -->
{!!Html::script('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js')!!}
{!!Html::script('plugins/daterangepicker/daterangepicker.js')!!}
<!-- datepicker -->
{!!Html::script('plugins/datepicker/bootstrap-datepicker.js')!!}
<!-- Bootstrap WYSIHTML5 -->
{!!Html::script('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')!!}
<!-- Slimscroll -->
{!!Html::script('plugins/slimScroll/jquery.slimscroll.min.js')!!}
<!-- FastClick -->
{!!Html::script('plugins/fastclick/fastclick.js')!!}
<!-- AdminLTE App -->
{!!Html::script('dist/js/app.min.js')!!}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{!!Html::script('dist/js/pages/dashboard.js')!!}
<!-- AdminLTE for demo purposes -->
{!!Html::script('dist/js/demo.js')!!}

{!!Html::script('plugins/chosen/chosen.jquery.min.js')!!}

{!!Html::script('js/jquery.min.js')!!}
  {!!Html::script('js/metisMenu.min.js')!!}
 {!!Html::script('js/script.js')!!}

    @section('scripts')

    @show

<script type="text/javascript">
  $.noConflict();
  jQuery(document).ready(function($){
  });
</script>


</body>
</html>

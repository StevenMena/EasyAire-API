<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="SAC">
    <meta name="keywords" content="ServiciosAC,SERVICIOSAC">
    <meta name="author" content="StevOMena">
    <link href="" rel="shortcut icon">
  <title>Servicios Sato</title>
  <!-- Tell the browser to be responsive to screen width -->
  
  <!-- BOOTSTRAP CSS (REQUIRED ALL PAGE)-->
    {!! Html::style('css/bootstrap.min.css') !!}
    
    <!-- PLUGINS CSS -->
    {!!Html::style('plugins/datatables/jquery.dataTables.min.css')!!}
    {!! Html::style('plugins/iCheck/flat/blue.css') !!} 
    {!! Html::style('plugins/morris/morris.css') !!} 

    {!! Html::style('plugins/jvectormap/jquery-jvectormap-1.2.2.css') !!} 
    {!! Html::style('plugins/datepicker/datepicker3.css') !!} 

    {!! Html::style('plugins/daterangepicker/daterangepicker.css') !!} 
    {!! Html::style('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') !!} 

    {!! Html::style('plugins/datepicker/css/bootstrap-datepicker.min.css') !!} 
    {!! Html::style('plugins/timepicker/bootstrap-timepicker.min.css') !!} 
    {!! Html::style('plugins/validator/bootstrapValidator.min.css') !!} 
    {!! Html::style('plugins/summernote/summernote.min.css') !!} 
    {!! Html::style('plugins/summernote/summernote.min.css') !!} 
    {!! Html::style('plugins/markdown/bootstrap-markdown.min.css') !!} 
    {!! Html::style('plugins/datatable/css/bootstrap.datatable.min.css') !!} 
    {!! Html::style('plugins/morris-chart/morris.min.css') !!} 
    {!! Html::style('plugins/c3-chart/c3.min.css') !!} 
    {!! Html::style('plugins/slider/slider.min.css') !!}
    {!! Html::style('plugins/alertifyjs/css/alertify.min.css') !!} 
    {!! Html::style('plugins/alertifyjs/css/themes/default.min.css') !!} 

    <!-- MAIN CSS (REQUIRED ALL PAGE)-->
    {!! Html::style('plugins/font-awesome/css/font-awesome.min.css') !!} 
    {!! Html::style('css/AdminLTE.min.css') !!} 
    {!! Html::style('css/skins/_all-skins.min.css') !!} 
    
    @yield('css')
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    @include('layouts.top-navbar')

    @include('layouts.sidebar-left-menu')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       {{ $title }}
        <small>{{ $subtitle }}</small>
      </h1>
      @if (!empty($breadcrumb))
          <!-- Begin breadcrumb -->
          <ol class="breadcrumb default square rsaquo sm">
            <li><a href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
            @if(count($breadcrumb)>1)
              @for ($i = 0; $i < count($breadcrumb) ; $i++)
                @if(($i+1) == count($breadcrumb))
                  <li class="active">{{ $breadcrumb[$i]['nom'] }}</li>
                @else
                  <li><a href="{{ $breadcrumb[$i]['url'] }}">{{ $breadcrumb[$i]['nom'] }}</a></li>
                @endif
              @endfor
            @else
              <li class="active">{{ $breadcrumb[0]['nom']}}</li>          
            @endif
          </ol>
          <!-- End breadcrumb -->
        @endif  
    </section>
    <!-- Main content -->
    <section class="content">
      @yield('contenido')

    </section>
    </div>
 
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
  <footer class="main-footer">
  
    <strong>Copyright &copy; 2016 <a href="http://corporacionsato.com/" target="_blank">Easy-Aire</a>.</strong> All rights
    reserved.
  </footer>
<!-- MAIN JAVASRCIPT (REQUIRED ALL PAGE)-->
    {!! Html::script('plugins/jQuery/jquery-2.2.3.min.js') !!}
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    {!! Html::script('js/bootstrap.min.js') !!}
    {!! Html::script('plugins/morris/morris.min.js') !!}
    {!! Html::script('plugins/sparkline/jquery.sparkline.min.js') !!}
    {!! Html::script('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}
    {!! Html::script('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}
    {!! Html::script('plugins/knob/jquery.knob.js"')!!}
    {!! Html::script('plugins/knob/jquery.knob.js')!!}
    {!! Html::script('plugins/knob/jquery.keywordsnob.js')!!}
    {!! Html::script('plugins/daterangepicker/daterangepicker.js')!!}
    {!! Html::script('plugins/datepicker/bootstrap-datepicker.js')!!}
    {!! Html::script('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')!!}
    {!! Html::script('plugins/slimScroll/jquery.slimscroll.min.js')!!}
    {!! Html::script('plugins/fastclick/fastclick.js')!!}
    {!! Html::script('js/dist/app.min.js')!!}
    {!! Html::script('js/dist/pages/dashboard.js')!!}
    {!! Html::script('js/dist/js/demo.js')!!}

      <!-- Morris.js charts -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    @yield('js')
      </body>
</html>

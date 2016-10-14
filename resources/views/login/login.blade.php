<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="SAC">
  <meta name="keywords" content="ServiciosAC,SERVICIOSAC">
  <meta name="author" content="StevOMena">
  <link href="" rel="shortcut icon">
  <title>Servicios Sato</title>

  <!-- BOOTSTRAP CSS (REQUIRED ALL PAGE)-->
    {!! Html::style('css/bootstrap.min.css') !!} 

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
 
    {!! Html::style('css/AdminLTE.min.css') !!} 


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>EASY AIRE </a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Ingrese sus datos de sesion </p>

    <form action="{{route('loginpost')}}" method="post">
      <div class="form-group has-feedback">
        <input type="nombre" name="nombre" class="form-control" placeholder="nombre">
        
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
      </div>
      {!!Captcha::img()!!}

        <div align="center">
          <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
          <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar sesion</button>
        </div>
    
    </form>


  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
{!! Html::script('plugins/jQuery/jquery-2.2.3.min.js') !!}

<!-- Bootstrap 3.3.6 -->
{!! Html::script('js/bootstrap.min.js') !!}



</body>
</html>

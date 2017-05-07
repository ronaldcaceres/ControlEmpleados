<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trabaja en Puertos</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome/css/font-awesome.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('css/ionicons/css/ionicons.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE/AdminLTE.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE/skins/_all-skins.css')}}">

    @yield('cabecera')

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-purple layout-top-nav">
<div class="wrapper">
    <header class="main-header">
        <nav class="navbar navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a href="{{url('/')}}" class="navbar-brand"><b>Trabaja en </b>Puertos</a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <!--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li> -->
                    </ul>
                </div><!-- /.navbar-collapse -->
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account Menu -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Ingrear Usuario</a></li>
                        @else
                            <li> <a href="#">Perfil: <span>{{Auth::user()->perfil->nombre}} </span></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <span class="fa fa-user"> </span> {{ Auth::user()->name }} {{ Auth::user()->apellido }}
                                     <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Desconectar <span class="fa fa-sign-out"></span>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div><!-- /.navbar-custom-menu -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>
    <!-- Full Width Column -->
    <div class="content-wrapper">
        @yield('contenido')
    </div><!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="container">
            <div class="pull-right hidden-xs">
                <b>Version</b> 0.1
            </div>
            <strong>Copyright &copy; 2017</strong> Todos los derechos reservados.
        </div><!-- /.container -->
    </footer>
</div><!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src="{{asset('/js/jquery/jquery-3.2.0.js')}}"></script>
<!-- Bootstrap 3.3.5 -->
<script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('js/jquery/jquery.slimscroll.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('js/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('js/app.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('js/demo.js')}}"></script>

@yield('script')

</body>
</html>

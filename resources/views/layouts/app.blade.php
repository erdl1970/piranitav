<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>@yield('title', config('app.name'))</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>

    <!-- CSS Files -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/material-kit.css')}}" rel="stylesheet"/>

    @yield('styles')

</head>


<body class="@yield('body-class')"> <!--DEFINIENDO UNA SECCION -->
<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
    </div>

    {{--   <div class="img-circle img-responsive img-raised">
           <ul>
               <li class="li">
                   <a class="navbar-brand" href="{{url('/')}}"><h4> Home</h4></a>
               </li>
               <li class="li">
                   <a class="navbar-brand" href="{{url('/')}}"><img class="tamaño" src="{{'/img/logopirana.png'}}"></a>
               </li>

           </ul>
       </div>--}}


    {{-- <div>
         <div class="t.col-xs-6 .col-md-4 ">

             <a class="navbar-brand" href="{{url('/')}}"><h4>Home</h4></a>
         </div>
         <div class=".col-xs-6 .col-md-4">
             <a class="navbar-brand" href="{{url('/')}}"><h4></h4></a>
         </div>
         <div>
             <a class="navbar-brand text-center" href="{{url('/')}}"><img class="tamaño"
                                                                          src="{{'/img/logopirana.png'}}"></a>

         </div>

     </div>--}}
<div >
    <div>
        <div class="col-md-4">
            <a class="navbar-brand text-center" href="{{url('/')}}"><h4>Home</h4></a>
        </div>
        <div class="col-md-3">

        </div>
        <div class="col-md-4 float"  >
            <a  class="navbar-brand "  href="{{url('/')}}"><img class="tamaño" src="{{'/img/logopirana.png'}}"></a>
        </div>

    </div>
</div>



    <div>

        <div class="collapse navbar-collapse" id="navigation-example">
            <ul class="nav navbar-nav navbar-right">
                @guest

                    <li><a href="{{ route('login') }}">Ingresar</a></li>
                    <li><a href="{{ route('register') }}">Registro</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false"
                           aria-haspopup="true" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{url('/home')}}">Panel de compras</a>
                            </li>
                            @if (auth()->user()->admin)
                                <li>
                                    <a href="{{url('/admin/categories')}}">Gestionar categorías</a>
                                </li>
                                <li>
                                    <a href="{{url('/admin/products')}}">Gestionar productos</a>
                                </li>
                            @endif
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Cerrar sesión
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
                {{--<li>--}}
                {{--<a href="https://twitter.com/CreativeTim" target="_blank"--}}
                {{--class="btn btn-simple btn-white btn-just-icon">--}}
                {{--<i class="fa fa-twitter"></i>--}}
                {{--</a>--}}
                {{--</li>--}}
                <li>
                    <a href="https://www.facebook.com/piranitacuarioperu/" target="_blank"
                       class="btn btn-simple btn-white btn-just-icon">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/piranita_acuario_peru/?utm_source=ig_profile_share&igshid=kziexx4h5juu&fbclid=IwAR3tm1tlDWeCSrny8WftYncuSftTDgy5EcNLXv_gby_oNd9TkxFeydo3oQk"
                       target="_blank"
                       class="btn btn-simple btn-white btn-just-icon">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    </div>
</nav>


<div class="wrapper">


    @yield('content')

</div>


</body>
<!--   Core JS Files   -->
<script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/material.min.js')}}"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{asset('js/nouislider.min.js')}}" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="/public/js/bootstrap-datepicker.js" type="text/javascript"></script>
// "../asset/img/favicon.png"

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="{{asset('js/material-kit.js')}}" type="text/javascript"></script>

<SCRIPT>
    $('#personal').on('hidden', function () {
        $(this).find('form')[0].reset();
        $("label.error").remove();
    });
</SCRIPT>

@yield('scripts')
</html>




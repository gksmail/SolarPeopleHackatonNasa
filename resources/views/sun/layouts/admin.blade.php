<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Friendly Sun, Team "SolarPeople", Nasa Space Apps Challenge 2017</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
<!--
        <nav class="navbar navbar-default navbar-static-top" style="background-color:DeepSkyBlue; color:yellow;">
-->
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                       Friendly Sun
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
<!--
                    <ul class="nav navbar-nav" >
                        <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              О компании<span class="caret"></span>
                           </a>
                           <ul class="dropdown-menu" role="menu">
                              <li class="nav nav-second-level">
                                     <a href="/note/activity" >Деятельность компании</a>
                              </li>
                              <li class="nav nav-second-level">
                                     <a href="/note/contacts" >Контакты</a>
                              </li>
                            </ul>
                        <li/>
                        &nbsp;
                        <li class="nav navbar-nav">
                           <a href="/search" role="button" aria-expanded="false">
                              Поиск
                           </a>
                        </li>
                        &nbsp;


                    </ul>
-->
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Войти</a></li>
                            <li><a href="{{ url('/register') }}">Регистрация</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Выход
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <center>
        <div class="container">
           <div class="row row-backbordered">
               <div class="panel panel-default panel-floating panel-floating-inline">
<!--               
                  <div class="panel-body" style="background-color:blue; color:white;">

                     <div class="col-lg-2">
                         <a href="{{ url('/') }}">
                           <img src="/sun/img/label.jpg" height="100px" class="img-circle"/>
                         </a>
                     </div>
                     <div class="col-lg-7">
                        <div style="font-weight: 600;font-size: 50pt;">

                        Friendly Sun, 2017
                        </div>
                     </div>

                   </div>
-->
               </div>
             </center>
          </div>
        </div>

      </div>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <div class="container">
           <div class="row">
      <div class="panel panel-default panel-floating panel-floating-inline"  style="background-color:blue; color:white;">
         <div class="panel-body">
              <div class="col-lg-6">
                 <div class="text-left">
                   <h3><b>Friendly Sun</b></h3>
                 </div>
              </div>
              <div class="col-lg-6">
                 <div class="text-right">
                   Team "SolarPeople", Nasa Space Apps Challenge 2017, Москва. 
                 </div>
              </div>
           </div>
         </div>
      </div>
    </div>
</body>
</html>

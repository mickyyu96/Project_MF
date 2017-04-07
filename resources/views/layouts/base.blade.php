<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
        <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="/js/app.js"></script>

</head> 

<div id="wrapper" class="toggled">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="{{ url('/') }}">
                    Mooda Fitness
                </a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                @if(session('state') == 'login')
                    <form method="POST" id="logoutForm" action="{{ url('/logout') }}">
                    {{ csrf_field() }}
                       <!-- <span class="glyphicon glyphicon-log-"></span><button type="submit" style="background:transparent;border;border:none;padding-top: 5px;">Logout</button> -->
                   </form>
                   <div onclick="javascript:document.getElementById('logoutForm').submit();"><span class="glyphicon glyphicon-log-in"></span>Logout</div>
                @else
                    <li><a href="{{ url('/login') }}"> <span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                @endif
            </ul>
        </div>
     </nav>    
    <div id="sidebar-wrapper" >
        <ul class="sidebar-nav">
            <li>
                <a href="{{ url('/profile') }}">Profile</a>
            </li>
            <li>
                <a href="{{ url('/customer') }}">Customer</a>
            </li>
            <li>
                <a href="{{ url('/media') }}">Media</a>
            </li>
            <li>
                <a href="{{ url('/messages') }}">Messages</a>
            </li>
           
      </ul>
    </div>
    <div id="page-content-wrapper">
    @yield('content')    
    </div>
</div>



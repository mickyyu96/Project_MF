@section('header')
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
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

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        @if(session('state') == 'login')
                            <form method="POST" action="{{ url('/logout') }}">
                            {{ csrf_field() }}
                               <button type="submit">Logout</button>
                            </form>
                            <a href="{{ url('/profile') }}">Profile</a>
                            <a href="{{ url('/customer') }}">Customer</a>
                            <a href="{{ url('/media') }}">Media</a>
                            <a href="{{ url('/messages') }}">Messages</a>
                        @else
                            <li><a href="{{ url('/login') }}">Login</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
   
    </div>
    <script src="/js/app.js"></script>
</body>
</html>
@endsection
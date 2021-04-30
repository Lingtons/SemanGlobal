<header class="header-section">

    <a href="{{url('/')}}" class="site-logo">
        <img src="{{asset('img/logo.png')}}" alt="">
    </a>
    <div class="nav-switch">
        <i class="fa fa-bars"></i>
    </div>
    <div class="container">
        <ul class="main-menu">
            <li><a href="{{url('/')}}">Home</a></li>
            @auth

                @if(auth()->user()->hasRole(['superadministrator','administrator']))
                    <li><a href="{{route('manage.sites.index')}}">Sites</a></li>
                    <li><a href="{{route('manage.users.index')}}">Users</a></li>
                @endif
                <li><a href="{{route('logout')}}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out mr-2"></i>Sign Out</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @else
            <li><a href="{{route('login')}}"><i class="fa fa-sign-in mr-2"></i>Sign In</a></li>
                @if(Route::has('register'))
                    <li><a href="{{route('register')}}"><i class="fa fa-sign-in mr-2"></i>Register</a></li>
                    @endif
            @endauth
        </ul>
    </div>
</header>

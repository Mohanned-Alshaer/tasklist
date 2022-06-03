<!doctype html>
<html lang="{{str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{csrf_token() }}">

    <title>{{config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('dist/font-awesome/css/font-awesome.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/adminlte/css/adminlte.min.css')}}">
    <!-- Styles -->
    <link href="{{asset('css/app.css') }}" rel="stylesheet">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('dist/adminlte/css/adminlte.min.css')}}">
</head>
<style>
    .ahover:active,
    .ahover:hover{
        /* background-color: rgb(251, 138, 138); */
        background-color: beige;
        border-radius: 10px;
        transition: 0.9s;
    }
    /* body {
        background-color: rgb(238, 238, 236);
    } */
</style>
<body>
    <div id="app" >
         {{-- header --}}
        <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
            <div class="container">
                {{-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> --}}
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                        <!-- Messages Dropdown Menu -->
                        <li class="nav-item dropdown message">
                            <a class="nav-link" data-toggle="dropdown" href="#">
                                <i class="fa fa-comments-o "></i>
                                @foreach ($contact as $item)
                                @csrf
                                <span class="badge badge-danger navbar-badge">{{$item->id}}</span>
                                @endforeach
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right"  style="background-color: #fff; border-radius: 20px; border: 1px solid black">
                                @foreach ($contact as $item)
                                @csrf
                                <a href="/pages/messages/{{$item->id}}" class="dropdown-item ahover">
                                    <!-- Message Start -->
                                    <div class="media">
                                        {{-- <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 ml-3 img-circle"> --}}
                                        <div class="media-body">
                                            <h3 class="dropdown-item-title">{{$item->Name}}</h3>
                                            {{-- <span class="float-left text-sm text-danger"><i class="fa fa-star"></i></span> --}}
                                            <p class="text-sm">{{$item->Email}}</p>
                                            <p class="text-sm">{{$item->Message}}</p>
                                            <p class="text-sm text-muted" style="border-bottom: 1px solid black">
                                            <i class="fa fa-clock-o mr-1"></i> {{$item->created_at}}
                                            </p>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- Message End -->
                                </a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                        <!-- Notifications Dropdown Menu -->
                        @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('login')}}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('register')}}">{{ __('Register') }}</a>
                            </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{Auth::user()->name}}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    <div class="wrapper">
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Dashboard</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <div>
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="{{asset('img/main.jpg')}}" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block"> {{Auth::user()->name}}</a> 
                        </div>
                    </div>
                                {{-- ----                                                                                     --- --}}
                    <!-- Sidebar Menu-->
                    <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <li class="nav-item has-treeview menu-open">
                                <ul class="nav nav-treeview">
                                    {{-- <li class="nav-item has-treeview menu-open">
                                        <a href="/" class="nav-link active">
                                            <i class="nav-icon fa fa-dashboard"></i>
                                            <p>
                                                All Mobiles
                                                <i class="right fa fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            @foreach($catagories as $catag)
                                            <li class="nav-item">
                                                <a href="/layout/catagory/{{$catag->id}}" class="nav-link active">
                                                    <i class="fa fa-circle-o nav-icon"></i>
                                                    <p>{{$catag->Catagory}}</p>
                                                </a>
                                            </li>
                                            @endforeach
                                            <li class="nav-item">
                                                <a href="/" class="nav-link">
                                                    <i class="fa fa-circle-o nav-icon"></i>
                                                    <p>All Mobiles</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="/pages/addCatagory" class="nav-link">
                                                    <i class="fa fa-circle-o nav-icon"></i>
                                                    <p>Add New Catagory</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li> --}}
                                    <li class="nav-item has-treeview menu-open">
                                        <a href="/" class="nav-link active">
                                            <i class="nav-icon fa fa-dashboard"></i>
                                            <p>
                                                Mobiles
                                                <i class="right fa fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="/" class="nav-link">
                                                    <i class="fa fa-circle-o nav-icon"></i>
                                                    <p>All Mobiles</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="/pages/add" class="nav-link">
                                                    <i class="fa fa-circle-o nav-icon"></i>
                                                    <p>Add New Mobile</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item has-treeview menu-open">
                                        <a href="/pages/allCatagories" class="nav-link active">
                                            <i class="nav-icon fa fa-dashboard"></i>
                                            <p>
                                                Catagories
                                                <i class="right fa fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="/pages/allCatagories" class="nav-link">
                                                    <i class="fa fa-circle-o nav-icon"></i>
                                                    <p>All Catagories</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="/pages/addCatagory" class="nav-link">
                                                    <i class="fa fa-circle-o nav-icon"></i>
                                                    <p>Add New Catagory</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href = "{{route('socials')}}" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>Address & Socials</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href = "{{route('mobileIndex')}}" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>Mobile Shop</p>
                                        </a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a href="resturant/index" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>Go to All Products</p>
                                        </a>
                                    </li> --}}
                                </ul>
                            </li>
                            {{-- <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-th"></i>
                                    <p>
                                        رابط بسيط
                                        <span class="right badge badge-danger">جدید</span>
                                    </p>
                                </a>
                            </li> --}}
                        </ul> 
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
            </div>
            <!-- /.sidebar -->
        </aside>
    </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>


{{-- <li class="nav-item">
<a href="{{route('catagory2')}}" class="nav-link">
<i class="fa fa-circle-o nav-icon"></i>
<p>Samsung</p>
</a>
</li>
<li class="nav-item">
<a href="{{route('catagory3')}}" class="nav-link">
<i class="fa fa-circle-o nav-icon"></i>
<p>Redmi</p>
</a>
</li> --}}
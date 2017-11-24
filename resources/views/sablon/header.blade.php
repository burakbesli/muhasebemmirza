
<body>
<div class="container-fluid" id="wrapper">
    <div class="row">
        <nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2 bg-faded sidebar-style-1">
            <h1 class="site-title"><a href="yoneticipaneli"><em class="fa fa-rocket"></em> MuhasebeMİRZA</a></h1>

            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>

            <ul class="nav nav-pills flex-column sidebar-nav">
                <li class="nav-item"><a class="nav-link {{ Request::path() == 'home' ? 'active' : '' }}" href="{{route('yoneticipaneli')}}"><em class="fa fa-dashboard"></em> YÖNETİCİ PANELİ <span class="sr-only">(current)</span></a></li>
                <li class="nav-item"><a class="nav-link {{ Request::path() == 'gelir' || Request::path() == 'gelir/create' ? 'active' : '' }}" href="{{route('gelir.index')}}"><em class="fa fa-thumbs-up"></em> GELİR İŞLEMLERİ</a></li>
                <li class="nav-item"><a class="nav-link {{ Request::path() == 'gider' || Request::path() == 'gider/create' ? 'active' : '' }}" href="{{route('gider.index')}}"><em class="fa fa-thumbs-down"></em> GİDER İŞLEMLERİ</a></li>
                <li class="nav-item"><a class="nav-link {{ Request::path() == 'raporlar' ? 'active' : '' }}" href="{{route('raporlar.index')}}"><em class="fa fa-area-chart"></em> RAPORLAR</a></li>
            </ul>

            <a class="logout-button" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <em class="fa fa-power-off"></em> Çıkış Yap
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>

        </nav>
        <main class="col-xs-12 col-sm-8 offset-sm-4 col-lg-9 offset-lg-3 col-xl-10 offset-xl-2 pt-3 pl-4">
            <header class="page-header row justify-center">
                <div class="col-md-6 col-lg-8" >
                    <h1 class="float-left text-center text-md-left">Gelir - Gider Muhasebe Sistemi</h1>
                </div>

                <div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right"><a class="btn btn-stripped dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="//{{@$_SERVER['HTTP_HOST']}}/asset/images/profile-pic.jpg" alt="profile photo" class="circle float-left profile-photo" width="50" height="auto">

                        <div class="username mt-1">
                            <h4 class="mb-1">{{Auth::user()->name}}</h4>

                            <h6 class="text-muted">{{Auth::user()->email}}</h6>
                        </div>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;" aria-labelledby="dropdownMenuLink">

                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <em class="fa fa-power-off mr-1"></em> ÇIKIŞ YAP
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>

                    </div>
                </div>

                <div class="clear"></div>
            </header>

<body>
<!--/main-header-->
<!--/banner-section-->
<div id="demo-1" data-zs-src='["{{asset("images/2.jpg")}}", "{{asset("images/1.jpg")}}", "{{asset("images/3.jpg")}}","{{asset("images/m7.jpg")}}"]' data-zs-overlay="dots">
    <div class="demo-inner-content">
        <!--/header-w3l-->
        <div class="header-w3-agileits" id="home">
            <div class="inner-header-agile">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1 class="naslov22">Movies Pro</h1>
                    </div>
                    <!-- navbar-header -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <!--<li class="active"><a href="{{route("movies")}}">Home</a></li>-->
                                @if(session()->has('korisnik'))
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="modal">Genre <b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <li>
                                        <div class="col-sm-3">
                                            <ul class="multi-column-dropdown">

                                                @foreach($genres as $g)
                                                    <li><a class="link1" href="{{ route("movies-category", ["id" => $g->idZanr]) }}">{{ $g->nazivZ }}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>


                                        <div class="clearfix"></div>
                                    </li>

                                </ul>
                            </li>
                                @endif


                                @if(!session()->has('korisnik'))
                                <li class="nav-item"><a href="{{$menus[3]->putanja}}" class="nav-link">{{$menus[3]->imeLinka }}</a>
                                    <li class="nav-item"><a href="{{$menus[4]->putanja}}" class="nav-link">{{$menus[4]->imeLinka }}</a>

                                  @endif

                                @if(session()->has('korisnik'))
                                @foreach($menus as $menu)

                                    @if($menu->roditelj == 0)
                                        <li><a href="{{$menu->putanja}}">{{ $menu->imeLinka }}</a>
                                    @endif



                                        @endforeach
                                @endif


                                @if(!session()->has('korisnik'))
                                    <li><a href="{{route("login-form")}}">Login</a>

                                @else
                                    <li><a href="{{url("/logout")}}">Logout</a>
                                @endif

                                @if(session()->has('korisnik') && session()->get('korisnik')->naziv =="admin")
                                    <li><a href="{{url("/admin")}}">Admin</a>

                                    @endif



                        </ul>

                    </div>
                    <div class="clearfix"> </div>
                </nav>


            </div>

        </div>
        <!--//header-w3l-->
        <!--/banner-info-->
        <div class="baner-info">
            <h3><span>On</span>Line <span>Mo</span>vies</h3>
            <h4></h4>
        </div>
        <!--/banner-ingo-->
    </div>
</div>
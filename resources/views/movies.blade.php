@extends("layout")
@if(session()->has('korisnik'))
@section("content")
    <div class="row">


{{--dd($movies)--}}
         <h2 class="pomerix">Movies</h2>

    @foreach($movies as $m)

            <div class="w3l-movie-gride-agile">
                <a href="{{ route("single-movie", ["id" => $m->idFilm]) }}" class="hvr-sweep-to-bottom"><img src="{{asset("images/".$m->slika)}}" width="200px" height="250px" title="Movies Pro" class="img-responsive" alt=" ">

                </a>
                <div class="mid-1 agileits_w3layouts_mid_1_home">
                    <div class="w3l-movie-text">
                        <h5>Movie: <a href="{{ route("single-movie", ["id" => $m->idFilm]) }}">{{$m->naziv}}</a></h5>
                    </div>

                        <div class="mid-2 agile_mid_2_home">
                        <h5> IMDB Rating:  <i class="fa fa-star" aria-hidden="true"></i>{{$m->ocena}} /10</h5>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div><br>

    @endforeach

    </div><br>
    {{$movies->links()}}
    <br><br>
@endsection
@endif


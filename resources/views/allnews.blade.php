@extends("layout")
@if(session()->has('korisnik'))
@section("content")

    <div class="w3_content_agilleinfo_inner">
        <div class="agile_featured_movies">
            <div class="inner-agile-w3l-part-head">
                <h3 class="w3l-inner-h-title">All News</h3>
            </div>
            <div class="latest-news-agile-info">
                <div class="col-md-12 latest-news-agile-left-content">
                    @foreach($news as $n)
                    <div class="w3-agileits-news-one">
                        <div class="wthree-news-img">
                            <a href="{{route("single-news",["id" => $n->idVest])}}"><img src="{{asset("images/".$n->slikaVest)}}" alt="News"></a>
                        </div>
                        <div class="wthree-news-info">
                            <h5><a href="{{route("single-news",["id" => $n->idVest])}}">{{$n->naslovVest}}</a></h5>
                            <div class="agile-post">
                                <p>By: Admin on	{{$n->datum}} </p>
                            </div>
                            <a class="new-more" href="{{route("single-news",["id" => $n->idVest])}}">Read More</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div><br><br>

                    @endforeach



                </div>

                <div class="clearfix"></div>
            </div>
            {{$news->links()}}
            <br><br>

        </div>
    </div>


@endsection
@endif
@if(session()->has('korisnik'))
@section("content")

    <div class="col-md-12">
        <img width="200px" height="100px" src="{{asset("images/".$movie->slika)}}" title="Movies Pro" class="img-responsive" alt=" ">

        <div class="mid-1 agileits_w3layouts_mid_1_home">
            <div class="w3l-movie-text">
                <h4>Movie Name: {{$movie->naziv}}</h4><br>
                <h4>Genre: {{$movie->nazivZ}}</h4><br>
                <h4>Description: {{$movie->opis}}</h4><br>
                <h4>Posted: {{$movie->datumKreiranja}}</h4><br>
            </div>
            <div class="video-grid">
               <h4>Trailer:</h4><br>
                <iframe width="600px" height="400px" src="{{ $movie->trailer }}" allowfullscreen></iframe>
            </div>

            <div class="w3l-movie-text">
                <h4>Length: {{$movie->trajanjeMin}} minutes</h4><br>
                <h4>Stars: {{$movie->glavneUloge}}</h4><br>
                <h4>IMDB Rating:  <i class="fa fa-star" aria-hidden="true"></i>{{$movie->ocena}} /10</h4><br>
            </div>

        </div>

    </div>

<a id="joja" href="{{route("back")}}" class="btn btn-info btn-lg">
    <span class="glyphicon glyphicon-arrow-left"></span> Back
</a>
@endsection
@endif
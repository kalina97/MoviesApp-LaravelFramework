@extends("layout")
<div class="recommended-info">
    <div class="heading">
        <h3>All Movies</h3>
    </div>

    <div class="clearfix"> </div>
</div>
<div class="col-md-3 resent-grid recommended-grid movie-video-grid">
    <div class="resent-grid-img recommended-grid-img">
        <a href="single.html"><img src="{{asset("images/" . $movie->slika) }}" alt="{{ $movie->naziv }}" /></a>
        <div class="time small-time show-time movie-time">
            <p>{{$movie->trajanjeMin }}</p>
        </div>
        <div class="clck movie-clock">
            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
        </div>
    </div>
    <div class="resent-grid-info recommended-grid-info recommended-grid-movie-info">
        <h5><a href="{{route("single-movie", ["id" => $movie->idFilm]) }}" class="title">{{ $movie->naziv }}</a></h5>
        <ul>
            <li>
                <p class="author author-info"><a href="#" class="author">{{$movie->ime . " " . $movie->prezime }} </a></p>
            </li>
        </ul>
    </div>
</div>
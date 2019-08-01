@extends("layout")


@section("content")
    @component("components.single-movie", [
        "movie" => $movie
    ])
    @endcomponent
@endsection
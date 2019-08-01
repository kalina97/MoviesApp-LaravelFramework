@extends("layout")


@section("content")
    @component("components.single-news", [
        "new" => $new,
        "comments"=>$comments
    ])
    @endcomponent
@endsection
@extends("layout")
@if(session()->has('korisnik'))
@section("content")

<div id="formular">
        <form method="get" class="navbar-form" role="search">
            {{csrf_field()}}
        <div class="input-group add-on">
            <input class="form-control" placeholder="Search by name" name="search" id="search" type="text">
            <div class="input-group-btn">
                <button class="btn btn-default" id="dugmesa" type="button"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
    </form>
</div>


    <div class="w3_content_agilleinfo_inner">
        <div class="agile_featured_movies">
            <div class="inner-agile-w3l-part-head">
                <h3 class="w3l-inner-h-title">Movie List</h3>

            </div>
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">

                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                        <div class="agile-news-table">
                            <table id="table-breakpoint">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Movie Name</th>
                                    <th>Picture</th>
                                    <th>Length</th>
                                    <th>Genre</th>
                                    <th>Stars</th>
                                    <th>Rating</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($movies as $m)
                                <tr>
                                    <td>{{$m->idFilm}}</td>
                                    <td>{{$m->naziv}}</td>
                                    <td class="w3-list-img"><img width="170px" height="170px" src="{{asset("images/".$m->slika)}}" alt="Movies" /> </td>
                                    <td>{{$m->trajanjeMin}} Minutes</td>
                                    <td>{{$m->nazivZ}}</td>
                                    <td>{{$m->glavneUloge}}</td>
                                    <td><i class="fa fa-star"></i>{{$m->ocena}}</td>
                                </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <nav class="paginationContainer">

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{--$movies->links()--}}
    <br><br>
@endsection
@endif
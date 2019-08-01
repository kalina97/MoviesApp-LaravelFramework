@extends("admin.admin")

@section("adminContent")
    <div id="mka" class="row">
        <h3 class="pomerix">Movie Genres</h3><br>
        <br>


        <div class="col-md-12">
            <table id="table-breakpoint">
                <thead>
                <tr>
                    <th scope="col">Genre Id</th>
                    <th scope="col">Genre Name</th>
                </tr>
                </thead>
                <tbody>
                @foreach($admingenres as $u)
                    <tr>
                        <td scope="row">{{$u->idZanr}}</td>
                        <td>{{$u->nazivZ}}</td>
                        <td><a href="{{route("genres.edit",['id'=>$u->idZanr])}}"><span class="glyphicon glyphicon-edit"></span></a></td>
                        <td><button class="gnrBrisi" data-id="{{$u->idZanr}}"><span class="glyphicon glyphicon-remove"></span></button></td>
                    </tr>

                @endforeach
                </tbody>
            </table>
            <br><br>
        </div>
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
    </div>


    <div class="container" id="loginf1">
        <div class="row">
            <div class="col-md-6">
                <h2 id="naslov1" class="mb-5">Add Genre</h2>
                <br><br>
                <form method="post" action="{{route("genres.store")}}">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Genre Name</label>
                                <input type="text" name="genreName" id="genreName" class="form-control" placeholder="First Letter UpperCase">
                            </div>
                            <p id="eror19"></p>
                        </div>


                        <div class="col-md-12 mt-3">
                            <div class="form-group">
                                <button type="submit"  id="butonGenre" value="Make a Reservation" class="btn btn-primary">Add</button>
                            </div>
                        </div>
                    </div>
                </form>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>

    </div>







    <!-- END section -->

@endsection
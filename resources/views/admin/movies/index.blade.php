@extends("admin.admin")

@section("adminContent")

    <div id="mka" class="row">
        <h3 class="pomerix">Movies Management</h3>
        <div class="col-md-12">
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <br>
            <table id="table-breakpoint">
                <thead>
                <tr>
                    <th scope="col">Movie Id</th>
                    <th scope="col">Movie Name</th>
                    <th scope="col">Movie Picture</th>
                    <th scope="col">Movie Length</th>
                    <th scope="col">Movie Stars</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Movie Rating</th>

                </tr>
                </thead>
                <tbody>
                @foreach($adminmovies as $am)
                    <tr>
                        <td scope="row">{{$am->idFilm}}</td>
                        <td>{{$am->naziv}}</td>
                        <td><img width="100px" height="100px" src="{{asset("images/".$am->slika)}}"/></td>
                        <td>{{$am->trajanjeMin}} minutes</td>
                        <td>{{$am->glavneUloge}}</td>
                        <td>{{$am->nazivZ}}</td>
                        <td>{{$am->ocena}}</td>
                        <td><button class="filmBrisi" data-id="{{$am->idFilm}}"><span class="glyphicon glyphicon-remove"></span></button></td>
                    </tr>

                @endforeach
                </tbody>
            </table>

            {{$adminmovies->links()}}

        </div>
    </div>


    <div class="container" id="loginf1">
        <div class="row">
            <div class="col-md-6">
                <h2 id="naslov1" class="mb-5">Add Movie</h2>
                <br><br>
                <form action="{{route("movies.store")}}" enctype="multipart/form-data" method="post">
                    <div class="row">
                       {{csrf_field()}}
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Movie Name</label>
                                <input type="text" name="name" class="form-control" id="naslovv" placeholder="Movie Name">
                            </div>
                            <p id="erordes"></p>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Movie Description</label>
                                <input type="text" name="desc" class="form-control" id="naslovv" placeholder="Movie Description">
                            </div>
                            <p id="erordes"></p>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Movie Picture</label>
                                <input type="file" name="slika" id="slikav" class="form-control">
                            </div>
                            <p id="erorpics"></p>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Movie Length</label>
                                <input type="number" name="length" class="form-control" id="naslovv" placeholder="Movie Length">
                            </div>
                            <p id="erordes"></p>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Movie Trailer</label>
                                <input type="url" name="trailer" class="form-control" id="naslovv" placeholder="Movie Trailer">
                            </div>
                            <p id="erordes"></p>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Movie Stars</label>
                                <textarea name="stars" rows="3" cols="70"></textarea>
                            </div>
                            <p id="erordes"></p>
                        </div>



                        <div class="col-md-12 form-group">
                            <label for="room">Genre</label>
                            <select name="genre" id="room" class="form-control">
                                <option value="0">Choose Genre</option>
                                @foreach($genres as $g)
                                <option value="{{$g->idZanr}}">{{$g->nazivZ}}</option>
                                @endforeach

                            </select>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Movie Rating</label>
                                <input type="text" name="rating" class="form-control" id="naslovv" placeholder="Movie Rating In Number">
                            </div>
                            <p id="erorpri"></p>
                        </div>


                        <div class="col-md-12 mt-3">
                            <div class="form-group">
                                <button type="submit" name="sending" id="buton339" value="Make a Reservation" class="btn btn-primary">Add</button>
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


@endsection
@extends("admin.admin")

@section("adminContent")
    <div id="mka" class="row">
        <h3 class="pomerix">News</h3><br>
        <br><br>


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
                    <th scope="col">News Id</th>
                    <th scope="col">News Picture</th>
                    <th scope="col">Date Added</th>
                    <th scope="col">News Caption</th>
                    <th scope="col">News Description</th>
                </tr>
                </thead>
                <tbody>
                @foreach($news as $u)
                    <tr>
                        <td scope="row">{{$u->idVest}}</td>
                        <td class="w3-list-img"><img width="170px" height="170px" src="{{asset("images/".$u->slikaVest)}}" alt="Movies" /> </td>
                        <td scope="row">{{$u->datum}}</td>
                        <td scope="row">{{$u->naslovVest}}</td>
                        <td scope="row">{{$u->tekst}}</td>
                        <td><a href="{{route("news.edit",['id'=>$u->idVest])}}"><span class="glyphicon glyphicon-edit"></span></a></td>
                        <td><button class="vestBrisi" data-id="{{$u->idVest}}"><span class="glyphicon glyphicon-remove"></span></button></td>
                    </tr>

                @endforeach
                </tbody>
            </table>

        </div>
    </div>

    <div class="container" id="loginf1">
        <div class="row">
            <div class="col-md-6">
                <h2 id="naslov1" class="mb-5">Add News</h2>
                <br><br>
                    <form action="{{route("news.store")}}" enctype="multipart/form-data" method="post">
                        <div class="row">

                         {{csrf_field()}}
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Picture</label>
                                    <input type="file" name="slika" id="slikav" class="form-control">
                                </div>
                                <p id="erorpics"></p>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Caption</label>
                                    <input type="text" name="naslov" class="form-control" id="naslovv" placeholder="Caption">
                                </div>
                                <p id="erordes"></p>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea name="desc" rows="3" cols="70"></textarea>
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















    <!-- END section -->

@endsection
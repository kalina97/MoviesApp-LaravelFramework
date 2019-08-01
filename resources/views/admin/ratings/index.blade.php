@extends("admin.admin")

@section("adminContent")
    <div id="mka" class="row">
        <h3 class="pomerix">Movie Ratings</h3><br>
        <br>


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
                    <th scope="col">Rating Id</th>
                    <th scope="col">IMDB Rating</th>
                </tr>
                </thead>
                <tbody>
                @foreach($ratings as $u)
                    <tr>
                        <td scope="row">{{$u->idOcena}}</td>
                        <td><span><i class="fa fa-star" aria-hidden="true"></i></span> {{$u->ocena}}</td>
                        <td><button class="ratBrisi" data-id="{{$u->idOcena}}"><span class="glyphicon glyphicon-remove"></span></button></td>
                    </tr>

                @endforeach
                </tbody>
            </table>

        </div>
    </div>

    <div class="container" id="loginf1">
        <div class="row">
            <div class="col-md-6">
                <h2 id="naslov1" class="mb-5">Add Rating</h2>
                <br><br>
                <form method="post" action="{{route("ratings.store")}}">
                    <div class="row">
                        {{csrf_field()}}
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Rating</label>
                                <input type="text" name="rateNumber" id="hlink" class="form-control" placeholder="Movie rating in number">
                            </div>
                            <p id="erorDl"></p>
                        </div>


                        <div class="col-md-12 mt-3">
                            <div class="form-group">
                                <button type="submit"  id="buton" value="Make a Reservation" class="btn btn-primary">Add</button>
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
@extends("admin.admin")

@section("adminContent")
        <div class="row" id="loginf2">
            <div class="col-md-12">
                <h2 id="naslov1" class="mb-5">Edit News</h2>
                <br><br>
                <form action="{{route("news.update",['id'=>$onenew->idVest])}}" enctype="multipart/form-data" method="post">

                    {{csrf_field()}}
                        @method("PUT")
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="">Picture</label>
                                <input type="file" name="slika" id="slikav" class="form-control"><br>
                                <h5>Current picture: {{$onenew->slikaVest}}</h5>
                            </div>
                            <p id="erorpics"></p>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="">Caption</label>
                                <input type="text" value="{{$onenew->naslovVest}}" name="naslov" class="form-control" id="naslovv" placeholder="Caption">
                            </div>
                            <p id="erordes"></p>
                        </div>


                        <div class="row">
                            <label id="uaa" for="">Description</label>
                            <div class="col-md-12 form-group">

                                <textarea name="desc" rows="3" cols="79">{{$onenew->tekst}}</textarea>
                            </div>
                            <p id="erorpri"></p>
                        </div>
                       <input type="hidden" name="id" value="{{$onenew->idVest }}"/>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <button type="submit" name="sending" id="buton339" value="Make a Reservation" class="btn btn-primary">Edit</button>
                            </div>
                        </div>
                </form>
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
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









@endsection
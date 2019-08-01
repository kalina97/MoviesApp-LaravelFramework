@extends("admin.admin")

@section("adminContent")

        <div class="row" id="loginf2">
            <div class="col-md-6">
                <h2 id="naslov1" class="mb-5">Edit Genre</h2>
                <br><br>
                <form method="post" action="{{route("genres.update",['id'=>$onegenre->idZanr])}}">
                    {{csrf_field()}}
                    @method("PUT")
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Genre Name</label>
                                <input type="text" value="{{$onegenre->nazivZ}}" name="genreName" id="genreName" class="form-control" placeholder="First Letter UpperCase">
                            </div>
                            <p id="eror19"></p>
                        </div>

                        <input type="hidden" name="id" value="{{$onegenre->idZanr }}"/>
                        <div class="col-md-12 mt-3">
                            <div class="form-group">
                                <button type="submit"  id="butonGenre" value="Make a Reservation" class="btn btn-primary">Edit</button>
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




@endsection
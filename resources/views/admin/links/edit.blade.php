@extends("admin.admin")

@section("adminContent")

        <div class="row" id="loginf2">
            <div class="col-md-12">
                <h2 id="naslov1" class="mb-5">Edit Link</h2>
                <br><br>
                <form method="post" action="{{route("links.update",['id'=>$onelink->idLink])}}">

                        {{csrf_field()}}
                        @method("PUT")
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="">Link Name</label>
                                <input type="text" value="{{$onelink->imeLinka}}" name="linkName" id="nlink" class="form-control" placeholder="Link Name">
                            </div>
                            <p id="eror19"></p>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="">Link Href</label>
                                <input type="text" value="{{$onelink->putanja}}" name="linkHref" id="hlink" class="form-control" placeholder="Link Href">
                            </div>
                            <p id="erorDl"></p>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="">Parent Link</label>
                                <input type="number" value="{{$onelink->roditelj}}" name="parentLink" id="hlink" class="form-control" placeholder="Parent Link Number">
                            </div>
                            <p id="erorDl"></p>
                        </div>

                        <input type="hidden" name="id" value="{{$onelink->idLink }}"/>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <button type="submit"  id="buton" value="Make a Reservation" class="btn btn-primary">Edit</button>
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
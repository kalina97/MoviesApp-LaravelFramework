@extends("admin.admin")

@section("adminContent")
    <div id="mka" class="row">
        <h3 class="pomerix">Navigation Links</h3><br>
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
                    <th scope="col">Link Id</th>
                    <th scope="col">Link Name</th>
                    <th scope="col">Link Href</th>
                    <th scope="col">Parent</th>
                </tr>
                </thead>
                <tbody>
                @foreach($links as $u)
                    <tr>
                        <td scope="row">{{$u->idLink}}</td>
                        <td>{{$u->imeLinka}}</td>
                        <td>{{$u->putanja}}</td>
                        <td>{{$u->roditelj}}</td>
                        <td><a href="{{route("links.edit",['id'=>$u->idLink])}}"><span class="glyphicon glyphicon-edit"></span></a></td>
                        <td><button class="linkBrisi" data-id="{{$u->idLink}}"><span class="glyphicon glyphicon-remove"></span></button></td>
                    </tr>

                @endforeach
                </tbody>
            </table>

        </div>
    </div>


    <div class="container" id="loginf1">
        <div class="row">
            <div class="col-md-6">
                <h2 id="naslov1" class="mb-5">Add Link</h2>
                <br><br>
                    <form method="post" action="{{route("links.store")}}">
                        <div class="row">
                            {{csrf_field()}}
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Link Name</label>
                                    <input type="text" name="linkName" id="nlink" class="form-control" placeholder="Link Name">
                                </div>
                                <p id="eror19"></p>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Link Href</label>
                                    <input type="text" name="linkHref" id="hlink" class="form-control" placeholder="Link Href">
                                </div>
                                <p id="erorDl"></p>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Parent Link</label>
                                    <input type="number" name="parentLink" id="hlink" class="form-control" placeholder="Parent Link Number">
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
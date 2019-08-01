@extends("admin.admin")

@section("adminContent")
    <div id="mka" class="row">
        <h3 class="pomerix">Comments</h3><br>
        <br>


        <div class="col-md-12">
            <table id="table-breakpoint">
                <thead>
                <tr>
                    <th scope="col">Comment Id</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Comment Text</th>
                    <th scope="col">Comment Date</th>
                    <th scope="col">News Id</th>
                </tr>
                </thead>
                <tbody>
                @foreach($comments as $u)
                    <tr>
                        <td scope="row">{{$u->idKomentar}}</td>
                        <td>{{$u->imeKorisnika}}</td>
                        <td>{{$u->komentar}}</td>
                        <td>{{$u->datumKom}}</td>
                        <td>{{$u->idVest}}</td>
                        <td><button class="commBrisi" data-id="{{$u->idKomentar}}"><span class="glyphicon glyphicon-remove"></span></button></td>
                    </tr>

                @endforeach
                </tbody>
            </table>

            {{$comments->links()}}

        </div>
    </div>












    <!-- END section -->

@endsection
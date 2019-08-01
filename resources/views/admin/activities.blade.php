@extends("admin.admin")

@section("adminContent")
    <div id="mka" class="row">
        <h3 class="pomerix">User Activity</h3><br>
        <br>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Sort by date:</label>
            </div>
            <select class="custom-select" id="orderby">
                <option value="0">Choose...</option>
                <option value="asc">Ascending</option>
                <option value="desc">Descending</option>
            </select>
            <button type="button" id="order" class="btn btn-primary">Sort</button>
        </div>&nbsp;&nbsp;<br>


        <div class="col-md-12">
            <table id="table-breakpoint">
                <thead>
                <tr>
                    <th scope="col">Activity Id</th>
                    <th scope="col">User Id</th>
                    <th scope="col">Activity</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                </tr>
                </thead>
                <tbody>
                @foreach($activities as $u)
                    <tr>
                        <td scope="row">{{$u->idAktivnost}}</td>
                        <td>{{$u->idKorisnik}}</td>
                        <td>{{$u->aktivnost}}</td>
                        <td>{{$u->datum}}</td>
                        <td>{{$u->vreme}}</td>
                        <td><button class="actBrisi" data-id="{{$u->idAktivnost}}"><span class="glyphicon glyphicon-remove"></span></button></td>
                    </tr>

                @endforeach
                </tbody>
            </table>

        </div>
    </div>







    <!-- END section -->

@endsection
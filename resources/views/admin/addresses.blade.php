@extends("admin.admin")

@section("adminContent")
    <div id="mka" class="row">
        <h3 class="pomerix">Ip Addresses - Attempts To Access Admin Page</h3><br>
        <br>



        <div class="col-md-12">
            <table id="table-breakpoint">
                <thead>
                <tr>
                    <th scope="col">Ip Address Id</th>
                    <th scope="col">Ip Address</th>
                </tr>
                </thead>
                <tbody>
                @foreach($addresses as $u)
                    <tr>
                        <td scope="row">{{$u->idIp}}</td>
                        <td>{{$u->ipAdresa}}</td>
                        <td><button class="adrBrisi" data-id="{{$u->idIp}}"><span class="glyphicon glyphicon-remove"></span></button></td>
                    </tr>

                @endforeach
                </tbody>
            </table>

        </div>
    </div>







    <!-- END section -->

@endsection
@extends("admin.admin")

@section("adminContent")
    <div id="mka" class="row">
        <h3 class="pomerix">Error Logs</h3><br>
        <br>



        <div class="col-md-12">
            <table id="table-breakpoint">
                <thead>
                <tr>
                    <th scope="col">Error Id</th>
                    <th scope="col">Error Description</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                </tr>
                </thead>
                <tbody>
                @foreach($errors as $u)
                    <tr>
                        <td scope="row">{{$u->idGreska}}</td>
                        <td>{{$u->tekst}}</td>
                        <td>{{$u->datum}}</td>
                        <td>{{$u->vreme}}</td>
                        <td><button class="errBrisi" data-id="{{$u->idGreska}}"><span class="glyphicon glyphicon-remove"></span></button></td>
                    </tr>

                @endforeach
                </tbody>
            </table>

        </div>
        {{$errors->links()}}
    </div>







    <!-- END section -->

@endsection
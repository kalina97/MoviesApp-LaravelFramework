@extends("admin.admin")

@section("adminContent")
    <div id="mka" class="row">
     <h3 class="pomerix">Users Management</h3>
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
            <th scope="col">User Id</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Active</th>
            <th scope="col">Registration Date</th>
            <th scope="col">Role</th>
            <th scope="col">Username</th>
            <th scope="col">Token</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $u)
        <tr>
            <td scope="row">{{$u->id}}</td>
            <td>{{$u->ime}}</td>
            <td>{{$u->prezime}}</td>
            <td>{{$u->email}}</td>
            <td>{{$u->aktivan}}</td>
            <td>{{$u->datum_registracije}}</td>
            <td>{{$u->uloga_id}}</td>
            <td>{{$u->korisnicko_ime}}</td>
            <td>{{$u->token}}</td>
            <td><a href="{{route("users.edit",['id'=>$u->id])}}"><span class="glyphicon glyphicon-edit"></span></a></td>
            <td><button class="userBrisi" data-id="{{$u->id}}"><span class="glyphicon glyphicon-remove"></span></button></td>
        </tr>

        @endforeach
        </tbody>
    </table><br>


     </div>

    </div>






    <div class="container" id="loginf1">
        @if(session('poruka'))
            <div class="alert alert-danger">{{ session('poruka') }}</div>
        @endif
        <div class="row">
            <div class="col-md-6">
                <h2 id="naslov1" class="mb-5">Add User</h2>
                <br><br>
                <form action="{{route("users.store")}}" method="post">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="name">First Name</label>
                            <input type="text" name="firstName" id="ime" class="form-control ">
                        </div>
                        <p id="eror1"></p>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="phone">Last Name</label>
                            <input type="text" name="lastName" id="prezime" class="form-control ">
                        </div>
                        <p id="eror2"></p>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control ">
                        </div>
                        <p id="erorMail"></p>
                    </div>

                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="user">Username</label>
                            <input type="text" name="username" id="username" class="form-control ">
                        </div>
                        <p id="erorUser"></p>
                    </div>

                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control ">
                        </div>
                        <p id="erorS"></p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <button type="submit"  value="Register" id="dugme" class="btn btn-primary">Add</button>
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
            <div class="col-md-1"></div>

        </div>
    </div>

    <!-- END section -->

@endsection
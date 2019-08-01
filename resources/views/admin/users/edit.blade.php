@extends("admin.admin")

@section("adminContent")



        <div class="row" id="loginf2">
            <div class="col-md-12">
                <h2 id="naslov1" class="mb-5">Edit User</h2>
                <br><br>
                <form action="{{route("users.update",['id'=>$oneuser->id])}}" method="post">
                    {{csrf_field()}}
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="name">First Name</label>
                            <input type="text" value="{{$oneuser->ime}}" name="firstName" id="ime" class="form-control ">
                        </div>
                        <p id="eror1"></p>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="phone">Last Name</label>
                            <input type="text" value="{{$oneuser->prezime}}" name="lastName" id="prezime" class="form-control ">
                        </div>
                        <p id="eror2"></p>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="email">Email</label>
                            <input type="email" value="{{$oneuser->email}}" name="email" id="email" class="form-control ">
                        </div>
                        <p id="erorMail"></p>
                    </div>

                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="user">Username</label>
                            <input type="text" name="username" value="{{$oneuser->korisnicko_ime}}" id="username" class="form-control ">
                        </div>
                        <p id="erorUser"></p>
                    </div>

                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="password">Role</label>
                            <input type="text" name="role" value="{{$oneuser->uloga_id}}" id="password" class="form-control ">
                        </div>
                        <p id="erorS"></p>
                    </div>

                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="password">Active User</label>
                            <input type="text" name="active" value="{{$oneuser->aktivan}}" id="password" class="form-control ">
                        </div>
                        <p id="erorS"></p>
                    </div>
                    <input type="hidden" name="id" value="{{$oneuser->id }}"/>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <button type="submit"  value="Register" id="dugme" class="btn btn-primary">Edit</button>
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




@endsection
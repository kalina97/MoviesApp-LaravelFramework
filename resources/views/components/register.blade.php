


    <div class="container1" id="loginf">
        @if(session('poruka'))
            <div class="alert alert-danger">{{ session('poruka') }}</div>
        @endif
        <div class="row">
            <div class="col-md-6">
                <h2 id="naslov" class="mb-5">Registration Form</h2>
                <br><br>
                <form method="post">
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
                            <button type="button" onclick="provera();" value="Register" id="dugme" class="btn btn-primary py-3 px-5">Register</button>
                        </div>
                    </div>
                </form>

                <div id="pop" class="alert alert-success"></div>
            </div>
            <div class="col-md-1"></div>

        </div>
    </div>

<!-- END section -->
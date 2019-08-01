<section id="loginf" class="site-section">
    <div class="container1">
        <div class="row">
            <div id="kolona" class="col-md-6">
                <h2 id="naslov" class="mb-5">Login Form</h2><br><br>
                <form method="post">
                      {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" class="form-control ">
                        </div>
                        <p id="erorMail"></p>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control ">
                        </div>
                        <p id="erorS"></p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <button type="button" onclick="loginProvera();" value="Log in" name="login" id="dugmee" class="btn btn-primary">Log in</button>
                        </div>
                    </div>
                </form>

                <div id="pop" class="alert alert-warning"></div>
                <div id="poruka123"></div>




            </div>
        </div>

</section>
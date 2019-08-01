@extends("layout")
@section("content")
<section class="ftco-section contact-section">
    <div class="container">
        <div class="row block-9 mb-4">
            <h2 class="pom">Contact our Administrator</h2>
            <div class="col-md-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <form  method="post">
                    {{csrf_field()}}
                    <!--<div class="form-group">
                        <input type="text" id="firstName" name="ime" class="form-control" placeholder="Subject">
                    </div>
                    <p id="eror1"></p>
                    <div class="form-group">
                        <input type="text" id="email" name="email" class="form-control" placeholder="Comment">
                    </div>-->
                    <!--<p id="erorMail"></p>
                    <div class="form-group">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Your Password">
                    </div>
                    <p id="erorS"></p>-->
                        <div class="form-group">
                            <input type="text" id="subject" name="email" class="form-control" placeholder="Subject">
                        </div>
                    <p id="erorMail"></p>

                    <div class="form-group">
                        <textarea name="comment" id="comment" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <p id="erorC"></p>
                     @if(session()->has('korisnik'))
                    <input type="hidden" id="userID" value="{{session()->get('korisnik')->id}}"/>
                            <input type="hidden" id="ime" value="{{session()->get('korisnik')->ime}}"/>
                            <input type="hidden" id="email" value="{{session()->get('korisnik')->email}}"/>
                    <div class="form-group">
                        <button type="button"  onclick="contact()" name="potvrdi" id="potvrdi" value="Send Message" class="btn btn-primary py-3 px-5">Send message</button>
                    </div>
                    @else
                    <p class="lead">
                        You need to be registered to send us email
                    </p>
                    @endif
                </form>

                <div id="pop" class="alert alert-success"></div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="mapouter"><div class="gmap_canvas"><iframe width="950" height="670" id="gmap_canvas" src="https://maps.google.com/maps?q=new%20york&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{text-align:right;height:700px;width:1300px;}.gmap_canvas {overflow:hidden;background:none!important;height:700px;width:1200px;}</style></div>
        </div>
    </div>
</section>
@endsection
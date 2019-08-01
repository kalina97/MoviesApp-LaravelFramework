@if(session()->has('korisnik'))
@section("content")
    <div class="w3_content_agilleinfo_inner">
        <div class="agile_featured_movies">
            <div class="latest-news-agile-info">
                <div id="kidas" class="col-md-8 latest-news-agile-left-content">
                    <div class="single video_agile_player">

                        <div class="video-grid-single-page-agileits">
                            <img src="{{asset("images/".$new->slikaVest)}}" alt="News" class="img-responsive">
                        </div>
                        <h4>{{$new->naslovVest}}</h4>
                        <div class="agile-post">
                            <p>By: Admin </p>
                            <p>Date: {{$new->datum}}</p>
                        </div>
                        <p>Description: </p>
                        <span class="naslovi"> {{$new->tekst}}</span>
                    </div>



                    <!--<div class="response">

                         agile-comments
                        <div class="agile-news-comments">
                            <div class="agile-news-comments-info">
                                <h4>Comments</h4>
                                <div class="fb-comments" data-href="https://w3layouts.com/" data-width="100%" data-numposts="5"></div>
                            </div>
                        </div>
                        //agile-comments

                    </div>-->


                </div>
            </div>

            <div id="nensi" class="col-md-8">
                <h2 id="naslov" class="mb-5">Leave a Comment</h2>
                <form method="post">

                      {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-8 form-group">
                            <label for="">Date</label>
                            <input type="date" name="datumjoj" id="jojdat" class="form-control"  placeholder="Date">
                        </div>

                    </div>
                    <p id="erordatum1"></p>
                    <div class="row">
                        <div class="col-md-8 form-group">
                            <label for="name">Comment</label>
                            <textarea name="comment1" id="comment1" cols="30" rows="7" class="form-control" ></textarea>
                        </div>


                    </div>
                    <p id="erorC1"></p>

                    <div class="row">
                        <div class="col-md-8 form-group">
                            <button type="button"  data-id="{{$new->idVest}}" value="Comment" id="dugme225" class="btn btn-primary py-3 px-5">Add Comment</button>
                        </div>
                    </div>


                </form>

                <div id="poruka5"></div>

                <div id="prikazi">


                </div>

                <div id="row1">
                    <h3 class="pomY">Last Comments To This News</h3>
                    @foreach($comments as $com)
                        <div class="container">

                            <h4 class="pozadi"><i class="glyphicon glyphicon-user"></i> {{$com->imeKorisnika}}    |  {{$com->datumKom}}  | <i class="glyphicon glyphicon-comment"></i></h4>

                            <div class="komentic">
                                <textarea id="oblast" rows="3" cols="76" disabled="true">{{$com->komentar}}</textarea>
                            </div>
                        </div>

                    @endforeach


                </div>
            </div>



        </div>


    </div>





@endsection
@endif
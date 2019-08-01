<!--/footer-bottom-->
<div class="contact-w3ls" id="contact">
    <div class="footer-w3lagile-inner">


            <div id="mrdaj" class="col-md-2 footer-grid">
                <h4>Movies- available when you logged in</h4>
                <ul>

                    @foreach($genres as $g)
                        <li><a href="{{ route("movies-category", ["id" => $g->idZanr]) }}">{{ $g->nazivZ }}</a></li>
                    @endforeach

                </ul>
            </div>

        <div class="col-md-2 footer-grid">
            <h4>Useful Links</h4>
            <ul>
                <li><a href="{{route("author")}}" title="Author">Author</a></li>
                <li><a href="{{url("dokumentacija.pdf")}}" title="Documentation">Documentation</a></li>

            </ul>
        </div>

        <h3 id="mrdaj1" class="text-center follow">Connect <span>Us</span></h3>
        <ul id="mrdaj1" class="social-icons1 agileinfo">
            <li><a href="{{url("http://www.facebook.com")}}"><i class="fa fa-facebook"></i></a></li>
            <li><a href="{{url("http://www.twitter.com")}}"><i class="fa fa-twitter"></i></a></li>
            <li><a href="{{url("http://www.linkedin.com")}}"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="{{url("http://www.youtube.com")}}"><i class="fa fa-youtube"></i></a></li>
        </ul>





    </div>

</div>
<div class="w3agile_footer_copy">
    <p>© 2017 Movies Pro. Nikola Kalincevic 40/16 | All rights reserved | Design by <a href="{{asset("http://w3layouts.com/")}}">W3layouts</a></p>
</div>
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script src="{{asset("js/jquery-3.3.1.min.js")}}"></script>
<script src="{{asset("js/jquery-migrate-3.0.1.min.js")}}"></script>
<!-- Dropdown-Menu-JavaScript -->
<script>
    $(document).ready(function(){
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //Dropdown-Menu-JavaScript -->


<script type="text/javascript" src="{{asset("js/jquery.zoomslider.min.js")}}"></script>
<!-- search-jQuery -->
<script src="{{asset("js/main.js")}}"></script>
<script src="{{asset("js/script.js")}}"></script>
<script src="{{asset("js/simplePlayer.js")}}"></script>
<script>
    $("document").ready(function() {
        $("#video").simplePlayer();
    });
</script>
<script>
    $("document").ready(function() {
        $("#video1").simplePlayer();
    });
</script>
<script>
    $("document").ready(function() {
        $("#video2").simplePlayer();
    });
</script>
<script>
    $("document").ready(function() {
        $("#video3").simplePlayer();
    });
</script>

<!-- pop-up-box -->
<script src="{{asset("js/jquery.magnific-popup.js")}}" type="text/javascript"></script>
<!--//pop-up-box

<div id="small-dialog1" class="mfp-hide">
    <iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
</div>
<div id="small-dialog2" class="mfp-hide">
    <iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
</div>-->
<script>
    $(document).ready(function() {
        $('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
</script>
<script src="{{asset("js/easy-responsive-tabs.js")}}"></script>
<script>
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>
<link href="{{asset("css/owl.carousel.css")}}" rel="stylesheet" type="text/css" media="all">
<script src="{{asset("js/owl.carousel.js")}}"></script>
<script>
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({

            autoPlay: 3000, //Set AutoPlay to 3 seconds
            autoPlay : true,
            navigation :true,

            items : 5,
            itemsDesktop : [640,4],
            itemsDesktopSmall : [414,3]

        });

    });
</script>

<!--/script-->
<script type="text/javascript" src="{{asset("js/move-top.js")}}"></script>
<script type="text/javascript" src="{{asset("js/easing.js")}}"></script>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        /*
        var defaults = {
              containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
         };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!--end-smooth-scrolling-->
<script src="{{asset("js/bootstrap.js")}}"></script>



</body>
</html>
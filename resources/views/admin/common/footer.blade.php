<div  class="w3agile_footer_copy">
    <p>© 2017 Movies Pro. Nikola Kalincevic 40/16 | All rights reserved | Design by <a href="{{asset("http://w3layouts.com/")}}">W3layouts</a></p>
</div>
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


<script src="{{asset("js/jquery-3.3.1.min.js")}}"></script>
<script src="{{asset("js/sb-admin-2.js")}}"></script>
<script src="{{asset("js/bootstrap.js")}}"></script>
<script type="text/javascript" src="{{asset("js/move-top.js")}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
        });
    });
</script>
<script type="text/javascript" src="{{asset("js/adminPanel.js")}}"></script>
<script>
$("#toTop").click(function(e) {
e.preventDefault();
$('html, body').animate({
scrollTop: 0
}, 700);
});
</script>

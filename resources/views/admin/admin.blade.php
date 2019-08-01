@include("admin.common.head")
@include("admin.common.nav")
<img class="admin" src="{{asset("images/admin.png")}}" alt="admin"/>




<div class="container">

    @yield("adminContent")









</div>



@include("admin.common.footer")
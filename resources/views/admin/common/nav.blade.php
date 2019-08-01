<br>
<a href="{{url("/admin")}}"><h2 class="pomerix">Admin Panel</h2></a>
<div class="zvezda">
    <ul id="moramo1" class="nav">
        <li class="nav-item">
            <a href="{{url("/logout")}}"><i class="glyphicon glyphicon-log-out"></i> Logout</a>
        </li>
        <li class="nav-item">
            <a href="{{url("/back")}}"><i class="glyphicon glyphicon-step-backward"></i> Back to Website</a>
        </li>

    </ul>

</div>
    <!-- Navigation -->
<nav  class="nav flex-column">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

    </div>
    <!-- /.navbar-header -->


    <div class="navbar-default sidebar"  role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <h4 class="moramo">Tables:</h4>
            <ul class="nav flex-column" id="nekimeni">

                <li>
                    <a href="{{url("admin/users")}}"><i class="fa fa-edit fa-fw"></i> Users</a>
                </li>
                <li>
                    <a href="{{url("admin/movies")}}"><i class="fa fa-edit fa-fw"></i> Movies</a>
                </li>
                <li>
                    <a href="{{url("admin/links")}}"><i class="fa fa-edit fa-fw"></i> Navigation Links </a>
                </li>
                <li>
                    <a href="{{url("admin/comments")}}"><i class="fa fa-edit fa-fw"></i> Comments</a>
                </li>
                <li>
                    <a href="{{url("admin/ratings")}}"><i class="fa fa-edit fa-fw"></i> Ratings</a>
                </li>
                <li>
                    <a href="{{url("admin/news")}}"><i class="fa fa-edit fa-fw"></i> News</a>
                </li>

                <li>
                    <a href="{{url("admin/genres")}}"><i class="fa fa-edit fa-fw"></i> Genres</a>
                </li>
                <li>
                    <a href="{{url("/admin/userActivities")}}"><i class="fa fa-edit fa-fw"></i> User Activity</a>
                </li>
                <li>
                    <a href="{{url("/admin/errorLogs")}}"><i class="fa fa-edit fa-fw"></i> Error Logs</a>
                </li>

                <li>
                    <a href="{{url("/admin/ipAddresses")}}"><i class="fa fa-edit fa-fw"></i> Ip Addresses</a>
                </li>



            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>
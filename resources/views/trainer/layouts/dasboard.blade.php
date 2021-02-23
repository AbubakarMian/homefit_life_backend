@include('trainer.layouts.header')

<link href="{{ asset('css/globaldashboard.css')}}" rel="stylesheet">
<section>
    <div class="sidebar">
        <div class="pageName">
            <span>Trainer</span> DASHBOARD
        </div>
        <ul class="nav">
            <li>
                <a href="#">
                    <span><i class="fa fa-tachometer dashicon" aria-hidden="true"></i>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span><i class="fa fa-user dashicon" aria-hidden="true"></i>My Profile</span>                    
                </a>
            </li>

            <li>
                <a href="#" data-toggle="collapse" data-target="#submenu-1" class="collapsed" aria-expanded="false">
                <i class="fa fa-users dashicon" aria-hidden="true"></i>Group Classes</a>
                <ul id="submenu-1" class="collapse" aria-expanded="false" style="height: 0px;">
                    <li><a href="#"> Host a Group Classes</a></li>
                    <li><a href="#"> My Classes</a></li>
                </ul>
            </li>

            <li>
                <a href="#" data-toggle="collapse" data-target="#submenu-2" class="collapsed" aria-expanded="false">
                <i class="fa fa-line-chart dashicon" aria-hidden="true"></i>Live Sessions</a>
                <ul id="submenu-2" class="collapse" aria-expanded="false" style="height: 0px;">
                    <li><a href="#"> Paid Sessions</a></li>
                    <li><a href="#"> Unpaid Sessions</a></li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <span><i class="fa fa-sign-out dashicon" aria-hidden="true"></i>Logout</span>
                </a>
            </li>

        </ul>

    </div>

    <div class="content">
        @yield('dashboard')
    </div>
</section>


<footer>
    <div class="copyRightArea">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p>Copyrights © 2020. HomeFitLive All Rights Reserved. Designed By HatInco</p>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
@yield('app_jquery')
</html>
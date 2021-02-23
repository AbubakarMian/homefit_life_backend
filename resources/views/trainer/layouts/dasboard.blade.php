@include('trainer.layouts.header')

<link href="{{ asset('css/globaldashboard.css')}}" rel="stylesheet">
<section>
    <div class="sidebar">
        <div class="pageName">
            <span>Trainer</span> DASHBOARD
        </div>
        <ul class="nav">
            <li>
                <a href="{{asset('trainer/dashboard')}}">
                    <span><i class="fa fa-tachometer dashicon" aria-hidden="true"></i>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{asset('trainer/profile')}}">
                    <span><i class="fa fa-user dashicon" aria-hidden="true"></i>My Profile</span>                    
                </a>
            </li>
            <li>
                <a href="{{asset('trainer/createpersonalclass')}}">
                    <span><i class="fa fa-user-secret dashicon" aria-hidden="true"></i>Host a Personal Class</span>                   
                </a>
            </li>

            <li>
                <a href="#" data-toggle="collapse" data-target="#submenu-1" class="collapsed" aria-expanded="false">
                <i class="fa fa-users dashicon" aria-hidden="true"></i>Group Classes</a>
                <ul id="submenu-1" class="collapse" aria-expanded="false" style="height: 0px;">
                    <li><a href="{{asset('trainer/createclass')}}"> Host a Group Classes</a></li>
                    <li><a href="{{asset('trainer/groupclass')}}"> My Classes</a></li>
                </ul>
            </li>

            <li>
                <a href="{{asset('trainer/logout')}}">
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
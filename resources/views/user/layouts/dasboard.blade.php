@include('user.layouts.header')

<link href="{{ asset('css/globaldashboard.css')}}" rel="stylesheet">
<section>
    <div class="sidebar">
        <div class="pageName">
            <span>USER</span> DASHBOARD
        </div>
        <a class="active" href="#"><i class="flaticon-user"></i> My Profile</a>
        <a href="#"><i class="flaticon-loupe"></i> Search Trainers</a>
        <a href="#"><i class="flaticon-trainer"></i> Featured Trainers</a>
        <a href="#"><i class="flaticon-live"></i> Live Sessions</a>
        <a href="#"><i class="flaticon-monitor"></i> Free Live Sessions</a>
        <a href="#"><i class="flaticon-team"></i> Group Classes</a>
        <a href="#"><i class="flaticon-calculator"></i> Nutration Calculator</a>
        <a href="#"><i class="flaticon-calendar"></i> My Schedule</a>
        <a href="#"><i class="flaticon-logout"></i> Logout</a>
    </div>

    <div class="content">
        @yield('dashboard')
    </div>
</section>
<footer>
    <div class="copyRightArea">
        <div class="container">
            Copyrights © 2020. HomeFitLive All Rights Reserved. Designed By HatInco
        </div>
    </div>
</footer>
</body>
</html>

@include('user.layouts.header')

<link href="{{ asset('css/globaldashboard.css')}}" rel="stylesheet">
<section>
    <div class="sidebar">
        <div class="pageName">
            <span>Trainer</span> DASHBOARD
        </div>
        <ul class="nav">
            <!-- dashboard -->
            <li>
                <a href="http://localhost/quran_19_lines_backend/public/admin/dashboard">
                    <i class="ti-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <!-- /dashboard -->
            <li>
                <a href="javascript:;">
                    <i class="toggle-accordion"></i>
                    <!-- <i class="ti-support"></i> -->
                   
                    <span>Group Classes</span>
                </a>
                <ul class="sub-menu" style="display: none;">
                <a href="javascript:;">
                    <i class="toggle-accordion"></i>
                    <!-- <i class="ti-support"></i> -->
                    <i class="fa fa-line-chart"></i>
                    <span>- Host a Group Classes</span>
                </a>
                <a href="javascript:;">
                    <i class="toggle-accordion"></i>
                    <!-- <i class="ti-support"></i> -->
                    <i class="fa fa-line-chart"></i>
                    <span>- Group Classes</span>
                </a>
               
                </ul>
            </li>  
          
            <li>
                <a href="javascript:;">
                    <i class="toggle-accordion"></i>
                    <!-- <i class="ti-support"></i> -->
                    <i class="fa fa-line-chart"></i>
                    <span>Live Sessions</span>
                </a>
                <ul class="sub-menu">
                <a href="javascript:;">
                    <i class="toggle-accordion"></i>
                    <!-- <i class="ti-support"></i> -->
                    <i class="fa fa-line-chart"></i>
                    <span>- Paid Sessions</span>
                </a>
                <a href="javascript:;">
                    <i class="toggle-accordion"></i>
                    <!-- <i class="ti-support"></i> -->
                    <i class="fa fa-line-chart"></i>
                    <span>- Unpaid Sessions</span>
                </a>
               
                </ul>
            </li>


            <!-- Reports -->
            <li>
                <a href="javascript:;">
                    <i class="toggle-accordion"></i>
                    <!-- <i class="ti-support"></i> -->
                    <i class="fa fa-line-chart"></i>
                    <span>Reports</span>
                </a>
                <ul class="sub-menu">
                <a href="javascript:;">
                    <i class="toggle-accordion"></i>
                    <!-- <i class="ti-support"></i> -->
                    <i class="fa fa-line-chart"></i>
                    <span>- Schedule</span>
                </a>
                <a href="javascript:;">
                    <i class="toggle-accordion"></i>
                    <!-- <i class="ti-support"></i> -->
                    <i class="fa fa-line-chart"></i>
                    <span>- Sessions Payment</span>
                </a>
               
                </ul>
            </li>
            <!-- /Reports -->
        </ul>
        <!-- class="active" -->
      
        <a href="javascript:;">
            <i class="toggle-accordion"></i>
            <!-- <i class="ti-settings"></i> -->
            <i class="fa fa-table" aria-hidden="true"></i>
            <span>Modules</span>
        </a>
        <!-- <a href="{{asset('user/trainer')}}"><i class="flaticon-loupe"></i> Search Trainers</a>
        <a href="{{asset('user/trainer')}}"><i class="flaticon-trainer"></i> Featured Trainers</a>
        <a href="#"><i class="flaticon-live"></i> Live Sessions</a>
        <a href="#"><i class="flaticon-monitor"></i> Free Live Sessions</a>
        <a href="#"><i class="flaticon-team"></i> Group Classes</a>
        <a href="{{asset('user/nutrition')}}"><i class="flaticon-calculator"></i> Nutration Calculator</a>
        <a href="#"><i class="flaticon-calendar"></i> My Schedule</a> -->
        <a href="{{asset('user/logout')}}"><i class="flaticon-logout"></i> Logout</a>

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
@yield('app_jquery')

</html>
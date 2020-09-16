{{-----------------Home Page --------------}}

@include('user.layouts.header')
{{-----------------Home Page --------------}}

@yield('default')

{{-----------------Footer --------------}}
<footer>
    <div class="footerArea">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <div class="ftrLogo">
                        <img src="{{ asset('images/googleplay.png')}}" class="img-responsive">
                    </div>
                    <div class="ftrLogo">
                        <img src="{{ asset('images/appstore.png')}}" class="img-responsive">
                    </div>
                    <div class="ftrLogo">
                        <img src="{{ asset('images/webapp.png')}}" class="img-responsive">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="ftrLinks">
                        <h3>Resourses</h3>
                        <ul class="ftrList">
                            <li><a href="">My Info</a></li>
                            <li><a href="">My Questions</a></li>
                            <li><a href="">F.A.Q</a></li>
                            <li><a href="">Search Trainer</a></li>
                            <li><a href="">Latest Information</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="ftrContact">
                        <h3>Contact</h3>
                        <div>PO Box UN152468 , 1 Street North, New</div>
                        <div>Town, Califonia, USA</div>
                        <div>Phone: 123123123123</div>
                        <div>Fax: 123123123123</div>
                        <div>Email: test@test.com</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyRightArea">
        <div class="container">
            Copyrights © 2020. HomeFitLive All Rights Reserved. Designed By HatInco
        </div>
    </div>
</footer>
</body>
</html>
{{-----------------Footer --------------}}


@extends('user.layouts.dasboard')

<link href="{{ asset('css/user.css')}}" rel="stylesheet">
<link href="{{ asset('css/advancesearch.css')}}" rel="stylesheet">

@section('dashboard')
<div class="profileDetails">
    <div class="row">

        <div class="col-sm-2">
            <div class="profileImg">

                @if($user->avatar)
                <img src="{{$user->avatar}}" class="img-responsive">
                @else
                <img src="{{asset('images/default-trainer.jpg')}}" class="img-responsive">
                @endif
            </div>
            <div class="profileEditBtn">
                <a href="profileedit" class="btn btn-primary">Edit Profile</a>
            </div>
        </div>
        <div class="col-sm-10">
            <div class="profileContent">
                <h2>{{$user->name}}</h2>
                <p>{!!$user->description!!}</p>
            </div>
        </div>
    </div>
</div>
<!-- profileDetails -->
<!-- searchTrainer -->
<div class=" row searchTrainer">
    <form method="post" action="{{ url('user/dashboard') }}">
        {{ csrf_field() }}
        <div class="col-sm-8">
            <div class="form-group">
                <input type="text" class="form-control" id="trainer" name="trainer" placeholder="Search Trainers">
            </div>
        </div>
        <div class="col-sm-2">
            <button type="submit" class="btn btn-primary btnSearch"><i class="flaticon-loupe"></i>Search</button>
        </div>
        <div class="col-sm-2">
            <button type="button" data-toggle="modal" data-target="#AdvanceSearchModal" class="btn btn-primary btnAdvSearch"><i class="fa fa-server" aria-hidden="true"></i> Advance Search</button>
        </div>
    </form>
</div>
<!-- searchTrainer -->
<!-- featuredTrainerArea -->
<div class="featuredTrainerArea">
    <h2>Featured Trainers</h2>
    <div class="col-sm-12">
        <ul class="list-inline">

            @foreach($featured_trainer as $ft)
            <li>
                <div class="featuredTrainerBox">
                    <div class="featuredTrainerBoxImg">

                        @if($ft->avatar)
                        <a href="trainer/profile/{{$ft->id}}">
                            <img src="{{$ft->avatar}}" class="img-responsive">
                        </a>
                        @else
                        <button>
                            <img src="{{asset('images/default-trainer.jpg')}}" class="img-responsive">
                        </button>
                        @endif

                        <div class="featuredTrainerActive">
                        </div>
                    </div>
                    <div class="featuredTrainerName">
                        {{$ft->name}}
                    </div>
                </div>
            </li>
            @endforeach

        </ul>
    </div>
</div>
<!-- featuredTrainerArea -->
<!-- freeLiveSessionArea -->
<div class="freeLiveSessionArea">
    <h2>Live Sessions / Free Live Sessions</h2>
    <div class="col-sm-12">
        <ul class="list-inline">

            @foreach($sessions as $s)
            
            <li>
                <div class="freeLiveSessionBox">
                    <a href="{{$s->training_slot->training_session->live_url}}" target="_blank">
                        <div class="freeLiveSessionBoxImg">
                            <img src="{{ asset('images/livesession-02.jpg')}}" class="img-responsive">
                            <div class="freeLiveSessionDeactiveActive">
                            </div>
                        </div>
                        <div class="freeLiveSessionName">
                            {{$s->name}}

                        </div>
                    </a>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
<!-- freeLiveSessionArea -->
<!-- catagoriesArea -->
<style>
    img.img-responsive.training {
        height: 20px;
    }
</style>
<div class="catagoriesArea">
    <h2>Catagories</h2>
    <div class="col-sm-12">
        <ul class="list-inline">
            @foreach($training_categories as $tc)
            <li>
                <a href="">
                    <div class="catagoresBox">
                        <div class="catagoryIcon">
                            <img src="{{ $tc->avatar }}" class="img-responsive training">

                        </div>
                        <div class="catagoryText">
                            {{$tc->name}}
                        </div>
                    </div>
                </a>
            </li>
            @endforeach

        </ul>
    </div>
</div>
<!-- catagoriesArea -->
<div class="row ChartsArea">
    <div class="col-sm-4">
        <div class="NutrationArea">
            <table class="table">
                <thead>
                    <tr>
                        <th>View Calculation</th>
                        <th>Total</th>
                        <th>Goal</th>
                        <th>Left</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Protien</td>
                        <td>000</td>
                        <td>70</td>
                        <td>70g</td>
                    </tr>
                    <tr>
                        <td>Carbohydrates</td>
                        <td>000</td>
                        <td>70</td>
                        <td>70g</td>
                    </tr>
                    <tr>
                        <td>Fiber</td>
                        <td>000</td>
                        <td>70</td>
                        <td>70g</td>
                    </tr>
                    <tr>
                        <td>Sugars</td>
                        <td>000</td>
                        <td>70</td>
                        <td>70g</td>
                    </tr>
                    <tr>
                        <td>Fat</td>
                        <td>000</td>
                        <td>70</td>
                        <td>70g</td>
                    </tr>
                    <tr>
                        <td>Saturated</td>
                        <td>000</td>
                        <td>70</td>
                        <td>70g</td>
                    </tr>
                    <tr>
                        <td>polyunsaturated</td>
                        <td>000</td>
                        <td>70</td>
                        <td>70g</td>
                    </tr>
                    <tr>
                        <td>Monounsaturated </td>
                        <td>000</td>
                        <td>70</td>
                        <td>70g</td>
                    </tr>
                    <tr>
                        <td>Trans</td>
                        <td>000</td>
                        <td>70</td>
                        <td>70g</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="barChart">
            <div class="panel panel-default">
                <h3>Nutrational Calculator</h3>
                <div class="panel-body">
                    <div id="chart1"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="calanderArea">
            <div class="calendar calendar-first" id="calendar_first">
                <h2 class="calanderHead">MY SCHEDULE</h2>
                <div class="calendar_header">
                    <button class="switch-month switch-left"> <i class="fa fa-chevron-left"></i></button>
                    <h2></h2>
                    <button class="switch-month switch-right"> <i class="fa fa-chevron-right"></i></button>
                </div>
                <div class="calendar_weekdays"></div>
                <div class="calendar_content"></div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
<!-- Modal Advance Search -->
<div id="AdvanceSearchModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div id="regForm">
                    <!-- One "tab" for each step in the form: -->
                    <div class="tab">
                        <div class="AdvanceSearchArea">
                            <h2>Advance Search</h2>
                            <div class="formAdvanceSearch">
                                <div class="form-group">
                                    <input type="text" id="location" class="form-control" placeholder="Country, City. State. Zip">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="training_type">
                                        <option disabled selected>Mandatory Training Type</option>
                                        @foreach($training_categories as $trc)
                                        <option value="{{$trc->name}}">{{$trc->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input type="text" id="trainer_name" class="form-control valid" placeholder="Trainer Name (optional)">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="gender">
                                        <option>Gender Type</option>
                                        <option value="1">Male</option>
                                        <option value="0">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab">
                        <h3>Sort By</h3>
                        <div class="trainerSelect">
                            <ul class="nav nav-pills">
                                <li><a data-toggle="pill" class="btn btn-primary btnTabs" onclick="show_trainer_list();" href="#home">Rating</a></li>

                                <li><a data-toggle="pill" class="btn btn-primary btnTabs" onclick="show_trainer_class_list();" href="#menu3">Upcomming Group Class</a></li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade in active">
                                    <h3>Rating</h3>
                                    <ul id="search_list" class="list-inline">

                                    </ul>
                                </div>

                                <div id="menu3" class="tab-pane fade">
                                    <h3>Upcomming Group Class</h3>
                                    <ul id="group_list" class="list-inline">

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="overflow:auto;">
                        <div style="float:right;">
                            <button type="button" class="btn btn-primary" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                            <button type="button" class="btn btn-primary" id="nextBtn" onclick="show_trainer_list();nextPrev(1)">Next</button>
                        </div>
                    </div>
                    <!-- Circles which indicates the steps of the form: -->
                    <div style="text-align:center;margin-top:40px;">
                        <span class="step"></span>
                        <span class="step"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Advance Search -->
<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>


<script type="text/javascript">
    // jQuery(function ($) {
    //     var data1 = [12, 3, 4, 2, 12];
    //     var data2 = [3, 9, 12, 14, 22];
    //     var data3 = [23, 19, 11, 34, 42];

    //     $("#chart1").shieldChart({
    //         exportOptions: {
    //             image: false,
    //             print: false
    //         },
    //         axisY: {
    //             title: {
    //                 text: "Break-Down for selected quarter"
    //             }
    //         },
    //         dataSeries: [{
    //             seriesType: "bar",
    //             data: data1
    //         }]
    //     });

    // });
    $(document).ready(function() {
        var data1 = [12, 3, 4, 2, 12];
        var data2 = [3, 9, 12, 14, 22];
        var data3 = [23, 19, 11, 34, 42];

        $("#chart1").shieldChart({
            exportOptions: {
                image: false,
                print: false
            },
            axisY: {
                title: {
                    text: "Break-Down for selected quarter"
                }
            },
            dataSeries: [{
                seriesType: "bar",
                data: data1
            }]
        });

        function c(passed_month, passed_year, calNum) {
            var calendar = calNum == 0 ? calendars.cal1 : calendars.cal2;
            makeWeek(calendar.weekline);
            calendar.datesBody.empty();
            var calMonthArray = makeMonthArray(passed_month, passed_year);
            var r = 0;
            var u = false;
            while (!u) {
                if (daysArray[r] == calMonthArray[0].weekday) {
                    u = true
                } else {
                    calendar.datesBody.append('<div class="blank"></div>');
                    r++;
                }
            }
            for (var cell = 0; cell < 42 - r; cell++) { // 42 date-cells in calendar
                if (cell >= calMonthArray.length) {
                    calendar.datesBody.append('<div class="blank"></div>');
                } else {
                    var shownDate = calMonthArray[cell].day;
                    var iter_date = new Date(passed_year, passed_month, shownDate);
                    if (
                        (
                            (shownDate != today.getDate() && passed_month == today.getMonth()) || passed_month != today.getMonth()) && iter_date < today) {
                        var m = '<div class="past-date">';
                    } else {
                        var m = checkToday(iter_date) ? '<div class="today">' : "<div>";
                    }
                    calendar.datesBody.append(m + shownDate + "</div>");
                }
            }

            var color = "#444444";
            calendar.calHeader.find("h2").text(i[passed_month] + " " + passed_year);
            calendar.weekline.find("div").css("color", color);
            calendar.datesBody.find(".today").css("color", "#0c94ea");

            // find elements (dates) to be clicked on each time
            // the calendar is generated
            var clicked = false;
            selectDates(selected);

            clickedElement = calendar.datesBody.find('div');
            clickedElement.on("click", function() {
                clicked = $(this);
                var whichCalendar = calendar.name;

                if (firstClick && secondClick) {
                    thirdClicked = getClickedInfo(clicked, calendar);
                    var firstClickDateObj = new Date(firstClicked.year,
                        firstClicked.month,
                        firstClicked.date);
                    var secondClickDateObj = new Date(secondClicked.year,
                        secondClicked.month,
                        secondClicked.date);
                    var thirdClickDateObj = new Date(thirdClicked.year,
                        thirdClicked.month,
                        thirdClicked.date);
                    if (secondClickDateObj > thirdClickDateObj && thirdClickDateObj > firstClickDateObj) {
                        secondClicked = thirdClicked;
                        // then choose dates again from the start :)
                        bothCals.find(".calendar_content").find("div").each(function() {
                            $(this).removeClass("selected");
                        });
                        selected = {};
                        selected[firstClicked.year] = {};
                        selected[firstClicked.year][firstClicked.month] = [firstClicked.date];
                        selected = addChosenDates(firstClicked, secondClicked, selected);
                    } else { // reset clicks
                        selected = {};
                        firstClicked = [];
                        secondClicked = [];
                        firstClick = false;
                        secondClick = false;
                        bothCals.find(".calendar_content").find("div").each(function() {
                            $(this).removeClass("selected");
                        });
                    }
                }
                if (!firstClick) {
                    firstClick = true;
                    firstClicked = getClickedInfo(clicked, calendar);
                    selected[firstClicked.year] = {};
                    selected[firstClicked.year][firstClicked.month] = [firstClicked.date];
                } else {
                    secondClick = true;
                    secondClicked = getClickedInfo(clicked, calendar);

                    // what if second clicked date is before the first clicked?
                    var firstClickDateObj = new Date(firstClicked.year,
                        firstClicked.month,
                        firstClicked.date);
                    var secondClickDateObj = new Date(secondClicked.year,
                        secondClicked.month,
                        secondClicked.date);

                    if (firstClickDateObj > secondClickDateObj) {

                        var cachedClickedInfo = secondClicked;
                        secondClicked = firstClicked;
                        firstClicked = cachedClickedInfo;
                        selected = {};
                        selected[firstClicked.year] = {};
                        selected[firstClicked.year][firstClicked.month] = [firstClicked.date];

                    } else if (firstClickDateObj.getTime() == secondClickDateObj.getTime()) {
                        selected = {};
                        firstClicked = [];
                        secondClicked = [];
                        firstClick = false;
                        secondClick = false;
                        $(this).removeClass("selected");
                    }


                    // add between dates to [selected]
                    selected = addChosenDates(firstClicked, secondClicked, selected);
                }
                selectDates(selected);
            });

        }

        function selectDates(selected) {
            if (!$.isEmptyObject(selected)) {
                var dateElements1 = datesBody1.find('div');
                var dateElements2 = datesBody2.find('div');

                function highlightDates(passed_year, passed_month, dateElements) {
                    if (passed_year in selected && passed_month in selected[passed_year]) {
                        var daysToCompare = selected[passed_year][passed_month];
                        for (var d in daysToCompare) {
                            dateElements.each(function(index) {
                                if (parseInt($(this).text()) == daysToCompare[d]) {
                                    $(this).addClass('selected');
                                }
                            });
                        }

                    }
                }

                highlightDates(year, month, dateElements1);
                highlightDates(nextYear, nextMonth, dateElements2);
            }
        }

        function makeMonthArray(passed_month, passed_year) { // creates Array specifying dates and weekdays
            var e = [];
            for (var r = 1; r < getDaysInMonth(passed_year, passed_month) + 1; r++) {
                e.push({
                    day: r,
                    // Later refactor -- weekday needed only for first week
                    weekday: daysArray[getWeekdayNum(passed_year, passed_month, r)]
                });
            }
            return e;
        }

        function makeWeek(week) {
            week.empty();
            for (var e = 0; e < 7; e++) {
                week.append("<div>" + daysArray[e].substring(0, 3) + "</div>")
            }
        }

        function getDaysInMonth(currentYear, currentMon) {
            return (new Date(currentYear, currentMon + 1, 0)).getDate();
        }

        function getWeekdayNum(e, t, n) {
            return (new Date(e, t, n)).getDay();
        }

        function checkToday(e) {
            var todayDate = today.getFullYear() + '/' + (today.getMonth() + 1) + '/' + today.getDate();
            var checkingDate = e.getFullYear() + '/' + (e.getMonth() + 1) + '/' + e.getDate();
            return todayDate == checkingDate;

        }

        function getAdjacentMonth(curr_month, curr_year, direction) {
            var theNextMonth;
            var theNextYear;
            if (direction == "next") {
                theNextMonth = (curr_month + 1) % 12;
                theNextYear = (curr_month == 11) ? curr_year + 1 : curr_year;
            } else {
                theNextMonth = (curr_month == 0) ? 11 : curr_month - 1;
                theNextYear = (curr_month == 0) ? curr_year - 1 : curr_year;
            }
            return [theNextMonth, theNextYear];
        }

        function b() {
            today = new Date;
            year = today.getFullYear();
            month = today.getMonth();
            var nextDates = getAdjacentMonth(month, year, "next");
            nextMonth = nextDates[0];
            nextYear = nextDates[1];
        }

        var e = 480;

        var today;
        var year,
            month,
            nextMonth,
            nextYear;

        var r = [];
        var i = [
            "JANUARY",
            "FEBRUARY",
            "MARCH",
            "APRIL",
            "MAY",
            "JUNE",
            "JULY",
            "AUGUST",
            "SEPTEMBER",
            "OCTOBER",
            "NOVEMBER",
            "DECEMBER"
        ];
        var daysArray = [
            "Sunday",
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday"
        ];

        var cal1 = $("#calendar_first");
        var calHeader1 = cal1.find(".calendar_header");
        var weekline1 = cal1.find(".calendar_weekdays");
        var datesBody1 = cal1.find(".calendar_content");

        var cal2 = $("#calendar_second");
        var calHeader2 = cal2.find(".calendar_header");
        var weekline2 = cal2.find(".calendar_weekdays");
        var datesBody2 = cal2.find(".calendar_content");

        var bothCals = $(".calendar");

        var switchButton = bothCals.find(".calendar_header").find('.switch-month');

        var calendars = {
            "cal1": {
                "name": "first",
                "calHeader": calHeader1,
                "weekline": weekline1,
                "datesBody": datesBody1
            },
            "cal2": {
                "name": "second",
                "calHeader": calHeader2,
                "weekline": weekline2,
                "datesBody": datesBody2
            }
        }


        var clickedElement;
        var firstClicked,
            secondClicked,
            thirdClicked;
        var firstClick = false;
        var secondClick = false;
        var selected = {};

        b();
        c(month, year, 0);
        c(nextMonth, nextYear, 1);
        switchButton.on("click", function() {
            var clicked = $(this);
            var generateCalendars = function(e) {
                var nextDatesFirst = getAdjacentMonth(month, year, e);
                var nextDatesSecond = getAdjacentMonth(nextMonth, nextYear, e);
                month = nextDatesFirst[0];
                year = nextDatesFirst[1];
                nextMonth = nextDatesSecond[0];
                nextYear = nextDatesSecond[1];

                c(month, year, 0);
                c(nextMonth, nextYear, 1);
            };
            if (clicked.attr("class").indexOf("left") != -1) {
                generateCalendars("previous");
            } else {
                generateCalendars("next");
            }
            clickedElement = bothCals.find(".calendar_content").find("div");
        });


        //  Click picking stuff
        function getClickedInfo(element, calendar) {
            var clickedInfo = {};
            var clickedCalendar,
                clickedMonth,
                clickedYear;
            clickedCalendar = calendar.name;
            clickedMonth = clickedCalendar == "first" ? month : nextMonth;
            clickedYear = clickedCalendar == "first" ? year : nextYear;
            clickedInfo = {
                "calNum": clickedCalendar,
                "date": parseInt(element.text()),
                "month": clickedMonth,
                "year": clickedYear
            }
            return clickedInfo;
        }


        // Finding between dates MADNESS. Needs refactoring and smartening up :)
        function addChosenDates(firstClicked, secondClicked, selected) {
            if (secondClicked.date > firstClicked.date || secondClicked.month > firstClicked.month || secondClicked.year > firstClicked.year) {

                var added_year = secondClicked.year;
                var added_month = secondClicked.month;
                var added_date = secondClicked.date;

                if (added_year > firstClicked.year) {
                    // first add all dates from all months of Second-Clicked-Year
                    selected[added_year] = {};
                    selected[added_year][added_month] = [];
                    for (var i = 1; i <= secondClicked.date; i++) {
                        selected[added_year][added_month].push(i);
                    }

                    added_month = added_month - 1;
                    while (added_month >= 0) {
                        selected[added_year][added_month] = [];
                        for (var i = 1; i <= getDaysInMonth(added_year, added_month); i++) {
                            selected[added_year][added_month].push(i);
                        }
                        added_month = added_month - 1;
                    }

                    added_year = added_year - 1;
                    added_month = 11; // reset month to Dec because we decreased year
                    added_date = getDaysInMonth(added_year, added_month); // reset date as well

                    // Now add all dates from all months of inbetween years
                    while (added_year > firstClicked.year) {
                        selected[added_year] = {};
                        for (var i = 0; i < 12; i++) {
                            selected[added_year][i] = [];
                            for (var d = 1; d <= getDaysInMonth(added_year, i); d++) {
                                selected[added_year][i].push(d);
                            }
                        }
                        added_year = added_year - 1;
                    }
                }

                if (added_month > firstClicked.month) {
                    if (firstClicked.year == secondClicked.year) {
                        selected[added_year][added_month] = [];
                        for (var i = 1; i <= secondClicked.date; i++) {
                            selected[added_year][added_month].push(i);
                        }
                        added_month = added_month - 1;
                    }
                    while (added_month > firstClicked.month) {
                        selected[added_year][added_month] = [];
                        for (var i = 1; i <= getDaysInMonth(added_year, added_month); i++) {
                            selected[added_year][added_month].push(i);
                        }
                        added_month = added_month - 1;
                    }
                    added_date = getDaysInMonth(added_year, added_month);
                }

                for (var i = firstClicked.date + 1; i <= added_date; i++) {
                    selected[added_year][added_month].push(i);
                }
            }
            return selected;
        }
    });
</script>
<!-- Bar Chart - END -->
<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:

        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").style.display = "none";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function show_trainer_list() {

        var gender = $("#gender").val();
        var training_type = $("#training_type").val();
        var location = $("#location").val();
        var trainer_name = $("#trainer_name").val();
        console.log('gender value :', gender)
        console.log('training type value :', training_type)
        console.log('location value :', location)
        console.log('trainer name value :', trainer_name)


        url = "{{ asset('user/trainer/advanceSearch')}}",
            console.log(url)
        data = {
                trainer_name: trainer_name,
                gender: gender,
                training_type: training_type,
                location: location,
                _token: "{{ csrf_token() }}"
            },


            $.post(url, data)
            .done(function(data) {
                console.log("Data Loaded: " + data);

                for (let i = 0; i < data.length; i++) {
                    console.log('data !!!!!!!!', i);
                    var trainer_html = search_trainer_html(data[i].name)

                    $('#search_list').html($('#search_list').html() + trainer_html);
                }
            });

    }

    function search_trainer_html(msg) {
        console.log('html log ')
        return `<ul class="list-inline">
                    <li>
                        <div class="ADSearchTrainerBox">
                            <div class="ADSearchTrainerBoxImg">
                                <img src="{{ asset('images/livesession-02.jpg')}}" class="img-responsive">
                                <div class="ADSearchTrainerActive">
                                </div>
                            </div>
                            <div class="ADSearchTrainerName">
                            ` + msg + `
                            </div>
                        </div>
                    </li>
                </<ul>`;
    };

    function nextPrev(n) {



        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        console.log('in upcoming group class 0')
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            console.log('in upcoming group class 1')
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }

    function upcommingClass() {
        alert('working');
    }


    function show_trainer_class_list() {

        var gender = $("#gender").val();
        var training_type = $("#training_type").val();
        var location = $("#location").val();
        var trainer_name = $("#trainer_name").val();
        console.log('gender value :', gender)
        console.log('training type value :', training_type)
        console.log('location value :', location)
        console.log('trainer name value :', trainer_name)


        url = "{{ asset('user/trainer/sortByGroupClass')}}",
            console.log(url)
        data = {
                trainer_name: trainer_name,
                gender: gender,
                training_type: training_type,
                location: location,
                _token: "{{ csrf_token() }}"
            },


            $.post(url, data)
            .done(function(data) {
                console.log("Data Loaded: " + data);

                for (let i = 0; i < data.length; i++) {
                    console.log('data !!!!!!!!', data[i].name);
                    var trainer_html = search_trainer_html(data[i].name)

                    $('#group_list').html($('#group_list').html() + trainer_html);
                }
            });

    }
</script>
@endsection
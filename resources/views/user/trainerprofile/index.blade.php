@extends('user.layouts.dasboard')

<link href="{{ asset('css/profile.css')}}" rel="stylesheet">

<section>
	<div class="innerPageBlank">
		<div class="">
			<div class="row">
				<div class="col-sm-12">
					<div class="pageTitle">
						
					</div>
					<div class="InnerContent">
						<div class="profileImgArea">
							<div class="profileBoxImg">
								<img src="images/livesession-02.jpg" class="img-responsive">
								<div class="profileTrainerActive">
								</div>
							</div>
							<div class="profileTrainerName">
								Michle Clark
							</div>
							<div class="profileTrainerRating">
								Rating 5.0 
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
						<div class="profileExpertiesArea">
							<ul class="list-inline">
					    		<li><i class="flaticon-running"></i> Aerobics, Fitness</li>
					    		<li><i class="flaticon-history"></i> 10 Years Exp</li>
					    	</ul>	
						</div>
						<div class="upcomingClasses">
							<ul class="list-inline">
					    		<li><span class="label label-primary">Upcoming Group Class 06:30 Pm</span></li>
					    		<li><span class="label label-primary">Upcoming Class 07:30 Pm</span></li>
					    		<li><span class="label label-primary">Data here</span></li>
					    	</ul>	
						</div>
						<div class="profileGoalsArea">
							"Hi my name is Joul and im a fitness trainer and i enjoy ever moment when im at gym my goal is to make the world healthy"
						</div>
						<div class="profileTraingSpeciality bgProfile">
							<h2>Training Speciality</h2>
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee.</p>
						</div>
						<div class="profileVideosArea bgProfile">
							<h2>Photos and Videos</h2>
							<ul class="list-inline">
					    		<li><img src="images/gallery-17.jpg" class="img-responsive"></li>
					    		<li><img src="images/gallery-17.jpg" class="img-responsive"></li>
					    		<li><img src="images/gallery-17.jpg" class="img-responsive"></li>
					    		<li><img src="images/gallery-17.jpg" class="img-responsive"></li>
					    		<li><img src="images/gallery-17.jpg" class="img-responsive"></li>
					    		<li><img src="images/gallery-17.jpg" class="img-responsive"></li>
					    	</ul>
						</div>
						<div class="ProfileTrainCatArea bgProfile">
							<h2>Training Catagories</h2>
							<ul class="list-inline">
								<li><h3> <span class="label label-primary">Fitness</span></h3></li>
								<li><h3> <span class="label label-primary">Aerobics</span></h3></li>
								<li><h3> <span class="label label-primary">Yoga</span></h3></li>
							</ul>
						</div>
                        <div class="GroupClasses bgProfile">
                            <div class="GroupClassSliderArea">
                                <div class=" headSlider">
                                    <div class="row">
                                    <div class="col-md-9">
                                        <h2>Yoga Group Classes</h2>
                                    </div>
                                    <div class="col-md-3">
                                        <!-- Controls -->
                                        <div class="controls pull-right hidden-xs">
                                            <a class="left fa fa-chevron-left btn btn-primary btnSlider" href="#GroupClassSlider" data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-primary btnSlider" href="#GroupClassSlider" data-slide="next"></a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div id="GroupClassSlider" class="carousel slide hidden-xs" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="col-item">
                                                        <div class="photo">
                                                            <img src="images/gallery-18.jpg" class="img-responsive" alt="Home Fit Group Class">
                                                        </div>
                                                        <div class="Details">
                                                            <h5>Yoga Group Class 1</h5>
                                                            <p>Anim pariatur cliche reprehenderit, </p>
                                                            <span>20 Members</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="col-item">
                                                        <div class="photo">
                                                            <img src="images/gallery-18.jpg" class="img-responsive" alt="Home Fit Group Class">
                                                        </div>
                                                        <div class="Details">
                                                            <h5>Yoga Group Class 1</h5>
                                                            <p>Anim pariatur cliche reprehenderit, </p>
                                                            <span>20 Members</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="col-item">
                                                        <div class="photo">
                                                            <img src="images/gallery-18.jpg" class="img-responsive" alt="Home Fit Group Class">
                                                        </div>
                                                        <div class="Details">
                                                            <h5>Yoga Group Class 1</h5>
                                                            <p>Anim pariatur cliche reprehenderit, </p>
                                                            <span>20 Members</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="col-item">
                                                        <div class="photo">
                                                            <img src="images/gallery-18.jpg" class="img-responsive" alt="Home Fit Group Class">
                                                        </div>
                                                        <div class="Details">
                                                            <h5>Yoga Group Class 1</h5>
                                                            <p>Anim pariatur cliche reprehenderit, </p>
                                                            <span>20 Members</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item active">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="col-item">
                                                        <div class="photo">
                                                            <img src="images/gallery-18.jpg" class="img-responsive" alt="Home Fit Group Class">
                                                        </div>
                                                        <div class="Details">
                                                            <h5>Yoga Group Class 1</h5>
                                                            <p>Anim pariatur cliche reprehenderit, </p>
                                                            <span>20 Members</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="col-item">
                                                        <div class="photo">
                                                            <img src="images/gallery-18.jpg" class="img-responsive" alt="Home Fit Group Class">
                                                        </div>
                                                        <div class="Details">
                                                            <h5>Yoga Group Class 1</h5>
                                                            <p>Anim pariatur cliche reprehenderit, </p>
                                                            <span>20 Members</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="col-item">
                                                        <div class="photo">
                                                            <img src="images/gallery-18.jpg" class="img-responsive" alt="Home Fit Group Class">
                                                        </div>
                                                        <div class="Details">
                                                            <h5>Yoga Group Class 1</h5>
                                                            <p>Anim pariatur cliche reprehenderit, </p>
                                                            <span>20 Members</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="col-item">
                                                        <div class="photo">
                                                            <img src="images/gallery-18.jpg" class="img-responsive" alt="Home Fit Group Class">
                                                        </div>
                                                        <div class="Details">
                                                            <h5>Yoga Group Class 1</h5>
                                                            <p>Anim pariatur cliche reprehenderit, </p>
                                                            <span>20 Members</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="ProfilePackageDeal bgProfile">
							<h2>Packages Deal</h2>
							<ul class="list-inline">
								<li><div class="packagePrice"><h3> <span class="label label-primary">Book 5 Sessions Now</span> </h3>$150</div></li>
								<li><div class="packagePrice"><h3> <span class="label label-primary">Book 10 Sessions Now</span></h3>$250</div></li>
								<li><div class="packagePrice"><h3> <span class="label label-primary">Book 15 Sessions Now</span></h3>$350</div></li>
							</ul>
						</div>
						<div class="ProfileCalander bgProfile">
							<h2>Get Personal Sessions</h2>
							<div class="col-sm-4 col-sm-offset-4">
								<div class="calanderArea">
									<div class="calendar calendar-first" id="calendar_first">
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
				</div>
			</div>
		</div>
	</div>
</section>
<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
<script type="text/javascript">
    jQuery(function ($) {
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

    });
    $(document).ready(function () {
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
        clickedElement.on("click", function () {
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
                    bothCals.find(".calendar_content").find("div").each(function () {
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
                    bothCals.find(".calendar_content").find("div").each(function () {
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
                        dateElements.each(function (index) {
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
        "DECEMBER"];
    var daysArray = [
        "Sunday",
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday"];

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
    switchButton.on("click", function () {
        var clicked = $(this);
        var generateCalendars = function (e) {
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
                for (var i = 1;
                i <= secondClicked.date;
                i++) {
                    selected[added_year][added_month].push(i);
                }

                added_month = added_month - 1;
                while (added_month >= 0) {
                    selected[added_year][added_month] = [];
                    for (var i = 1;
                    i <= getDaysInMonth(added_year, added_month);
                    i++) {
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
                    for (var i = 1;
                    i <= secondClicked.date;
                    i++) {
                        selected[added_year][added_month].push(i);
                    }
                    added_month = added_month - 1;
                }
                while (added_month > firstClicked.month) {
                    selected[added_year][added_month] = [];
                    for (var i = 1;
                    i <= getDaysInMonth(added_year, added_month);
                    i++) {
                        selected[added_year][added_month].push(i);
                    }
                    added_month = added_month - 1;
                }
                added_date = getDaysInMonth(added_year, added_month);
            }

            for (var i = firstClicked.date + 1;
            i <= added_date;
            i++) {
                selected[added_year][added_month].push(i);
            }
        }
        return selected;
    }
});
</script>
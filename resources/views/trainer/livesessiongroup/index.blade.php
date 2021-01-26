@extends('trainer.layouts.dasboard')

<link href="{{ asset('css/user.css')}}" rel="stylesheet">
<link href="{{ asset('css/advancesearch.css')}}" rel="stylesheet">



@section('dashboard')

<link href="{{ asset('css/globaldashboard.css')}}" rel="stylesheet">
<link href="{{ asset('css/newsampledashboard.css')}}" rel="stylesheet">
<link href="{{ asset('css/livesessiongroup.css')}}" rel="stylesheet">
<link href="{{ asset('css/newstore.css')}}" rel="stylesheet">




<section>

    <div class="content">
        <div class="hilton">
            <strong>
                <div class="modules1">
                    <h1>
                        Live Session Group
                    </h1>
                </div>

            </strong>
            <div class="closer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <p id="demo">
                            </p>
                            <div class="LiveSessionImg">
                                <iframe src="https://appr.tc/r/897987987" allow="camera ;microphone" height="100%" width="100%"></iframe>

                            </div>

                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#ViewParticipants" id="view">View Participants</button>
                            <div class="modal fade" id="ViewParticipants" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="fox">
                                            <strong>
                                                <div class="modal-header">
                                                    <div class="obi">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>

                                                    <h4 class="mymodal-title">Participants List</h4>
                                                </div>
                                            </strong>
                                            <div class="modal-body">
                                                <table class="bigger">
                                                    <tr class="first">
                                                        <th class="user"> User image</th>
                                                        <th class="user"> User name</th>
                                                        <th class="user"> Group Title</th>
                                                        <th class="user"> Category</th>
                                                    </tr>
                                                    <tr class="first">
                                                        <td class="user">
                                                            <img src="images/image-24.png">
                                                        </td>
                                                        <td class="user">John michel</td>
                                                        <td class="user">Yoga basic</td>
                                                        <td class="user">Aerobic</td>
                                                    </tr>
                                                    <tr class="first">
                                                        <td class="user">
                                                            <img src="images/image-25.png">
                                                        </td>
                                                        <td class="user">Edward buttler</td>
                                                        <td class="user">Yoga basic</td>
                                                        <td class="user">zumba</td>
                                                    </tr>
                                                    <tr class="first">
                                                        <td class="user">
                                                            <img src="images/image-26.png">
                                                        </td>
                                                        <td class="user">isreel</td>
                                                        <td class="user">Yoga basic</td>
                                                        <td class="user">gym</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Trigger the modal with a button -->
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#Recommend" id="recommend">Recommend</button>
                            <!-- Modal -->
                            <div class="modal fade" id="Recommend" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            <div class="obi">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <h4 class="themodal-title">Store</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="fitnees area">
                                                    <div class="col-sm-12">
                                                        <div class="row">
                                                            <div class="first box">
                                                                <div class="col-sm-3">
                                                                    <div class="img1">
                                                                        <img src="images/product-27.png">
                                                                    </div>
                                                                    <div class="text"> The Ultimate Wheel </div>
                                                                    <div class="stars">
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star checked"></span>
                                                                    </div>
                                                                    <div class="number"> $10.20 </div>
                                                                    <div class="ob">
                                                                        <button class="button button1">Recommend</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="second box">
                                                                <div class="col-sm-3">
                                                                    <div class="img2">
                                                                        <img src="images/product-26.png">
                                                                    </div>
                                                                    <div class="text"> The Ultimate Wheel </div>
                                                                    <div class="stars">
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star checked"></span>
                                                                    </div>
                                                                    <div class="number"> $10.20 </div>
                                                                    <div class="ob">
                                                                        <button class="button button1">Recommend</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="third box">
                                                                <div class="col-sm-3">
                                                                    <div class="img3">
                                                                        <img src="images/product-25.png">
                                                                    </div>
                                                                    <div class="text"> The Ultimate Wheel </div>
                                                                    <div class="stars">
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star checked"></span>
                                                                    </div>
                                                                    <div class="number"> $10.20 </div>
                                                                    <div class="ob">
                                                                        <button class="button button1">Recommend</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="fourth box">
                                                                <div class="col-sm-3">
                                                                    <div class="img4">
                                                                        <img src="images/product-24.png">
                                                                    </div>
                                                                    <div class="text"> The Ultimate Wheel </div>
                                                                    <div class="stars">
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star checked"></span>
                                                                    </div>
                                                                    <div class="number"> $10.20 </div>
                                                                    <div class="ob">
                                                                        <button class="button button1">Recommend</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <button class="button button1" id="byer">Leave Group</button>






                            <script>
                                // Set the date we're counting down to
                                var countDownDate = new Date("Jan 5, 2021 15:37:25").getTime();

                                // Update the count down every 1 second
                                var x = setInterval(function() {

                                    // Get today's date and time
                                    var now = new Date().getTime();

                                    // Find the distance between now and the count down date
                                    var distance = countDownDate - now;

                                    // Time calculations for days, hours, minutes and seconds

                                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                    // Output the result in an element with id="demo"
                                    document.getElementById("demo").innerHTML =
                                        minutes + "m " + seconds + "s ";

                                    // If the count down is over, write some text 
                                    if (distance < 0) {
                                        clearInterval(x);
                                        document.getElementById("demo").innerHTML = "EXPIRED";
                                    }
                                }, 1000);
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- <section>
    <div class="innerPageBlank">
        <iframe src="" title="W3Schools Free Online Web Tutorials" height="100%" width="100%"></iframe>
    </div>
</section> -->
@endsection
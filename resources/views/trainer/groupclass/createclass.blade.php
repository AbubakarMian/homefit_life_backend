@extends('trainer.layouts.dasboard')




<link href="{{ asset('css/globaldashboard.css')}}" rel="stylesheet">
<!-- <link href="css/livesessiongroup.css" rel="stylesheet"> -->
<link href="{{ asset('css/newhost.css')}}" rel="stylesheet">

@section('dashboard')

<section>

    <div class="tabros">
        <strong>
            <div class="modulesu">
                <h1 class="display-4">
                    Host a Group Classes
                </h1>
            </div>
        </strong>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="helix">
                        <form method="post" action="{{ url('trainer/saveclass') }}">
                            {{ csrf_field() }}
                            <div class="category">
                                <div class="form-group">

                                    <label for="category">Category</label>
                                    <select class="form-control" id="trainingtype" name="trainingtype">
                                        @foreach($training_type as $tt)
                                        <option value="{{$tt->id}}">{{$tt->name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>




                            <div class="form-group">

                                <input type="text" class="form-control" placeholder="Title Name Here" name="class_name">
                            </div>


                            <div class="form-group">
                                <textarea class="form-control" placeholder="Description......." rows="8" id="comment" name="class_desc"></textarea>
                            </div>

                            <div class="form-group">
                                <div>
                                    <input type="button" value="Add Slot" class="btn-info" onclick="addSlot();">
                                    <input type="button" value="Remove Slot" class="btn-danger" onclick="removeSlot();">
                                </div>
                            </div>

                            <div class="row allslots">

                                <!-- <div class="slot_file"> -->
                                <div class="col-sm-6 date">
                                    <div class="form-group">
                                        <label for="email">Select Day</label>
                                        <select class="form-control" id="day" name="day[]">
                                            @foreach($weekdays as $wd)
                                            <option value="{{$wd->id}}">{{$wd->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="time counter">
                                        <label for="email">Select Time</label>
                                        <div class="">
                                            <input type="time" id="start_time" name="start_time[]">

                                            <input type="time" id="end_time" name="end_time[]">
                                        </div>
                                    </div>
                                </div>
                                <!-- </div> -->



                            </div>



                            <div class="obi">
                                <button class="button button1" type="submit">Host A Group Classes</button>
                                <button class="button button1" id="obu">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>



<script>
    // Set the date we're counting down to
    // var countDownDate = new Date("Jan 5, 2021 15:37:25").getTime();

    // // Update the count down every 1 second
    // var x = setInterval(function() {

    //     // Get today's date and time
    //     var now = new Date().getTime();

    //     // Find the distance between now and the count down date
    //     var distance = countDownDate - now;

    //     // Time calculations for days, hours, minutes and seconds
    //     var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    //     var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    //     var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    //     var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    //     // Output the result in an element with id="demo"
    //     document.getElementById("demo").innerHTML = minutes + "m " + seconds + "s ";

    //     // If the count down is over, write some text 
    //     if (distance < 0) {
    //         clearInterval(x);
    //         document.getElementById("demo").innerHTML = "EXPIRED";
    //     }
    // }, 1000);


    function addSlot() {
        console.log('sfsdfsdfsfdsdf');
        var nextdivnum = $('.allslots').length + 1;
        $('.allslots').append(slotHtml(nextdivnum));
    }

    function removeSlot() {
        console.log('length !!!!!!!!', $('.allslots').length);
        if ($('.allslots').length < 2) {
            return;
        }
        $('.allslots')[$('.allslots').length - 1].remove();
    }

    function slotHtml(num) {
        return `
        <div class="row allslots">

<!-- <div class="slot_file"> -->
    <div class="col-sm-6 date">
        <div class="form-group">
            <label for="email">Select Day</label>
            <select class="form-control" id="day" name="day[]">
                @foreach($weekdays as $wd)
                <option value="{{$wd->id}}">{{$wd->name}}</option>
                @endforeach
            </select>
        </div>
    </div>


    <div class="col-sm-6">
        <div class="time counter">
            <label for="email">Select Time</label>
            <div class="">
                <input type="time" id="start_time" name="start_time[]">

                <input type="time" id="end_time" name="end_time[]">
            </div>
        </div>
    </div>
<!-- </div> -->



</div>`
    }
</script>


@endsection
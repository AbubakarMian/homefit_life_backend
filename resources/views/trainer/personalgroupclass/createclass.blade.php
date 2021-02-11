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
                    Host a Personal Group Classes
                </h1>
            </div>
        </strong>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="helix">
                        <form method="post" action="{{ url('trainer/savepersonalclass') }}">
                            {{ csrf_field() }}
                           


                            <input type="hidden" class="form-control" value="1"   name="personal_session" >
                            <div class="form-group">

                                <input type="text" class="form-control" placeholder="Title Name Here" name="class_name">
                            </div>


                            <div class="form-group">
                                <textarea class="form-control" placeholder="Description......." rows="8" id="comment" name="class_desc"></textarea>
                            </div>
                            


                            <div class="obi">
                                <button class="button button1" type="submit">Host A Personal Group Classes</button>
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
 
</script>


@endsection
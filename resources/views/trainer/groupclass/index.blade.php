@extends('trainer.layouts.dasboard')

<style>
    ul {
        overflow-x: hidden;
        white-space: nowrap;
        /* height: 1em;
width: 100%; */
    }

    li {
        display: inline;
    }
</style>

@section('dashboard')


<link href="{{ asset('css/globaldashboard.css')}}" rel="stylesheet">
<link href="{{ asset('css/groupclasses.css')}}" rel="stylesheet">



<div class="content">

    <div class="main area">





        <div class="moduleees">
            <h1>
                Group Classes
            </h1>
        </div>



        <div class="liner">
            <div class="data range">
                <h2 class="picker">
                    Data Range Picker
                </h2>

                <div class="asian">
                    <form method="post" action="{{ url('trainer/searchgroupclass') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="text">Select day</label></br>
                            <select class="form-control" id="day" name="day_id">
                                @foreach($weekdays as $wd)
                                <option value="" selected>Select day </option>
                                <option value="{{$wd->id}}">{{ ucfirst($wd->name)}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="pwd">Title</label></br>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>


                        <div class="form-group">
                            <label for="pwd">Category:</label></br>
                            <select class="form-control" id="day" name="type_id">
                                @foreach($training_type as $tt)
                                <option value="" selected>Select category </option>
                                <option value="{{$tt->id}}">{{$tt->name}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="form-control" placeholder="Search.."></button>
                        </div>



                    </form>
                </div>


            </div>


            <table class="helix">
                <tr class="first">
                    <th class="martin">Days</th>
                    <th class="martin2">Category</th>
                    <th class="martin3">Title</th>
                    <th class="mart1">Action</th>
                    <th class="age">Inspect</th>

                </tr>
                @foreach($trainng_class as $tc)
                <?php
                $slots_weekdays = [];
                if (isset($tc->training_slot)) {
                    $slots_weekdays =  $tc->training_slot->pluck('week_days_id')->toArray();
                }


                ?>
                <tr class="second">
                    <th class="atoc1">
                        <ul>
                            @foreach($weekdays as $wd)
                            <?php $color = '';
                            if (in_array($wd->id, $slots_weekdays)) {
                                $color = '#00CED1';
                            }

                            ?>
                            <li style="background-color:{!! $color!!}">{{ substr(ucfirst($wd->name),0,-4)}}</li>
                            @endforeach
                        </ul>
                    </th>
                    <th class="atocrrr">{!! $tc->trainer_type->name ?? 'no nmae' !!}</th>
                    <th class="atocoo">{!! $tc->name!!}</th>
                    <th class="martt">
                        <button class="button btn-success"> Start </button>
                    </th>
                    <th class="agew">
                        <button class="button btn-info"> Detail </button>
                    </th>
                </tr>
                @endforeach



            </table>

        </div>
    </div>


</div>

@endsection
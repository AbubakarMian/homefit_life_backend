@extends('trainer.layouts.dasboard')

<style>
    ul {
        overflow-x: hidden;
        white-space: nowrap;
    }

    li {
        display: inline;
    }
</style>

@section('dashboard')

<link href="{{ asset('css/globaldashboard.css')}}" rel="stylesheet">
<link href="{{ asset('css/groupclasses.css')}}" rel="stylesheet">



<div class="whiteback">
    <div class="row grouphead">
        <div class="col-sm-12">
            <h2>Group Classes</h2>
        </div>
    </div>

    <div class="row grayback">
        <div class="formhead">
            <h4>Data Range Picker</h4>
        </div>
        <div class="formarea">
            <form method="post" action="{{ url('trainer/searchgroupclass') }}">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="col-sm-4">
                        <label for="disabledSelect">Select Day</label>
                        <select class="form-control" id="day" name="day_id">
                            <option value="" selected>Select day </option>
                            @foreach($weekdays as $wd)
                            <option value="{{$wd->id}}">{{ ucfirst($wd->name)}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <label for="disabledSelect">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
                    </div>
                    <div class="col-sm-2">
                        <label for="disabledSelect">Category</label>
                        <select class="form-control" id="day" name="type_id">
                            <option value="" selected>Select category </option>
                            @foreach($training_type as $tt)
                            <option value="{{$tt->id}}">{{$tt->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-primary sign">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mytable">
        <div class="col-sm-12">
            <div class="mytabledata">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Days</th>
                            <th scope="col">Category</th>
                            <th scope="col">Title</th>
                            <th scope="col">Action</th>
                            <th scope="col">Inspect</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($trainng_class as $tc)
                        <?php
                        $slots_weekdays = [];
                        if (isset($tc->training_slot)) {
                            $slots_weekdays =  $tc->training_slot->pluck('week_days_id')->toArray();
                        }

                        ?>
                        <!-- <tr class="second">
                            <th class="atoc1">
                                <ul>
                                    @foreach($weekdays as $wd)
                                    <?php $color = '';
                                    if (in_array($wd->id, $slots_weekdays)) {
                                        $color = '#00CED1';
                                    }

                                    ?>
                                    <li class="" style="color:{!! $color!!}">{{ substr(ucfirst($wd->name),0,1)}}</li>
                                    @endforeach
                                </ul>
                            </th>
                            <th class="atocrrr">{!! $tc->trainer_type->name ?? 'not available' !!}</th>
                            <th class="atocoo">{!! $tc->name ?? 'not available'!!}</th>
                            <th class="martt">
                                <a class="button btn-success" href="{{ asset('trainer/liveSession?class_id=').$tc->id}}">
                                    <span class="badge badge-primary"> Start </span>
                                </a>

                            </th>
                            <th>
                                <a class="badge bg-info" href="#">
                                    <span class="badge bg-info" name="detailmodal" data-url="{!! asset('trainer/classdetail?class_id=').$tc->id !!}">
                                        Detail</span>
                                </a>
                            </th>
                        </tr> -->
                        <tr>
                            <td>
                                <ul>
                                    @foreach($weekdays as $wd)
                                    <?php $color = '';
                                    if (in_array($wd->id, $slots_weekdays)) {
                                        $color = '#00CED1';
                                    }

                                    ?>
                                    <li class="" style="color:{!! $color!!}">{{ substr(ucfirst($wd->name),0,1)}}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>{!! $tc->trainer_type->name ?? 'not available' !!}</td>
                            <td>{!! $tc->name ?? 'not available'!!}</td>
                            <td><a href="{{ asset('trainer/liveSession?class_id=').$tc->id}}"><button type="button" class="btn btn-primary green">Start</button></a></td>
                            <td><span class="badge bg-info minedetail" name="detailmodal" data-url="{!! asset('trainer/classdetail?class_id=').$tc->id !!}">
                                    Detail</span></td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



@endsection
@include('trainer.groupclass.partial.detail_modal')
@section('app_jquery')

<script>
    $(function() {
        console.log('hi');
        console.log('my span', $('span[name="detailmodal"]'));
        $('span[name="detailmodal"]').on('click', function(e) {
            console.log('working !!!!');
            // e.preventDefault();
            var my_url = $(this).attr('data-url');
            var mySpan = this;
            console.log('Detail !!!!', my_url);
            $.get(my_url, function(data) {
                var trHTML = '';
                $.ajax({
                    type: 'GET',
                    url: my_url,
                    data: 'application/json',
                    dataType: 'json',
                    success: function(data) {

                        console.log("sucess", data);
                        res_data = data.msg;
                        $('#title').html(res_data.name);

                        console.log('res_data.training_slot.length', res_data
                            .training_slot.length)

                        var slot_html = '';
                        for (var i = 0; i < res_data.training_slot.length; i++) {
                            slot_html = slot_html + slotTableHtml(res_data
                                .training_slot[i])
                        }
                        $('#slot_detail').html(slot_html);
                        $('#detailPop').modal('show');
                    },
                    error: function(data) {
                        console.log('Error:', data);
                    }
                });
            });
        });
    });

    function slotTableHtml(slot) {

        return `
        <tr>
            <td>` + slot.weekday.name + `</td>
            <td>` + new Date(slot.slot_start * 1000) + `</td>
            <td>` + new Date(slot.slot_end * 1000) + `</td>
        </tr>`
    }
</script>
@endsection
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


    <link href="{{ asset('css/globaldashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/groupclasses.css') }}" rel="stylesheet">


    <div class="content">

        <div class="main area">





            <div class="moduleees">
                <h1>
                    Session Payment
                </h1>
            </div>



            <div class="liner">
                <div class="data range">
                    {{-- <h2 class="picker">
                    Data Range Picker
                </h2> --}}

                    <div class="asian">
                        <form method="post" action="{{ url('trainer/searchsessionpayment') }}">
                            {{ csrf_field() }}


                            <div class="form-group">
                                <label for="pwd">Title</label></br>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>


                            <div class="form-group">
                                <label for="pwd">Category</label></br>
                                <select class="form-control" id="day" name="type_id">
                                    <option value="" selected>Select category </option>
                                    @foreach ($training_type as $tt)
                                        <option value="{{ $tt->id }}">{{ $tt->name }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group">
                                <button type="submit" class="form-control" placeholder="Search.."></button>
                            </div>



                        </form>
                    </div>


                </div>


                <table class="helix table table-bordered">
                    <tr class="first">
                        {{-- <th class="martin">Days</th> --}}
                        <th class="martin2">Category</th>
                        <th class="martin2">User Name</th>
                        <th class="martin3">Title</th>
                        <th class="mart1">Payment</th>

                    </tr>


                    @foreach ($user_booking as $tc)
                        {{-- {{dd($tc->trainingclass->name)}} --}}
                        <tr class="second">

                            {{-- <th class="atocrrr">sdfsdfsdf</th> --}}
                            <th class="atocrrr">{!! $tc->trainingclass->trainer_type->name !!}</th>
                            <th class="atocrrr">{!! $tc->user->name !!}</th>
                            <th class="atocrrr">{!! $tc->package->name !!}</th>
                            <th class="atocrrr">${!! $tc->package->price !!}</th>
                            {{-- <th class="atocrrr">Status</th> --}}

                        </tr>
                    @endforeach



                </table>
                {{-- <span class="pagination pagination-md pull-right">{!!  $user_booking->render() !!}</span> --}}


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

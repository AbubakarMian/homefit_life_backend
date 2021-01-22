@extends('trainer.layouts.dasboard')

<link href="{{ asset('css/user.css')}}" rel="stylesheet">
<link href="{{ asset('css/advancesearch.css')}}" rel="stylesheet">

@section('dashboard')


<h2>My Classes </h2>
<section>
    <div class="innerPageBlank">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Class Name</th>
                        <th scope="col">Details</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($class_list as $key => $c)
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$c->name}}</td>
                        <td>{{$c->details}}</td>
                        <td><a href="{{asset('trainer/livesession?group_id='.$c->id)}}" class="btn btn-success" > Start Class</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

    </div>
</section>


@endsection
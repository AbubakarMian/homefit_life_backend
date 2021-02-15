@extends('user.layouts.dasboard')


@section('dashboard')


    <div>
        <h4>
            @foreach($trainingclass_user as $tcu)
            {!! $tcu->id !!}
            @endforeach
        </h4>
    </div>


@endsection

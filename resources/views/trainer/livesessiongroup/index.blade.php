@extends('trainer.layouts.dasboard')

<link href="{{ asset('css/user.css')}}" rel="stylesheet">
<link href="{{ asset('css/advancesearch.css')}}" rel="stylesheet">

@section('dashboard')


<h2>Live session group</h2>

<section>
    <div class="innerPageBlank">
        <iframe src="{!!$video_url->live_url !!}" title="W3Schools Free Online Web Tutorials" height="100%" width="100%"></iframe>
    </div>
</section>
@endsection
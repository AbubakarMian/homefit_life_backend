@extends('trainer.layouts.dasboard')

<!-- <link href="{{ asset('css/user.css')}}" rel="stylesheet">
<link href="{{ asset('css/advancesearch.css')}}" rel="stylesheet"> -->

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



                <form class="form-inline" action="/action_page.php">



                    <div class="asian">

                        <div class="form-group">
                            <label for="text">Select data range</label></br>
                            <input type="text" class="form-control" id="email">
                        </div>


                        <div class="form-group">
                            <label for="pwd">Title</label></br>
                            <input type="password" class="form-control" id="pwd">
                        </div>


                        <div class="form-group">
                            <label for="pwd">Category:</label></br>
                            <input type="password" class="form-control" id="pw">
                        </div>


                        <div class="form-group">
                            <label for="pwd">Status:</label></br>
                            <input type="password" class="form-control" id="pwe">
                        </div>


                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search.." id="obiii">

                        </div>




                    </div>


                </form>
            </div>


            <table class="helix">
                <tr class="first">
                    <th class="martin">Date</th>
                    <th class="martin2">Category</th>
                    <th class="martin3">Title</th>
                    <th class="martin4">Participants</th>
                    <th class="mart1">Action</th>
                    <th class="age">Inspect</th>

                </tr>
                <tr class="second">
                    <th class="atoc1">Tuesday, 1st September 2020</th>
                    <th class="atocrrr">Yoga</th>
                    <th class="atocoo">Yoga Basic</th>
                    <th class="atoc">10</th>
                    <th class="martt"> <button class="button button1"> Start </button> <button class="button button2"> Reject </button> </th>
                    <th class="agea">Detail</th>
                </tr>

                <tr class="third">
                    <th class="atoccer">Wednesday, 3rd September 2020</th>
                    <th class="atocu">Yoga</th>
                    <th class="atocw">Yoga Basic</th>
                    <th class="atocq">10</th>
                    <th class="marti"> <button class="button button1"> Start </button><button class="button button2"> Reject </button></th>
                    <th class="ager">Detail</th>
                </tr>


                <tr class="fourth">
                    <th class="atot">Thursday, 1st September 2020</th>
                    <th class="atocs">Yoga</th>
                    <th class="atocz">Yoga Basic</th>
                    <th class="atocyu">10</th>
                    <th class="mart"> <button class="button button1"> Start </button> <button class="button button2"> Reject </button></th>
                    <th class="agew">Detail</th>
                </tr>
            </table>






        </div>
    </div>


</div>

@endsection
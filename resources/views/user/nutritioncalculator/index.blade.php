<?php
$dt = new DateTime();
?>
@extends('user.layouts.dasboard')

<link href="{{asset('css/nutrition.css')}}" rel="stylesheet">



@section('dashboard')

<section>
    <div class="calarea">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="calareadata">
                        <h2>Nutrition Calculator</h2>
                    </div>
                </div>
            </div>

            <div class="row goalback">
                <div class="col-sm-4">
                    <div class="goalhead">
                        <h3>Goals</h3>
                        <ul>
                            <li>{!! $dt->format('Y-m-d H:i:s') !!}</li>
                            <li>Starting Weight</li>
                            <li>Current Weight</li>
                            <li>Goal Weight</li>
                            <li>Weekly Goal</li>
                            <li>Activity Level</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="goalhead">
                        <ul>
                            <li id="start_weight_li" class="eightykg"> 0 Kg on {!! $dt->format('Y-m-d') !!}</li>
                            <li id="current_weight_li">{!! $user_goal['current_weight'] ?? '00'!!} kg</li>
                            <li id="goal_weight_li">{!! $user_goal['goal_weight'] ?? '00' !!} kg</li>
                            <li id="weekly_goal_li">{!! $user_goal['weekly_weight'] ?? '00'!!} kg</li>
                            <li id="activity_level_li">{!! $user_goal['actively_level'] ?? 00!!} kg</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="goalclick">
                        <button type="button" class="btn btn-primary aaddgoal" data-toggle="modal" href='#goal_modal'>Add Goals</button>
                    </div>
                </div>
            </div>

            <div class="row caloriesfind">
                <div class="calform">
                    <form>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-1 col-form-label exercise">Exercise</label>
                            <div class="col-sm-10">
                                <input class="form-control calformdata" type="number" placeholder="1500 Calories" id="exercise_input" name="exercise_input">
                            </div>
                            <div class="col-sm-1">
                                <button type="button" class="btn btn-primary save" id="save_exercise">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="nutritionarea">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="nutritionhead">
                        <h3>Nutrition Calculator</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="nutritiondata">
                        <h4 id="total_goal_cal">{!! $user_goal['calories_level'] ?? 00!!}</h4>
                        <p>Calories</p>
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="nutritiondatasign">
                        <p>+</p>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="nutritiondata">
                        <h4 id="consume_cal">0000</h4>
                        <p>Consume</p>
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="nutritiondatasign">
                        <p>-</p>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="nutritiondata">
                        <h4 id="exercise_cal">0000</h4>
                        <p>Exercise</p>
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="nutritiondatasign">
                        <p>=</p>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="nutritiondata">
                        <h4 id="remaining_cal">000</h4>
                        <p>Remaining</p>
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="nutritiondatasign">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="todayarea">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="todayhead">
                        <h3>Today's Nutrition</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <table class="table mytable table-bordered">
                    <thead>
                        <tr class="tabborder">
                            <th scope="col">Macros</th>
                            <th scope="col">Actual</th>
                            <th scope="col">Goals</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="tabborder">
                            <td>Carbohydrates</td>
                            <td id="actual_carbs">00 g</td>
                            <td id="cabs_goal">{!! $user_goal['carbohydrates'] ?? 00!!} g</td>
                        </tr>
                        <tr class="tabborder">
                            <td>Proteins</td>
                            <td id="actual_proteins">00 g</td>
                            <td id="proteins_goal">{!! $user_goal['proteins'] ?? 00!!} g</td>
                        </tr>
                        <tr class="tabborder">
                            <td>Fats</td>
                            <td id="actual_fats">00 g</td>
                            <td id="fats_goal">{!! $user_goal['fats'] ?? 00!!} g</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="mealarea">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="mealhead">
                        <h3>Today’s Meal</h3>
                    </div>
                </div>
            </div>
            <div role="tabpanel">
                <!-- Nav tabs -->
                <div class="mytabs">
                    <ul class="nav nav-tabs" role="tablist" id="nav_tab">
                        <li role="presentation" id="breakfast_tab" class="tabs active">
                            <a href="#breakfast" aria-controls="Breakfast" role="tab" data-toggle="tab">Breakfast</a>
                        </li>
                        <li role="presentation" id="lunch_tab" class="tabs">
                            <a href="#lunch" aria-controls="Lunch" role="tab" data-toggle="tab">Lunch</a>
                        </li>
                        <li role="presentation" id="dinner_tab" class="tabs">
                            <a href="#dinner" aria-controls="Dinner" role="tab" data-toggle="tab">Dinner</a>
                        </li>
                        <button type="button" class="btn btn-primary addmeal" data-toggle="modal" href='#meal_modal'>Add Meal</button>
                    </ul>

                </div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="breakfast">

                        <table class="table mytable table-bordered">
                            <thead>
                                <tr class="tabborder">
                                    <th scope="col">Food / Ingredients</th>
                                    <th scope="col">Carbohydrates</th>
                                    <th scope="col">Fats Breakfast</th>
                                    <th scope="col">Proteins Breakfast</th>
                                    <th scope="col">Calories Breakfast</th>
                                </tr>
                            </thead>
                            <tbody id="breakfast_data">

                            </tbody>
                        </table>

                    </div>
                    <div role="tabpanel" class="tab-pane" id="lunch">

                        <table class="table mytable table-bordered">
                            <thead>
                                <tr class="tabborder">
                                    <th scope="col">Food / Ingredients</th>
                                    <th scope="col">Carbohydrates</th>
                                    <th scope="col">Fats</th>
                                    <th scope="col">Proteins</th>
                                    <th scope="col">Calories</th>
                                </tr>
                            </thead>
                            <tbody id="lunch_data">

                            </tbody>
                        </table>

                    </div>

                    <div role="tabpanel" class="tab-pane" id="dinner">

                        <table class="table mytable table-bordered">
                            <thead>
                                <tr class="tabborder">
                                    <th scope="col">Food / Ingredients</th>
                                    <th scope="col">Carbohydrates</th>
                                    <th scope="col">Fats</th>
                                    <th scope="col">Proteins</th>
                                    <th scope="col">Calories</th>
                                </tr>
                            </thead>
                            <tbody id="dinner_data">

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<div class="modal fade" id="goal_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{asset('user/addgoal')}}" id="add_goal" name="add_goal">
                <meta name="csrf-token" content="{{ csrf_token() }}" />
                <div class="modal-body">
                    <div class="row modalhead">
                        <div class="col-sm-12">
                            <div class="modalheaddata">
                                <h4>Add Goals</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row modalsecond">
                        <div class="col-sm-6">
                            <div class="modalright">
                                <p>Current Weight</p>
                                <p>Goal Weight</p>
                                <p>Weekly Goal</p>
                                <p>Activity Level</p>
                                <p>Calories Goal</p>
                                <p class="macro">Macro-Nutrients Goals</p>
                                <p class="blue">Carbohydrates</p>
                                <p class="red">Fats</p>
                                <p class="green">Proteins</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="modalleft">
                                <div class="form-group">
                                    <input id="current_weight" class="form-control kilo" type="number" name="current_weight" placeholder="80 kg/g" required>
                                    <input id="goal_weight" class="form-control kilo" type="number" name="goal_weight" placeholder="80 kg/g" required>
                                    <select class="form-control kilo" id="weekly_goal" name="weekly_goal" required>
                                        <option>Choose</option>
                                        <option>Lose 1 kg per week</option>
                                        <option>Lose 0.75 kg per week</option>
                                        <option>Lose 0.5 kg per week</option>
                                        <option>Lose 0.25 kg per week</option>
                                        <option>Maintain my current weight</option>
                                        <option>Gain 0.25 kg per week</option>
                                        <option>Gain 0.5 kg per week</option>
                                    </select>
                                    <select class="form-control kilo" id="activity_level" name="activity_level" required>
                                        <option>Choose</option>
                                        <option>Not very Active</option>
                                        <option>Lightly Active</option>
                                        <option>Active</option>
                                        <option>Very Active</option>
                                    </select>
                                    <input id="calories_goal" class="form-control kilo" type="number" name="calories_goal" placeholder="Enter..." required><br><br>
                                    <input id="carbohydrates" class="form-control kilo" type="number" name="carbohydrates" placeholder="Enter..." required>
                                    <input id="fats" class="form-control kilo" type="number" name="fats" placeholder="Enter..." required>
                                    <input id="proteins" class="form-control kilo" type="number" name="proteins" placeholder="Enter..." required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row modalunclick">
                        <div class="col-sm-12">
                            <div class="modalmyclick">
                                <button type="submit" class="btn btn-primary modalsave" id="save_meal">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="meal_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body productbody">
                <div class="row mealhead">
                    <div class="col-sm-12">
                        <div class="mealheaddata">
                            <h4>Add Meal</h4>
                        </div>
                    </div>
                </div>
                <div class="row sercharea">
                    <div class="col-sm-12">
                        <div class="myserch">
                            <form action="/action_page.php">
                                <input type="text" placeholder="2 Large pizza Search.." name="search" class="sercharea" id="search_food">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row modalproducs myfoodlist" id="myfoodlist">
                    <div class="col-sm-3">
                        <div class="productbox">
                            <div class="productboximg">
                                <img src="{{ asset('images/product-02.jpg')}}" class="img-responsive">
                            </div>
                            <div class="productboxdata">
                                <h4>Nutella’s Mores Cake</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="productbox">
                            <div class="productboximg">
                                <img src="{{ asset('images/product-02.jpg')}}" class="img-responsive">
                            </div>
                            <div class="productboxdata">
                                <h4>Nutella’s Mores Cake</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="productbox">
                            <div class="productboximg">
                                <img src="{{ asset('images/product-02.jpg')}}" class="img-responsive">
                            </div>
                            <div class="productboxdata">
                                <h4>Nutella’s Mores Cake</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="productbox">
                            <div class="productboximg">
                                <img src="{{ asset('images/product-02.jpg')}}" class="img-responsive">
                            </div>
                            <div class="productboxdata">
                                <h4>Nutella’s Mores Cake</h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="product_detail">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body productbody">
                <form id="addmeal" method="post" action="{{ url('user/addmeal') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="modalimg">
                                <img src="{{ asset('images/product-02.jpg')}}" class="img-responsive" id="food_image">
                            </div>
                        </div>
                        <input id="meal_carbs" name="meal_carbs" value="" type="hidden" />
                        <input id="meal_type" name="meal_type" value="" type="hidden" />
                        <input id="meal_name" name="meal_name" value="" type="hidden" />
                        <input id="meal_protein" name="meal_protein" value="" type="hidden" />
                        <input id="meal_fats" name="meal_fats" value="" type="hidden" />
                        <input id="meal_cal" name="meal_cal" value="" type="hidden" />
                        <div class="col-sm-9">
                            <div class="modaltext">
                                <p id="food_lable">
                                    Cake
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="numbox">
                                <div class="numboxdata">
                                    <p>
                                        Serving Size
                                    </p>
                                </div>
                                <div class="dropdown">
                                    <Input id="serving_size" name="serving_size" />
                                    <!-- <button class="btn btn-primary dropdown-toggle modaldrop" type="button" data-toggle="dropdown">Select
                                        <span class="caret"></span></button>
                                    <ul class="dropdown-menu serving">

                                    </ul> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="numbox">
                                <div class="numboxdata">
                                    <p>
                                        No. of Serving
                                    </p>
                                </div>
                                <div class="dropdown">
                                    <Input id="no_of_serving" name="no_of_serving" />
                                    <!-- <button class="btn btn-primary dropdown-toggle modaldrop" type="button" data-toggle="dropdown">Select
                                        <span class="caret"></span></button>
                                    <ul class="dropdown-menu serving">
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">6</a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="modaltwocklick">
                                <button type="submit" id="submit_meal" class="btn btn-primary prime">Add Meal</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>







<script>
    $(document).ready(function() {
        search_text = 'a';
        populate_food_list(search_text)

    });


    $('.sercharea').keypress(function(e) {
        if (e.which == 13) {
            var food_search = $("input[id=search_food]").val();
            // populate_food_list(food_search)
            search_food_list(food_search)
            return false; //<---- Add this line
        }
    });

    function search_food_list(item) {
        let nutrition_url = `https://trackapi.nutritionix.com/v2/natural/nutrients`

        $.ajax({
            url: nutrition_url,
            type: "post",
            headers: {
                'Accept': 'application/json',
                'x-app-key': '1853d79233f466e3380ff9a0c7d19647',
                'x-app-id': '220c66d7'
            },
            data: {
                query: item
            },

            success: function(response) {
                var list = '';
                var list_html = ''

                list_html = list_html + food_list_html(response.foods)
                $('#myfoodlist').html(list_html);
                // for (var i = 0; i < response.hints.length; i++) {
                //     list_html = list_html + get_food_item_html(response.hints[i]);

                // }
                // $('#myfoodlist').html(list_html);
            },
        });

    }

    function populate_food_list(item) {

        let prduct_url = `https://api.edamam.com/api/food-database/v2/parser?ingr=` + item + `&app_id=4819c10f&app_key=6012e6f0e31b18f6f4b5fcce140b7f73`

        $.ajax({
            url: prduct_url,
            type: "get",

            success: function(response) {
                var list = '';
                var list_html = ''
                for (var i = 0; i < response.hints.length; i++) {
                    list_html = list_html + get_food_item_html(response.hints[i]);

                }
                $('#myfoodlist').html(list_html);
            },
        });
    }


    function get_food_item_html(item) {


        return `
        <div class="col-sm-3">
                        <div class="productbox">
                            <a onclick='search_food_list(` + JSON.stringify(item.food.label) + `);'>
                            <div class="productboximg">
                                <img src="` + item.food.image + `" class="img-responsive">
                            </div>
                            <div class="productboxdata">
                                <h4>` + item.food.label + `</h4>
                            </div>
                            </a>
                        </div>
                    </div>
                    `;
    }

    function food_list_html(item) {

        return `
        <div class="col-sm-3">
                        <div class="productbox">
                            <a onclick='open_detail_modal(` + JSON.stringify(item[0]) + `);'>
                            <div class="productboximg">
                                <img src="` + item[0].photo.highres + `" class="img-responsive">
                            </div>
                            <div class="productboxdata">
                                <h4>` + item[0].food_name + `</h4>
                            </div>
                            </a>
                        </div>
                    </div>
                    `;
    }

    function open_detail_modal(item) {
        let food_image = item.photo.highres;
        let food_lable = item.food_name;
        let food_fat = item.nf_total_fat;
        let food_protein = item.nf_protein;
        let food_carbs = item.nf_total_carbohydrate;
        let food_cal = item.nf_calories;
        let serve_unit = item.serving_unit;
        let serve_qty = item.serving_qty;
        let meal_type = ''

        var active_tab = $('ul#nav_tab').find('li.active').attr('id')
        if (active_tab == 'breakfast_tab') {
            meal_type = 'breakfast';
        } else if (active_tab == 'lunch_tab') {
            meal_type = 'lunch';
        } else {
            meal_type = 'dinner'
        }

        $('#meal_type').val(meal_type);
        $('#meal_name').val(food_lable);
        $('#meal_protein').val(food_protein);
        $('#meal_carbs').val(food_carbs);
        $('#meal_fats').val(food_fat);
        $('#meal_cal').val(food_cal);
        $('#no_of_serving').val(serve_qty);
        $('#serving_size').val(serve_unit);
        $('#food_image').attr("src", food_image);
        $('#food_lable').html(food_lable);
        $('#meal_modal').modal('toggle');
        $('#product_detail').modal('toggle');
    }



    $("#save_meal").click(function(event) {
        event.preventDefault();

        var current_weight = $("input[name=current_weight]").val();
        var goal_weight = $("input[name=goal_weight]").val();
        var calories_goal = $("input[name=calories_goal]").val();
        var carbohydrates = parseInt($("input[name=carbohydrates]").val());
        var fats = parseInt($("input[name=fats]").val());
        var proteins = parseInt($("input[name=proteins]").val());
        var weekly_goal = $("select[name=weekly_goal]").val();
        var activity_level = $("select[name=activity_level]").val();
        var _token = $('meta[name="csrf-token"]').attr('content');
        var my_url = $("form[name=add_goal]").attr('action'); //$form.attr( 'action' );

        console.log('fats', fats)
        console.log('carbohydrates', carbohydrates)
        console.log('proteins', proteins)
        let total_goal = parseInt(fats + carbohydrates + proteins);
        console.log('total_goal', total_goal)
        $("#total_goal_cal").html(total_goal);

        $('#goal_modal').modal('toggle');
        // $("#goal_weight_li").html(calories_goal);
        $("#goal_weight_li").html(goal_weight);
        $("#weekly_goal_li").html(weekly_goal);
        $("#activity_level_li").html(activity_level);
        $("#start_weight_li").html(current_weight);
        $("#cabs_goal").html(carbohydrates);
        $("#proteins_goal").html(proteins);
        $("#fats_goal").html(fats); 

        $.ajax({
            url: my_url,
            type: "post",
            data: {
                current_weight: current_weight,
                goal_weight: goal_weight,
                calories_goal: calories_goal,
                carbohydrates: carbohydrates,
                fats: fats,
                proteins: proteins,
                weekly_goal: weekly_goal,
                activity_level: activity_level,
                _token: _token
            },
            success: function(response) {
                console.log('response !!!!!!!!!', response);
            },
        });
    });

    $("#save_exercise").click(function(event) {
        let current_ex_cal = $("input[name=exercise_input]").val();
        console.log('current_ex_cal', current_ex_cal)

        $("#exercise_cal").html(current_ex_cal);

        let total_goal_cal = $('#total_goal_cal').text(); //consume_cal
        let consume_cal = $('#consume_cal').text(); //consume_cal
        let add_cal = total_goal_cal + consume_cal; //-current_ex_cal
        let remaining_cal = add_cal - current_ex_cal
        $("#remaining_cal").html(remaining_cal);

        let calculator_url = "{!! url('user/nutritionCal') !!}";
        let _token = "{{ csrf_token() }}";
        $.ajax({
            type: "POST",
            url: calculator_url,
            data: {
                remaining_cal,
                consume_cal,
                total_goal_cal,
                _token
            }, // serializes the form's elements.
            success: function(response) {
                console.log(response.data);
            }

        });


    });

    //add meal form submit 
    $("#addmeal").submit(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this);
        var url = form.attr('action');

        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function(response) {
                console.log(response.data);
                let response_data = response.data

                console.log('response_data response_data', response_data);
                let list_html;
                list_html = list_html + meal_html(response_data);

                $('#' + response.meal_tab).append(list_html);

                // actual fats
                let actual_fats = $('#actual_fats').text();
                actual_fats = parseInt(actual_fats.substring(0, actual_fats.length - 1)) + response_data.fats;
                $('#actual_fats').html(actual_fats);

                // actual proteins
                let actual_proteins = $('#actual_proteins').text();
                actual_proteins = parseInt(actual_proteins.substring(0, actual_proteins.length - 1)) + response_data.protein;
                $('#actual_proteins').html(actual_proteins);
                // actual carbs
                let actual_carbs = $('#actual_carbs').text();
                actual_carbs = parseInt(actual_carbs.substring(0, actual_carbs.length - 1)) + response_data.carbohydrates;
                $('#actual_carbs').html(actual_carbs);

                let consume_cal = $('#consume_cal').text();
                consume_cal = parseInt(consume_cal.substring(0, consume_cal.length - 1)) + response_data.calories;
                $('#consume_cal').html(consume_cal);
                console.log('consume_cal consume_cal', consume_cal);

                let total_goal_cal = $('#total_goal_cal').text(); //consume_cal
                let nutrition_cal = total_goal_cal + consume_cal;


            }
        });

    });

    function meal_html(item) {

        return `
                <tr class="tabborder">
                    <td>` + item.meal_name + `</td>
                    <td>` + item.carbohydrates + ` g</td>
                    <td>` + item.fats + ` g</td>
                    <td>` + item.protein + `g</td>
                    <td>` + item.calories + ` Calories</td>
                </tr>
            `
    }
</script>


@endsection
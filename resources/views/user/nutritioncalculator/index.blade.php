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
                            <li id="current_weight_li">00 Kg</li>
                            <li id="goal_weight_li">00 Kg</li>
                            <li id="weekly_goal_li">00 Kg</li>
                            <li id="activity_level_li">00 Kg</li>
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
                        <h4 id="total_goal_cal">0000</h4>
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
                        <h4>0000</h4>
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
                        <h4>1500</h4>
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
                            <td>00 Calories</td>
                            <td id="cabs_goal">00 Calories</td>
                        </tr>
                        <tr class="tabborder">
                            <td>Proteins</td>
                            <td>00 Calories</td>
                            <td id="proteins_goal">00 Calories</td>
                        </tr>
                        <tr class="tabborder">
                            <td>Fats</td>
                            <td>00 Calories</td>
                            <td id="fats_goal">00 Calories</td>
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
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#home" aria-controls="Breakfast" role="tab" data-toggle="tab">Breakfast</a>
                        </li>
                        <li role="presentation">
                            <a href="#tab" aria-controls="Lunch" role="tab" data-toggle="tab">Lunch</a>
                        </li>
                        <li role="presentation">
                            <a href="#tab" aria-controls="Dinner" role="tab" data-toggle="tab">Dinner</a>
                        </li>
                        <button type="button" class="btn btn-primary addmeal" data-toggle="modal" href='#meal_modal'>Add Meal</button>
                        <button type="button" class="btn btn-primary addmeal" data-toggle="modal" href='#product_detail'>Add Meal 23</button>
                    </ul>

                </div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="Breakfast">

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
                            <tbody>
                                <tr class="tabborder">
                                    <td>Chicken Soup</td>
                                    <td>0g</td>
                                    <td>7g</td>
                                    <td>6g</td>
                                    <td>94 Calories</td>
                                </tr>
                                <tr class="tabborder">
                                    <td>Chicken Soup</td>
                                    <td>0g</td>
                                    <td>7g</td>
                                    <td>6g</td>
                                    <td>94 Calories</td>
                                </tr>
                                <tr class="tabborder">
                                    <td>Chicken Soup</td>
                                    <td>0g</td>
                                    <td>7g</td>
                                    <td>6g</td>
                                    <td>94 Calories</td>
                                </tr>
                                <tr class="tabborder">
                                    <td>Chicken Soup</td>
                                    <td>0g</td>
                                    <td>7g</td>
                                    <td>6g</td>
                                    <td>94 Calories</td>
                                </tr>
                                <tr class="tabborder">
                                    <td>Chicken Soup</td>
                                    <td>0g</td>
                                    <td>7g</td>
                                    <td>6g</td>
                                    <td>94 Calories</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div role="tabpanel" class="tab-pane" id="Lunch">

                        <table class="table mytable">
                            <thead>
                                <tr class="tabborder">
                                    <th scope="col">Food / Ingredients</th>
                                    <th scope="col">Carbohydrates</th>
                                    <th scope="col">Fats</th>
                                    <th scope="col">Proteins</th>
                                    <th scope="col">Calories</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="tabborder">
                                    <td>Chicken Soup</td>
                                    <td>0g</td>
                                    <td>7g</td>
                                    <td>6g</td>
                                    <td>94 Calories</td>
                                </tr>
                                <tr class="tabborder">
                                    <td>Chicken Soup</td>
                                    <td>0g</td>
                                    <td>7g</td>
                                    <td>6g</td>
                                    <td>94 Calories</td>
                                </tr>
                                <tr class="tabborder">
                                    <td>Chicken Soup</td>
                                    <td>0g</td>
                                    <td>7g</td>
                                    <td>6g</td>
                                    <td>94 Calories</td>
                                </tr>
                                <tr class="tabborder">
                                    <td>Chicken Soup</td>
                                    <td>0g</td>
                                    <td>7g</td>
                                    <td>6g</td>
                                    <td>94 Calories</td>
                                </tr>
                                <tr class="tabborder">
                                    <td>Chicken Soup</td>
                                    <td>0g</td>
                                    <td>7g</td>
                                    <td>6g</td>
                                    <td>94 Calories</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                    <div role="tabpanel" class="tab-pane" id="Dinner">

                        <table class="table mytable">
                            <thead>
                                <tr class="tabborder">
                                    <th scope="col">Food / Ingredients</th>
                                    <th scope="col">Carbohydrates</th>
                                    <th scope="col">Fats</th>
                                    <th scope="col">Proteins</th>
                                    <th scope="col">Calories</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="tabborder">
                                    <td>Chicken Soup</td>
                                    <td>0g</td>
                                    <td>7g</td>
                                    <td>6g</td>
                                    <td>94 Calories</td>
                                </tr>
                                <tr class="tabborder">
                                    <td>Chicken Soup</td>
                                    <td>0g</td>
                                    <td>7g</td>
                                    <td>6g</td>
                                    <td>94 Calories</td>
                                </tr>
                                <tr class="tabborder">
                                    <td>Chicken Soup</td>
                                    <td>0g</td>
                                    <td>7g</td>
                                    <td>6g</td>
                                    <td>94 Calories</td>
                                </tr>
                                <tr class="tabborder">
                                    <td>Chicken Soup</td>
                                    <td>0g</td>
                                    <td>7g</td>
                                    <td>6g</td>
                                    <td>94 3232323Calories</td>
                                </tr>
                                <tr class="tabborder">
                                    <td>Chicken Soup</td>
                                    <td>0g</td>
                                    <td>7g</td>
                                    <td>6g</td>
                                    <td>94 Calories</td>
                                </tr>
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
                                <input type="text" placeholder="Search.." name="search" class="sercharea" id="search_food">
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
               
               <div class="row">
               <div class="col-sm-3">
               <div class="modalimg">
               <img src="{{ asset('images/product-02.jpg')}}" class="img-responsive"></div>
                </div>
                <div class="col-sm-9">
               <div class="modaltext">
               <p>
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
                Cake
                </p>
                </div>
                <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle modaldrop" type="button" data-toggle="dropdown">Dropdown Example
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
    </ul>
  </div>
                </div>
                </div>
                <div class="col-sm-6">
                <div class="numbox">
                <div class="numboxdata">
                <p>
                Cake
                </p>
                </div>
                <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle modaldrop" type="button" data-toggle="dropdown">Dropdown Example
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
    </ul>
  </div>
                </div>
                </div>
               </div>
               
               <div class="row">
               <div class="col-sm-12">
               <div class="modaltwocklick">
                <button type="button" class="btn btn-primary prime">Primary</button>
               </div>
               </div>
               
               </div>

            </div>
        </div>
    </div>
</div>







<script>
    $(document).ready(function() {
        search_text= 'a';
        populate_food_list(search_text)

    });


    $('.sercharea').keypress(function(e) {
        if (e.which == 13) {
            var food_search = $("input[id=search_food]").val();
            populate_food_list(food_search)
            return false; //<---- Add this line
        }
    });

    function populate_food_list(item) {
        let prduct_url = `https://api.edamam.com/api/food-database/v2/parser?ingr=`+item+`&app_id=4819c10f&app_key=6012e6f0e31b18f6f4b5fcce140b7f73`
        
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
                            <div class="productboximg">
                                <img src="` + item.food.image + `" class="img-responsive">
                            </div>
                            <div class="productboxdata">
                                <h4>` + item.food.label + `</h4>
                            </div>
                        </div>
                    </div>
                    `;
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
    });
</script>


@endsection
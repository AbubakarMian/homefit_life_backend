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
                            <li>Tuesday, 1st September 2020</li>
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
                            <li></li>
                            <li></li>
                            <li></li>
                            <li class="eightykg">80 kg on Tuesday, 1st September 2020</li>
                            <li>80 kg</li>
                            <li>60 kg</li>
                            <li>Lose 1 kg per week</li>
                            <li>Not very active</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="goalclick">
                        <button type="button" class="btn btn-primary aaddgoal" data-toggle="modal" href='#modal-id'>Add Goals</button>
                    </div>
                </div>
            </div>

            <div class="row caloriesfind">
                <div class="calform">
                <form>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-1 col-form-label exercise">Exercise</label>
                        <div class="col-sm-10">
                        <input class="form-control calformdata" type="text" placeholder="1500 Calories">
                        </div>
                        <div class="col-sm-1">
                            <button type="button" class="btn btn-primary save">Save</button>
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
                        <h4>1500</h4>
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
                        <h4>0000</h4>
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
                <table class="table mytable">
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
                            <td>Proteins</td>
                            <td>Fats</td>
                        </tr>
                        <tr class="tabborder">
                            <td>00 Calories</td>
                            <td>20 Calories</td>
                            <td>40 Calories</td>
                        </tr>
                        <tr class="tabborder">
                            <td>60 Calories</td>
                            <td>70 Calories</td>
                            <td>80 Calories</td>
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
                        <button type="button" class="btn btn-primary addmeal" data-toggle="modal" href='#modal-ids'>Add Meal</button>      
                    </ul>
                    
                </div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="Breakfast">

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
                </div>
            </div>

        </div>
    </div>
</section>


<div class="modal fade" id="modal-id">
    <div class="modal-dialog">
        <div class="modal-content">
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
                                        <input id="my-input" class="form-control kilo" type="text" name="" placeholder="Enter...">
                                        <input id="my-input" class="form-control kilo" type="text" name="">
                                        <select class="form-control kilo" id="exampleFormControlSelect1"> 
                                            <option>Choose</option>
                                            <option>Lose 1 kg per week</option>
                                            <option>Lose 0.75 kg per week</option>
                                            <option>Lose 0.5 kg per week</option>
                                            <option>Lose 0.25 kg per week</option>
                                            <option>Maintain my current weight</option>
                                            <option>Gain 0.25 kg per week</option>
                                            <option>Gain 0.5 kg per week</option>
                                        </select>
                                        <select class="form-control kilo" id="exampleFormControlSelect1">
                                            <option>Choose</option>
                                            <option>Not very Active</option>
                                            <option>Lightly Active</option>
                                            <option>Active</option>
                                            <option>Very Active</option>
                                        </select>
                                        <input id="my-input" class="form-control kilo" type="text" name="" placeholder="Enter..."><br>
                                        <input id="my-input" class="form-control kilo" type="text" name="" placeholder="Enter...">
                                        <input id="my-input" class="form-control kilo" type="text" name="" placeholder="Enter...">
                                        <input id="my-input" class="form-control kilo" type="text" name="" placeholder="Enter...">                                        
                                    </div>
                               </div>
                            </div>
                        </div>
                        <div class="row modalunclick">
                            <div class="col-sm-12">
                               <div class="modalmyclick">
                                    <button type="button" class="btn btn-primary modalsave">Save</button>
                               </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="modal-ids">
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
                          <input type="text" placeholder="Search.." name="search" class="sercharea">                
                        </form>
                        </div>
                    </div>
                </div>
                <div class="row modalproducs">
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
                <div class="row modalproducs">
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














@endsection
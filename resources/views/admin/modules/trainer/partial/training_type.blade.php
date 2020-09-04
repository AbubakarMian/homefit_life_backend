<?php
use \Illuminate\Support\Facades\Config;
use App\Models\Training_Type;

// $lang = $admin_common->language;
// $label_arr = Config::get('multilang.'.$lang);

// $cities_label = $label_arr['cities_label'];
// $all_label = $label_arr['all_label'];
$all_trainig_list =Training_Type::all();
?>
<!-- Popup of Cities -->
<div class="modal fade cities in" tabindex="-1" role="dialog" aria-hidden="false">
    <div class="modal-dialog" id="set_modal_size">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Training Type</h4>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="form-group">
                    <!-- <input id="all_training_types"
                                   onclick="select_all_training_types();"
                                   type="checkbox"> -->
                        <!-- @foreach($all_trainig_list as $tr) -->
                        <!-- <label class="col-sm-10 control-label">
                            &nbsp;
                            <input id="all_training_types"
                                   onclick="select_all_training_types();"
                                   type="checkbox">
                        </label> -->
                        <!-- @endforeach -->
                    </div>
                </div>

                <div class="row" id="training_type_modal">

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" onclick="update_training_type()" class="btn btn-primary" data-dismiss="modal">Save</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Popup of Cities -->
<script>

    function get_training_type() {

        $('#all_training_types').prop('checked', false);

        // var country = $('#selected_country option:selected').val();

        var my_url = "{!! asset('index.php/admin_secure/get_training_type') !!}";

        $.ajax({
            url: my_url,
            dataType: 'json',
            method: 'GET',
            contentType: false,
            processData: false,

            success: function(data){


                if(data.data.length > 20){
                    $('#set_modal_size').removeClass('modal-md');
                    var modal_size =  'modal-lg';
                    var div_size = 3;
                }
                else{

                    $('#set_modal_size').removeClass('modal-lg');
                    var modal_size =  'modal-md';
                    var div_size = 6;
                }

                $('#set_modal_size').addClass(modal_size);

                var trHTML='';
                if(data.action == 'Sucess'){
                    data = data.data;
                    trHTML='';
                    for (var i = 0, len = data.length; i < len; i++) {
                     trHTML+=`<div class="col-md-`+div_size+`">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">&nbsp;</label>
                                <div class="col-sm-10">`;

                            var training_type = data[i];
                            var checked = '';
                            console.log('training_type',training_type.name);

                            trHTML += `<div class="checkbox">
                                            <label>
                                                <input class="city_class"
                                                       type="checkbox" `+checked+`
                                                       value="`+training_type.id+`">
                                                            `+training_type.name+`
                                    </label>
                                </div>`;

                        trHTML +=`</div></div></div>`;
                    }

                    $('#training_type_modal').html(trHTML);

                }

            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    }

    function update_training_type() {


        var my_url = '{!! asset("index.php/admin_secure/update_trainer_training_type") !!}';
        console.log(my_url)
        var formData = new FormData();
        formData.append("_token", '{!! csrf_token()!!}');
        formData.append("trainer_id", '{!! $trainer->id!!}');
        $(".city_class:checked").each(function() {
            formData.append(this.value,$(this).val());
        });

        $.ajax({
            url: my_url,
            dataType: 'json',
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,

            success: function(data){
                console.log('data :',data);
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });

    }

    function select_all_training_types() {

        if($("#all_training_types").is(':checked')) {
            $('input.city_class').prop('checked', true);
            $('input.city_class').attr('checked', true);
        } else {
            $('input.city_class').attr('checked', false);
            $('input.city_class').prop('checked', false);
        }
    }

</script>
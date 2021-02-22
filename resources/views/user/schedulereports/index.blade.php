@extends('user.layouts.dasboard')

@section('dashboard')
    <section>
        <link href="{{ asset('css/shedulereort.css') }}" rel="stylesheet">
        <div class="container">
            <div style="background-color: #d6d6d6;height: 240px;">


                <div class="heading">
                    <strong>
                        <h1>Schedule Reports</h1>
                    </strong>
                </div>
                <div class="divDatePicker">
                    {{-- <label for="" >Date Range Picker</label> --}}
                    <form method="post" action="{{ url('user/searchshedule') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div>
                            <div class="form-row align-items-center">
                                <div class="col-sm-5">
                                    <label for="" style="color: #000">Class Name</label>
                                    <input type="text" class="form-control mb-2" id="inlineFormInput"
                                        placeholder="Enter class name" name="class_name">
                                </div>

                                <div class="col-sm-5">
                                    <label class="" for="" style="color: #000">Category</label>
                                    <select class="form-control mb-2" name="is_personal" id="is_personal">
                                        <option selected="true" disabled="disabled">Enter category name</option>
                                        <option value="0">Group class</option>
                                        <option value="1">Personal</option>
                                    </select>
                                </div>

                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm1">
                                    <button type="submit" class="btn btn-primary mb-2">Submit <span>
                                            <i class="fa fa-search"></i>
                                        </span></button>
                                </div>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
            <div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Trainer Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user_slot as $u_slot)
                            <tr>
                                <td> {!! $u_slot->training_class->name !!}</td>
                                <td>{!!  $u_slot->training_class->trainer->name !!}</td>
                                <td>{!!  $u_slot->training_class->is_personal == 0 ? 'group' : 'personal' !!}</td>
                                <td>
                                    <a href="{!!   $u_slot->training_class->live_url !!}"
                                        onclick="updateUser({{ $u_slot }})" class="btn btn-sm btn-danger"
                                        target="_blank">JOIN</a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>



    <script>
        function updateUser(trainer_slot) {

           
            let update_user_url = "{!! url('user/updateUserSession') !!}";  
            let _token = "{{ csrf_token() }}";
            let user_id = trainer_slot.training_class.training_class_user[0].user_id ; 
            let training_class_id = trainer_slot.training_class.id ;
            let package_id = trainer_slot.training_class.training_class_user[0].package_id;
            let trainer_slot_id = trainer_slot.id;
            let trainer_class_user_id = trainer_slot.training_class.training_class_user[0].id;

            $.ajax({
                url: update_user_url,
                type: 'POST',
                data: {
                    user_id,
                    training_class_id,
                    trainer_slot_id,
                    package_id,
                    trainer_class_user_id,
                    _token
                },
                dataType: 'json', // added data type
                success: function(res) {
                    console.log(res);
                    // alert(res);
                }
            });
        }

    </script>
@endsection

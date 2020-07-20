<div class="col-xs-4">
    <div class="form-group">
        <label>Date Range Picker</label>
        <div class="mb15">
            <fieldset>
                <div class="control-group">
                    <small>Select Date Range</small>
                    <div class="controls">
                        <div class="input-prepend input-group">
                            <span class="add-on input-group-addon"><i class="ti-calendar"></i></span>
                            <input type="text" name="date" id="reservationtime"
                                   class="form-control active" value="{!!$date!!}">
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</div>

<div class="col-xs-3 pull-left" style="padding-top: 16px;">

    <label class="control-label">User</label>

    <br>
    {!!Form::text('user',$search_text,
                    ['class'=>'form-control' , 'id'=>'user','placeholder'=>'User'])!!}
</div>

{{-- <div class="col-xs-3">
    <div class="form-group">
        <label>Search Request #</label>
        <div class="mb15">
            <fieldset>
                <div class="control-group">
                    <small>Enter Num</small>
                    <div class="controls">
                        <div class="input-prepend input-group">
                            <span class="add-on input-group-addon"></span>
                            {!! Form::text('req_num',$req_num, ['class' => 'form-control',
                            'data-parsley-required'=>'true',
                            'data-parsley-trigger'=>'change',
                            'placeholder'=>'Request #','id'=>'req_num']) !!}
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</div> --}}



<div class="col-xs-2">
    <label class="control-label">Status</label>
    <br>
    <small>Choose Status</small>
    {!!Form::select('status',$status_arr ,$status,['class'=>'form-control' , 'id'=>'status'])!!}
</div>


<input type="hidden" name="lat" id="lat" >
<input type="hidden" name="long" id="long" >

<div class="col-md-2 pull-left" style="padding: 0 0 4px 0 !important; margin-top: 16px;">
    <div class="form-group text-center">
        <div>
            <input type="submit" class="btn btn-info pull-left date-range-review-btn"
                   value="Search">
        </div>
    </div>
</div>
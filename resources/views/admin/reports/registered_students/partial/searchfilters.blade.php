
<div class="col-xs-3 pull-left" style="padding-top: 16px;">

    <label class="control-label">Trainer/Class</label>

    <br>
    {!!Form::text('user',$search_text,
                    ['class'=>'form-control' , 'id'=>'user','placeholder'=>'Trainer/Class'])!!}
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
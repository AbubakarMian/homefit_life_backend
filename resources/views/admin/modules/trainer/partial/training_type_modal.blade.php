
<!-- Popup of Trainer Type -->
<div class="modal fade company in" tabindex="-1" role="dialog" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Training Type</h4>
            </div>
            <div class="modal-body">

                <div class="row">
                    @foreach($training_type_arr as $training_types)
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">&nbsp;</label>
                                <div class="col-sm-10">
                                        
                                    @foreach($training_types as $tt)

                                        <?php
                                        // dd($tt);
                                        if($tt->unchecked){
                                            $checked = '';
                                            $name = $tt->unchecked;
                                        }
                                        else{
                                            $checked = 'checked';
                                            $name = $tt->checked;
                                        }

                                        ?>

                                        <div class="checkbox">
                                            <label>
                                                <input class="training_checkbox"
                                                       type="checkbox" {!! $checked !!}
                                                       name="training_type_{!! $tt->id !!}"
                                                       value="{!! $tt->id !!}"
                                                >
                                                {!! $name !!}
                                            </label>
                                        </div>

                                    @endforeach

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Add</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Popup of Training Type -->

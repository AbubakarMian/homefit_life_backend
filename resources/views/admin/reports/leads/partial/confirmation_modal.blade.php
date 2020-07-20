<div id="myModal" class="modal fade {!! $req_status !!}" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Are you sure ?</h4>
            </div>
            <div class="modal-body">
                    {!! csrf_field() !!}
                    <input type="hidden" value="{!! $status !!}">
                    <button  name="status" class="btn {!! $status=='reject'? 'btn-danger':'btn-primary'!!}"
                             data-dismiss="modal"
                            onclick="change_modal_warning('{!! $url !!}',
                                    '{!! $status !!}',
                                    '{!! $cell_id !!}')">
                        {!! ucwords($status) !!}
                    </button>

            </div>
            {{--<div class="modal-footer">--}}
                {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
            {{--</div>--}}
        </div>

    </div>
</div>
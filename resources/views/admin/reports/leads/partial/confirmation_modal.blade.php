<div id="myModal" class="modal {!! $req_status !!}" role="dialog">
    <div class="modal-dialog modal-md">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center><h4 class="modal-title">Are you sure you want to {!!$status!!} request ?</h4></center>
            </div>
            <div class="modal-footer">
                {{-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> --}}
                <center>
                <button  name="status" class="btn {!! $status=='reject'? 'btn-danger':'btn-primary'!!}"
                             data-dismiss="modal"
                            onclick="change_modal_warning('{!! $url !!}',
                                    '{!! $status !!}',
                                    '{!! $cell_id !!}')">
                        {!! ucwords($status) !!}
                    </button>
                </center>
            </div>
        </div>

    </div>
</div>
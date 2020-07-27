<div id="myModal" class="modal fade detail_{!! $group_session_payments->id!!} " role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Registered students in this class</h4>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-striped mg-t editable-datatable">

                    <thead>
                    <tr>
                        <th>Students</th>
                    </tr>
                    </thead>
                    <tbody id="my-modal-table">
                        @foreach($group_session_payments->students as $student)
                        <tr>

                            <td>{!! $student->user->name !!}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>

    </div>
</div>
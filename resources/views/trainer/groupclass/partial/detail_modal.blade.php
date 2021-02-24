<!-- <div class="modal fade" id="detailPop" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Slots Detail</h4>
            </div>
            <div class="modal-body">
                <div id="my_msg_div" class="col-xs-12">
                    <div class="descriptionClasses">
                        <div class="row">
                            <div class="col-sm-9">
                                <div class="headArea">
                                    <h2 id="title"></h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>WeekDay</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                    </tr>
                                </thead>
                                <tbody id="slot_detail">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div> -->


<link href="{{ asset('css/newstore.css')}}" rel="stylesheet">

<div class="modal fade" id="detailPop" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-body">
                <div class="modalhead">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="modalheaddata">
                                <h4>Slots Detail</h4>
                            </div>
                        </div>
                    </div>

                    <div class="row modalwork">
                        <table class="table table-striped">
                            <thead>
                                <tr class="shedulebox">
                                    <th>WeekDay</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                </tr>
                            </thead>
                            <tbody id="slot_detail"></tbody>
                        </table>
                    </div>

                    <div class=" row modalclickarea">
                        <div class="modalclick">
                            <button type="button" class="btn btn-default modclick" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
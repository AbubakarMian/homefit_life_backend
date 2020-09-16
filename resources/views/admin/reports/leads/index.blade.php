@extends('layouts.default_report')

@section('module_name')
    Lead
@stop
@section('module_search_top')
    {!!Form::open(['method'=>'get','route' =>array('leads.excel')])!!}
    {!!Form::hidden('name',null,['id'=>'name'])!!}
    {!!Form::hidden('status',null,['id'=>'status'])!!}
    {!!Form::hidden('message',null,['id'=>'message'])!!}
    {!!Form::submit('Export To Excel',['class'=>'btn btn-success pull-right',
    'onclick'=>'return excel();', 'id'=>'export'])!!}
    {!!Form::close()!!}
@stop

@section('form')
    {!!Form::open(array('id'=>'search_form', 'method'=>'post','route' =>array('lead.index'),'class'=>'form-horizontal')) !!}
    @include('admin.reports.leads.partial.searchfilters')
    {!!Form::close()!!}
@stop

<style>
    td {
        white-space: nowrap;
        overflow: hidden;
        width: 30px;
        height: 30px;
        text-overflow: ellipsis;
    }
</style>
@section('table')

    <thead>
    <tr>
        <th>User</th>
        <!-- <th>Status</th> -->
        <th>Message</th>
        <th>Request Date </th>
        <th>Status</th>

    </tr>
    </thead>
    <tbody>
    @foreach($leads as $c)

        <td>{!! $c->user->name !!}</td>
         <!-- <td>{!! $c->status !!}</td>  -->
        <td>{!! $c->message !!}</td>
        <td>{!! $c->created_at !!}</td>
        <td id="td_{!! $c->id !!}">
            @if($c->status == 'pending')

                <a href="" data-toggle="modal" name="activate_delete" data-target=".accept_request_{!! $c->id !!}">
				<span class=" badge bg-info btn-success">
					Accept</span></a>
                @include('admin.reports.leads.partial.confirmation_modal',
                    [
                    'cell_id'=>'td_'.$c->id,
                    'req_status'=>'accept_request_'.$c->id,
                    'url'=>asset('admin_secure/leads/status_update/'.$c->id),
                    'status'=>'accept'
                    ])

                <a href="" data-toggle="modal" name="" data-target=".reject_request_{!! $c->id !!}">
				<span class=" badge bg-info btn-danger">
					Reject</span></a>
                @include('admin.reports.leads.partial.confirmation_modal',
                     [
                    'cell_id'=>'td_'.$c->id,
                    'req_status'=>'reject_request_'.$c->id,
                     'url'=>asset('admin_secure/leads/status_update/'.$c->id),
                     'status'=>'reject' ])
            @else
                {!! ucwords($c->status) !!}
            @endif

        </td>
        </tr>


    @endforeach
    </tbody>
@section('pagination')
    <span class="pagination pagination-md pull-right">{!! $leads->render() !!}</span>
    <div class="col-md-3 pull-left">
        <div class="form-group text-center">
            <div>
                {!! Form::open(['method' => 'get', 'route' => ['dashboard']]) !!}
                {!! Form::submit('Cancel', ['class' => 'btn btn-default btn-block btn-lg btn-parsley']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
@stop
@section('app_jquery')
    <script>
        function change_modal_warning(status_url,status,cell_id) {
            console.log('url',status_url);
            $.ajax({
                url:status_url,
                method:'POST',
                data: {'_token' :'{!! csrf_token() !!}',
                       'status' : status=='accept'?'accepted':'rejected'
                      },
                success: function(data){
                    $('#'+cell_id).html(data.new_value);
                    console.log("response",data);
                },
                error: function(errordata){
                    console.log(errordata)
                }
            }

            )


        }
    </script>
@endsection
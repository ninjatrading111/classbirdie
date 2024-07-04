@extends('layouts.admin')
@section('usercontent')
	<link href="{{asset('plugins/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet">
	<style type="text/css">
		.ordering, .orderbutton {
		    cursor: pointer;
		    margin-left: 10px;
		}
	</style>
	<div id="page-head">
		<div id="page-title">
			<h1 class="page-header text-overflow"> User Management </h1>
		</div>
		<ol class="breadcrumb">
			<li><a href="/"><i class="demo-pli-home"></i></a></li>
		</ol>
	</div>
	<div id="page-content">
		@if(Session::has('message'))
			<div class="alert alert-success">
				<button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
				{!!Session::get('message')!!}
			</div>
		@endif
        <div class="form-group">
            <a class="btn btn-primary float-right" href="/admin/adduser"> Add User </a>
        </div>

        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Basic Data Tables with responsive plugin</h3>
            </div>
            <div class="panel-body">
                <table id="demo-dt-basic" class="table table-striped table-hover table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>email</th>
                            <th>role</th>
                            <th class="min-tablet">active</th>
                            <th class="min-tablet">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$user->email}}</td>
                            <td>{{$user->role}}</td>
                            <td>@php if($user->active==1) {echo('<span class="label label-primary"> Active </span>');}else echo('<span class="label label-danger">  Disabled </span>'); @endphp</td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a  data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Update"   href = "{{route('admin.adduser',$user->id)}}" class="btn btn-primary add-tooltip"><i class="fa fa-edit"></i></a>
                                    @if($user->active==0)
                                    <a  data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Re-activate"   href = "#" data-id={{$user->id}} data-action="repending" class="btn btn-warning add-tooltip action"><i class="fa fa-undo"></i></a>
                                    @else
                                    <a  data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Disable" href="javascript:void(0)" data-url={{route('admin.userlist')}} data-id={{$user->id}} data-action="pending"   class="btn btn-danger  action"><i class="fa fa-times"></i></a>
                                    @endif
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
	</div>

	<div id="confirmreset" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"> Alert </h4>
				</div>
				<div class="modal-body">
					<div class = "form-group">
						<div class="col-md-12">
							Reset Password and Resend Setup Email
						</div>
					</div>
					<input type = "hidden" name = "userid" id = "useridreset">
					<br>
					<div class = "form-group">
						<div class="col-md-12 text-center">
							<button type = "button" class="btn btn-mint confirmreset-button"> Yes </button>
							<button type = "button" class="btn btn-danger" data-dismiss = "modal"> Cancel </button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@push('scripts')
	<script>
		$(document).on('click', '.sendsetupemail', function(){
			$("#confirmreset").modal("show");
			$("#useridreset").val($(this).data('id'));
			$("#domain").prop('required', false);
		});
		$(document).on('click', '.action', function(){
            var id=$(this).attr('data-id');
            var action=$(this).attr('data-action')
            console.log(id)
			$.ajax({
				url: "{{route('admin.userlist.pending')}}",
				type: 'POST',
				dataType: 'json',
				data: {id:id,action:action},
				success: function(res) {
					console.log(res)
                    if(res.message=='success'){
                        window.location.reload(true);
                    }
				},
				complete: function () {
				},
				error: function() {
				}
			});
		});
	</script>
	@endpush
@endsection

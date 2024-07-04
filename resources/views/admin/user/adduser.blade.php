@extends('layouts.admin')
@section('usercontent')
	<div id="page-head">
		<div id="page-title">
			<h1 class="page-header text-overflow"> User Management </h1>
		</div>
		<ol class="breadcrumb">
			<li><a href="#">
           <i class="fa fa-plus"></i> &nbsp; Add User
            </a></li>
		</ol>
	</div>
	<div id="page-content">
		@if(Session::has('message'))
			<div class="alert alert-success">
				<button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
				{!!Session::get('message')!!}
			</div>
		@endif
		<div class="container">
            <div class="col-md-6">
                <form method='post' action="{{route('admin.adduser.saveuser')}}">
                    @csrf
                    <div class="form-group">
                        <label class="form-label">First name</label>
                        <input type='text' class="form-control" value="@if(!empty($user->first_name)) {{$user->first_name}} @endif" name="first_name"/>
                    </div>
                    <div class="form-group">
                        <label class="form-label">last name</label>
                        <input type='text' class="form-control" value="@if(!empty($user->last_name)) {{$user->last_name}} @endif" name="last_name"/>
                    </div>
                    <div class="form-group">
                        <label class="form-label">email</label>
                        <input type='email' class="form-control" value="@if(!empty($user->email)) {{$user->email}} @endif" name="email"/>
                    </div>
                    <div class="form-group">
                        <label class="form-label">password</label>
                        <input type='password' class="form-control" value="@if(!empty($user->password)) {{$user->password}} @endif" name="password"/>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="user_id" value="@if(!empty($user->id)) {{$user->id}} @endif"/>
                        <input type="submit" class="btn btn-primary" value="@if(!empty($user->id)) Update User @else Save User @endif">
                    </div>
                </form>
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

	</script>
	@endpush
@endsection

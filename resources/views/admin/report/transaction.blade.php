@extends('layouts.admin')
@section('usercontent')
	<style type="text/css">
		.ordering, .orderbutton {
		    cursor: pointer;
		    margin-left: 10px;
		}
	</style>
	<div id="page-head">
		<div id="page-title">
			<h1 class="page-header text-overflow"> Report / Transaction history </h1>
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
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">All the transaction history</h3>
            </div>
            <div class="panel-body">
                <table id="demo-dt-basic" class="table table-striped table-hover table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>amount</th>
                            <th class="min-tablet">method</th>
                            <th class="min-tablet">type</th>
                            <th class="min-desktop">status</th>
                            <th class="min-desktop">date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($payments as $payment)
                        <tr>
                            <td>{{$payment->first_name}} {{$payment->last_name}}</td>
                            <td>{{$payment->pay_amount}}</td>
                            <td>{{$payment->pay_method_type}}</td>
                            <td>@php if($payment->pay_type==0) {echo('<span class="label label-primary"> Weekly </span>');}else echo('<span class="label label-success">  Monthly </span>'); @endphp</td>
                            <td>@if($payment->pay_status==1) <span class="label label-primary"> Active </span>@else <span class="label label-danger"> disabled </span>@endif</td>
                            <td>{{$payment->pay_created}}</td>
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
		$(document).on('click', '.confirmreset-button', function(){
			$.ajax({
				url: "",
				type: 'POST',
				dataType: 'json',
				data: {_token : "{{ csrf_token() }}", data_id: $("#useridreset").val()},
				beforeSend: function () {

				},
				success: function(json) {
					if(json.status == 1){
						window.location.reload(true);
					}
					else{
						$("#confirmreset").modal("hide");
					}
				},
				complete: function () {
				},
				error: function() {
				}
			});
		});
		$(document).on("click", ".verifycompany", function(){
			$("#verifyform").attr('action', $(this).attr('data-url'));
			$("#domain-radio1").trigger("click");
			$(".domainlist").addClass('hide');
			$("#verifycompany").modal('show');
		});


		$(document).on("click", ".orderbutton", function(){
			var sorting = "";
			if($(this).hasClass("fa-sort-amount-asc") || $(this).hasClass("fa-sort-amount-desc")){
				if($(this).hasClass('fa-sort-amount-desc')){
					$(this).removeClass('fa-sort-amount-desc').addClass('fa-sort-amount-asc');
					sorting = "asc";
				}
				else{
					$(this).removeClass('fa-sort-amount-asc').addClass('fa-sort-amount-desc');
					sorting = "desc";
				}
			}
			else{
				$(".orderbutton").removeClass("ordering").removeClass("fa-sort-amount-asc").removeClass("fa-sort-amount-desc").addClass("fa-arrows-v");
				$(this).addClass("fa-sort-amount-asc").removeClass("fa-arrows-v");
				$(this).addClass("ordering");
				sorting = "asc";
			}
			$("input[name='orderby']").val($(".orderbutton.ordering").closest("th").data('type'));
			$("input[name='sorting']").val(sorting);
			$(".searchbutton").trigger("click");
		});
	</script>
	@endpush
@endsection

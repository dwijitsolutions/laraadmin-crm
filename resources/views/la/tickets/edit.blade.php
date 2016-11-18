@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/tickets') }}">Ticket</a> :
@endsection
@section("contentheader_description", $ticket->$view_col)
@section("section", "Tickets")
@section("section_url", url(config('laraadmin.adminRoute') . '/tickets'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Tickets Edit : ".$ticket->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				{!! Form::model($ticket, ['route' => [config('laraadmin.adminRoute') . '.tickets.update', $ticket->id ], 'method'=>'PUT', 'id' => 'ticket-edit-form']) !!}
					<div class="row">
						<div class="col-md-6">@la_input($module, 'title')</div>
						<div class="col-md-6">@la_input($module, 'organization')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'contact')</div>
						<div class="col-md-6">@la_input($module, 'assigned_to')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'project')</div>
						<div class="col-md-6">@la_input($module, 'priority')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'status')</div>
						<div class="col-md-6">@la_input($module, 'hours')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'description')</div>
						<div class="col-md-6">@la_input($module, 'solution')</div>
					</div>
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <a href="{{ url(config('laraadmin.adminRoute') . '/tickets') }}" class="btn btn-default pull-right">Cancel</a>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#ticket-edit-form").validate({
		
	});
});
</script>
@endpush

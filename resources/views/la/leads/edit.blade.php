@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/leads') }}">Lead</a> :
@endsection
@section("contentheader_description", $lead->$view_col)
@section("section", "Leads")
@section("section_url", url(config('laraadmin.adminRoute') . '/leads'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Leads Edit : ".$lead->$view_col)

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
				{!! Form::model($lead, ['route' => [config('laraadmin.adminRoute') . '.leads.update', $lead->id ], 'method'=>'PUT', 'id' => 'lead-edit-form']) !!}
				
					<div class="row">
						<div class="col-md-6">@la_input($module, 'first_name')</div>
						<div class="col-md-6">@la_input($module, 'last_name')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'phone_primary')</div>
						<div class="col-md-6">@la_input($module, 'phone_secondary')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'email_primary')</div>
						<div class="col-md-6">@la_input($module, 'email_secondary')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'company')</div>
						<div class="col-md-6">@la_input($module, 'title')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'lead_source')</div>
						<div class="col-md-6">@la_input($module, 'industry')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'assigned_to')</div>
						<div class="col-md-6">@la_input($module, 'employee_count')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'country')</div>
						<div class="col-md-6">@la_input($module, 'city')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'address')</div>
						<div class="col-md-6">@la_input($module, 'description')</div>
					</div>
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <a href="{{ url(config('laraadmin.adminRoute') . '/leads') }}" class="btn btn-default pull-right">Cancel</a>
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
	$("#lead-edit-form").validate({
		
	});
});
</script>
@endpush

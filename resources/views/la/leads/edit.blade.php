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
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($lead, ['route' => [config('laraadmin.adminRoute') . '.leads.update', $lead->id ], 'method'=>'PUT', 'id' => 'lead-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'first_name')
					@la_input($module, 'last_name')
					@la_input($module, 'phone_primary')
					@la_input($module, 'phone_secondary')
					@la_input($module, 'email_primary')
					@la_input($module, 'email_secondary')
					@la_input($module, 'company')
					@la_input($module, 'title')
					@la_input($module, 'lead_source')
					@la_input($module, 'industry')
					@la_input($module, 'assigned_to')
					@la_input($module, 'employee_count')
					@la_input($module, 'address')
					@la_input($module, 'city')
					@la_input($module, 'country')
					@la_input($module, 'description')
					--}}
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

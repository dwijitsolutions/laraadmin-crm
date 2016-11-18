@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/contacts') }}">Contact</a> :
@endsection
@section("contentheader_description", $contact->$view_col)
@section("section", "Contacts")
@section("section_url", url(config('laraadmin.adminRoute') . '/contacts'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Contacts Edit : ".$contact->$view_col)

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
				{!! Form::model($contact, ['route' => [config('laraadmin.adminRoute') . '.contacts.update', $contact->id ], 'method'=>'PUT', 'id' => 'contact-edit-form']) !!}
				
					<div class="row">
						<div class="col-md-4">@la_input($module, 'designation')</div>
						<div class="col-md-4">@la_input($module, 'first_name')</div>
						<div class="col-md-4">@la_input($module, 'last_name')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'title')</div>
						<div class="col-md-6">@la_input($module, 'organization')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'phone_primary')</div>
						<div class="col-md-6">@la_input($module, 'phone_secondary')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'home_phone')</div>
						<div class="col-md-6">@la_input($module, 'lead_source')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'department')</div>
						<div class="col-md-6">@la_input($module, 'email')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'email2')</div>
						<div class="col-md-6">@la_input($module, 'dob')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'assistant')</div>
						<div class="col-md-6">@la_input($module, 'assistant_phone')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'assigned_to')</div>
						<div class="col-md-6">@la_input($module, 'city')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'address')</div>
						<div class="col-md-6">@la_input($module, 'description')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'profile_picture')</div>
					</div>
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <a href="{{ url(config('laraadmin.adminRoute') . '/contacts') }}" class="btn btn-default pull-right">Cancel</a>
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
	$("#contact-edit-form").validate({
		
	});
});
</script>
@endpush

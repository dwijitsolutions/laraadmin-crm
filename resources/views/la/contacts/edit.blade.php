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
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($contact, ['route' => [config('laraadmin.adminRoute') . '.contacts.update', $contact->id ], 'method'=>'PUT', 'id' => 'contact-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'designation')
					@la_input($module, 'first_name')
					@la_input($module, 'last_name')
					@la_input($module, 'title')
					@la_input($module, 'organization')
					@la_input($module, 'office_phone')
					@la_input($module, 'mobile_phone')
					@la_input($module, 'home_phone')
					@la_input($module, 'lead_source')
					@la_input($module, 'department')
					@la_input($module, 'email1')
					@la_input($module, 'email2')
					@la_input($module, 'dob')
					@la_input($module, 'assistant')
					@la_input($module, 'assistant_phone')
					@la_input($module, 'assigned_to')
					@la_input($module, 'address')
					@la_input($module, 'city')
					@la_input($module, 'description')
					@la_input($module, 'profile_picture')
					--}}
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

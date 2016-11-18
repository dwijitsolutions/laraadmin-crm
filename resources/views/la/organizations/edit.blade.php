@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/organizations') }}">Organization</a> :
@endsection
@section("contentheader_description", $organization->$view_col)
@section("section", "Organizations")
@section("section_url", url(config('laraadmin.adminRoute') . '/organizations'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Organizations Edit : ".$organization->$view_col)

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
				{!! Form::model($organization, ['route' => [config('laraadmin.adminRoute') . '.organizations.update', $organization->id ], 'method'=>'PUT', 'id' => 'organization-edit-form']) !!}
					<div class="row">
						<div class="col-md-6">@la_input($module, 'name')</div>
						<div class="col-md-6">@la_input($module, 'email')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'phone_primary')</div>
						<div class="col-md-6">@la_input($module, 'phone_secondary')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'website')</div>
						<div class="col-md-6">@la_input($module, 'type')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'assigned_to')</div>
						<div class="col-md-6">@la_input($module, 'connect_since')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'address')</div>
						<div class="col-md-6">@la_input($module, 'country')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'city')</div>
						<div class="col-md-6">@la_input($module, 'postal_code')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'description')</div>
						<div class="col-md-2 col-md-offset-1">@la_input($module, 'profile_image')</div>
						<div class="col-md-3">@la_input($module, 'profile')</div>
					</div>
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <a href="{{ url(config('laraadmin.adminRoute') . '/organizations') }}" class="btn btn-default pull-right">Cancel</a>
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
	$("#organization-edit-form").validate({
		
	});
});
</script>
@endpush

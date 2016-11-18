@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/employees') }}">Employee</a> :
@endsection
@section("contentheader_description", $employee->$view_col)
@section("section", "Employees")
@section("section_url", url(config('laraadmin.adminRoute') . '/employees'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Employees Edit : ".$employee->$view_col)

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
				{!! Form::model($employee, ['route' => [config('laraadmin.adminRoute') . '.employees.update', $employee->id ], 'method'=>'PUT', 'id' => 'employee-edit-form']) !!}
				
					<div class="row">
						<div class="col-md-6">@la_input($module, 'name')</div>
						<div class="col-md-6">@la_input($module, 'designation')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'gender')</div>
						<div class="col-md-6">@la_input($module, 'phone_primary')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'phone_secondary')</div>
						<div class="col-md-6">@la_input($module, 'email')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'dept')</div>
						<div class="col-md-6">@la_input($module, 'city')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'address')</div>
						<div class="col-md-6">@la_input($module, 'about')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'date_birth')</div>
						<div class="col-md-6">@la_input($module, 'date_hire')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'date_left')</div>
						<div class="col-md-6">@la_input($module, 'salary_cur')</div>
					</div>
					<div class="form-group">
						<label for="role">Role* :</label>
						<select class="form-control" required="1" data-placeholder="Select Role" rel="select2" name="role">
							<?php $roles = App\Role::all(); ?>
							@foreach($roles as $role)
								@if($role->id != 1 || Entrust::hasRole("SUPER_ADMIN"))
									@if($user->hasRole($role->name))
										<option value="{{ $role->id }}" selected>{{ $role->name }}</option>
									@else
										<option value="{{ $role->id }}">{{ $role->name }}</option>
									@endif
								@endif
							@endforeach
						</select>
					</div>
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <a href="{{ url(config('laraadmin.adminRoute') . '/employees') }}" class="btn btn-default pull-right">Cancel</a>
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
	$("#employee-edit-form").validate({
		
	});
});
</script>
@endpush

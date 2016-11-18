@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/projects') }}">Project</a> :
@endsection
@section("contentheader_description", $project->$view_col)
@section("section", "Projects")
@section("section_url", url(config('laraadmin.adminRoute') . '/projects'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Projects Edit : ".$project->$view_col)

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
				{!! Form::model($project, ['route' => [config('laraadmin.adminRoute') . '.projects.update', $project->id ], 'method'=>'PUT', 'id' => 'project-edit-form']) !!}
				
					<div class="row">
						<div class="col-md-6">@la_input($module, 'name')</div>
						<div class="col-md-6">@la_input($module, 'start_date')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'target_end_date')</div>
						<div class="col-md-6">@la_input($module, 'actual_end_date')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'assigned_to')</div>
						<div class="col-md-6">@la_input($module, 'status')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'type')</div>
						<div class="col-md-6">@la_input($module, 'organization')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'target_budget')</div>
						<div class="col-md-6">@la_input($module, 'project_url')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'priority')</div>
						<div class="col-md-6">@la_input($module, 'description')</div>
					</div>
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <a href="{{ url(config('laraadmin.adminRoute') . '/projects') }}" class="btn btn-default pull-right">Cancel</a>
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
	$("#project-edit-form").validate({
		
	});
});
</script>
@endpush

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
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($project, ['route' => [config('laraadmin.adminRoute') . '.projects.update', $project->id ], 'method'=>'PUT', 'id' => 'project-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'name')
					@la_input($module, 'start_date')
					@la_input($module, 'target_end_date')
					@la_input($module, 'actual_end_date')
					@la_input($module, 'assigned_to')
					@la_input($module, 'status')
					@la_input($module, 'type')
					@la_input($module, 'organization')
					@la_input($module, 'target_budget')
					@la_input($module, 'project_url')
					@la_input($module, 'priority')
					@la_input($module, 'description')
					--}}
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

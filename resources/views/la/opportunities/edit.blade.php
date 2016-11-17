@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/opportunities') }}">Opportunity</a> :
@endsection
@section("contentheader_description", $opportunity->$view_col)
@section("section", "Opportunities")
@section("section_url", url(config('laraadmin.adminRoute') . '/opportunities'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Opportunities Edit : ".$opportunity->$view_col)

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
				{!! Form::model($opportunity, ['route' => [config('laraadmin.adminRoute') . '.opportunities.update', $opportunity->id ], 'method'=>'PUT', 'id' => 'opportunity-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'name')
					@la_input($module, 'organization')
					@la_input($module, 'contact')
					@la_input($module, 'amount')
					@la_input($module, 'expected_close_date')
					@la_input($module, 'next_step')
					@la_input($module, 'assigned_to')
					@la_input($module, 'type')
					@la_input($module, 'lead_source')
					@la_input($module, 'sales_stage')
					@la_input($module, 'probability')
					@la_input($module, 'forecast_amount')
					@la_input($module, 'description')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <a href="{{ url(config('laraadmin.adminRoute') . '/opportunities') }}" class="btn btn-default pull-right">Cancel</a>
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
	$("#opportunity-edit-form").validate({
		
	});
});
</script>
@endpush

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
			<div class="col-md-10 col-md-offset-1">
				{!! Form::model($opportunity, ['route' => [config('laraadmin.adminRoute') . '.opportunities.update', $opportunity->id ], 'method'=>'PUT', 'id' => 'opportunity-edit-form']) !!}
					<div class="row">
						<div class="col-md-6">@la_input($module, 'name')</div>
						<div class="col-md-6">@la_input($module, 'organization')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'contact')</div>
						<div class="col-md-6">@la_input($module, 'amount')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'expected_close_date')</div>
						<div class="col-md-6">@la_input($module, 'next_step')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'assigned_to')</div>
						<div class="col-md-6">@la_input($module, 'type')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'lead_source')</div>
						<div class="col-md-6">@la_input($module, 'sales_stage')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'probability')</div>
						<div class="col-md-6">@la_input($module, 'forecast_amount')</div>
					</div>
					<div class="row">
						<div class="col-md-6">@la_input($module, 'description')</div>
					</div>
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

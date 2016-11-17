@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/tickets') }}">Ticket</a> :
@endsection
@section("contentheader_description", $ticket->$view_col)
@section("section", "Tickets")
@section("section_url", url(config('laraadmin.adminRoute') . '/tickets'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Tickets Edit : ".$ticket->$view_col)

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
				{!! Form::model($ticket, ['route' => [config('laraadmin.adminRoute') . '.tickets.update', $ticket->id ], 'method'=>'PUT', 'id' => 'ticket-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'title')
					@la_input($module, 'organization')
					@la_input($module, 'contact')
					@la_input($module, 'assigned_to')
					@la_input($module, 'project')
					@la_input($module, 'priority')
					@la_input($module, 'status')
					@la_input($module, 'hours')
					@la_input($module, 'description')
					@la_input($module, 'solution')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <a href="{{ url(config('laraadmin.adminRoute') . '/tickets') }}" class="btn btn-default pull-right">Cancel</a>
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
	$("#ticket-edit-form").validate({
		
	});
});
</script>
@endpush

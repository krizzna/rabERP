@extends('frontend.layouts.master')

@section('content')
<div class="row">
  <div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
      <li>{!! link_to_route_html('customers.index','<i class="fa fa-circle-o"></i> Customers') !!}</li>
      <li class="active">{!! link_to_route_html('customers.create','<i class="fa fa-plus-circle"></i> Add New') !!}</li>
    </ul>
  </div><!-- END SIDEBAR -->

  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    @include('includes.partials.messages')
    <div class="page-header">
      <h3><i class="fa fa-pencil-square-o"></i> Add New Customer</h3>    
    </div><!-- Page-header -->
    {!! Form::model(new App\Customer, ['route' => ['customers.store'], 'class' => 'form-horizontal']) !!}
      <div class="row">
	<div class="col-md-4">
	  <div class="form-group">
	    {!! Form::label('name', 'Customer Name:', ['class' => 'col-sm-3 control-label']) !!}
	    <div class="col-sm-9">
	      {!! Form::text('name',null,['class' => 'form-control']) !!}
	    </div>
	  </div>
	  <div class="form-group">
	    {!! Form::label('address1', 'Address 1:', ['class' => 'col-sm-3 control-label']) !!}
	    <div class="col-sm-9">
	      {!! Form::textarea('address1',null,['size' => '30x5', 'class' => 'form-control']) !!}
	    </div>
	  </div>
	  <div class="form-group">
	    {!! Form::label('address2', 'Address 2:', ['class' => 'col-sm-3 control-label']) !!}
	    <div class="col-sm-9">
	      {!! Form::textarea('address2',null,['size' => '30x5', 'class' => 'form-control']) !!}
	    </div>
	  </div>
	</div> <!-- end col -->
	<div class="col-md-4">
	  <div class="form-group">
	    {!! Form::label('phone1', 'Phone:', ['class' => 'col-sm-3 control-label']) !!}
	    <div class="col-sm-9">
	      <div class="input-group">
		<span class="input-group-addon"><i class="fa fa-phone"></i></span>
		{!! Form::text('phone1',null,['class' => 'form-control']) !!}
	      </div>
	    </div>
	  </div>
	  <div class="form-group">
	    {!! Form::label('phone2', 'Phone 2:', ['class' => 'col-sm-3 control-label']) !!}
	    <div class="col-sm-9">
	      <div class="input-group">
		<span class="input-group-addon"><i class="fa fa-phone"></i></span>
		{!! Form::text('phone2',null,['class' => 'form-control']) !!}
	      </div>
	    </div>
	  </div>
	  <div class="form-group">
	    {!! Form::label('fax', 'Fax:', ['class' => 'col-sm-3 control-label']) !!}
	    <div class="col-sm-9">
	      <div class="input-group">
		<span class="input-group-addon"><i class="fa fa-fax"></i></span>
		{!! Form::text('fax',null,['class' => 'form-control']) !!}
	      </div>
	    </div>
	  </div>
	  <div class="form-group">
	    {!! Form::label('email', 'Email:', ['class' => 'col-sm-3 control-label']) !!}
	    <div class="col-sm-9">
	      <div class="input-group">
		<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
		{!! Form::email('email',null,['class' => 'form-control']) !!}
	      </div>
	    </div>
	  </div>
	</div>
      </div>
      <div class="form-group">
	{!! Form::submit('Save', ['class'=>'btn btn-primary']) !!} {!! link_to_route_html('customers.index','Cancel',null, ['class' => 'btn btn-default']) !!}
      </div>
    {!! Form::close() !!}
  </div> <!-- END MAIN -->
</div>
@endsection

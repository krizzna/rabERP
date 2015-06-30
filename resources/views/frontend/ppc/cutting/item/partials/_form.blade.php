<div class="row">
    <div class="col-md-4">
	<div class="form-group">
	    {!! Form::label('vessel', 'Vessel:', ['class' => 'col-sm-3 control-label']) !!}
	    <div class="col-sm-9">
		{!! Form::text('vessel',null,['class' => 'form-control']) !!}
	    </div>
	</div>
	<div class="form-group">
	    {!! Form::label('coil_id', 'No Coil:', ['class' => 'col-sm-3 control-label']) !!}
	    <div class="col-sm-6">
		{!! Form::select('coil_id',$coils,null,['class' => 'form-control']) !!}
	    </div>
	</div>
    </div><!-- end column -->
</div>
<div class="row">
    <div class="col-md-4">
	<div class="panel panel-info">
	    <div class="panel-heading">
		<h3 class="panel-title"><i class="fa fa-scissors"></i> Cutting Order</h3>
	    </div>
	    <div class="panel-body"></div>
	</div>
    </div>
    <div class="col-md-4">
	<div class="panel panel-info">
	    <div class="panel-heading">
		<h3 class="panel-title"><i class="fa fa-exclamation-triangle"></i> Remarks</h3>
	    </div>
	    <div class="panel-body"></div>
	</div>
    </div>
    <div class="col-md-4">
	<div class="panel panel-info">
	    <div class="panel-heading">
		<h3 class="panel-title"><i class="fa fa-exchange"></i> Toleransi</h3>
	    </div>
	    <div class="panel-body"></div>
	</div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
	<div class="form-group">
	    {!! Form::submit($submit_text, ['class'=>'btn btn-primary']) !!} {!! link_to_route_html('coil.index','Cancel',null, ['class' => 'btn btn-default']) !!}
	</div>
    </div>
</div>

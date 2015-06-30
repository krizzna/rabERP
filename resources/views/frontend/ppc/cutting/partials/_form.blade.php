<div class="row">
    <div class="col-md-4">
	<div class="form-group">
	    {!! Form::label('cutting_no', 'No SPK:', ['class' => 'col-sm-3 control-label']) !!}
	    <div class="col-sm-9">
		{!! Form::text('cutting_no',null,['class' => 'form-control']) !!}
	    </div>
	</div>
	<div class="form-group">
	    {!! Form::label('customer_id', 'Customer:', ['class' => 'col-sm-3 control-label']) !!}
	    <div class="col-sm-9">
		{!! Form::select('customer_id',$customers,null,['class' => 'form-control']) !!}
	    </div>
	</div>
	<input type="hidden" name="created_by" value="{{ Auth::user()->name }}">
    </div>
</div>

<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn btn-primary']) !!} {!! link_to_route_html('coil.index','Cancel',null, ['class' => 'btn btn-default']) !!}
</div>

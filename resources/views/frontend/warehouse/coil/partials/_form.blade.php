<div class="row">
    <div class="col-md-4">
	<div class="form-group">
	    {!! Form::label('nocoil', 'No Coil:', ['class' => 'col-sm-3 control-label']) !!}
	    <div class="col-sm-9">
		{!! Form::text('nocoil',null,['class' => 'form-control']) !!}
	    </div>
	</div>
	<div class="form-group">
	    {!! Form::label('spec', 'Spec:', ['class' => 'col-sm-3 control-label']) !!}
	    <div class="col-sm-6">
		{!! Form::text('spec',null,['class' => 'form-control']) !!}
	    </div>
	</div>
	<div class="form-group">
	    {!! Form::label('size', 'Size:', ['class' => 'col-sm-3 control-label']) !!}
	    <div class="col-sm-9">
		{!! Form::text('size',null,['class' => 'form-control']) !!}
	    </div>
	</div>
    </div><!-- end column -->
    <div class="col-md-4">
	<div class="form-group">
	    {!! Form::label('weight', 'Weight:', ['class' => 'col-sm-3 control-label']) !!}
	    <div class="col-sm-6">
		<div class="input-group">
		    {!! Form::text('weight',null,['class' => 'form-control']) !!}
		    <div class="input-group-addon">MT</div>
		</div>
	    </div>
	</div>
	<div class="form-group">
	    {!! Form::label('wh', 'Warehouse:', ['class' => 'col-sm-3 control-label']) !!}
	    <div class="col-sm-6">
		{!! Form::select('wh',['DHJ' => 'Duta Hita Jaya', 'GSU' => 'Gemala Sarana Upaya', 'CHC' => 'Cigading Habeam Centre'], null, ['class' => 'form-control']) !!}
	    </div>
	</div>
	<div class="form-group">
	    {!! Form::label('date_in', 'Date In:', ['class' => 'col-sm-3 control-label']) !!}
	    <div class="col-sm-9">
		<div class="input-group date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="date_in" data-link-format="yyyy-mm-dd">
		    <input class="form-control" type="text" value="" readonly>
		    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
		</div>
	    </div>
	    <input type="hidden" name="date_in" id="date_in" value="" /><br/>
	</div>
	<div class="form-group">
	    {!! Form::label('qty', 'Qty:', ['class' => 'col-sm-3 control-label']) !!}
	    <div class="col-sm-4">
		{!! Form::text('qty',null,['class' => 'form-control']) !!}
	    </div>
	</div>
    </div>
</div>

<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn btn-primary']) !!} {!! link_to_route_html('coil.index','Cancel',null, ['class' => 'btn btn-default']) !!}
</div>

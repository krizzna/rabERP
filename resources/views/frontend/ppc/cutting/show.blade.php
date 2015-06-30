@extends('frontend.layouts.master')

@section('content')
<div class="row">
  <div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
      <li class="active">{!! link_to_route_html('cuttings.index','<i class="fa fa-circle-o"></i> Cutting Order') !!}</li>
      <li>{!! link_to_route_html('cuttings.create','<i class="fa fa-plus-circle"></i> Add New') !!}</li>
    </ul>
  </div><!-- END SIDEBAR -->
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    @include('includes.partials.messages')
     <div class="page-header">
      <h3><i class="fa fa-list-ol"></i> Entry SPK Cutting Order - SPK No. {{ $cutting->cutting_no }}
	<div class="pull-right">
	  <div class="pull-right">{!! link_to_route_html('cuttings.items.create','<i class="fa fa-plus-circle"></i> Add New',$cutting->id, ['class' => 'btn btn-primary']) !!}</div>
	</div>
      </h3>      
    </div><!-- Page-header -->
    @if ( !$cutting->cuttingitems->count() )
      <h3>SPK No: {{ $cutting->cutting_no }}</h3>
      <h4>Customer: {{ $cutting->customer->name }}</h4>
      <div class="alert alert-warning" role="alert">
	<h4>This SPK has no item, click the button to add new item.</h4>
      </div>
    @else
      <h3
    @endif
  </div><!-- END MAIN -->
</div>
@endsection

@section('scripts')
@stop

@extends('frontend.layouts.master')

@section('content')
<div class="row">
  <div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
      <li>{!! link_to_route_html('cuttings.index','<i class="fa fa-circle-o"></i> Entry Cutting Order') !!}</li>
      <li class="active">{!! link_to_route_html('cuttings.create','<i class="fa fa-plus-circle"></i> Add New') !!}</li>
    </ul>
  </div> <!-- end sidebar -->
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="page-header">
      <h3><i class="fa fa-pencil-square-o"></i> Add New Cutting Items</h3>
    </div><!-- Page-header -->
    {!! Form::model(new App\Cuttingitem, ['route' => ['cuttings.items.store'], 'class' => 'form-horizontal']) !!}
        @include('frontend/ppc/cutting/item/partials/_form', ['submit_text' => 'Save'])
    {!! Form::close() !!}
  </div> <!-- end main -->
</div>
@endsection

@extends('frontend.layouts.master')

@section('content')
<div class="row">
  <div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
      <li>{!! link_to_route_html('coil.index','<i class="fa fa-circle-o"></i> Entry Stock') !!}</li>
      <li class="active">{!! link_to_route_html('coil.create','<i class="fa fa-plus-circle"></i> Entry Stock') !!}</li>
    </ul>
  </div> <!-- end sidebar -->
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="page-header">
      <h3><i class="fa fa-pencil-square-o"></i> Add New Entry</h3>
    </div><!-- Page-header -->
    {!! Form::model($coil, ['method' => 'PATCH', 'route' => ['coil.update', $coil->id ], 'class' => 'form-horizontal']) !!}
        @include('frontend/warehouse/coil/partials/_form', ['submit_text' => 'Save'])
    {!! Form::close() !!}
  </div> <!-- end main -->
</div>
@endsection

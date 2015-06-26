@extends('frontend.layouts.master')

@section('content')
<div class="row">
  <div class="col-sm-3 col-md-2 sidebar">
    This is sidebar
  </div><!-- END SIDEBAR -->
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Welcome to {{app_name()}}</h1>

    @role('Administrator')
    <div class="panel panel-default">
      <div class="panel-heading"><i class="fa fa-home"></i> Role Based</div>

      <div class="panel-body">
	You can see this because you have the role of 'Administrator'!
      </div>
    </div><!-- panel -->
    @endrole
  </div><!-- END CONTENT -->
</div>
@endsection

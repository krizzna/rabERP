@extends('frontend.layouts.master')

@section('content')
<div class="row">
  <div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
      <li class="active">{!! link_to('coil', 'Entry Stock Coil RAB') !!}</li>
      <li>{!! link_to('coil', 'Add New') !!}</li>
    </ul>
  </div><!-- END SIDEBAR -->
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="page-header">
      <h3><i class="fa fa-list-ol"></i> Entry Stock
	<div class="pull-right">
	  <div class="pull-right"><a href="#" class="btn btn-primary" role="button"><i class="fa fa-plus"></i> Add new</a></div>
	</div>
      </h3>
      
    </div><!-- Page-header -->

    <div class="table-responsive">
      <table id="coil" class="table table-hover table-striped">
	<thead>
	  <tr>
	    <th>#</th>
	    <th>No. Coil</th>
	    <th>Spec</th>
	    <th>Size</th>
	    <th>Weight</th>
	    <th>Date in</th>
	    <th>Warehouse</th>
	    <th>Qty</th>
	  </tr>
	</thead>
	<tfoot></tfoot>
	<tbody>
	  @foreach ( $coils as $v )
	  <td></td>
	  <td>{{ $v->nocoil }}</td>
	  <td>{{ $v->spec }}</td>
	  <td>{{ $v->size }}</td>
	  <td>{{ $v->weight }}</td>
	  <td>{{ $v->date_in }}</td>
	  <td>{{ $v->wh }}</td>
	  <td>{{ $v->qty }}</td>
	  @endforeach
	</tbody>
      </table>
    </div><!-- Table -->
  </div><!-- END CONTENT -->
</div>
@endsection

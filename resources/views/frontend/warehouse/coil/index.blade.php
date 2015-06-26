@extends('frontend.layouts.master')

@section('content')
<div class="row">
  <div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
      <li class="active">{!! link_to_route_html('coil.index','<i class="fa fa-circle-o"></i> Entry Stock') !!}</li>
      <li>{!! link_to_route_html('coil.create','<i class="fa fa-plus-circle"></i> Entry Stock') !!}</li>
    </ul>
  </div><!-- END SIDEBAR -->
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    @include('includes.partials.messages')
    <div class="page-header">
      <h3><i class="fa fa-list-ol"></i> Entry Stock
	<div class="pull-right">
	  <div class="pull-right">{!! link_to_route_html('coil.create','<i class="fa fa-plus-circle"></i> Entry Stock',null, ['class' => 'btn btn-primary']) !!}</div>
	</div>
      </h3>
      
    </div><!-- Page-header -->

    <div class="table-responsive">
      <table id="coil" class="table table-hover table-striped">
	<thead>
	  <tr>
	    <th style="width:10px">#</th>
	    <th>No. Coil</th>
	    <th>Spec</th>
	    <th>Size</th>
	    <th>Weight</th>
	    <th>Date in</th>
	    <th>Warehouse</th>
	    <th>Qty</th>
	    <th>Action</th>
	  </tr>
	</thead>
	<tfoot></tfoot>
	<tbody>
	  @foreach ( $coils as $v )
	  <tr>
	    <td></td>
	    <td>{{ $v->nocoil }}</td>
	    <td>{{ $v->spec }}</td>
	    <td>{{ $v->size }}</td>
	    <td>{{ $v->weight }}</td>
	    <td>{{ date('d M Y', strtotime($v->date_in)) }}</td>
	    <td>{{ $v->wh }}</td>
	    <td>{{ $v->qty }}</td>
	    <td>
	      {!! link_to_route_html('coil.edit', '<i class="fa fa-pencil"></i>', array($v->id), array('class' => 'btn btn-info btn-xs',"data-toggle" => "tooltip", "data-placement" => "left", "title" => "EDIT")) !!}
	      {!! link_to_route_html('coil.delete', '<i class="fa fa-trash"></i>', array($v->id), array('class' => 'btn btn-danger btn-xs', "data-toggle" => "tooltip", "data-placement" => "right", "title" => "DELETE")) !!}
	    </td>
	  </tr>
	  @endforeach
	</tbody>
      </table>
    </div><!-- Table -->
  </div><!-- END CONTENT -->
</div>
@endsection

@section('scripts')
<script type="text/javascript">
  $(document).ready(function () {
    var cTable = $('#coil').DataTable({
      "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],
        "order": [[ 1, 'asc' ]]
    });
     cTable.on( 'order.dt search.dt', function () {
        cTable.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
  });
</script>
@stop

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
      <h3><i class="fa fa-list-ol"></i> Entry SPK Cutting Order
	<div class="pull-right">
	  <div class="pull-right">{!! link_to_route_html('cuttings.create','<i class="fa fa-plus-circle"></i> Add New',null, ['class' => 'btn btn-primary']) !!}</div>
	</div>
      </h3>      
    </div><!-- Page-header -->
    <div class="table-responsive">
      <table id="cutting" class="table table-hover table-stripped">
	<thead>
	  <tr>
	    <th style="width:10px">#</th>
	    <th>SPK No</th>
	    <th>Customer</th>
	    <th>Created at</th>
	    <th>Action</th>
	  </tr>
	</thead>
	<tfoot></tfoot>
	<tbody>
	  @foreach ( $cuttings as $cut )
	  <tr>
	    <td></td>
	    <td>{{ $cut->cutting_no }}</td>
	    <td>{{ $cut->customer->name }}</td>
	    <td>{{ date('d M Y', strtotime($cut->created_at)) }}</td>
	    <td>
	      {!! link_to_route_html('cuttings.show', '<i class="fa fa-external-link"></i>', array($cut->id), array('class' => 'btn btn-info btn-xs',"data-toggle" => "tooltip", "data-placement" => "left", "title" => "SHOW")) !!}
	      {!! link_to_route_html('cuttings.edit', '<i class="fa fa-pencil"></i>', array($cut->id), array('class' => 'btn btn-info btn-xs',"data-toggle" => "tooltip", "data-placement" => "top", "title" => "EDIT")) !!}
	      {!! link_to_route_html('cuttings.delete', '<i class="fa fa-trash"></i>', array($cut->id), array('class' => 'btn btn-danger btn-xs', "data-toggle" => "tooltip", "data-placement" => "right", "title" => "DELETE")) !!}
	    </td>
	  </tr>
	  @endforeach
	</tbody>
      </table>
    </div><!-- table -->
  </div> <!-- END MAIN -->
</div>
@endsection

@section ('scripts')
<script type="text/javascript">
  $(document).ready(function () {
    var cTable = $('#cutting').DataTable({
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

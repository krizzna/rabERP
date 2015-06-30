@extends('frontend.layouts.master')

@section('content')
<div class="row">
  <div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
      <li class="active">{!! link_to_route_html('customers.index','<i class="fa fa-circle-o"></i> Customers') !!}</li>
      <li>{!! link_to_route_html('customers.create','<i class="fa fa-plus-circle"></i> Add New') !!}</li>
    </ul>
  </div><!-- END SIDEBAR -->

   <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
     @include('includes.partials.messages')
     <div class="page-header">
      <h3><i class="fa fa-list-ol"></i> Customers
	<div class="pull-right">
	  <div class="pull-right">{!! link_to_route_html('customers.create','<i class="fa fa-plus-circle"></i> Add New',null, ['class' => 'btn btn-primary']) !!}</div>
	</div>
      </h3>      
    </div><!-- Page-header -->
    <div class="table-reponsive">
      <table id="cust" class="table table-stripped">
	<thead>
	  <tr>
	    <th style="width:10px">#</th>
	    <th>Name</th>
	    <th>Address</th>
	    <th>Phone 1</th>
	    <th>Phone 2</th>
	    <th>Fax</th>
	    <th>Email</th>
	  </tr>
	</thead>
	<tfoot></tfoot>
	<tbody>
	  @foreach ( $customers as $c )
	  <tr>
	    <td></td>
	    <td>{{ $c->name }}</td>
	    <td>{{ $c->address1 }}</td>
	    <td>{{ $c->phone1 }}</td>
	    <td>{{ $c->phone2 }}</td>
	    <td>{{ $c->fax }}</td>
	    <td>{{ $c->email }}</td>
	  </tr>
	  @endforeach
	</tbody>
      </table>
    </div><!-- table -->
   </div> <!-- END MAIN -->
</div>
@endsection

@section('scripts')
<script type="text/javascript">
  $(document).ready(function () {
    var cTable = $('#cust').DataTable({
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

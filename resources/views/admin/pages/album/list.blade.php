@extends('admin.app')

@section('title')
<title>Portfolio List - Admin</title>
@endsection

@section('breadcumb')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Portfolio List</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Portfolio</a></li>
            <li class="breadcrumb-item active">Portfolio List</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Portfolio List</h4>
        <h6 class="card-subtitle">List from your portfolio</h6>
        <div class="table-responsive m-t-40">
            <table id="myTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Created at</th>
                        <th>Last Update</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($album as $key => $row)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->created_at}}</td>
                        <td>
                            @if($row->updated_at != null)
                                {{$row->updated_at}}
                            @else
                                ----
                            @endif
                        </td>
                        <td class="text-nowrap">
                            <a href="{{ route('admin.photo.list', $row->id) }}" data-toggle="tooltip" data-original-title="Photo List"> <i class="fa fa-folder text-warning m-r-10"></i> </a>
                            <a href="{{ route('admin.photo.create', $row->id) }}" data-toggle="tooltip" data-original-title="Upload Photo"> <i class="fa fa-upload text-info m-r-10"></i> </a>
                            <a href="{{ route('admin.album.edit', $row->id) }}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                            <a href="#" onclick="$(this).find('#delete').submit();" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close text-danger"></i>
                                <form action="{{ route('admin.album.delete',$row->id) }}" id="delete" method="post">
                                    {{ method_field('DELETE') }}
                                </form>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- This is data table -->
<script src="{{ asset('sources/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script>
$(document).ready(function() {
    $('#myTable').DataTable();
    $(document).ready(function() {
        var table = $('#example').DataTable({
            "columnDefs": [{
                "visible": false,
                "targets": 2
            }],
            "order": [
                [2, 'asc']
            ],
            "displayLength": 25,
            "drawCallback": function(settings) {
                var api = this.api();
                var rows = api.rows({
                    page: 'current'
                }).nodes();
                var last = null;
                api.column(2, {
                    page: 'current'
                }).data().each(function(group, i) {
                    if (last !== group) {
                        $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                        last = group;
                    }
                });
            }
        });
        // Order by the grouping
        $('#example tbody').on('click', 'tr.group', function() {
            var currentOrder = table.order()[0];
            if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                table.order([2, 'desc']).draw();
            } else {
                table.order([2, 'asc']).draw();
            }
        });
    });
});
$('#example23').DataTable({
    dom: 'Bfrtip',
    buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
    ]
});
</script>
@endsection
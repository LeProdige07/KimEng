@extends('admin_layout.admin')
@section('title')
    Projets
@endsection
@section('style')
    <!-- DataTables -->
    <link rel="stylesheet" href="backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
@endsection
@section('breadcrumb')
<li class="breadcrumb-item active">Formations</li>
@endsection
@section('content')
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Toutes les formations de Kim Engineering</h3>
                            </div>
                            @if (Session::has('status'))
                                <div class="alert alert-success">
                                    {{ Session::get('status') }}
                                </div>
                            @endif

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Num.</th>
                                            <th>{{ __('Name') }}</th>
                                            <th>Description</th>
                                            <th>Image1</th>
                                            <th>Image2</th>
                                            <th>Image3</th>
                                            {{-- <th>Vues</th> --}}
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($formations as $key => $formation)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $formation->formation_name }}</td>
                                                <td>{{ $formation->formation_description }}</td>
                                                <td>

                                                    <img src="storage/formation_images/{{ $formation->formation_image1 }}"
                                                        style="height : 50px; width : 50px" class="img-circle elevation-2"
                                                        alt="formation Image">
                                                </td>
                                                <td>

                                                    <img src="storage/formation_images/{{ $formation->formation_image2 }}"
                                                        style="height : 50px; width : 50px" class="img-circle elevation-2"
                                                        alt="formation Image">
                                                </td>
                                                <td><img src="storage/formation_images/{{ $formation->formation_image3 }}"
                                                    style="height : 50px; width : 50px" class="img-circle elevation-2"
                                                    alt="formation Image"></td>
                                                {{-- <td>{{ $formation->nbre_visites() }}</td> --}}
                                                <td>
                                                    @permission('formation', 'update')
                                                    @if ($formation->status != 0)
                                                    <a href="{{ url('/desactiver_formation/' . $formation->id) }}" class="btn btn-success">Désactiver</a>
                                                    @else
                                                    <a href="{{ url('/activer_formation/' . $formation->id) }}" class="btn btn-warning">Activer</a>
                                                    @endif
                                                    @endpermission
                                                    @permission('formation', 'update')
                                                        <a class="btn btn-primary"
                                                            href="{{ route('formations.edit', $formation->id) }}"><i
                                                                class="nav-icon fas fa-edit"></i></a>
                                                    @endpermission
                                                    @permission('formation', 'delete')
                                                        <a href="#" class="btn btn-danger" data-toggle="modal"
                                                            data-target="#ModalDelete{{ $formation->id }}" id="delete"><i
                                                                class="nav-icon fas fa-trash"></i></a>
                                                    @endpermission
                                                    @include('admin.formations.modal.delete')
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Num.</th>
                                            <th>{{ __('Name') }}</th>
                                            <th>Description</th>
                                            <th>Image1</th>
                                            <th>Image2</th>
                                            <th>Image3</th>
                                            {{-- <th>Vues</th> --}}
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
@endsection
@section('scripts')
    <!-- DataTables -->
    <script src="backend/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="backend/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="backend/dist/js/bootbox.min.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection

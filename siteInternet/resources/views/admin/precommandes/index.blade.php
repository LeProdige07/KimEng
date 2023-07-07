@extends('admin_layout.admin')
@section('title')
    Précommandes Logette
@endsection
@section('style')
    <!-- DataTables -->
    <link rel="stylesheet" href="backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item active">Précommandes</li>
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Précommandes</h3>
                            <div class="row">
                                <div class="col-12">
                                    <div class="float-sm-right">
                                        @permission('logette_info', 'read')
                                            <a href="{{ url('/precommandes_export_excel') }}" class="btn btn-success"
                                                style="color:white">
                                                <span style="color:white"></span> {{ __('Excel') }}
                                            </a>
                                        @endpermission
                                        @permission('logette_info', 'read')
                                            <a href="{{ url('/precommandes_export_pdf') }}" class="btn btn-primary"
                                                style="color:white">
                                                <span style="color:white"></span> {{ __('PDF') }}
                                            </a>
                                        @endpermission
                                    </div>
                                </div>
                            </div>
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
                                        <th>{{ __('Nom') }}</th>
                                        <th>{{ __('Post-nom') }}</th>
                                        <th>{{ __('Prenom') }}</th>
                                        <th>{{ __('Email') }}</th>
                                        <th>{{ __('Fonction') }}</th>
                                        <th>{{ __('Commune') }}</th>
                                        <th>{{ __('Téléphone') }}</th>
                                        <th>{{ __('Quartier') }}</th>
                                        <th>{{ __('Rue et N°') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($logette_infos as $key => $logette_info)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $logette_info->nom }}</td>
                                            <td>{{ $logette_info->postnom }}</td>
                                            <td>{{ $logette_info->prenom }}</td>
                                            <td>{{ $logette_info->email }}</td>
                                            <td>{{ $logette_info->fonction }}</td>
                                            <td>{{ $logette_info->commune }}</td>
                                            <td>{{ $logette_info->tel }}</td>
                                            <td>{{ $logette_info->quartier }}</td>
                                            <td>{{ $logette_info->rue }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Num.</th>
                                        <th>{{ __('Nom') }}</th>
                                        <th>{{ __('Post-nom') }}</th>
                                        <th>{{ __('Prenom') }}</th>
                                        <th>{{ __('Email') }}</th>
                                        <th>{{ __('Fonction') }}</th>
                                        <th>{{ __('Commune') }}</th>
                                        <th>{{ __('Téléphone') }}</th>
                                        <th>{{ __('Quartier') }}</th>
                                        <th>{{ __('Rue et N°') }}</th>
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

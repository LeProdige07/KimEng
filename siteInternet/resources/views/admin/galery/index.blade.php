@extends('admin_layout.admin')
@section('title')
    Galerie
@endsection
@section('style')
    <!-- Ekko Lightbox -->
    <link rel="stylesheet" href="backend/plugins/ekko-lightbox/ekko-lightbox.css">
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item active">Galerie</li>
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="float-sm-right">
                                @permission('User', 'create')
                                    <a href="#" class="btn btn-success" style="color:white" data-toggle="modal"
                                        data-target="#ModalCreate">
                                        <span style="color:white"></span> {{ __('Ajouter') }}
                                    </a>
                                    @include('admin.galery.modal.create')
                                @endpermission
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4 class="card-title">Galerie</h4>
                        </div>
                        @if (Session::has('status'))
                            <div class="alert alert-success">
                                {{ Session::get('status') }}
                            </div>
                        @endif
                        <div class="card-body">
                            <div class="row">
                                @foreach ($galeries as $key => $galery)
                                    <div class="col-sm-2">
                                        <a href="storage/galery_images/{{ $galery->image }}" data-toggle="lightbox"
                                            data-title="Image #{{ $key + 1 }}" data-gallery="gallery">
                                            <img src="storage/galery_images/{{ $galery->image }}" class="img-fluid mb-2"
                                                alt="white sample" />
                                        </a>
                                        @permission('Galery', 'delete')
                                            <a href="#" class="btn btn-danger" data-toggle="modal"
                                                data-target="#ModalDelete{{ $galery->id }}" id="delete"><i
                                                    class="nav-icon fas fa-trash"></i></a>
                                            @include('admin.galery.modal.delete')
                                        @endpermission
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
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
    <!-- Ekko Lightbox -->
    <script src="backend/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
    <script>
        $(function() {
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true
                });
            });

            $('.filter-container').filterizr({
                gutterPixels: 3
            });
            $('.btn[data-filter]').on('click', function() {
                $('.btn[data-filter]').removeClass('active');
                $(this).addClass('active');
            });
        })
    </script>
@endsection

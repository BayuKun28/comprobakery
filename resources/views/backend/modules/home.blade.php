@extends('backend.partials.app')
@section('content')
    <div class="container-fluid">
        <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">{{ $component['title'] }}</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="text-muted" href="#">{{ $component['menu'] }}</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">{{ $component['submenu'] }}</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-3">
                        <div class="text-center mb-n5">
                            <img src="{{ asset('backend/') }}/images/breadcrumb/ChatBc.png" alt=""
                                class="img-fluid mb-n4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-11">
                            <h4 class="mb-0">Data Home</h4>
                        </div>
                        <div class="col-md-1 pull-right">
                            <a class="btn btn-success" href="javascript:void(0)" id="createMenu"> Tambah</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="mytable" class="table border display table-bordered table-striped no-wrap">
                            <thead>
                                <!-- start row -->
                                <tr>
                                    <th>No</th>
                                    <th>Slogan / Kata</th>
                                    <th>Cover</th>
                                    <th>Aksi</th>
                                    <th>Is Active?</th>
                                </tr>
                                <!-- end row -->
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal fade" id="ajaxModel" tabindex="-1" aria-labelledby="ajaxModel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header d-flex align-items-center">
                        <h4 class="modal-title" id="modal-title">
                            Tambah Home
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="homeForm" name="homeForm" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <center>
                                        <h3>Slogan / Kata</h3>
                                    </center><br>
                                    <div class="form-floating mb-3">
                                        <style>
                                            .ck-editor__editable {
                                                min-height: 150px !important;
                                                max-height: 400px !important;
                                            }
                                        </style>
                                        <input type="hidden" name="id_home" id="id_home">
                                        <textarea rows="20" cols="70" class="ckeditor" id="slogan" name="slogan"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <center><img id="preview-image" width="250px"></center>
                                        <label for="cover" class="form-label">Uploads Cover</label>
                                        <input class="form-control" type="file" id="cover" name="cover" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info font-medium rounded-pill px-4">
                                <div class="d-flex align-items-center">
                                    <i class="ti ti-send me-2 fs-4"></i>
                                    Save Changed
                                </div>
                            </button>
                            <button type="button" class="btn btn-light-danger text-danger font-medium ounded-pill px-4"
                                data-bs-dismiss="modal">
                                Close
                            </button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </div>
@endsection
@section('addjs')
    <script type="text/javascript">
        let urlStore = "{{ route('addhome') }}";
        let urldata = "{{ route('get_ajax_list_home') }}";
        var urledit = "{{ route('home_edit', ['id' => ':id']) }}";
        var urleditsave = "{{ route('home_edit_save', ['id' => ':id']) }}";
        var urldelete = "{{ route('home_delete', ['id' => ':id']) }}";
        var urlswitch = "{{ route('home_switch', ['id' => ':id']) }}";
        var urlimage = "{{ asset('images') }}";
    </script>
    <script src="{{ asset('backend/') }}/js/tinymce.min.js"></script>
    <script src="{{ asset('backend/') }}/js/home.js"></script>
@endsection

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
                                <li class="breadcrumb-item"><a class="text-muted"
                                        href="index.html">{{ $component['menu'] }}</a></li>
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
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-9">
                        <h4 class="mb-0">Data Blog</h4>
                    </div>
                    <div class="col-md-3 pull-right">
                        <a href="{{ route('panel/add_blog') }}" class="btn btn-success" id="createBlog">
                            Tambah</a>
                        <a href="{{ route('panel/manage_kategori') }}" class="btn btn-primary" id="manageKategori"> Manage
                            Kategori</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="config-table" class="table border display table-bordered table-striped no-wrap">
                        <thead>
                            <!-- start row -->
                            <tr>
                                <th>Kategori</th>
                                <th>Title</th>
                                <th>Total Kunjungan</th>
                                <th>Created</th>
                                <th>Aksi</th>
                            </tr>
                            <!-- end row -->
                        </thead>
                        <tbody>
                            <!-- start row -->
                            <tr>
                                <td>Tiger</td>
                                <td>Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>
                                    <a href="javascript:void(0)" data-toggle="tooltip"
                                        class="btn btn-primary mb-10 btn-sm editMenu"><i class="ti ti-edit"></i></a>
                                    <a href="javascript:void(0)" data-toggle="tooltip"
                                        class="btn btn-danger mb-10 btn-sm"><i class="ti ti-trash"></i></a>
                                </td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                                <td>Garrett</td>
                                <td>Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>
                                    <a href="javascript:void(0)" data-toggle="tooltip"
                                        class="btn btn-primary mb-10 btn-sm editMenu"><i class="ti ti-edit"></i></a>
                                    <a href="javascript:void(0)" data-toggle="tooltip"
                                        class="btn btn-danger mb-10 btn-sm"><i class="ti ti-trash"></i></a>
                                </td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                                <td>Ashton</td>
                                <td>Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>
                                    <a href="javascript:void(0)" data-toggle="tooltip"
                                        class="btn btn-primary mb-10 btn-sm editMenu"><i class="ti ti-edit"></i></a>
                                    <a href="javascript:void(0)" data-toggle="tooltip"
                                        class="btn btn-danger mb-10 btn-sm"><i class="ti ti-trash"></i></a>
                                </td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                                <td>Cedric</td>
                                <td>Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>
                                    <a href="javascript:void(0)" data-toggle="tooltip"
                                        class="btn btn-primary mb-10 btn-sm editMenu"><i class="ti ti-edit"></i></a>
                                    <a href="javascript:void(0)" data-toggle="tooltip"
                                        class="btn btn-danger mb-10 btn-sm"><i class="ti ti-trash"></i></a>
                                </td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                                <td>Airi</td>
                                <td>Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>
                                    <a href="javascript:void(0)" data-toggle="tooltip"
                                        class="btn btn-primary mb-10 btn-sm editMenu"><i class="ti ti-edit"></i></a>
                                    <a href="javascript:void(0)" data-toggle="tooltip"
                                        class="btn btn-danger mb-10 btn-sm"><i class="ti ti-trash"></i></a>
                                </td>
                            </tr>
                            <!-- end row -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection

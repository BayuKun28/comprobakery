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
                    <div class="col-md-11">
                        <h4 class="mb-0">Data Kategori</h4>
                    </div>
                    <div class="col-md-1 pull-right">
                        <a href="#" class="btn btn-success" href="javascript:void(0)" id="createBlog">
                            Tambah</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="config-table" class="table border display table-bordered table-striped no-wrap">
                        <thead>
                            <!-- start row -->
                            <tr>
                                <th>No</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                            <!-- end row -->
                        </thead>
                        <tbody>
                            <!-- start row -->
                            <tr>
                                <td>1. </td>
                                <td>Resep</td>
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

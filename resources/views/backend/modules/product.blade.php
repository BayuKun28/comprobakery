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
                        <h4 class="mb-0">Data Product</h4>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="config-table" class="table border display table-bordered table-striped no-wrap">
                        <thead>
                            <!-- start row -->
                            <tr>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Kategori</th>
                                <th>Uraian</th>
                                <th>Tampil?</th>
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
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input success" type="checkbox" id="success-check"
                                            value="option1">
                                        <label class="form-check-label" for="success-check">Ya</label>
                                    </div>
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
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input success" type="checkbox" id="success-check"
                                            value="option1">
                                        <label class="form-check-label" for="success-check">Ya</label>
                                    </div>
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
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input success" type="checkbox" id="success-check"
                                            value="option1">
                                        <label class="form-check-label" for="success-check">Ya</label>
                                    </div>
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
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input success" type="checkbox" id="success-check"
                                            value="option1">
                                        <label class="form-check-label" for="success-check">Ya</label>
                                    </div>
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
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input success" type="checkbox" id="success-check"
                                            value="option1">
                                        <label class="form-check-label" for="success-check">Ya</label>
                                    </div>
                                </td>
                            </tr>
                            <!-- end row -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection

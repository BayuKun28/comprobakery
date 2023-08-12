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
        <div class="card overflow-hidden">
            <div class="card-body p-0">
                <img src="{{ asset('cake-main/') }}/img/hero/hero-1.jpg" id="preview-image" alt=""
                    class="img-fluid">
                <div class="align-items-center">
                    <div class="m-3">
                        <label for="cover" class="form-label">Uploads Cover</label>
                        <input class="form-control" type="file" id="cover" />
                    </div>
                </div>
            </div>
        </div>
        <form id="aboutForm" name="aboutForm" enctype="multipart/form-data">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                    aria-labelledby="pills-profile-tab" tabindex="0">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card shadow-none border">
                                <div class="card-body">
                                    <h4 class="fw-semibold mb-3">Information</h4>
                                    <ul class="list-unstyled mb-0">
                                        <li class="d-flex align-items-center gap-3 mb-4">
                                            <i class="ti ti-mail text-dark fs-6"></i>
                                            <input class="form-control" type="text" name="email" id="email"
                                                value="{{ $component['about']->email }}">
                                        </li>
                                        <li class="d-flex align-items-center gap-3 mb-4">
                                            <i class="ti ti-address-book text-dark fs-6"></i>
                                            <input class="form-control" type="text" name="phone" id="phone"
                                                value="{{ $component['about']->phone }}">
                                        </li>
                                        <li class="d-flex align-items-center gap-3 mb-2">
                                            <i class="ti ti-map-pin text-dark fs-6"></i>
                                            <input class="form-control" type="text" name="address" id="address"
                                                value="{{ $component['about']->address }}">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card shadow-none border">
                                <div class="card-body">
                                    <label for="title">
                                        <h4>Title</h4>
                                    </label>
                                    <input class="form-control mb-3" type="text" name="title" id="title"
                                        value="{{ $component['about']->title }}">
                                    <div class="form-floating mb-3">
                                        <style>
                                            .ck-editor__editable {
                                                min-height: 150px !important;
                                                max-height: 400px !important;
                                            }
                                        </style>
                                        <textarea rows="20" cols="70" class="ckeditor" id="content" name="content">{{ $component['about']->content }}</textarea>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <button type="button" class="btn btn-primary ms-auto" id="saveBtn"
                                            name="saveBtn">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endsection
    @section('addjs')
        <script src="{{ asset('backend/') }}/js/tinymce.min.js"></script>
        <script type="text/javascript">
            let urlStore = "{{ route('about_save') }}";
        </script>
        <script src="{{ asset('backend/') }}/js/about.js"></script>
    @endsection

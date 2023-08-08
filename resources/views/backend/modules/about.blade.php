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
                <img src="{{ asset('cake-main/') }}/img/hero/hero-1.jpg" alt="" class="img-fluid">
                <div class="align-items-center">
                    <div class="m-3">
                        <label for="formFile" class="form-label">Uploads Cover</label>
                        <input class="form-control" type="file" id="formFile" />
                    </div>
                    <div class="m-3 col-md-1 text-right">
                        <button class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                tabindex="0">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card shadow-none border">
                            <div class="card-body">
                                <h4 class="fw-semibold mb-3">Information</h4>
                                <ul class="list-unstyled mb-0">
                                    <li class="d-flex align-items-center gap-3 mb-4">
                                        <i class="ti ti-mail text-dark fs-6"></i>
                                        <input class="form-control" type="text" name="email" id="email"
                                            value="xyzjonathan@gmail.com">
                                    </li>
                                    <li class="d-flex align-items-center gap-3 mb-4">
                                        <i class="ti ti-address-book text-dark fs-6"></i>
                                        <input class="form-control" type="text" name="contact" id="contact"
                                            value="0899123912932">
                                    </li>
                                    <li class="d-flex align-items-center gap-3 mb-2">
                                        <i class="ti ti-map-pin text-dark fs-6"></i>
                                        <input class="form-control" type="text" name="address" id="address"
                                            value="Surakarta">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card shadow-none border">
                            <div class="card-body">
                                <label for="judul">
                                    <h4>Title</h4>
                                </label>
                                <input class="form-control mb-3" type="text" name="judul" id="judul"
                                    value="Cakes and bakes from the house of Queens!
                                ">
                                <div class="form-floating mb-3">
                                    <style>
                                        .ck-editor__editable {
                                            min-height: 150px !important;
                                            max-height: 400px !important;
                                        }
                                    </style>
                                    <div id="editor">The "Cake Shop" is a Jordanian Brand that started as a small family
                                        business. The owners are Dr. Iyad Sultan and Dr. Sereen Sharabati, supported by a
                                        staff of 80 employees.
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <button class="btn btn-primary ms-auto">Post</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @section('addjs')
        <script src="{{ asset('backend/') }}/js/ckeditor.js"></script>
        <script>
            ClassicEditor
                .create(document.querySelector('#editor'), {
                    minHeight: '300px',
                    toolbar: {
                        items: [
                            'undo', 'redo',
                            '|', 'heading',
                            '|', 'fontfamily', 'fontsize', 'fontColor', 'fontBackgroundColor',
                            '|', 'bold', 'italic', 'strikethrough', 'subscript', 'superscript', 'code',
                            '|', 'link', 'blockQuote', 'codeBlock',
                            '|', 'bulletedList', 'numberedList', 'todoList', 'outdent', 'indent'
                        ],
                        shouldNotGroupWhenFull: false
                    }
                })
                .catch(error => {
                    console.log(error);
                });
        </script>
    @endsection

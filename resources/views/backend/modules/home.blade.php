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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form>
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
                                            <div id="editor"></div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Uploads Cover</label>
                                            <input class="form-control" type="file" id="formFile" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-md-flex align-items-center mt-3">
                                            <div class="ms-auto mt-3 mt-md-0">
                                                <button type="submit" class="btn btn-info font-medium rounded-pill px-4">
                                                    <div class="d-flex align-items-center">
                                                        <i class="ti ti-send me-2 fs-4"></i>
                                                        Submit
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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

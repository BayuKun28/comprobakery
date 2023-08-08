@extends('backend.partials.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center gap-4 mb-4">
                    <div class="position-relative">
                        <div class="border border-2 border-primary rounded-circle">
                            <img src="{{ asset('backend/') }}/images/profile/user-1.jpg" class="rounded-circle m-1"
                                alt="user1" width="60" />
                        </div>
                    </div>
                    <div>
                        <h3 class="fw-semibold">Hi, <span
                                class="text-dark">{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->username }}</span>
                        </h3>
                        <span>Cheers, and happy activities - July 6 2023</span>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row pb-4">
                            <div class="col-lg-12 d-flex align-items-stretch">
                                <div class="w-100">
                                    <div class="d-md-flex align-items-start gap-3">
                                        <div>
                                            <h6 class="mb-0">Jumlah Pengunjung</h6>
                                            <div class="d-flex align-items-center gap-3">
                                                <h2 class="mt-2 fw-bold"><i class="ti ti-eye"></i>
                                                    1.000</h2>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <select class="form-select">
                                                <option value="1">March 2023</option>
                                                <option value="2">April 2023</option>
                                                <option value="3">May 2023</option>
                                                <option value="4">June 2023</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <div id="financial"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="row gx-0">
                            <div class="col-md-4 border-end">
                                <div class="p-4 py-3 py-md-4">
                                    <p class="fs-4 text-danger mb-0">
                                        <span class="text-danger">
                                            <span class="round-8 bg-danger rounded-circle d-inline-block me-1"></span>
                                        </span>Hari Ini
                                    </p>
                                    <h3 class=" mt-2 mb-0"><i class="ti ti-eye"></i> 3.350</h3>
                                </div>
                            </div>
                            <div class="col-md-4 border-end">
                                <div class="p-4 py-3 py-md-4">
                                    <p class="fs-4 text-primary mb-0">
                                        <span class="text-primary">
                                            <span class="round-8 bg-primary rounded-circle d-inline-block me-1"></span>
                                        </span>Kemarin
                                    </p>
                                    <h3 class=" mt-2 mb-0"><i class="ti ti-eye"></i> 1.500</h3>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-4 py-3 py-md-4">
                                    <p class="fs-4 text-info mb-0">
                                        <span class="text-info">
                                            <span class="round-8 bg-info rounded-circle d-inline-block me-1"></span>
                                        </span>Tahun ini
                                    </p>
                                    <h3 class=" mt-2 mb-0"><i class="ti ti-eye"></i> 5.000</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold">Blog Paling Populer</h5>
                        <p class="card-subtitle">Preparation for the Upcoming Activity</p>
                        <div class="mt-9 py-6 d-flex align-items-center">
                            <div
                                class="flex-shrink-0 bg-light-primary rounded-circle round d-flex align-items-center justify-content-center">
                                <i class="ti ti-map-pin text-primary fs-6"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 fw-semibold">Trip to Singapore</h6>
                                <span class="fs-3">working on</span>
                            </div>
                            <div class="ms-auto">
                                <span class="fs-2">12:00 AM</span>
                            </div>
                        </div>
                        <div class="py-6 d-flex align-items-center">
                            <div
                                class="flex-shrink-0 bg-light-danger rounded-circle round d-flex align-items-center justify-content-center">
                                <i class="ti ti-bookmark fs-6 text-danger"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 fw-semibold">Archived Data</h6>
                                <span class="fs-3">working on</span>
                            </div>
                            <div class="ms-auto">
                                <span class="fs-2">3:52 PM</span>
                            </div>
                        </div>
                        <div class="py-6 d-flex align-items-center">
                            <div
                                class="flex-shrink-0 bg-light-success rounded-circle round d-flex align-items-center justify-content-center">
                                <i class="ti ti-microphone fs-6 text-success"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 fw-semibold">Meeting with Client</h6>
                                <span class="fs-3">working on</span>
                            </div>
                            <div class="ms-auto">
                                <span class="fs-2">4:50 PM</span>
                            </div>
                        </div>
                        <div class="py-6 d-flex align-items-center">
                            <div
                                class="flex-shrink-0 bg-light-warning rounded-circle round d-flex align-items-center justify-content-center">
                                <i class="ti ti-cast text-warning fs-6"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 fw-semibold ">Screening Task Team</h6>
                                <span class="fs-3">working on</span>
                            </div>
                            <div class="ms-auto">
                                <span class="fs-2">5:10 PM</span>
                            </div>
                        </div>
                        <div class="pt-6 d-flex align-items-center">
                            <div
                                class="flex-shrink-0 bg-light-info rounded-circle round d-flex align-items-center justify-content-center">
                                <i class="ti ti-mail text-info fs-6"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 fw-semibold">Send envelope to John</h6>
                                <span class="fs-3">working on</span>
                            </div>
                            <div class="ms-auto">
                                <span class="fs-2">6:00 PM</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold">Postingan</h5>
                        <div class="mt-4 pb-3 border-bottom">
                            <div class="d-flex align-items-center">
                                <span class="bg-light-primary text-primary badge">Inprogress</span>
                                <span class="fs-3 ms-auto">8 March 2020</span>
                            </div>
                            <h6 class="mt-3">NFT Landing Page</h6>
                            <span class="fs-3 lh-sm">Designing an NFT-themed website with a creative concept so
                                th...</span>
                            <div class="hstack gap-3 mt-3">
                                <a href="#" class="fs-3 text-bodycolor d-flex align-items-center">
                                    <i class="ti ti-clipboard fs-6 text-primary me-2 d-flex"></i> 2 Tasks </a>
                                <a href="#" class="fs-3 text-bodycolor d-flex align-items-center">
                                    <i class="ti ti-message-dots fs-6 text-primary me-2 d-flex"></i> 13 Commets </a>
                            </div>
                        </div>
                        <div class="py-3 border-bottom">
                            <div class="d-flex align-items-center">
                                <span class="bg-light-danger text-danger badge">Inpending</span>
                                <span class="fs-3 ms-auto">8 Jan 2023</span>
                            </div>
                            <h6 class="mt-3">Dashboard Finanace Management</h6>
                            <span class="fs-3 lh-sm">Designing an NFT-themed website with a creative concept so
                                th...</span>
                            <div class="hstack gap-3 mt-3">
                                <a href="#" class="fs-3 text-bodycolor d-flex align-items-center">
                                    <i class="ti ti-clipboard fs-6 text-primary me-2 d-flex"></i> 4 Tasks </a>
                                <a href="#" class="fs-3 text-bodycolor d-flex align-items-center">
                                    <i class="ti ti-message-dots fs-6 text-primary me-2 d-flex"></i> 50 Commets </a>
                            </div>
                        </div>
                        <div class="pt-3">
                            <div class="d-flex align-items-center">
                                <span class="bg-light-success text-success badge">Completed</span>
                                <span class="fs-3 ms-auto">8 Feb 2023</span>
                            </div>
                            <h6 class="mt-3">Logo Branding</h6>
                            <span class="fs-3 lh-sm">Designing an NFT-themed website with a creative concept so
                                th...</span>
                            <div class="hstack gap-3 mt-3">
                                <a href="#" class="fs-3 text-bodycolor d-flex align-items-center">
                                    <i class="ti ti-clipboard fs-6 text-primary me-2 d-flex"></i> 1 Task </a>
                                <a href="#" class="fs-3 text-bodycolor d-flex align-items-center">
                                    <i class="ti ti-message-dots fs-6 text-primary me-2 d-flex"></i> 12 Commets </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container-fluid over -->
    </div>
@endsection

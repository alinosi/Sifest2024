@extends('layouts/admin.main')

@section('index')

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        @if(session()->has("success"))
            <div class="bs-toast toast toast-placement-ex m-2 bg-primary top-0 start-50 translate-middle-x show" id="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <i class="bx bx-bell me-2"></i>
                    <div class="me-auto fw-semibold">Success</div>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ session("success") }}
                </div>
            </div>
        @endif
        @if(session()->has("error"))
            <div class="bs-toast toast toast-placement-ex m-2 bg-danger top-0 start-50 translate-middle-x show" id="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <i class="bx bx-bell me-2"></i>
                    <div class="me-auto fw-semibold">Error</div>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ session("error") }}
                </div>
            </div>
        @endif

        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">
                                    Semangat Marketing 🎉
                                </h5>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img
                                    src="{{ url("admin/img/illustrations/man-with-laptop-light.png") }}"
                                    height="140"
                                    alt="View Badge User"
                                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                    data-app-light-img="illustrations/man-with-laptop-light.png"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col order-1">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <span class="fw-semibold d-block mb-1">Essay Competition</span>
                                <h3 class="card-title text-success mb-2">{{ $participant['EssayCompe'] }}</h3>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-3 col-md-4 col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <span class="fw-semibold d-block mb-1">Business Plan</span>
                                <h3 class="card-title text-success mb-2">{{ $participant['BusinessPlan'] }}</h3>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-3 col-md-4 col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <span class="fw-semibold d-block mb-1">Educational Video</span>
                                <h3 class="card-title text-success mb-2">{{ $participant['EduVideo'] }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <span class="fw-semibold d-block mb-1">Poster Design</span>
                                <h3 class="card-title text-success mb-2">{{ $participant['DesignPoster'] }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <span class="fw-semibold d-block mb-1">UIUX Design</span>
                                <h3 class="card-title text-success mb-2">{{ $participant['UIUXDesign'] }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <span class="fw-semibold d-block mb-1">Valorant Team</span>
                                <h3 class="card-title text-success mb-2">{{ $participant['ValorantTeam'] }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <span class="fw-semibold d-block mb-1">Valorant Solo</span>
                                <h3 class="card-title text-success mb-2">{{ $participant['ValorantSolo'] }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <span class="fw-semibold d-block mb-1">Mobile Legends</span>
                                <h3 class="card-title text-success mb-2">{{ $participant['MobileLegends'] }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <span class="fw-semibold d-block mb-1">Seminar</span>
                                <h3 class="card-title text-success mb-2">{{ $participant['Seminar'] }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <span class="fw-semibold d-block mb-1">Tiket VIP</span>
                                <h3 class="card-title text-success mb-2">{{ $participant['Tiket'] }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            <div>
        </div>
    </div>
    <!-- / Content -->
</div>

@endsection

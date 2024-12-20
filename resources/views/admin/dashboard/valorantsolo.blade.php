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
                                    Semangat Admin Valorant Solo 🎉
                                </h5>
                                <p class="mb-4">
                                    <span class="fw-bold text-primary fs-2">{{ $users->count() }}</span> orang telah mendaftar
                                </p>

                                <a
                                    href="#datatable;"
                                    class="btn btn-sm btn-outline-primary"
                                    >Lihat Data User</a
                                >
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
            <div class="col">
                <!-- Hoverable Table rows -->
                <div class="card" style="overflow-x: hidden">
                    <h5 class="card-header">Participant List</h5>
                    <div class="text-nowrap">
                        <table id="datatable" class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">Id</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Payment</th>
                                    <th class="text-center">Verification</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user['id'] }}</td>
                                        <td>{{ $user['name'] }}</td>
                                        <td>{{ $user['email'] }}</td>
                                        <td>
                                            <a href="{{ $user['payment'] == null ? "#" : asset('payment/'.$user['payment']) }}" target="_blank">
                                                {{ $user['payment'] == null ? "#" : $user['payment'] }}
                                            </a>
                                        </td>
                                        <td class="{{ $user['verification'] == null ? "text-danger" : "text-primary" }}">{{ $user['verification'] == null ? "Unverified" : $user['verification'] }}</td>
                                        <td>
                                            <div class="d-flex flex-column gap-2">
                                                <button value={{ $user['id'] }} class="btn btn-primary detail_btn_modal d-flex align-items-center">
                                                    <i class='bx bx-info-circle me-1'></i> Detail
                                                </button>
                                                @if ($user['verification'] == null)
                                                    <button value={{ $user['id'] }} class="btn btn-warning verification_btn_modal d-flex align-items-center">
                                                        <i class='bx bx-select-multiple me-1'></i> Verification
                                                    </button>
                                                @endif
                                                <button value={{ $user['id'] }} class="btn btn-danger delete_btn_modal d-flex align-items-center">
                                                    <i class='bx bx-trash-alt me-1'></i> Delete
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--/ Hoverable Table rows -->
            </div>
        </div>

    </div>
    <!-- / Content -->
</div>

<div class="modal fade" id="detail_modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Participant</h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <div class="tab-content" id="choices_tab_content">
                            <div class="tab-pane fade show active" id="pills_participant1" role="tabpanel" aria-labelledby="pills_participant1-tab" tabindex="0">
                                <div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="detail_name">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name" class="form-control" id="detail_name" readonly required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="detail_phone_number">Phone Number</label>
                                        <div class="col-sm-10 d-flex align-items-center">
                                            <a href="" target="_blank" id="detail_phone_number"></a>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="detail_line">Line</label>
                                        <div class="col-sm-10 d-flex align-items-center">
                                            <a href="" target="_blank" id="detail_line"></a>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="detail_id_riot">ID Riot</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="id_riot" class="form-control" id="detail_id_riot" readonly required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="detail_tag_riot">Tag Riot</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="tag_riot" class="form-control" id="detail_tag_riot" readonly required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="detail_rank">Rank Valo</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="rank" class="form-control" id="detail_rank" readonly required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Id Card</label>
                                        <div class="col-sm-10">
                                            <img src="" id="detail_idcard" style="width: 100%; max-width:300px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="verification_modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 1200px; width:100%; margin:auto; padding:5%">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Verification</h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
                <div class="row mb-4">
                    <div class="col-12 col-md-6 col-xl-4 d-flex align-items-center justify-content-center">
                        <div class="row mb-3">
                            <img src="" id="verification_payment" style="width: 100%; max-width:300px;">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-8">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="verification_name">Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" id="verification_name" readonly required/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="verification_institution">Institution</label>
                            <div class="col-sm-10">
                                <input type="text" name="institution" class="form-control" id="verification_institution" readonly required/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Id Card</label>
                            <div class="col-sm-10">
                                <img src="" id="verification_idcard" style="width: 100%; max-width:300px;">
                            </div>
                        </div>
                    </div>
                </div>
                <form action="{{ route('admin.valorant', 'solo') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="verification_email">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" id="verification_email" readonly required/>
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-warning d-flex align-items-center">
                            <i class='bx bx-select-multiple me-1'></i> Verified
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="delete_modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Participant</h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.valorant', 'solo') }}" method="post" autocomplete="off">
                    @csrf
                    @method('delete')
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="delete_name">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" id="delete_name" readonly required/>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="delete_email">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" id="delete_email" readonly required/>
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-danger d-flex align-items-center">
                            <i class='bx bx-trash-alt me-1'></i> Delete
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

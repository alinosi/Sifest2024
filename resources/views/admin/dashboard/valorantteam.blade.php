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
                                    Semangat Admin Valoran Team 🎉
                                </h5>
                                <p class="mb-4">
                                    <span class="fw-bold text-primary fs-2">{{ $users->count() }}</span> team telah mendaftar <br>
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
                                    <th class="text-center">Team Name</th>
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
                                        <td>{{ $user['team_name'] }}</td>
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
                        <ul class="nav nav-pills mb-3" id="participants_tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills_participant1-tab" data-bs-toggle="pill" data-bs-target="#pills_participant1" type="button" role="tab" aria-controls="pills_participant1" aria-selected="true">Participant 1</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills_participant2-tab" data-bs-toggle="pill" data-bs-target="#pills_participant2" type="button" role="tab" aria-controls="pills_participant2" aria-selected="true">Participant 2</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills_participant3-tab" data-bs-toggle="pill" data-bs-target="#pills_participant3" type="button" role="tab" aria-controls="pills_participant3" aria-selected="true">Participant 3</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills_participant4-tab" data-bs-toggle="pill" data-bs-target="#pills_participant4" type="button" role="tab" aria-controls="pills_participant4" aria-selected="true">Participant 4</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills_participant5-tab" data-bs-toggle="pill" data-bs-target="#pills_participant5" type="button" role="tab" aria-controls="pills_participant5" aria-selected="true">Participant 5</button>
                            </li>
                        </ul>

                        <div class="tab-content" id="participants_tab_content">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="detail_team_name">Team Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="team_name" class="form-control" id="detail_team_name" readonly required/>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="pills_participant1" role="tabpanel" aria-labelledby="pills_participant1-tab" tabindex="0">
                                <div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="detail_name1">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name1" class="form-control" id="detail_name1" readonly required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="detail_phone_number1">Phone Number</label>
                                        <div class="col-sm-10 d-flex align-items-center">
                                            <a href="" target="_blank" id="detail_phone_number1"></a>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="detail_line1">Line</label>
                                        <div class="col-sm-10 d-flex align-items-center">
                                            <a href="" target="_blank" id="detail_line1"></a>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="detail_id_riot1">ID Riot</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="id_riot1" class="form-control" id="detail_id_riot1" readonly required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="detail_tag_riot1">Tag Riot</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="tag_riot1" class="form-control" id="detail_tag_riot1" readonly required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="detail_rank1">Rank Valo</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="rank1" class="form-control" id="detail_rank1" readonly required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Id Card</label>
                                        <div class="col-sm-10">
                                            <img src="" id="detail_idcard1" style="width: 100%; max-width:300px;">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade show" id="pills_participant2" role="tabpanel" aria-labelledby="pills_participant2-tab" tabindex="0">
                                <div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="detail_name2">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name2" class="form-control" id="detail_name2" readonly required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="detail_phone_number2">Phone Number</label>
                                        <div class="col-sm-10 d-flex align-items-center">
                                            <a href="" target="_blank" id="detail_phone_number2"></a>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="detail_line2">Line</label>
                                        <div class="col-sm-10 d-flex align-items-center">
                                            <a href="" target="_blank" id="detail_line2"></a>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="detail_id_riot2">ID Riot</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="id_riot2" class="form-control" id="detail_id_riot2" readonly required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="detail_tag_riot2">Tag Riot</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="tag_riot2" class="form-control" id="detail_tag_riot2" readonly required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="detail_rank2">Rank Valo</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="rank2" class="form-control" id="detail_rank2" readonly required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Id Card</label>
                                        <div class="col-sm-10">
                                            <img src="" id="detail_idcard2" style="width: 100%; max-width:300px;">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade show" id="pills_participant3" role="tabpanel" aria-labelledby="pills_participant3-tab" tabindex="0">
                                <div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="detail_name3">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name3" class="form-control" id="detail_name3" readonly required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="detail_phone_number3">Phone Number</label>
                                        <div class="col-sm-10 d-flex align-items-center">
                                            <a href="" target="_blank" id="detail_phone_number3"></a>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="detail_line3">Line</label>
                                        <div class="col-sm-10 d-flex align-items-center">
                                            <a href="" target="_blank" id="detail_line3"></a>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="detail_id_riot3">ID Riot</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="id_riot3" class="form-control" id="detail_id_riot3" readonly required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="detail_tag_riot3">Tag Riot</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="tag_riot3" class="form-control" id="detail_tag_riot3" readonly required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="detail_rank3">Rank Valo</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="rank3" class="form-control" id="detail_rank3" readonly required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Id Card</label>
                                        <div class="col-sm-10">
                                            <img src="" id="detail_idcard3" style="width: 100%; max-width:300px;">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade show" id="pills_participant4" role="tabpanel" aria-labelledby="pills_participant4-tab" tabindex="0">
                                <div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="detail_name4">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name4" class="form-control" id="detail_name4" readonly required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="detail_phone_number4">Phone Number</label>
                                        <div class="col-sm-10 d-flex align-items-center">
                                            <a href="" target="_blank" id="detail_phone_number4"></a>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="detail_line4">Line</label>
                                        <div class="col-sm-10 d-flex align-items-center">
                                            <a href="" target="_blank" id="detail_line4"></a>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="detail_id_riot4">ID Riot</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="id_riot4" class="form-control" id="detail_id_riot4" readonly required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="detail_tag_riot4">Tag Riot</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="tag_riot4" class="form-control" id="detail_tag_riot4" readonly required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="detail_rank4">Rank Valo</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="rank4" class="form-control" id="detail_rank4" readonly required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Id Card</label>
                                        <div class="col-sm-10">
                                            <img src="" id="detail_idcard4" style="width: 100%; max-width:300px;">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade show" id="pills_participant5" role="tabpanel" aria-labelledby="pills_participant5-tab" tabindex="0">
                                <div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="detail_name5">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name5" class="form-control" id="detail_name5" readonly required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="detail_phone_number5">Phone Number</label>
                                        <div class="col-sm-10 d-flex align-items-center">
                                            <a href="" target="_blank" id="detail_phone_number5"></a>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="detail_line5">Line</label>
                                        <div class="col-sm-10 d-flex align-items-center">
                                            <a href="" target="_blank" id="detail_line5"></a>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="detail_id_riot5">ID Riot</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="id_riot5" class="form-control" id="detail_id_riot5" readonly required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="detail_tag_riot5">Tag Riot</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="tag_riot5" class="form-control" id="detail_tag_riot5" readonly required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="detail_rank5">Rank Valo</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="rank5" class="form-control" id="detail_rank5" readonly required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Id Card</label>
                                        <div class="col-sm-10">
                                            <img src="" id="detail_idcard5" style="width: 100%; max-width:300px;">
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

                        <ul class="nav nav-pills mb-3" id="verifications_tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills_verification1-tab" data-bs-toggle="pill" data-bs-target="#pills_verification1" type="button" role="tab" aria-controls="pills_verification1" aria-selected="true">Participant 1</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills_verification2-tab" data-bs-toggle="pill" data-bs-target="#pills_verification2" type="button" role="tab" aria-controls="pills_verification2" aria-selected="true">Participant 2</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills_verification3-tab" data-bs-toggle="pill" data-bs-target="#pills_verification3" type="button" role="tab" aria-controls="pills_verification3" aria-selected="true">Participant 3</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills_verification4-tab" data-bs-toggle="pill" data-bs-target="#pills_verification4" type="button" role="tab" aria-controls="pills_verification4" aria-selected="true">Participant 4</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills_verification5-tab" data-bs-toggle="pill" data-bs-target="#pills_verification5" type="button" role="tab" aria-controls="pills_verification5" aria-selected="true">Participant 5</button>
                            </li>
                        </ul>

                        <div class="tab-content" id="verifications_tab_content">
                            <div class="tab-pane fade show active" id="pills_verification1" role="tabpanel" aria-labelledby="pills_verification1-tab" tabindex="0">
                                <div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="verification_name1">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name1" class="form-control" id="verification_name1" readonly required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="verification_institution1">Institution</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="institution1" class="form-control" id="verification_institution1" readonly required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Id Card</label>
                                        <div class="col-sm-10">
                                            <img src="" id="verification_idcard1" style="width: 100%; max-width:300px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="pills_verification2" role="tabpanel" aria-labelledby="pills_verification2-tab" tabindex="0">
                                <div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="verification_name2">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name2" class="form-control" id="verification_name2" readonly required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="verification_institution2">Institution</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="institution2" class="form-control" id="verification_institution2" readonly required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Id Card</label>
                                        <div class="col-sm-10">
                                            <img src="" id="verification_idcard2" style="width: 100%; max-width:300px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="pills_verification3" role="tabpanel" aria-labelledby="pills_verification3-tab" tabindex="0">
                                <div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="verification_name3">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name3" class="form-control" id="verification_name3" readonly required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="verification_institution3">Institution</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="institution3" class="form-control" id="verification_institution3" readonly required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Id Card</label>
                                        <div class="col-sm-10">
                                            <img src="" id="verification_idcard3" style="width: 100%; max-width:300px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="pills_verification4" role="tabpanel" aria-labelledby="pills_verification4-tab" tabindex="0">
                                <div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="verification_name4">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name4" class="form-control" id="verification_name4" readonly required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="verification_institution4">Institution</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="institution4" class="form-control" id="verification_institution4" readonly required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Id Card</label>
                                        <div class="col-sm-10">
                                            <img src="" id="verification_idcard4" style="width: 100%; max-width:300px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="pills_verification5" role="tabpanel" aria-labelledby="pills_verification5-tab" tabindex="0">
                                <div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="verification_name5">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name5" class="form-control" id="verification_name5" readonly required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="verification_institution5">Institution</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="institution5" class="form-control" id="verification_institution5" readonly required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Id Card</label>
                                        <div class="col-sm-10">
                                            <img src="" id="verification_idcard5" style="width: 100%; max-width:300px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="{{ route('admin.valorant', 'team') }}" method="post" autocomplete="off" class="px-4">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="verification_team_name">Team Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="team_name" class="form-control" id="verification_team_name" readonly required/>
                        </div>
                    </div>
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
                <form action="{{ route('admin.valorant', 'team') }}" method="post" autocomplete="off">
                    @csrf
                    @method('delete')
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="delete_name">Team Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="team_name" class="form-control" id="delete_team_name" readonly required/>
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

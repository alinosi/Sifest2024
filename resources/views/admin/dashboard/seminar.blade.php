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
                                    Semangat Admin Seminar 🎉
                                </h5>
                                <p class="mb-4">
                                    <span class="fw-bold text-primary fs-2">{{ $users->where("metode", "Online")->count() }}</span> tiket telah terjual secara online
                                </p>
                                <p class="mb-4">
                                    <span class="fw-bold text-primary fs-2">{{ $users->where("metode", "Offline")->count() }}</span> tiket telah terjual secara offline
                                </p>
                                <p class="mb-4">
                                    <span class="fw-bold text-primary fs-2">{{ $users->where("metode", "Marketing")->count() }}</span> tiket telah terjual secara marketing
                                </p>

                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#insertModal">
                                    <i class='bx bxs-file-plus mb-1'></i> &nbsp; Add Data
                                </button>
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
                                    <th class="text-center">Phone Number/th>
                                    <th class="text-center">Line</th>
                                    <th class="text-center">Type</th>
                                    <th class="text-center">Payment</th>
                                    <th class="text-center">Verification</th>
                                    <th class="text-center">Qty</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user['id'] }}</td>
                                        <td>{{ $user['name'] }}</td>
                                        <td>{{ $user['email'] }}</td>
                                        <td><a href="{{ "https://wa.me/".$user['phone_number'] }}" target="_blank">{{ $user['phone_number'] }}</a></td>
                                        <td><a href="{{ "https://line.me/ti/p/".$user['line'] }}" target="_blank">{{ $user['line'] }}</a></td>
                                        <td>{{ $user['type'] }}</td>
                                        <td>
                                            <a href="{{ $user['payment'] == null ? "#" : asset('payment/'.$user['payment']) }}" target="_blank">
                                                {{ $user['payment'] == null ? "#" : $user['payment'] }}
                                            </a>
                                        </td>
                                        <td class="{{ $user['verification'] == null ? "text-danger" : "text-primary" }}">{{ $user['verification'] == null ? "Unverified" : $user['verification'] }}</td>
                                        <td>{{ $user['jumlahData'] }}</td>
                                        <td>
                                            <div class="d-flex flex-column gap-2">
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

<div class="modal fade" id="insertModal" tabindex="-1" aria-labelledby="insertModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Manual Seminar Registration </h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('registrationOTS.seminar') }}" method="post" autocomplete="off">
                @csrf
                <!--<input type="text" name="metode" value="Offline" class="form-control" id="metode" hidden/>-->
                <input type="text" name="verification" value="Verified" class="form-control" id="verification" hidden/>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="name">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="name" required/>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="email">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="email" required/>
                        @error('email')
                            <div class="form-text">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="phone_number">Phone Number</label>
                    <div class="col-sm-10">
                        <input type="text" name="phone_number" class="form-control" id="phone_number" required maxlength="15"/>
                        <div class="form-text">Gunakan format 628 dalam menginput no telepon</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="line">Line</label>
                    <div class="col-sm-10">
                        <input type="text" name="line" class="form-control" id="line" required/>
                    </div>
                </div>
                <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="type">Type </label>
                        <div class="col-sm-10">
                            <select onchange="changeviu()" name="type" class="form-select" id="type" required>
                                <option value="" hidden disabled selected></option>
                                <option id="nb" value="Nebula">Nebula</option>
                                <option id="ns" value="Supernova">Supernova</option>
                            </select>
                        </div>
                </div>
                <div id="jsn" class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="jumlahData">Ticket Quantity </label>
                        <div  class="col-sm-10">
                            <select name="jumlahData" class="form_select" id="jumlahData" required>
                                <option value="1">1 Ticket</option>
                                <option value="2">2 Ticket</option>
                                <option value="3">3 Ticket</option>
                                <option value="4">4 Ticket</option>
                                <option value="5">5 Ticket</option>
                            </select>
                        </div>
                </div>
                <!--<div id="jsv" style="none" class="row mb-3">-->
                <!--        <label class="col-sm-2 col-form-label" for="jumlahData">Ticket Quantity </label>-->
                <!--        <div  class="col-sm-10">-->
                <!--            <select name="jumlahData" class="form_select" id="jumlahData" required>-->
                <!--                <option value="1">1 Ticket</option>-->
                <!--            </select>-->
                <!--        </div>-->
                <!--</div>-->
                <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="type">Metode </label>
                        <div class="col-sm-10">
                            <select name="metode" class="form-select" id="metode" required>
                                <!--<input type="text" name="metode" value="Offline" class="form-control" id="metode" hidden/>-->
                                <option value="" hidden disabled selected></option>
                                <option value="Offline">Offline</option>
                                <option value="Marketing">Marketing</option>
                            </select>
                        </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary d-flex align-items-center">
                        Submit
                    </button>
                </div>
            </form>
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
                    <div class="col">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="verification_name">Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" id="verification_name" readonly required/>
                            </div>
                        </div>
                        <div class="row mb-3" style="display: flex; justify-content: center">
                            <img src="" id="verification_payment" style="width: 100%; max-width:300px;">
                        </div>
                    </div>
                </div>
                <form action="{{ route('admin.seminar') }}" method="post" autocomplete="off">
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
                <form action="{{ route('admin.seminar') }}" method="post" autocomplete="off">
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

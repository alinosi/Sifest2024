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
                                    Semangat Admin User 🎉
                                </h5>
                                <p class="mb-4">
                                    <span class="fw-bold text-primary fs-2">{{ $users->count() }}</span> orang telah terdaftar didalam web
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
                                    <th class="text-center">Phone Number</th>
                                    <th class="text-center">Line</th>
                                    <th class="text-center">Institution</th>
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
                                            <div><a href="https://line.me/R/ti/p/{{ $user['line'] }}" target="_blank">{{ $user['line'] }}</a></div>
                                        </td>
                                        <td>
                                            <div><a href="https://wa.me/{{ $user['phone_number'] }}" target="_blank">{{ $user['phone_number'] }}</a></div>
                                        </td>
                                        <td><div>{{ $user['institution'] }}</div></td>
                                        <td class="{{ $user['email_verified_at'] == null ? "text-danger" : "text-primary" }}">{{ $user['email_verified_at'] == null ? "Unverified" : "Verified" }}</td>
                                        <td>
                                            <div class="d-flex flex-column gap-2">
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
                <form action="{{ route('admin.user') }}" method="post" autocomplete="off">
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

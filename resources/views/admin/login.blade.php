@extends('layouts/admin.main')

@section('login')

<div class="container-xxl">
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

    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Register -->
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-2">Welcome Admin SI FEST</h4>
                    <p class="mb-4">
                        Please sign-in to our account !!!!
                    </p>

                    <form
                        id="formAuthentication"
                        class="mb-3"
                        action="{{ route("admin.login") }}"
                        method="POST"
                        autocomplete="off"
                    >
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label"
                                >Username</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                id="username"
                                name="username"
                                placeholder="Enter your username"
                                autofocus required
                            />
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="password"
                                    >Password</label
                                >
                            </div>
                            <div class="input-group input-group-merge">
                                <input
                                    type="password"
                                    id="password"
                                    class="form-control"
                                    name="password"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="password" required
                                />
                                <span class="input-group-text cursor-pointer"
                                    ><i class="bx bx-hide"></i
                                ></span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input
                                class="btn btn-primary d-grid w-100"
                                type="submit"
                                value="Login"
                            >
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Register -->
        </div>
    </div>
</div>

@endsection
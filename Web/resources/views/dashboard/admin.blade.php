@extends('components.admin-layout')

@section('title', 'Dashboard')

@section('body')

        <div class="d-flex d-xxl-flex flex-column align-items-center align-items-xxl-center"
            style="width: 100%;margin-top: 50px;">
            <div class="container py-4 py-xl-5">
                <div class="row mb-5">
                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                        <h2 style="text-align: right;color: var(--bs-light);">Features</h2>
                        <p class="w-lg-50" style="text-align: left;color: var(--bs-gray-500);">With your account, you can
                            perform the following operations without restrictions. Click the menu button&nbsp;<i
                                class="icon ion-android-menu"
                                style="color: var(--km-bg);font-size: 15px;background: #fd3838;padding: 5px;border-radius: 5px;"></i>&nbsp;placed
                            at the top-right of the screen<br></p>
                    </div>
                </div>
                <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                    <div class="col">
                        <div class="p-4"><span class="badge bg-dark mb-2" style="background: var(--km-black);">Tip</span>
                            <h4 style="color: var(--bs-gray-500);">Manage Administrator(s)</h4>
                            <p style="color: var(--bs-gray-500);">You can view,&nbsp; and add new administrator account<br>
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-4"><span class="badge bg-dark mb-2" style="background: var(--km-black);">Tip</span>
                            <h4 style="color: var(--bs-gray-500);">Manage Customer(s)</h4>
                            <p style="color: var(--bs-gray-500);">You can view, edit, delete, and add new customer account
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-4"><span class="badge bg-dark mb-2"
                                style="background: var(--km-black);">Tip</span>
                            <h4 style="color: var(--bs-gray-500);"><strong><span style="color: var(--bs-gray-500);">Manage
                                        Vendor(s)</span></strong><br></h4>
                            <p style="color: var(--bs-gray-500);">You can view, edit, delete, and add new vendor
                                account<br></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

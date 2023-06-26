@extends('backend.layout.base')

@section('content')
    <div class="row">
        <div class="col-sm-6">
            <div class="page-title-box">
                <h4>{{ $title }}</h4>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">{{ Helper::apk()->app_name }}</a></li>
                    <li class="breadcrumb-item active"><a href="javascript: void(0);">{{ $title }}</a></li>

                </ol>
            </div>
        </div>
        {{-- <div class="col-sm-6">
            <div class="state-information d-none d-sm-block">
                <div class="state-graph">
                    <div id="header-chart-1"></div>
                    <div class="info">Balance $ 2,317</div>
                </div>
                <div class="state-graph">
                    <div id="header-chart-2"></div>
                    <div class="info">Item Sold 1230</div>
                </div>
            </div>
        </div> --}}
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card mini-stat bg-primary">
                <div class="card-body mini-stat-img">
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-account-cog-outline float-end"></i>
                    </div>
                    <div class="text-white">
                        <h6 class="text-uppercase mb-3 font-size-16 text-white">Admin</h6>
                        <h2 class="mb-4 text-white">{{ $admin }}</h2>
                        <span class="badge bg-info"> {{substr($percantageAdmin[0]->progres, 0, 4)}}% </span> <span class="ms-2">Admin register this month</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card mini-stat bg-primary">
                <div class="card-body mini-stat-img">
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-account-cowboy-hat float-end"></i>
                    </div>
                    <div class="text-white">
                        <h6 class="text-uppercase mb-3 font-size-16 text-white">Super Admin</h6>
                        <h2 class="mb-4 text-white">{{ $supadmin }}</h2>
                        <span class="badge bg-danger"> {{substr($percantageUser[0]->progres, 0, 4)}}% </span> <span class="ms-2">Super Admin register this month</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card mini-stat bg-primary">
                <div class="card-body mini-stat-img">
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-account-tie float-end"></i>
                    </div>
                    <div class="text-white">
                        <h6 class="text-uppercase mb-3 font-size-16 text-white">Users</h6>
                        <h2 class="mb-4 text-white">{{ $users }}</h2>
                        <span class="badge bg-warning"> {{substr($percantageSuAdmin[0]->progres, 0, 4)}}% </span> <span class="ms-2">Users register this month</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card mini-stat bg-primary">
                <div class="card-body mini-stat-img">
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-account-group float-end"></i>
                    </div>
                    <div class="text-white">
                        <h6 class="text-uppercase mb-3 font-size-16 text-white">All Users</h6>
                        <h2 class="mb-4 text-white">{{ $allusers }}</h2>
                        <span class="badge bg-info"> {{substr($percantageAllUser[0]->progres, 0, 4)}}% </span> <span class="ms-2">All Users register this month</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Latest Transactions</h4>

                    <div class="table-responsive">
                        <table class="table align-middle table-centered table-vertical table-nowrap">

                            <tbody>
                                <tr>
                                    <td>
                                        <img src="assets/images/users/user-2.jpg" alt="user-image"
                                            class="avatar-xs rounded-circle me-2" /> Herbert C. Patton
                                    </td>
                                    <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Confirm</td>
                                    <td>
                                        $14,584
                                        <p class="m-0 text-muted font-size-14">Amount</p>
                                    </td>
                                    <td>
                                        5/12/2016
                                        <p class="m-0 text-muted font-size-14">Date</p>
                                    </td>
                                    <td>
                                        <button type="button"
                                            class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <img src="assets/images/users/user-3.jpg" alt="user-image"
                                            class="avatar-xs rounded-circle me-2" /> Mathias N. Klausen
                                    </td>
                                    <td><i class="mdi mdi-checkbox-blank-circle text-warning"></i> Waiting payment</td>
                                    <td>
                                        $8,541
                                        <p class="m-0 text-muted font-size-14">Amount</p>
                                    </td>
                                    <td>
                                        10/11/2016
                                        <p class="m-0 text-muted font-size-14">Date</p>
                                    </td>
                                    <td>
                                        <button type="button"
                                            class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <img src="assets/images/users/user-4.jpg" alt="user-image"
                                            class="avatar-xs rounded-circle me-2" /> Nikolaj S. Henriksen
                                    </td>
                                    <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Confirm</td>
                                    <td>
                                        $954
                                        <p class="m-0 text-muted font-size-14">Amount</p>
                                    </td>
                                    <td>
                                        8/11/2016
                                        <p class="m-0 text-muted font-size-14">Date</p>
                                    </td>
                                    <td>
                                        <button type="button"
                                            class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <img src="assets/images/users/user-5.jpg" alt="user-image"
                                            class="avatar-xs rounded-circle me-2" /> Lasse C. Overgaard
                                    </td>
                                    <td><i class="mdi mdi-checkbox-blank-circle text-danger"></i> Payment expired</td>
                                    <td>
                                        $44,584
                                        <p class="m-0 text-muted font-size-14">Amount</p>
                                    </td>
                                    <td>
                                        7/11/2016
                                        <p class="m-0 text-muted font-size-14">Date</p>
                                    </td>
                                    <td>
                                        <button type="button"
                                            class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <img src="assets/images/users/user-6.jpg" alt="user-image"
                                            class="avatar-xs rounded-circle me-2" /> Kasper S. Jessen
                                    </td>
                                    <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Confirm</td>
                                    <td>
                                        $8,844
                                        <p class="m-0 text-muted font-size-14">Amount</p>
                                    </td>
                                    <td>
                                        1/11/2016
                                        <p class="m-0 text-muted font-size-14">Date</p>
                                    </td>
                                    <td>
                                        <button type="button"
                                            class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Latest Orders</h4>

                    <div class="table-responsive">
                        <table class="table align-middle table-centered table-vertical table-nowrap mb-1">

                            <tbody>
                                <tr>
                                    <td>#12354781</td>
                                    <td>
                                        <img src="assets/images/users/user-1.jpg" alt="user-image"
                                            class="avatar-xs me-2 rounded-circle" /> Riverston Glass Chair
                                    </td>
                                    <td><span class="badge rounded-pill bg-success">Delivered</span></td>
                                    <td>
                                        $185
                                    </td>
                                    <td>
                                        5/12/2016
                                    </td>
                                    <td>
                                        <button type="button"
                                            class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>#52140300</td>
                                    <td>
                                        <img src="assets/images/users/user-2.jpg" alt="user-image"
                                            class="avatar-xs me-2 rounded-circle" /> Shine Company Catalina
                                    </td>
                                    <td><span class="badge rounded-pill bg-success">Delivered</span></td>
                                    <td>
                                        $1,024
                                    </td>
                                    <td>
                                        5/12/2016
                                    </td>
                                    <td>
                                        <button type="button"
                                            class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>#96254137</td>
                                    <td>
                                        <img src="assets/images/users/user-3.jpg" alt="user-image"
                                            class="avatar-xs me-2 rounded-circle" /> Trex Outdoor Furniture Cape
                                    </td>
                                    <td><span class="badge rounded-pill bg-danger">Cancel</span></td>
                                    <td>
                                        $657
                                    </td>
                                    <td>
                                        5/12/2016
                                    </td>
                                    <td>
                                        <button type="button"
                                            class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>#12365474</td>
                                    <td>
                                        <img src="assets/images/users/user-4.jpg" alt="user-image"
                                            class="avatar-xs me-2 rounded-circle" /> Oasis Bathroom Teak Corner
                                    </td>
                                    <td><span class="badge rounded-pill bg-warning">Shipped</span></td>
                                    <td>
                                        $8451
                                    </td>
                                    <td>
                                        5/12/2016
                                    </td>
                                    <td>
                                        <button type="button"
                                            class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>#85214796</td>
                                    <td>
                                        <img src="assets/images/users/user-5.jpg" alt="user-image"
                                            class="avatar-xs me-2 rounded-circle" /> BeoPlay Speaker
                                    </td>
                                    <td><span class="badge rounded-pill bg-success">Delivered</span></td>
                                    <td>
                                        $584
                                    </td>
                                    <td>
                                        5/12/2016
                                    </td>
                                    <td>
                                        <button type="button"
                                            class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#12354781</td>
                                    <td>
                                        <img src="assets/images/users/user-6.jpg" alt="user-image"
                                            class="avatar-xs me-2 rounded-circle" /> Riverston Glass Chair
                                    </td>
                                    <td><span class="badge rounded-pill bg-success">Delivered</span></td>
                                    <td>
                                        $185
                                    </td>
                                    <td>
                                        5/12/2016
                                    </td>
                                    <td>
                                        <button type="button"
                                            class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

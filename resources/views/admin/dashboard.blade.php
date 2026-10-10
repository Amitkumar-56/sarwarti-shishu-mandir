@include('admin.header')
@include('admin.sidebar')

    <!-- Vertical Overlay-->
    <div class="vertical-overlay"></div>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">School Dashboard</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row mb-3 pb-1">
                    <div class="col-12">
                        <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                            <div class="flex-grow-1">
                                <h4 class="fs-16 mb-1">Welcome back, Admin!</h4>
                                <p class="text-muted mb-0">Here's an overview of the school's activities and recent online registrations.</p>
                            </div>
                        </div><!-- end card header -->
                    </div><!--end col-->
                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Total Students</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="1520">0</span></h4>
                                        <a href="#" class="text-decoration-underline">View all students</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-success-subtle rounded fs-3">
                                            <i class="ri-user-line text-success"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                     <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Teachers & Staff</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="85">0</span></h4>
                                        <a href="#" class="text-decoration-underline">View all teachers</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-info-subtle rounded fs-3">
                                            <i class="ri-team-line text-info"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Online Registrations</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4">{{ $total_registrations }}</h4>
                                        <a href="{{ route('admin.online-registrations') }}" class="text-decoration-underline">View new registrations</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-warning-subtle rounded fs-3">
                                            <i class="ri-file-text-line text-warning"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Today's Inquiries</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="18">0</span></h4>
                                        <a href="#" class="text-decoration-underline">View all inquiries</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-primary-subtle rounded fs-3">
                                            <i class="ri-message-line text-primary"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div> <!-- end row-->

                <div class="row">
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Recent Online Registrations</h4>
                                <div class="flex-shrink-0">
                                    <button type="button" class="btn btn-soft-info btn-sm">
                                        <i class="ri-file-list-3-line align-middle"></i> Generate Report
                                    </button>
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="table-responsive table-card">
                                    <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                        <thead class="text-muted table-light">
                                            <tr>
                                                <th scope="col">Registration ID</th>
                                                <th scope="col">Student Name</th>
                                                <th scope="col">Class</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($recent_registrations as $reg)
                                            <tr>
                                                <td><a href="{{ route('admin.view-online-registration', $reg->id) }}" class="fw-medium link-primary">{{ $reg->registration_no }}</a></td>
                                                <td>{{ $reg->student_name_hi ?? $reg->student_name_en ?? 'N/A' }}</td>
                                                <td>Class {{ $reg->admission_class ?? 'N/A' }}</td>
                                                <td>{{ $reg->created_at->format('d M, Y') }}</td>
                                                <td><span class="badge bg-success-subtle text-success">New</span></td>
                                                <td><a href="{{ route('admin.view-online-registration', $reg->id) }}" class="btn btn-sm btn-soft-primary">View</a></td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="6" class="text-center text-muted">No registrations found</td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table><!-- end table -->
                                </div>
                            </div>
                        </div> <!-- .card-->
                    </div> <!-- .col-->

                    <div class="col-xl-4">
                        <div class="card card-height-100">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Upcoming Events</h4>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="d-flex mb-2">
                                    <div class="flex-shrink-0 mr-3" style="margin-right: 15px;">
                                        <div class="avatar-sm">
                                            <span class="avatar-title bg-light text-primary rounded fs-5">
                                                15
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">Annual Sports Meet</h6>
                                        <p class="text-muted mb-0">Oct 2026, 09:00 AM</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex mb-2">
                                    <div class="flex-shrink-0 mr-3" style="margin-right: 15px;">
                                        <div class="avatar-sm">
                                            <span class="avatar-title bg-light text-primary rounded fs-5">
                                                22
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">PTA Meeting</h6>
                                        <p class="text-muted mb-0">Oct 2026, 11:30 AM</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 mr-3" style="margin-right: 15px;">
                                        <div class="avatar-sm">
                                            <span class="avatar-title bg-light text-primary rounded fs-5">
                                                05
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">Diwali Celebration</h6>
                                        <p class="text-muted mb-0">Nov 2026, 10:00 AM</p>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- .card-->
                    </div> <!-- .col-->
                </div> <!-- end row-->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        @include('admin.footer')
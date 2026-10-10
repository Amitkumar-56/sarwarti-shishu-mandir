@include('admin.header')
@include('admin.sidebar')

<div class="vertical-overlay"></div>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">All Online Registrations</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Student Name</th>
                                        <th>Father's Name</th>
                                        <th>Class</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($registrations as $reg)
                                    <tr>
                                        <td>{{ $reg->registration_no }}</td>
                                        <td>{{ $reg->student_name_hi ?? $reg->student_name_en }}</td>
                                        <td>{{ $reg->father_name }}</td>
                                        <td>{{ $reg->admission_class }}</td>
                                        <td>{{ $reg->created_at->format('d M, Y') }}</td>
                                        <td>
                                            <a href="{{ route('admin.view-online-registration', $reg->id) }}" class="btn btn-sm btn-primary">View Full Form</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('admin.footer')
</div>

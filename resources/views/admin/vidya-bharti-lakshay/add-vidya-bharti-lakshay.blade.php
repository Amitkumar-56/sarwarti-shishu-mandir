@include('admin.header')
@include('admin.sidebar')
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <!-- start page title -->
         <div class="row">
            <div class="col-12">
               <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  <h4 class="mb-sm-0">Add Vidya Bharti Lakshay </h4>
                  <div class="page-title-right">
                     <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Add Vidya Bharti Lakshay</a></li>
                        <li class="breadcrumb-item active">Vidya Bharti Lakshay</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
         <!-- end page title -->
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-header align-items-center d-flex">
                     <h4 class="card-title mb-0 flex-grow-1">Vidya Bharti Lakshay List</h4>
                     <div class="flex-shrink-0">
                        <div class="form-check form-switch form-switch-right form-switch-md">
                           <a type="button" class="btn btn-primary" href="{{ url('admin/vidya-bharti-lakshay-list') }}">Show Vidya Bharti Lakshay</a>
                        </div>
                     </div>
                  </div>
                  <!-- end card header -->
                  <div class="card-body">
                     <div class="live-preview">
                       @if (\Session::has('success'))
                            <div class="alert alert-info">
                            {!! \Session::get('success') !!}
                            </div>
                            @endif
                        <form action="{{ url('admin/add-vidya-bharti-lakshay') }}" method="Post" enctype="multipart/form-data">
                            @csrf
                        <div class="row gy-4">
                              
                           <div class="col-xxl-6 col-md-6">
                              <div>
                                 <label for="basiInput" class="form-label">Title </label>
                                 <input type="text" name="title" class="form-control" >
                                  @if ($errors->has('title'))
                              <span class="error">{{ $errors->first('title') }}</span>
                              @endif

                              </div>
                           </div>

                           <div class="col-xxl-12 col-md-12">
                              <div>
                                 <label for="labelInput" class="form-label">Description</label>
                                 <textarea id="content" name="description" class="form-control" placeholder="Content here....."></textarea>
                                 @if ($errors->has('description'))
                                 <span class="error">{{ $errors->first('description') }}</span>
                                 @endif
                              </div>
                           </div>
                           <!--end col-->
                         
                        </div>
                        <!--end row-->
                         <input type="submit" value="Submit" value="Submit" class="btn btn-primary">
                     </div>

                  </div>
                  </form>
               </div>
            </div>
            <!--end col-->
         </div>
         <!--end row-->
      </div>
      <!-- container-fluid -->
   </div>
   <!-- End Page-content -->
</div>
@include('admin.footer')
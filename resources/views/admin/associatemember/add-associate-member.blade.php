@include('admin.header')
@include('admin.sidebar')
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <!-- start page title -->
         <div class="row">
            <div class="col-12">
               <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  <h4 class="mb-sm-0">Add Associate Member </h4>
                  <div class="page-title-right">
                     <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Add Associate Member</a></li>
                        <li class="breadcrumb-item active">Associate Member</li>
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
                     <h4 class="card-title mb-0 flex-grow-1">Associate Member List</h4>
                     <div class="flex-shrink-0">
                        <div class="form-check form-switch form-switch-right form-switch-md">
                           <a type="button" class="btn btn-primary" href="{{ url('admin/associate-member-list') }}">Show Associate Member</a>
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
                        <form action="{{ url('admin/add-associate-member') }}" method="Post" enctype="multipart/form-data">
                            @csrf
                        <div class="row gy-4">
                           <div class="col-xxl-6 col-md-6">
                              <div>
                                 <label for="basiInput" class="form-label">Name </label>
                                 <input type="text" name="name" class="form-control" >
                                  @if ($errors->has('name'))
                              <span class="error">{{ $errors->first('name') }}</span>
                              @endif
                              </div>
                           </div>
                           <div class="col-xxl-6 col-md-6">
                              <div>
                                 <label for="basiInput" class="form-label">Roll </label>
                                 <input type="text" name="roll" class="form-control" >
                                  @if ($errors->has('roll'))
                              <span class="error">{{ $errors->first('roll') }}</span>
                              @endif
                              </div>
                           </div>     
                           <div class="col-xxl-6 col-md-6">
                              <div>
                                 <label for="basiInput" class="form-label">Pnone No. </label>
                                 <input type="text" name="phone" class="form-control" >
                                  @if ($errors->has('phone'))
                              <span class="error">{{ $errors->first('phone') }}</span>
                              @endif
                              </div>
                           </div>                           
                           <div class="col-xxl-6 col-md-6">
                              <div>
                                 <label for="basiInput" class="form-label">Address </label>
                                 <input type="text" name="address" class="form-control" >
                                  @if ($errors->has('address'))
                              <span class="error">{{ $errors->first('address') }}</span>
                              @endif
                              </div>
                           </div>
                         
                        </div>
                        <!--end row-->
                         <input type="submit" value="Submit" value="Submit" class="btn btn-primary">
                     </div>

                  </div>
                  </form>
               </div>
            </div>

         </div>
   
      </div>
   
   </div>

</div>
@include('admin.footer')
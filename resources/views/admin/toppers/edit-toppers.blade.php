@include('admin.header')
@include('admin.sidebar')
<div class="main-content">
<div class="page-content">
<div class="container-fluid">
   <div class="row">
      <div class="col-12">
         <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Add Toppers </h4>
            <div class="page-title-right">
               <ol class="breadcrumb m-0">
                  <li class="breadcrumb-item"><a href="javascript: void(0);">Add Toppers</a></li>
                  <li class="breadcrumb-item active">Toppers</li>
               </ol>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-lg-12">
         <div class="card">
            <div class="card-header align-items-center d-flex">
               <h4 class="card-title mb-0 flex-grow-1">Toppers List</h4>
               <div class="flex-shrink-0">
                  <div class="form-check form-switch form-switch-right form-switch-md">
                     <a type="button" class="btn btn-primary" href="{{ url('admin/toppers') }}">Show Toppers</a>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <div class="live-preview">
                  <form action="{{ url('/admin/update-toppers/'.$data->id)}}" method="POST" enctype="multipart/form-data">
                     @csrf
                     @method('PUT')
                     <div class="row gy-4">
                        <div class="col-xxl-6 col-md-6">
                           <div>
                              <label for="basiInput" class="form-label">Name </label>
                              <input type="text" name="name" value="{{ $data->name ?? '' }}" class="form-control">
                           </div>
                        </div>
                        <div class="col-xxl-6 col-md-6">
                           <div>
                              <label for="basiInput" class="form-label">Class </label>
                              <input type="text" name="classs" value="{{ $data->classs ?? '' }}" class="form-control">
                           </div>
                        </div>
                        <div class="col-xxl-6 col-md-6">
                           <div>
                              <label for="basiInput" class="form-label">Percentage Marks </label>
                              <input type="text" name="marks" value="{{ $data->marks ?? '' }}" class="form-control">
                           </div>
                        </div>
                        <div class="col-xxl-6 col-md-6">
                           <div>
                              <label for="basiInput" class="form-label">Student Photo </label>
                              <input type="file" name="image" value="{{ $data->image ?? '' }}" class="form-control">  
                           </div>
                        </div>
                     </div>
                     <input type="submit" value="Submit" value="Submit" class="btn btn-primary">
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('admin.footer')
@include('admin.header')
@include('admin.sidebar')
<style>
.select-food-category{
   width: 100%;
   padding: 10px;
   border: 1px solid #ccc;
}
</style>
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  <h4 class="mb-sm-0">Add Admission Process</h4>
                  <div class="page-title-right">
                     <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Add Admission Process</a></li>
                        <li class="breadcrumb-item active">Admission Process</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-header align-items-center d-flex">
                     <h4 class="card-title mb-0 flex-grow-1">Admission Process List</h4>
                     <div class="flex-shrink-0">
                        <div class="form-check form-switch form-switch-right form-switch-md">
                           <a type="button" class="btn btn-primary" href="{{ url('admin/admission-process-list') }}">Show Admission Process</a>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="live-preview">
                        @if (\Session::has('success'))
                        <div class="alert alert-info">
                           {!! \Session::get('success') !!}
                        </div>
                        @endif
                        <form action="{{ url('admin/store-admission-process') }}" method="POST" enctype="multipart/form-data">
                           @csrf
                           <div class="row gy-4">                                     
                              <div class="col-xxl-6 col-md-12">
                                 <label for="labelInput" class="form-label">Title</label>
                                 <input type="text" name="title" class="form-control">
                              </div>
                              <div class="col-xxl-12 col-md-12">
                                 <label for="labelInput" class="form-label">Description</label>
                                 <textarea id="content" type="text" name="description" class="form-control"></textarea>
                              </div>                              
                              <div class="col-xxl-12 col-md-12">
                                 <input type="submit" value="Submit" class="btn btn-primary">
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('admin.footer')
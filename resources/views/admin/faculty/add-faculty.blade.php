@include('admin.header')
@include('admin.sidebar')
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  <h4 class="mb-sm-0">Add Faculty</h4>
                  <div class="page-title-right">
                     <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Add Faculty</a></li>
                        <li class="breadcrumb-item active">Faculty </li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-header align-items-center d-flex">
                     <h4 class="card-title mb-0 flex-grow-1">Faculty List</h4>
                     <div class="flex-shrink-0">
                        <div class="form-check form-switch form-switch-right form-switch-md">
                           <a type="button" class="btn btn-primary" href="{{ url('admin/faculty-list') }}">Show Faculty</a>
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
                        <form action="{{ url('admin/store-faculty') }}" method="POST" enctype="multipart/form-data">
                           @csrf
                           <div class="row gy-4">
                              <div class="col-xxl-6 col-md-12">
                                 <label for="labelInput" class="form-label">Select category</label>
                                 <select name="faculty_id" class="select-category select-option-form">
                                    @php
                                    $category =DB::table('facultycategories')->get();
                                    @endphp
                                    @foreach($category as $item)
                                    <option value="{{ $item->id ?? '' }}">{{ $item->name ?? '' }}</option>
                                    @endforeach
                                 </select>
                              </div>                              
                              <div class="col-xxl-12 col-md-12">
                                 <label for="labelInput" class="form-label">Name</label>
                                 <input type="text" name="name" class="form-control">
                              </div>
                              <div class="col-xxl-12 col-md-12">
                                 <label for="labelInput" class="form-label">Gender</label>
                                 <input type="text" name="gender" class="form-control">
                              </div>  
                              <div class="col-xxl-12 col-md-12">
                                 <label for="labelInput" class="form-label">Designation</label>
                                 <input type="text" name="designation" class="form-control">
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
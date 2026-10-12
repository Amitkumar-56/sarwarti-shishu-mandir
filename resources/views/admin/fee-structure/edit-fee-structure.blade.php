@include('admin.header')
@include('admin.sidebar')
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  <h4 class="mb-sm-0">Edit Fee Structure</h4>
                  <div class="page-title-right">
                     <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ url('admin/fee-structure-list') }}">Fee Structure</a></li>
                        <li class="breadcrumb-item active">Edit Fee Structure</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-header align-items-center d-flex">
                     <h4 class="card-title mb-0 flex-grow-1">Edit Fee Structure</h4>
                     <div class="flex-shrink-0">
                        <a class="btn btn-primary" href="{{ url('admin/fee-structure-list') }}">Show Fee Structure List</a>
                     </div>
                  </div>
                  <div class="card-body">
                     @if (\Session::has('success'))
                     <div class="alert alert-info">
                        {!! \Session::get('success') !!}
                     </div>
                     @endif
                     <form action="{{ url('/admin/update-fee-structure/'.$feedata->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row gy-4">                              
                           <div class="col-xxl-12 col-md-12">
                              <label for="title" class="form-label">Title</label>
                              <input type="text" name="title" id="title" value="{{ $feedata->title ?? '' }}" class="form-control" required>
                           </div> 
                           <div class="col-xxl-12 col-md-12">
                              <label for="content" class="form-label">Fee Details / Tables (Description)</label>
                              <textarea id="content" name="description" class="form-control" rows="15">{!! $feedata->description ?? '' !!}</textarea>
                           </div>                              
                           <div class="col-xxl-12 col-md-12">
                              <button type="submit" class="btn btn-primary px-4"><i class="ri-check-line me-1"></i> Update Fee Structure</button>
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
@include('admin.footer')

@include('admin.header')
@include('admin.sidebar')
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  <h4 class="mb-sm-0">Add Social Activities Images</h4>
                  <div class="page-title-right">
                     <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Add Social Activities Images</a></li>
                        <li class="breadcrumb-item active">Social Activities Images</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="card">
                  <div class="card-header">
                     <h4>Upload Social Activities Images
                        <a href="{{ url('/admin/social-activities/') }}" class="btn btn-primary float-end">Back</a>
                     </h4>
                  </div>
                  <div class="card-body">
                     @if (session('status'))
                     <div class="alert alert-success">{{session('status')}}</div>
                     @endif                     

                     @if ($errors->any())
                     <ul class="alert alert-warning">
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                     </ul>
                     @endif
                     <form action="{{ url('/admin/social-activities/'.$socialactivities->id.'/upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                           <label>Upload Images (Max:20 images only)</label>
                           <input type="file" name="images[]" multiple class="form-control" />
                        </div>
                        <div class="mb-3">
                           <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <div class="col-md-12 mt-4">
               @foreach ($socialactivitiesImages as $socialImg)
               <img src="{{ url('/uploads/products/'.$socialImg->image) }}" class="border p-2 m-3" style="width: 100px; height: 100px;" alt="Img" />
               <a href="{{ url('/admin/social-activities-image/'.$socialImg->id.'/delete') }}" >Delete</a>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</div>
@include('admin.footer')
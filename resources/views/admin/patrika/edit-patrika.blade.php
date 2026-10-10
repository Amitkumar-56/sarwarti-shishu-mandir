@include('admin.header')
@include('admin.sidebar')
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  <h4 class="mb-sm-0">Update Patrika </h4>
                  <div class="page-title-right">
                     <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Update Patrika</a></li>
                        <li class="breadcrumb-item active"> Patrika</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-header align-items-center d-flex">
                     <h4 class="card-title mb-0 flex-grow-1"> Patrika List</h4>
                     <div class="flex-shrink-0">
                        <div class="form-check form-switch form-switch-right form-switch-md">
                           <a type="button" class="btn btn-primary" href="{{ url('admin/patrika-list') }}">Show  Patrika</a>
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
                        <form action="{{ url('admin/edit-patrika') }}" method="Post" enctype="multipart/form-data">
                           <input type="hidden" name="id" value="{{ $editpatrika->id }}">
                           @csrf
                           <div class="row gy-4">
                              <div class="col-xxl-6 col-md-6">
                                 <div>
                                    <label for="basiInput" class="form-label">Title </label>
                                    <input type="text" name="title" class="form-control" value="{{ $editpatrika->title ?? ''  }}">
                                    @if ($errors->has('title'))
                                    <span class="error">{{ $errors->first('title') }}</span>
                                    @endif
                                 </div>
                              </div>
                           <div class="row gy-4">
                              <div class="col-xxl-6 col-md-6">
                                 <div>
                                    <label for="basiInput" class="form-label">Patrika Date </label>
                                    <input type="text" name="patrika_date" class="form-control" value="{{ $editpatrika->patrika_date ?? ''  }}">
                                    @if ($errors->has(''))
                                    <span class="error">{{ $errors->first('patrika_date') }}</span>
                                    @endif
                                 </div>
                              </div>                              
                              <div class="col-xxl-6 col-md-6">
                                 <div>
                                    <label for="labelInput" class="form-label">Thumbnail Image </label>
                                    <input type="file" name="thumbnail" class="form-control">
                                    <input type="hidden" class="form-control" name="oldimage" value="{{$editpatrika->thumbnail}}">
                                    @if ($errors->has('thumbnail'))
                                    <span class="error">{{ $errors->first('thumbnail') }}</span>
                                    @endif
                                 </div>
                              </div>
                              <div class="col-xxl-6 col-md-6">
                                 <div>
                                    <label for="labelInput" class="form-label">PDF File</label>
                                    <input type="file" name="pdf_file" class="form-control">
                                    <input type="hidden" class="form-control" name="oldimage" value="{{$editpatrika->pdf_file}}">
                                    @if ($errors->has('pdf_file'))
                                    <span class="error">{{ $errors->first('pdf_file') }}</span>
                                    @endif
                                 </div>
                              </div>
                           </div>
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
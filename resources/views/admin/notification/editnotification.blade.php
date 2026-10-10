@include('admin.header')
@include('admin.sidebar')
<div class="main-content">
<div class="page-content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
               <h4 class="mb-sm-0">Add Notification </h4>
               <div class="page-title-right">
                  <ol class="breadcrumb m-0">
                     <li class="breadcrumb-item"><a href="javascript: void(0);">Add Notification</a></li>
                     <li class="breadcrumb-item active">Notification</li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header align-items-center d-flex">
                  <h4 class="card-title mb-0 flex-grow-1">Notification List</h4>
                  <div class="flex-shrink-0">
                     <div class="form-check form-switch form-switch-right form-switch-md">
                        <a type="button" class="btn btn-primary" href="{{ url('admin/notification-list') }}">Show Notification</a>
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
                     <form action="{{ url('admin/editnotifications') }}" method="Post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="{{ $editnotification->id }}">
                        @csrf
                        <div class="row gy-4">
                           <div class="col-xxl-6 col-md-6">
                              <div>
                                 <label for="basiInput" class="form-label">Title </label>
                                 <input type="text" name="title" class="form-control" value="{{ $editnotification->title ?? ''  }}">
                                 @if ($errors->has('title'))
                                 <span class="error">{{ $errors->first('title') }}</span>
                                 @endif
                              </div>
                           </div>
                           <div class="col-xxl-12 col-md-12">
                              <div>
                                 <label for="basiInput" class="form-label">Description </label>
                                 <textarea id="content" name="description" class="form-control" placeholder="Content here....." value="{{ $editnotification->description ?? ''  }}">{{ $editnotification->description ?? ''  }}</textarea>
                                
                                
                                 @if ($errors->has('description'))
                                 <span class="error">{{ $errors->first('description') }}</span>
                                 @endif
                              </div>
                           </div>                           
                           <div class="col-xxl-6 col-md-6">
                              <div>
                                 <label for="basiInput" class="form-label">Place </label>
                                 <input type="date" name="date" class="form-control" value="{{ $editnotification->date ?? ''  }}">
                                 @if ($errors->has('date'))
                                 <span class="error">{{ $errors->first('date') }}</span>
                                 @endif
                              </div>
                           </div>
                           <div class="col-xxl-6 col-md-6">
                              <div>
                                 <label for="basiInput" class="form-label">Link </label>
                                 <input type="text" name="link" class="form-control" value="{{ $editnotification->link ?? ''  }}">
                                 @if ($errors->has('link'))
                                 <span class="error">{{ $errors->first('link') }}</span>
                                 @endif
                              </div>
                           </div>                           
                           <div class="col-xxl-6 col-md-6">
                              <div>
                                 <label for="basiInput" class="form-label">PDF File Update </label>
                                 <input type="file" name="file" class="form-control" value="{{ $editnotification->file ?? ''  }}">
                                 @if ($errors->has('file'))
                                 <span class="error">{{ $errors->first('file') }}</span>
                                 @endif
                              </div>
                           </div>                           
                           <input type="submit" value="Submit" value="Submit" class="btn btn-primary">
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
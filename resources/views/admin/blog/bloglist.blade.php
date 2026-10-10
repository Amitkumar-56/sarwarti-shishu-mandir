@include('admin.header')
@include('admin.sidebar')
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <!-- start page title -->
         <div class="row">
            <div class="col-12">
               <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  <h4 class="mb-sm-0">Blog</h4>
                  <div class="page-title-right">
                     <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Blog List</a></li>
                        <li class="breadcrumb-item active">Blog</li>
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
                     <h4 class="card-title mb-0 flex-grow-1">Blog List</h4>
                     <div class="flex-shrink-0">
                        <div class="form-check form-switch form-switch-right form-switch-md">
                           <a type="button" class="btn btn-primary" href="{{ url('admin/addblog') }}">Add Blog</a>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <table id="alternative-pagination" class="table nowrap dt-responsive align-middle table-hover table-bordered" style="width:100%">
                        <thead>
                           <tr>
                              <th>S.No</th>
                              <th>Image</th>
                              <th>Title </th>
                              <th>Slug </th>
                              <th>Description</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @if($bloglist->count()>0)
                        @foreach($bloglist as $item)
                        <tr class="odd gradeX">
                            <td>{{ ++$i }}</td>
                            <td><img src="{{ asset('public/admin/images').'/'.$item->image ?? '' }}" alt="" width="50px" height="50px"></td>
                            
                            <td>{{ $item->title ?? '' }}</td>
                            <td>{{ $item->slug ?? '' }}</td>

                            <td><?= substr($item->description,0,20)?>...</td>
                              <td>
                                 <a href="{{ url('admin/editblog').'/'.$item->id   }}"><i class="bx bx-edit-alt"></i> </button>
                                 <a href="{{ url('admin/deleteblog').'/'.$item->id ?? '' }}"><i class="bx bx-trash"></i> </a>
                              </td>
                           </tr>
                           @endforeach
                           @endif
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- container-fluid -->
   </div>
   <!-- End Page-content -->
</div>
@include('admin.footer')
@include('admin.header')
@include('admin.sidebar')
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <!-- start page title -->
         <div class="row">
            <div class="col-12">
               <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  <h4 class="mb-sm-0">why janhit</h4>
                  <div class="page-title-right">
                     <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">why janhit List</a></li>
                        <li class="breadcrumb-item active">why janhit</li>
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
                     <h4 class="card-title mb-0 flex-grow-1">why janhit List</h4>
                     <div class="flex-shrink-0">
                        <div class="form-check form-switch form-switch-right form-switch-md">
                           <a type="button" class="btn btn-primary" href="{{ url('admin/addwhyjanhit') }}">Add why janhit</a>
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
                              <th>Description</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @if($whyjanhitlist->count()>0)
                        @foreach($whyjanhitlist as $item)
                        <tr class="odd gradeX">
                            <td>{{ ++$i }}</td>
                            <td><img src="{{ asset('public/admin/images').'/'.$item->image ?? '' }}" alt="" width="50px" height="50px"></td>
                            
                            <td>{{ $item->title ?? '' }}</td>

                            <td><?= substr($item->description,0,20)?>...</td>
                              <td>
                                 <a href="{{ url('admin/editwhyjanhit').'/'.$item->id   }}"><i class="bx bx-edit-alt"></i> </button>
                                 <a href="{{ url('admin/deletewhyjanhit').'/'.$item->id ?? '' }}"><i class="bx bx-trash"></i> </a>
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
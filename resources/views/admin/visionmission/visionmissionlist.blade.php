@include('admin.header')
@include('admin.sidebar')
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <!-- start page title -->
         <div class="row">
            <div class="col-12">
               <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  <h4 class="mb-sm-0">vision mission</h4>
                  <div class="page-title-right">
                     <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">vision mission List</a></li>
                        <li class="breadcrumb-item active">vision mission</li>
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
                     <h4 class="card-title mb-0 flex-grow-1">vision mission List</h4>
                     <div class="flex-shrink-0">
                        <div class="form-check form-switch form-switch-right form-switch-md">
                           <a type="button" class="btn btn-primary" href="{{ url('admin/addvisionmission') }}">Add vision mission</a>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <table id="alternative-pagination" class="table nowrap dt-responsive align-middle table-hover table-bordered" style="width:100%">
                        <thead>
                           <tr>
                              <th>S.No</th>
                              <th>Title Vision</th>
                              <th>Title Mission</th>
                              <th>Description Vision</th>
                              <th>Description Mission</th>
                              <th>Image Vision</th>
                              <th>Image Mission</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                        @if($visionmissionlist->count()>0)
                        @foreach($visionmissionlist as $item)
                        <tr class="odd gradeX">
                            <td>{{ ++$i }}</td>
                            <td>{{ $item->title_vision ?? '' }}</td>
                            <td>{{ $item->title_mission ?? '' }}</td>
                            <td><?= substr($item->description_vision,0,20)?>...</td>
                            <td><?= substr($item->description_mission,0,20)?>...</td>
                            <td><img src="{{ asset('public/admin/images').'/'.$item->image_vision ?? '' }}" alt="" width="50px" height="50px"></td>
                            <td><img src="{{ asset('public/admin/images').'/'.$item->image_mission ?? '' }}" alt="" width="50px" height="50px"></td>
                            <td>
                                 <a href="{{ url('admin/editvisionmission').'/'.$item->id   }}"><i class="bx bx-edit-alt"></i> </button>
                                 <a href="{{ url('admin/deletevisionmission').'/'.$item->id ?? '' }}"><i class="bx bx-trash"></i> </a>
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
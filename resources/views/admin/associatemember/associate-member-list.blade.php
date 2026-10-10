@include('admin.header')
@include('admin.sidebar')
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <!-- start page title -->
         <div class="row">
            <div class="col-12">
               <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  <h4 class="mb-sm-0">Associate Member </h4>
                  <div class="page-title-right">
                     <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Associate Member  List</a></li>
                        <li class="breadcrumb-item active">Associate Member </li>
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
                     <h4 class="card-title mb-0 flex-grow-1">Associate Member List</h4>
                     <div class="flex-shrink-0">
                        <div class="form-check form-switch form-switch-right form-switch-md">
                           <a type="button" class="btn btn-primary" href="{{ url('admin/add-associate-member') }}">Add Associate Member</a>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <table id="alternative-pagination" class="table nowrap dt-responsive align-middle table-hover table-bordered" style="width:100%">
                        <thead>
                           <tr>
                              <th>S.No</th>
                              <th>Name </th>
                              <th>Roll </th>
                              <th>Phone No.</th>
                              <th>Address</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                        @if($associatememberlist->count()>0)
                        @foreach($associatememberlist as $item)
                        <tr class="odd gradeX">
                            <td>{{ ++$i }}</td>
                            <td>{{ $item->name ?? '' }}</td>
                            <td>{{ $item->roll ?? '' }}</td>
                            <td>{{ $item->phone ?? '' }}</td>
                            <td>{{ $item->address ?? '' }}</td>
                            <td>
                                 <a href="{{ url('admin/edit-associate-member').'/'.$item->id   }}"><i class="bx bx-edit-alt"></i> </button>
                                 <a href="{{ url('admin/delete-associate-member').'/'.$item->id ?? '' }}"><i class="bx bx-trash"></i> </a>
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
   </div>
</div>
@include('admin.footer')
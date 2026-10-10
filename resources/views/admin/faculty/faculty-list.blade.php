@include('admin.header')
@include('admin.sidebar')
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  <h4 class="mb-sm-0">Faculty</h4>
                  <div class="page-title-right">
                     <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Faculty List</a></li>
                        <li class="breadcrumb-item active">Faculty</li>
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
                           <a type="button" class="btn btn-primary" href="{{ url('admin/add-faculty') }}">Add Faculty</a>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <table id="alternative-pagination" class="table nowrap dt-responsive align-middle table-hover table-bordered" style="width:100%">
                        <thead>
                           <tr>     
                              <th>Faculty Name</th>
                              <th>Gender</th>
                              <th>Designation</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>                            
                           @foreach($faculty as $item)
                           <tr class="odd gradeX">
                              <td>{{ $item->name ?? '' }}</td>
                              <td>{{ $item->gender ?? '' }}</td>
                              <td>{{ $item->designation ?? '' }}</td>
                              <td>
                                 <a href="{{ url('/admin/edit-faculty/'.$item->id  ?? '') }}"><i class="bx bx-edit-alt"></i> </a>
                                 <a href="{{ url('/admin/delete-faculty/'.$item->id  ?? '')}}"><i class="bx bx-trash"></i> </a>
                              </td>
                           </tr>
                           @endforeach                         
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
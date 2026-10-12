@include('admin.header')
@include('admin.sidebar')
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  <h4 class="mb-sm-0">Achievement</h4>
                  <div class="page-title-right">
                     <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Achievement List</a></li>
                        <li class="breadcrumb-item active">Achievement</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-header align-items-center d-flex">
                     <h4 class="card-title mb-0 flex-grow-1">Achievement List</h4>
                     <div class="flex-shrink-0">
                        <div class="form-check form-switch form-switch-right form-switch-md">
                           <a type="button" class="btn btn-primary" href="{{ url('admin/add-achievement') }}">Add Achievement</a>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <table id="alternative-pagination" class="table table-bordered" style="width:100%">
                        <thead>
                           <tr>     
                              <th>Title</th>
                              <th>Images</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($achievement as $item)
                           <tr class="odd gradeX">
                              <td>{{ $item->title ?? '' }}</td>
                              <td><a class="btn btn-info" href="{{ url('/admin/achievement-list/'.$item->id.'/upload') }}">Add / View Images </a></td> 
                              <td>
                                 <a href="{{ url('/admin/edit-achievement/'.$item->id  ?? '') }}"><i class="bx bx-edit-alt"></i> </a>
                                 <a href="{{ url('/admin/delete-achievement/'.$item->id  ?? '')}}"><i class="bx bx-trash"></i> </a>
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
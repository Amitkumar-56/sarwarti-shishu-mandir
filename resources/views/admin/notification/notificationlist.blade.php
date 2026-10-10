@include('admin.header')
@include('admin.sidebar')
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  <h4 class="mb-sm-0">Notification</h4>
                  <div class="page-title-right">
                     <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Notification List</a></li>
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
                           <a type="button" class="btn btn-primary" href="{{ url('admin/addnotification') }}">Add Notification</a>
                        </div>
                     </div>
                  </div>
                  <div class="card-body table-responsive">
                     <table id="alternative-pagination" class="table table-bordered" style="width:100%">
                        <thead>
                           <tr>
                              <th>S.No</th>
                              <th>Title</th>
                              <th>Description</th>
                              <th>Date</th>
                              <th>Link</th>
                              <th>PDF File</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @if($notificationlist->count()>0)
                           @foreach($notificationlist as $item)
                        <tr class="odd gradeX">
                            <td>{{ ++$i }}</td>
                            <td>{{ $item->title ?? '' }}</td>
                            <td>{!! $item->description ?? '' !!}</td>
                            <td>{{ $item->date ?? '' }}</td>
                            <td>{{ $item->link ?? '' }}</td>
                            <td>{{ $item->file ?? '' }}</td>                            
                            <td>
                              <a href="{{ url('admin/editnotification').'/'.$item->id   }}"><i class="bx bx-edit-alt"></i> </a>
                              <a href="{{ url('admin/deletenotification').'/'.$item->id ?? '' }}"><i class="bx bx-trash"></i> </a>
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
@include('admin.header')
@include('admin.sidebar')
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  <h4 class="mb-sm-0">Testimonial</h4>
                  <div class="page-title-right">
                     <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Testimonial List</a></li>
                        <li class="breadcrumb-item active">Testimonial</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-header align-items-center d-flex">
                     <h4 class="card-title mb-0 flex-grow-1">Testimonial List</h4>
                     <div class="flex-shrink-0">
                        <div class="form-check form-switch form-switch-right form-switch-md">
                           <a type="button" class="btn btn-primary" href="{{ url('admin/add-testimonial') }}">Add Testimonial</a>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <table id="alternative-pagination" class="table table-bordered" style="width:100%">
                        <thead>
                           <tr>     
                              <th>Title</th>
                              <th>Place</th>  
                              <th>Description</th>                        
                              <th>Images</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($data as $item)
                           <tr class="odd gradeX">
                              <td>{{ $item->name ?? '' }}</td>
                              <td>{{ $item->place ?? '' }}</td>  
                              <td>{!! $item->description ?? '' !!}</td>
                              <td><img src="{{ url('public/uploads/images/'.$item->image  ?? '')}}" alt="" width="50px" height="50px"></td>
                              <td>
                                 <a href="{{ url('/admin/edit-testimonial/'.$item->id  ?? '') }}"><i class="bx bx-edit-alt"></i> </a>
                                 <a href="{{ url('/admin/delete-testimonial/'.$item->id  ?? '')}}"><i class="bx bx-trash"></i> </a>
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
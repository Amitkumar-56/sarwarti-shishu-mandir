@include('admin.header')
@include('admin.sidebar')
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <!-- start page title -->
         <div class="row">
            <div class="col-12">
               <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  <h4 class="mb-sm-0">Toppers</h4>
                  <div class="page-title-right">
                     <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Toppers List</a></li>
                        <li class="breadcrumb-item active">Toppers</li>
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
                     <h4 class="card-title mb-0 flex-grow-1">Toppers List</h4>
                     <div class="flex-shrink-0">
                        <div class="form-check form-switch form-switch-right form-switch-md">
                           <a type="button" class="btn btn-primary" href="{{ url('admin/create-toppers') }}">Add Toppers</a>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <table id="alternative-pagination" class="table nowrap dt-responsive align-middle table-hover table-bordered" style="width:100%">
                        <thead>
                           <tr>
                              <th>Name </th>
                              <th>Class </th>
                              <th>Marks(%) </th>
                              <th>Image</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @php
                           $data =DB::table('toppers')->get();
                           @endphp                            
                            
                        @foreach($data as $item)
                        <tr class="odd gradeX">
                            <td>{{ $item->name ?? '' }}</td>
                            <td>{{ $item->classs ?? '' }}</td>
                            <td>{{ $item->marks ?? '' }}</td>
                            <td><img src="{{ asset('admin/img/').'/'.$item->image ?? '' }}" alt="" width="50px" height="50px"></td>
                            <td>
                                 <a href="{{ url('admin/edit-toppers').'/'.$item->id   }}"><i class="bx bx-edit-alt"></i> </button>
                                 <a href="{{ url('admin/delete-toppers').'/'.$item->id ?? '' }}"><i class="bx bx-trash"></i> </a>
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
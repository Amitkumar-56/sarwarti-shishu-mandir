@include('admin.header')
@include('admin.sidebar')
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  <h4 class="mb-sm-0">Patrika </h4>
                  <div class="page-title-right">
                     <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Patrika List</a></li>
                        <li class="breadcrumb-item active">Patrika </li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-header align-items-center d-flex">
                     <h4 class="card-title mb-0 flex-grow-1">Patrika List</h4>
                     <div class="flex-shrink-0">
                        <div class="form-check form-switch form-switch-right form-switch-md">
                           <a type="button" class="btn btn-primary" href="{{ url('admin/add-patrika') }}">Add Patrika</a>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <table id="alternative-pagination" class="table" style="width:100%">
                        <thead>
                           <tr>
                              <th>S.No</th>
                              <th>Title </th>
                              <th>Patrika Date</th>
                              <th>Thumbnail </th>
                              <th>PDF File</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                        @if($patrikalist->count()>0)
                        @foreach($patrikalist as $item)
                        <tr class="odd">
                            <td>{{ ++$i }}</td>
                            <td>{{ $item->title ?? '' }}</td>
                            <td>{{ $item->patrika_date ?? '' }}</td>
                            <td><img src="{{ asset('public/admin/images').'/'.$item->thumbnail ?? '' }}" alt="" width="50px" height="50px">
                            </td>
                            <td><img src="{{ asset('public/admin/images').'/'.$item->pdf_file ?? '' }}" alt="" width="50px" height="50px">
                            </td>                              
                            <td>
                                 <a href="{{ url('admin/edit-patrika').'/'.$item->id   }}"><i class="bx bx-edit-alt"></i> </button>
                                 <a href="{{ url('admin/delete-patrika').'/'.$item->id ?? '' }}"><i class="bx bx-trash"></i> </a>
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
@include('admin.header')
@include('admin.sidebar')
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  <h4 class="mb-sm-0">Vidya Bharti Lakshay message</h4>
                  <div class="page-title-right">
                     <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Vidya Bharti Lakshay List</a></li>
                        <li class="breadcrumb-item active">Vidya Bharti Lakshay</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-header align-items-center d-flex">
                     <h4 class="card-title mb-0 flex-grow-1">Vidya Bharti Lakshay List</h4>
                     <div class="flex-shrink-0">
                        <div class="form-check form-switch form-switch-right form-switch-md">
                           <a type="button" class="btn btn-primary" href="{{ url('admin/add-vidya-bharti-lakshay') }}">Add Vidya Bharti Lakshay</a>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <table id="alternative-pagination" class="table" style="width:100%">
                        <thead>
                           <tr>
                              <th>S.No</th>
                              <th>Title </th>
                              <th>Description</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                        @if($vidya_bharti_lakshay->count()>0)
                        @foreach($vidya_bharti_lakshay as $item)
                        <tr class="odd">
                            <td>{{ ++$i }}</td>
                            <td>{{ $item->title ?? '' }}</td>
                            <td>{!! $item->description ?? '' !!}</td>
                              <td>
                                 <a href="{{ url('admin/edit-vidya-bharti-lakshay').'/'.$item->id   }}"><i class="bx bx-edit-alt"></i> </a>
                                 <a href="{{ url('admin/delete-vidya-bharti-lakshay').'/'.$item->id ?? '' }}"><i class="bx bx-trash"></i> </a>
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


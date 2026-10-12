@include('admin.header')
@include('admin.sidebar')
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  <h4 class="mb-sm-0">Fee Structure</h4>
                  <div class="page-title-right">
                     <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Fee Structure List</a></li>
                        <li class="breadcrumb-item active">Fee Structure</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               @if (\Session::has('status'))
               <div class="alert alert-success">
                  {!! \Session::get('status') !!}
               </div>
               @endif
               <div class="card">
                  <div class="card-header align-items-center d-flex">
                     <h4 class="card-title mb-0 flex-grow-1">Fee Structure List</h4>
                     <div class="flex-shrink-0">
                        <div class="form-check form-switch form-switch-right form-switch-md">
                           <a type="button" class="btn btn-primary" href="{{ url('admin/add-fee-structure') }}">Add Fee Structure</a>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <table id="alternative-pagination" class="table table-bordered" style="width:100%">
                        <thead>
                           <tr>     
                              <th style="width: 25%;">Title</th>
                              <th>Description / Tables</th>
                              <th style="width: 15%;">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($feelist as $item)
                           <tr class="odd gradeX">
                              <td><strong>{{ $item->title ?? '' }}</strong></td>
                              <td>
                                 <div style="max-height: 200px; overflow-y: auto; background: #fafafa; padding: 10px; border-radius: 6px; font-size: 13px;">
                                    {!! $item->description ?? '' !!}
                                 </div>
                              </td>
                              <td>
                                 <a href="{{ url('/admin/edit-fee-structure/'.$item->id) }}" class="btn btn-sm btn-info text-white me-1"><i class="bx bx-edit-alt"></i> Edit</a>
                                 <a href="{{ url('/admin/delete-fee-structure/'.$item->id) }}" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-sm btn-danger"><i class="bx bx-trash"></i> Delete</a>
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

@include('admin.header')
@include('admin.sidebar')
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <!-- start page title -->
         <div class="row">
            <div class="col-12">
               <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  <h4 class="mb-sm-0">Header</h4>
                  <div class="page-title-right">
                     <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Header</li>
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
                     <h4 class="card-title mb-0 flex-grow-1">Header List</h4>
                     <div class="flex-shrink-0">
                        <div class="form-check form-switch form-switch-right form-switch-md">
                           <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#varyingcontentModal" data-bs-whatever="Mary">Add Header</button>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <table id="alternative-pagination" class="table nowrap dt-responsive align-middle table-hover table-bordered" style="width:100%">
                        <thead>
                           <tr>
                              <th>S.no</th>
                              <th>Logo Image</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @if($header->count()>0)
                           @foreach($header as $item)
                           <tr class="odd gradeX">
                              <td>{{ ++$i }}</td>
                              <td><img src="{{ asset('public/admin/images').'/'.$item->thumbnail ?? '' }}" alt="" width="50px" height="50px"></td>
                            
                              <td>
                                 <button onclick="EditFunctio({{ $item->id ?? '' }})"><i class="bx bx-edit-alt"></i> </button>
                                 <a href="{{ url('admin/deleteheader').'/'.$item->id ?? '' }}"><i class="bx bx-trash"></i> </a>
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
<script>
   var addheader = "{{ url('admin/addheader') }}";
   var Editheader = "{{ url('admin/Editheader') }}";
   
   $(function () {
   
         $('#SaveBanner').on('submit', function (e) {
           e.preventDefault();
           var token = $(this).data("token");
              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
           $.ajax({
             type: 'Post',
             url:addheader,
             data:new FormData(this),
             dataType:'JSON',
             contentType: false,
             cache: false,
             processData: false,
             success: function (data) {
               if(data.status==201){
                  
                   $('#thumbnail').html(data.error.thumbnail);
   
               }else {
                 $('#varyingcontentModal').modal('hide');
                    setTimeout(function(){
                      window.location.reload(1);
                    }, 500);
               }
             }
            });
           });
         });
   function EditFunctio(id){
     $.ajax({
       type: 'get',
         url:Editheader+'/'+id,
         success: function (data) {
             console.log(data);
           if(data.status==200){
               $('#id').val(data.data['id']);
               $('#varyingcontentModal').modal('show');
           } else {
             alert('data not Found!');
           }
       }
    });
   }
   
</script>
<div class="modal fade" id="varyingcontentModal" tabindex="-1" aria-labelledby="varyingcontentModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="varyingcontentModalLabel">Add Header</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
           <form method="Post" id="SaveBanner" enctype="multipart/form-data">
        <input type="hidden" id="id" name="id">
               <div class="mb-3">
                  <label for="customer-name" class="col-form-label">Image:</label>
                 <input type="file" name="thumbnail" class="form-control" placeholder="Year">
                  <span style="color:red;" id="thumbnail"></span>
               </div>
                <div class="modal-footer">
            <input type="submit" value="Submit" value="Submit" class="btn btn-light">
         </div>
            </form>
         </div>
        
      </div>
   </div>
</div>
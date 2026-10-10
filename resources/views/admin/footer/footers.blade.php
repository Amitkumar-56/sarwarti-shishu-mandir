@include('admin.header')
@include('admin.sidebar')
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <!-- start page title -->
         <div class="row">
            <div class="col-12">
               <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  <h4 class="mb-sm-0">Footer</h4>
                  <div class="page-title-right">
                     <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Footer</li>
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
                     <h4 class="card-title mb-0 flex-grow-1">Footer List</h4>
                     <div class="flex-shrink-0">
                        <div class="form-check form-switch form-switch-right form-switch-md">
                           <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#varyingcontentModal" data-bs-whatever="Mary">Add Footer</button>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <table id="alternative-pagination" class="table nowrap dt-responsive align-middle table-hover table-bordered" style="width:100%">
                        <thead>
                           <tr>
                              <th>S.no</th>
                              <th>About</th>
                              <th>Phone</th>
                              <th>Email</th>
                              <th>Location</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @if($footer->count()>0)
                           @foreach($footer as $item)
                           <tr class="odd gradeX">
                              <td>{{ ++$i }}</td>
                            
                              <td>{{ $item->about ?? ''  }}</td>
                              <td>{{ $item->phone ?? ''  }}</td>
                              <td>{{ $item->email ?? ''  }}</td>
                              <td>{{ $item->location ?? ''  }}</td>
                              
                              <td>
                                 <button onclick="EditFunctio({{ $item->id ?? '' }})"><i class="bx bx-edit-alt"></i> </button>
                                 <a href="{{ url('admin/deletefooter').'/'.$item->id ?? '' }}"><i class="bx bx-trash"></i> </a>
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
   var addfooter = "{{ url('admin/addfooter') }}";
   var Editfooter = "{{ url('admin/Editfooter') }}";
   
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
             url:addfooter,
             data:new FormData(this),
             dataType:'JSON',
             contentType: false,
             cache: false,
             processData: false,
             success: function (data) {
               if(data.status==201){
                  
                   $('#about').html(data.error.about);
                   $('#location').html(data.error.location);
                   $('#email').html(data.error.email);
                   $('#phone').html(data.error.phone);
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
         url:Editfooter+'/'+id,
         success: function (data) {
             console.log(data);
           if(data.status==200){
               $('#id').val(data.data['id']);
               $('#about').val(data.data['about']);
               $('#phone').val(data.data['phone']);
               $('#location').val(data.data['location']);
               $('#email').val(data.data['email']);
               $('#thumbnail').val(data.data['thumbnail']);
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
            <h5 class="modal-title" id="varyingcontentModalLabel">Add Footer</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
           <form method="Post" id="SaveBanner" enctype="multipart/form-data">
        <input type="hidden" id="id" name="id">
               <div class="mb-3">
                  <label for="customer-name" class="col-form-label">About:</label>
                    <input type="tex" name="about" class="form-control" placeholder="About" id="about">
                  <span style="color:red;" id="about"></span>
               </div>

               <div class="mb-3">
                  <label for="customer-name" class="col-form-label">Phone:</label>
                    <input type="text" name="phone" class="form-control" placeholder="Phone" id="phone">
                  <span style="color:red;" id="phone"></span>
               </div>

               <div class="mb-3">
                  <label for="customer-name" class="col-form-label">Email:</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" id="email">
                  <span style="color:red;" id="email"></span>
               </div>

               <div class="mb-3">
                  <label for="customer-name" class="col-form-label">Location:</label>
                    <input type="text" name="location" class="form-control" placeholder="Location" id="location">
                  <span style="color:red;" id="location"></span>
               </div>

               
                <div class="modal-footer">
            <input type="submit" value="Submit" value="Submit" class="btn btn-light">
         </div>
            </form>
         </div>
        
      </div>
   </div>
</div>
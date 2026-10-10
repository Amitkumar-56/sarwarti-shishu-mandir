@include('front.header')
<div class="page-banner-area">
   <img class="page-banner" src="{{ asset('public/front') }}/images/breadcrumb-bg-image.jpg" alt="Courses">
   <div class="page-banner-content">
      <h1>Parents Teacher Association List</h1>
      <ul>
         <li><a href="{{ url('/') }}">Home</a></li>
         <li>Parents Teacher Association List</li>
      </ul>
   </div>
</div>
<section class="faculty-area facility-sec-page">
   <div class="container">
      <div class="row">
         @php
         $faculty = DB::table('associate_members')->get();
         @endphp
         <div class="col-lg-12 aos-init aos-animate" data-aos="fade-right">
            <div class="faculty-detail-box table-responsive">
               <table class="table table-striped table-bordered">
                  <thead>
                     <tr>
                        <th>Sr. No.</th>
                        <th> Name</th>
                        <th>Roll</th>
                        <th>Phone No.</th>
                        <th>Address</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($faculty as $key=>$item)
                     <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $item->name ?? ''  }}</td>
                        <td>{{ $item->roll ?? ''  }}</td>
                        <td>{{ $item->phone ?? ''  }}</td>
                        <td>{{ $item->address ?? ''  }}</td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</section>
@include('front.footer')
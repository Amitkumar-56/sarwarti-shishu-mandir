@include('front.header')
<div class="page-banner-area">
   <img class="page-banner" src="{{ asset('public/front') }}/images/breadcrumb-bg-image.jpg" alt="Courses">
   <div class="page-banner-content">
      <h1>Faculty</h1>
      <ul>
         <li><a href="{{ url('/') }}">Home</a></li>
         <li>Faculty</li>
      </ul>
   </div>
</div>
<section class="faculty-area facility-sec-page">
   <div class="container">
      <div class="row">
         @php
         $faculty = DB::table('faculty')->get();
         @endphp
         <div class="col-lg-12 aos-init aos-animate" data-aos="fade-right">
            <div class="faculty-detail-box table-responsive">
               <table class="table table-striped table-bordered">
                  <thead>
                     <tr>
                        <th>Sr. No.</th>
                        <th>Faculty Name</th>
                        <th>Gender</th>
                        <th>Faculty Designation</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($faculty as $item)
                     <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name ?? ''  }}</td>
                        <td>{{ $item->gender ?? ''  }}</td>
                        <td>{{ $item->designation ?? ''  }}</td>
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
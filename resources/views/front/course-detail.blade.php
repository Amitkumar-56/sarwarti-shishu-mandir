@include('front.header')
<div class="page-banner-area">
   <img class="page-banner" src="{{ asset('public/front') }}/images/breadcrumb-bg-image.jpg" alt="Courses">
   <div class="page-banner-content">
      <h1>{{$coursedetails->title ?? '' }} ({{$coursedetails->course ?? '' }})</h1>
      <ul>
         <li><a href="{{ url('/') }}">Home</a></li>
         <li>{{$coursedetails->title ?? '' }} ({{$coursedetails->course ?? '' }})</li>
      </ul>
   </div>
</div>
<div class="courses-details-area pt-100 pb-70">
   <div class="container">
      <div class="row">
         <div class="col-lg-4 aos-init aos-animate" data-aos="fade-right">
            <div class="enroll-courses">
               <div class="list">
                  <h2>All Courses</h2>
                  @php
                  $course = DB::table('course')->limit(7)->get();
                  @endphp
                  <ul>
                     @foreach($course as $item)
                     <li class="class-active"><a href="{{ url('course-details'.'/'.$item->slug ) }}"><span>{{$item->title ?? '' }}  :</span>({{$item->course ?? '' }})</a></li>
                     @endforeach
                  </ul>
               </div>
               <a href="{{url('apply-now')}}" class="default-btn btn">Enroll Courses</a>
            </div>
         </div>
         <div class="col-lg-8 aos-init aos-animate" data-aos="fade-left">
            <div class="courses-details">
               <div class="courses-card">
                  <h2>{{$coursedetails->title ?? '' }} ({{$coursedetails->course ?? '' }})</h2>
               </div>
               <div class="description">
                  <div class="container p-0">
                     <div class="overview">
                        <?= $coursedetails->description ?>
                     </div>
                  </div>
               </div>
               <div class="learn">
                  <h3>Admission Form</h3>
                  <ul>
                     <li><a class="apply-for-course" href="{{url('apply-now')}}">Apply Now </a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('front.footer')
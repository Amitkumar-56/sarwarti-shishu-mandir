@include('front.header')
<div class="page-banner-area">
   <img class="page-banner" src="{{ asset('public/front') }}/images/breadcrumb-bg-image.jpg" alt="Courses">
   <div class="page-banner-content">
      <h1>Alumni</h1>
      <ul>
         <li><a href="{{ url('/') }}">Home</a></li>
         <li>Alumni</li>
      </ul>
   </div>
</div>
<section class="alumani-area alumni-apge">
   <div class="container-fluid">
      <div class="row">
         @php
         $alumni = DB::table('alumni')->get();
         @endphp
         @foreach($alumni as $item)
         <div class="col-lg-3 col-md-9 col-sm-12 aos-init aos-animate" data-aos="fade-right">
            <div class="faculty-detail-box">
               <div class="faculty-img-box">
                  <img class="page-banner" src="{{ asset('public/admin/images').'/'.$item->thumbnail ?? '' }}" alt="Courses">
               </div>
               <div class="faculty-text-box">
                  <h4 class="faculty_name2u">{{$item->title ?? '' }}</h4>
                  <p class="faculty_year">{{$item->year ?? '' }}</p>
                  <p class="faculty_degnation">{{$item->designation ?? '' }}</p>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</section>
@include('front.footer')
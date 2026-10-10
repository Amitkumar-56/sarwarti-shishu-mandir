@include('front.header')
@php
$vbl = DB::table('vidya_bharti_lakshay')->first()
@endphp 
<div class="page-banner-area">
   <img class="page-banner" src="{{ asset('public/front') }}/images/breadcrumb-bg-image.jpg" alt="Courses">
   <div class="page-banner-content">
      <h1>Vidya Bharti Lakshay</h1>
      <ul>
         <li><a href="{{ url('/') }}">Home</a></li>
         <li>Vidya Bharti Lakshay</li>
      </ul>
   </div>
</div>
<section class="about-history-area">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 aos-init aos-animate" data-aos="fade-left">
            <div class="about-text-box">
               <h2>{{ $vbl->title ?? ''}}</h2>
               <p>{!! $vbl->description ?? '' !!}</p>
            </div>
         </div>
      </div>
   </div>
</section>
@include('front.footer')
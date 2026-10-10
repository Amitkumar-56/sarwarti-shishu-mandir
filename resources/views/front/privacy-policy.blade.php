@include('front.header')
@php
$policy = DB::table('privacy')->first();
@endphp

<section class="breadcrumb-section">
  <img class="page-banner" src="{{ asset('public/front') }}/images/breadcrumb-bg-image.jpg" alt="Courses">
   <div class="page-naming-box">
      <h1>Privacy Policy</h1>
   </div>
   <div class="breadcrumb-over-lay"></div>
</section>
<section class="privacy-policy-page-section">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="page-content-box">
                <h2 class="privacy-desc">{{$policy->title}}</h2>

              <?= $policy->description ?>
            </div>
         </div>
      </div>
   </div>
</section>
 
@include('front.footer')
@include('front.header')
<div class="page-banner-area">
   <img class="page-banner" src="{{ asset('public/front') }}/images/breadcrumb-bg-image.jpg" alt="Courses">
   <div class="page-banner-content">
      <h1>About Us</h1>
      <ul>
         <li><a href="{{ url('/') }}">Home</a></li>
         <li>About Us</li>
      </ul>
   </div>
</div>
<section class="page-janhit-about-area">
   @php
   $about = DB::table('about')->first();
   @endphp    
   <div class="container">
      <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="about-text-box">
                <div class="about-img-group-box">
                    <!--<div class="about-img159-box">-->
                    <!--    <img class="aos-init aos-animate"  data-aos="fade-up" src="{{ asset('public/admin/images').'/'.$about->image ?? '' }}" alt="Courses">-->
                    <!--</div>-->
                    <!--<div class="about-img159-box">-->
                    <!--    <img class="aos-init aos-animate"  data-aos="fade-up" src="{{ asset('public/admin/images').'/'.$about->image2 ?? '' }}" alt="Courses">-->
                    <!--</div>-->
                </div>
               <h2>{{ $about->title ?? '' }}</h2>
               <p>{!! $about->description ?? '' !!}</p>
            </div>
         </div>
      </div>
   </div>
</section>
@include('front.footer')
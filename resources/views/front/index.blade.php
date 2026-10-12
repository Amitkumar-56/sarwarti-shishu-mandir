@include('front.header')
<div class="banner-area">
   @php
   $slider = DB::table('banner')->get();
   @endphp
   <div class="hero-slider2 owl-carousel owl-theme">
      @foreach ($slider as $item)
      <div class="slider-item">
         <img src="{{ asset('public/admin/images').'/'.$item->thumbnail ?? '' }}">
      </div>
      @endforeach
   </div>
   <script>
      var colors = ["#f38630","#6fb936", "#ccc", "#6fb936"];
      
      var wrap = gsap.utils.wrap(-100, 400);
      
      
      
      //initially colorize each box and position in a row
      
      gsap.set(".box", {
      
        backgroundColor: (i) => colors[i % colors.length],
      
        y: (i) => i * 50
      
      });
      
      
      
      
      
      gsap.to(".box", {
      
        duration: 5,
      
        ease: "none",
      
        y: "-=500", //move each box 500px to right
      
        modifiers: {
      
          y: gsap.utils.unitize(wrap) //force y value to wrap when it reaches -100
      
        },
      
        repeat: -1
      
      });
      
      
      
      
      
      //toggle overflow
      
      const overflow = document.querySelector("#overflow");
      
      overflow.addEventListener("change", applyOverflow);
      
      
      
      function applyOverflow() {
      
        if(overflow.checked) {
      
          gsap.set(".wrapper", {overflow: "visible"});
      
        } else {
      
          gsap.set(".wrapper", {overflow: "hidden"});
      
        }
      
      }       
      
         
      
   </script>
</div>
<div class="campus-information-area">
   <div class="container">
      @php
      $about = DB::table('about')->first();
      @endphp
      <div class="row">
         <div class="col-lg-7" >
            <div class="campus-content">
               <div class="campus-title">
                  <h2>Welcome to Saraswati Shishu Mandir Play School</h2>
                  <?= substr($about->description,0, 359) ?>
               </div>
               <a href="{{url('about')}}" class="default-btn btn">More Information<i class="flaticon-next"></i></a>
            </div>
         </div>
         <div class="col-lg-5 ">
            <div class="campus-image" style="text-align: center;">
               <img src="{{ asset('public/front') }}/images/play_school_campus.jpg" alt="Saraswati Shishu Mandir Play School" style="max-width: 100%; height: auto; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.15);">
            </div>
         </div>
      </div>
   </div>
</div>

<!--
<div class="academic-area">
   <div class="container-fluid">
      <div class="section-title">
         <h2>Academics Programs</h2>
      </div>
      <div class="row y-gap-30 pt-60 lg:pt-50">
         @php
         $course = DB::table('course')->limit(7)->get();
         @endphp
         @foreach($course as $item)
         <div class="col-xl-4 col-lg-4 col-md-6 ">
            <div class="categoryCard color-extra03-style">
               <div class="categoryCard__icon bg-light-3 mr-20">
                  <img src="{{ asset('public/admin/images').'/'.$item->image ?? '' }}">
               </div>
               <div class="categoryCard__content">
                  <h4 class="categoryCard__title">{{$item->title ?? '' }} <span class="program--full-name">{{$item->course ?? '' }}</span></h4>
                  <div class="categoryCard__text">{{$item->duration ?? '' }}</div>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>
-->

<div class="campus-life-area">
   <div class="container">
      <div class="section-title">
         <h2>Gallery</h2>
         @php
         $gallery = DB::table('gallery')->get();
         @endphp
      </div>
      <div class="campus-slider owl-carousel owl-theme">
         @foreach($gallery as $item)
         <div class="single-campus-card style2 light-gallery-box  aos-init aos-animate" data-aos="fade-right">
            
               <img src="{{ asset('public/admin/images').'/'.$item->thumbnail ?? '' }}" alt="Image">
               <a class="zoom-anchor" data-fslightbox="gallery_1" data-type="image" href="{{ asset('public/admin/images').'/'.$item->thumbnail ?? '' }}" class="btn_1 outline">
                        </a>
           
         </div>
         @endforeach
      </div>
                
   </div>
</div>
<div class="topper-list-sec">
   @php
   $topper = DB::table('toppers')->get();
   @endphp    
   <div class="container-fluid">
      <div class="section-title">
         <h2>Play to 5th Topper's List</h2>
      </div>
      <div class="row align-items-center">
         <div class="topper-slider owl-carousel owl-theme">
            @foreach($topper as $item)
            <div class="single-campus-card-topper">
               <div class="resolt-image-box">
                  <div class="result-image">
                     <img src="{{ asset('admin/img/' . $item->image) }}" alt="{{ $item->name ?? 'Topper' }}">
                  </div>
                  <div class="result-text-percentage">
                     <h2 class="result-tittle">{{$item->name ?? '' }}</h2>
                     <p>Class: {{$item->classs ?? '' }}</p>
                     <p>{{$item->marks ?? '' }} <span> % </span></p>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>
</div>
<div class="events-area">
    @php
    $event =DB::table('events')->latest()->paginate(8); 
    @endphp 
   <div class="container-fluid">
      <div class="section-title">
         <h2>Events Images Gallery</h2>
      </div>
      <div class="row">
         @foreach ($event as $itm)
         <div class="col-lg-3">
            <div class="our-event-box">
               <div class="event-image-slider2 owl-carousel owl-theme">
                  @php
                  $evtImages = DB::table('event_images')->where('event_id', $itm->id)->get();
                  @endphp     
                  @foreach($evtImages as $item)
                  <div class="slider-item">
                     <div class="event-activities-box">
                        <img  src="{{ url('/').'/'.$item->image ?? '' }}" alt="Courses">
                     </div>
                  </div>
                  @endforeach
               </div>
               <div class="activities-names">
                  <a style="font-family: serif;" class="d_name" href="{{url('event-details/'.$itm->slug ??'')}}">{{ $itm->title ?? '' }}</a>
               </div>
            </div>
         </div>
         @endforeach
      </div>
      <div class="row mt-4 pt-2">
         <div class="col-12 text-center" style="margin-top: 30px;">
            <a href="{{ url('event') }}" class="default-btn btn" style="padding: 12px 30px; font-size: 16px;">View All Events <i class="flaticon-next"></i></a>
         </div>
      </div>
   </div>
</div>
<style>
.testimonial-item {
    background: #ffffff; 
    padding: 40px 30px; 
    border-radius: 15px; 
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05); 
    margin: 15px 10px; 
    border-bottom: 4px solid #e32845; 
    transition: all 0.4s ease;
    height: 100%;
}
.testimonial-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 35px rgba(227, 40, 69, 0.1) !important;
}
.testimonial-img-wrapper {
    margin: 0 auto 20px;
    width: 100px;
    height: 100px;
}
.testimonial-item img {
    width: 100px !important; 
    height: 100px !important; 
    border-radius: 50%; 
    object-fit: cover; 
    border: 3px solid #e32845; 
    padding: 3px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}
.student_name4t {
    font-size: 22px; 
    font-weight: 700; 
    color: #111; 
    margin-bottom: 5px;
}
.student_location {
    font-size: 14px; 
    color: #e32845; 
    margin-bottom: 20px; 
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
}
.testimonial-desc {
    font-size: 16px; 
    color: #555; 
    line-height: 1.8; 
    font-style: italic;
}
.testimonial-desc i {
    color: #e32845; 
    font-size: 24px; 
    opacity: 0.3;
    margin: 0 5px;
}
</style>
<section class="clients-testimonials-areas pt-100 pb-70" style="background-color: #f9faff;">
   @php
   $feedback = DB::table('feedback')->get();
   @endphp  
   <div class="container">
      <div class="section-title text-center">
         <span class="sub-title" style="color: #e32845; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; display: block; margin-bottom: 10px;">Testimonials</span>
         <h2 style="font-size: 35px; font-weight: 700; color: #032274;">What Parents Say About Us</h2>
      </div>
      <div class="row tstimonial-sec">
         <div class="col-lg-12">
            <div class="testimonial-slider owl-carousel owl-theme">
               @foreach($feedback as $item) 
               <div class="testimonial-item text-center">
                  <div class="testimonial-img-wrapper">
                     <img src="{{ url('public/uploads/images/'.$item->image  ?? '')}}" alt="Image" onerror="this.src='{{ asset('public/front/images/user-dummy.png') }}'">
                  </div>
                  <p class="student_name4t">{{ $item->name ?? '' }}</p>
                  <p class="student_location">{{ $item->place ??  '' }}</p>
                  <p class="testimonial-desc">
                     <i class="ri-double-quotes-l"></i> 
                     {!! $item->description ?? '' !!} 
                     <i class="ri-double-quotes-r"></i>
                  </p>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</section>
@include('front.footer')
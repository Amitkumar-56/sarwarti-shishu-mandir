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
               <img src="{{ asset('public/front') }}/images/generated_school_front.jpg" alt="School Campus" style="max-width: 100%; height: auto; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
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
         <h2>Play to 8th Topper's List</h2>
      </div>
      <div class="row align-items-center">
         <div class="topper-slider owl-carousel owl-theme">
            @foreach($topper as $item)
            <div class="single-campus-card-topper">
               <div class="resolt-image-box">
                  <div class="result-image">
                     <img src="{{ asset('admin/img/').'/'.$item->image ?? '' }}" alt="Image">
                  </div>
                  <div class="result-text-percentage">
                     <h2 class="result-tittle">{{$item->name ?? '' }}</h2>
                     <p>Class: {{$item->classs ?? '' }}<sup>th</sup> </sup></p>
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
<section class="clients-testimonials-areas">
   @php
   $feedback = DB::table('feedback')->get();
   @endphp  
   <div class="container">
      <div class="section-title">
         <h2>Parents Feedback</h2>
      </div>
      <div class="row tstimonial-sec">
         <div class="col-lg-12">
            <div class="testimonial-slider owl-carousel owl-theme">
               @foreach($feedback as $item) 
               <div class="testimonial-item text-center">
                  <img src="{{ url('public/uploads/images/'.$item->image  ?? '')}}" alt="Image"  >
                  <p class="student_name4t">{{ $item->name ?? '' }}</p>
                  <p class="student_location">({{ $item->place ??  '' }})</p>
                  <p><span class="quote-left"><i class="ri-quote-left"></i></span> {!! $item->description ?? '' !!} <span class="quote-right"><i class="fa fa-quote-right"></i></span></p>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</section>
@include('front.footer')
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
                  <h2>{{ $about->title ?? '' }}</h2>
                  <?= substr($about->description,0,355) ?>
               </div>
               <div class="counter">
                  <div class="row">
                     <div class="col-lg-4 col-4">
                        <div class="counter-card">
                           <h1>
                              <span class="odometer" data-count="35">00</span>
                              <span class="target">+</span>
                           </h1>
                           <p>Years Of Experience</p>
                        </div>
                     </div>
                  </div>
               </div>
               <a href="{{url('about')}}" class="default-btn btn">More Information<i class="flaticon-next"></i></a>
            </div>
         </div>
         <div class="col-lg-5 ">
            <div class="notification-box">
               @php
               $notification = DB::table('notifications')->get();
               @endphp            
               <div class="notice-outer">
                  <ul class="marquee-vertical" id="marquee-vertical">
                     @foreach($notification as $item) 
                     @php 
                     $pdf_link	=	asset('public/admin/images')."/".$item->file;
                     $final_link	=	($item->link <> '')?$item->link:(($item->file <>'')?$pdf_link:"");
                     @endphp
                     <li>
                        <a href="{{ $final_link }}" target="_blank">
                           <span class="date_event"><span class="tarik4u">{{ $item->date }}</span></span>
                           <p>{{ $item->title ?? '' }}</p>
                        </a>
                     </li>
                     @endforeach 
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--<ul class="shape-group">-->
   <!--   <li class="shape-12 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">-->
   <!--      <img data-depth="-1.5" src="{{ asset('public/front') }}/images/shape-16.png" alt="Shape">-->
   <!--   </li>-->
   <!--   <li class="shape-02" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">-->
   <!--      <img data-depth="-1" src="{{ asset('public/front') }}/images/shape-02.png" alt="Shape">-->
   <!--   </li>-->
   <!--</ul>-->
</div>
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
<div class="campus-life-area">
   <div class="container-fluid">
      <div class="section-title">
         <h2>Gallery</h2>
         @php
         $gallery = DB::table('gallery')->get();
         @endphp
      </div>
      <div class="campus-slider owl-carousel owl-theme">
         @foreach($gallery as $item)
         <div class="single-campus-card style2  aos-init aos-animate" data-aos="fade-right">
            <div class="img">
               <a href="#"><img src="{{ asset('public/admin/images').'/'.$item->thumbnail ?? '' }}" alt="Image"></a>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>
<div class="topper-list-sec">
   <div class="container">
      <div class="section-title">
         <h2>CBSE Class X Result 2023 - 2024 Topper's</h2>
      </div>
      <div class="row align-items-center">
         <div class="topper-slider owl-carousel owl-theme">
            <div class="single-campus-card style2">
               <div class="result-image-box">
                    <div class="result-image">
                        <img src="{{ asset('public/front') }}/images/topper-image.png" class="main-logo" alt="logo">
                    </div>
                    <div class="result-text-percentage">
                        <h2 class="result-tittle">Anand Shekhar</h2>
                        <p>95.2 <span> % </span></p>
                    </div>
                </div>
            </div>
          
         </div>
      </div>
   </div>
</div>
<div class="events-area">
   <div class="container-fluid">
      <div class="section-title">
         <h2>Events Images Gallery</h2>
      </div>
      <div class="row">
         <div class="col-lg-4">
            <div class="our-event-box">
               <div class="event-image-slider2 owl-carousel owl-theme">
                  <div class="slider-item">
                     <div class="event-activities-box">
                        <img src="{{ asset('public/front') }}/images/event-image1.jpeg" class="main-logo" lt="Event Image">
                     </div>
                  </div>
                  <div class="slider-item">
                     <div class="event-activities-box">
                        <img src="{{ asset('public/front') }}/images/event-image2.jpg" class="main-logo" lt="Event Image">
                     </div>
                  </div>
                  <div class="slider-item">
                     <div class="event-activities-box">
                        <img src="{{ asset('public/front') }}/images/event-image3.jpeg" class="main-logo" lt="Event Image">
                     </div>
                  </div>
                  <div class="slider-item">
                     <div class="event-activities-box">
                        <img src="{{ asset('public/front') }}/images/event-image4.jpeg" class="main-logo" lt="Event Image">
                     </div>
                  </div>
               </div>
               <div class="activities-names">
                  <a style="font-family: serif;" class="d_name" href="">Sports Events</a>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="our-event-box">
               <div class="event-image-slider2 owl-carousel owl-theme">
                  <div class="slider-item">
                     <div class="event-activities-box">
                        <img src="{{ asset('public/front') }}/images/special-events.jpg" class="main-logo" lt="Event Image">
                     </div>
                  </div>
                  <div class="slider-item">
                     <div class="event-activities-box">
                        <img src="{{ asset('public/front') }}/images/special-events4.jpg" class="main-logo" lt="Event Image">
                     </div>
                  </div>
                  <div class="slider-item">
                     <div class="event-activities-box">
                        <img src="{{ asset('public/front') }}/images/special-events3.jpg" class="main-logo" lt="Event Image">
                     </div>
                  </div>
               </div>
               <div class="activities-names">
                  <a style="font-family: serif;" class="d_name" href="">Special  Events</a>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="our-event-box">
               <div class="event-image-slider2 owl-carousel owl-theme">
                  <div class="slider-item">
                     <div class="event-activities-box">
                        <img src="{{ asset('public/front') }}/images/event-img.jpg" class="main-logo" lt="Event Image">
                     </div>
                  </div>
                  <div class="slider-item">
                     <div class="event-activities-box">
                        <img src="{{ asset('public/front') }}/images/event-img1.jpg" class="main-logo" lt="Event Image">
                     </div>
                  </div>
                  <div class="slider-item">
                     <div class="event-activities-box">
                        <img src="{{ asset('public/front') }}/images/event-img2.jpg" class="main-logo" lt="Event Image">
                     </div>
                  </div>
               </div>
               <div class="activities-names">
                  <a style="font-family: serif;" class="d_name" href="">Co-Curricular Activities</a>
               </div>
            </div>
         </div>
         <!--<div class="col-lg-6">-->
         <!--   <div class="our-event-box">-->
         <!--      <div class="event-image-slider2 owl-carousel owl-theme">-->
         <!--         <div class="slider-item">-->
         <!--            <div class="event-activities-box">-->
         <!--               <img src="{{ asset('public/front') }}/images/r1.jpg" class="main-logo" lt="Event Image">-->
         <!--            </div>-->
         <!--         </div>-->
         <!--         <div class="slider-item">-->
         <!--            <div class="event-activities-box">-->
         <!--               <img src="{{ asset('public/front') }}/images/r2.jpg" class="main-logo" lt="Event Image">-->
         <!--            </div>-->
         <!--         </div>-->
         <!--         <div class="slider-item">-->
         <!--            <div class="event-activities-box">-->
         <!--               <img src="{{ asset('public/front') }}/images/r3.jpg" class="main-logo" lt="Event Image">-->
         <!--            </div>-->
         <!--         </div>-->
         <!--      </div>-->
         <!--      <div class="activities-names">-->
         <!--         <a style="font-family: serif;" class="d_name" href="">Rangoli competition </a>-->
         <!--      </div>-->
         <!--   </div>-->
         <!--</div>-->
         <!--<div class="col-lg-4">-->
         <!--   <div class="our-event-box">-->
         <!--      <div class="event-image-slider2 owl-carousel owl-theme">-->
         <!--         <div class="slider-item">-->
         <!--            <div class="event-activities-box">-->
         <!--               <img src="{{ asset('public/front') }}/images/a1.jpg" class="main-logo" lt="Event Image">-->
         <!--            </div>-->
         <!--         </div>-->
         <!--         <div class="slider-item">-->
         <!--            <div class="event-activities-box">-->
         <!--               <img src="{{ asset('public/front') }}/images/a2.jpg" class="main-logo" lt="Event Image">-->
         <!--            </div>-->
         <!--         </div>-->
         <!--         <div class="slider-item">-->
         <!--            <div class="event-activities-box">-->
         <!--               <img src="{{ asset('public/front') }}/images/a3.jpg" class="main-logo" lt="Event Image">-->
         <!--            </div>-->
         <!--         </div>-->
         <!--      </div>-->
         <!--   </div>-->
         <!--   <div class="activities-names">-->
         <!--      <a style="font-family: serif;" class="d_name" href="">Annual sports meet at Janhit</a>-->
         <!--   </div>-->
         <!--</div>-->
         <!--<div class="col-lg-4">-->
         <!--   <div class="our-event-box">-->
         <!--      <div class="event-image-slider2 owl-carousel owl-theme">-->
         <!--         <div class="slider-item">-->
         <!--            <div class="event-activities-box">-->
         <!--               <img src="{{ asset('public/front') }}/images/s1.jpg" class="main-logo" lt="Event Image">-->
         <!--            </div>-->
         <!--         </div>-->
         <!--         <div class="slider-item">-->
         <!--            <div class="event-activities-box">-->
         <!--               <img src="{{ asset('public/front') }}/images/s1.jpg" class="main-logo" lt="Event Image">-->
         <!--            </div>-->
         <!--         </div>-->
         <!--      </div>-->
         <!--      <div class="activities-names">-->
         <!--         <a style="font-family: serif;" class="d_name" href="">Student's Industrial exposure conference</a>-->
         <!--      </div>-->
         <!--   </div>-->
         <!--</div>-->
      </div>
   </div>
</div>
<div class="students-stories-area">
   <div class="container-fluid">
      <div class="section-title">
         <h2>Videos Gallery</h2>
      </div>
      <div class="row justify-content-center">
         @php
         $video = DB::table('video')->get();
         @endphp
         @foreach($video as $item)
         <div class="col-lg-3 col-md-6 aos-init aos-animate" data-aos="fade-right">
            <div class="single-stories-card style2">
               <iframe src="https://www.youtube.com/embed/{{$item->link ?? '' }}" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>
<section class="clients-testimonials-areas">
   @php
   $feedback = DB::table('feedback')->get();
   @endphp  
   <div class="container">
      <div class="section-title">
         <h2>Students Feedback</h2>
      </div>
      <div class="row tstimonial-sec">
         <div class="col-lg-12">
            <div class="testimonial-slider owl-carousel owl-theme">
               @foreach($feedback as $item) 
               <div class="testimonial-item text-center">
                  <img src="{{ asset('public/admin/images').'/'.$item->image ?? '' }}" alt="Image"  >
                  <p class="student_name4t">{{ $item->name ?? '' }}</p>
                  <p class="student_location">({{ $item->place ??  '' }})</p>
                  <p><span class="quote-left"><i class="ri-quote-left"></i></span> {!! $item->content ?? '' !!} <span class="quote-right"><i class="fa fa-quote-right"></i></span></p>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</section>
@include('front.footer')
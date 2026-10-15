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
      {{--  
      <div class="slider-item">
         <img src="{{ asset('public/front') }}/images/college-slide2.jpg">
      </div>
      <div class="slider-item">
         <img src="{{ asset('public/front') }}/images/college-slide3.jpg">
      </div>
      <div class="slider-item">
         <img src="{{ asset('public/front') }}/images/college-slide4.jpg">
      </div>
      --}}
   </div>
</div>
<div class="campus-information-area">
   <div class="container">
      @php
      $about = DB::table('about')->first();
      @endphp
      <div class="row">
         <div class="col-lg-7 aos-init aos-animate" data-aos="fade-right">
            <div class="campus-content">
               <div class="campus-title">
                  <h2>{{ $about->title ?? '' }}</h2>
                  <?= $about->description ?? ''  ?>
               </div>
               <div class="counter">
                  <div class="row">
                     <div class="col-lg-4 col-4">
                        <div class="counter-card">
                           <h1>
                              <span class="odometer" data-count="23">00</span>
                              <span class="target">+</span>
                           </h1>
                           <p>Years Of Experience</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-4">
                        <div class="counter-card">
                           <h1>
                              <span class="odometer" data-count="35000">00</span>
                              <span class="target">+</span>
                           </h1>
                           <p>Global Students</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-4">
                        <div class="counter-card">
                           <h1>
                              <span class="odometer" data-count="10">00</span>
                              <span class="target">+</span>
                           </h1>
                           <p>Years Experinced Faculty</p>
                        </div>
                     </div>
                  </div>
               </div>
               <a href="about.php" class="default-btn btn">More Information<i class="flaticon-next"></i></a>
            </div>
         </div>
         <div class="col-lg-5 aos-init aos-animate" data-aos="fade-left">
            <div class="estemate-form">
               <h3>Admission Help Desk</h3>
               <p>Shape Your Destiny -Apply Now</p>
               <form>
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="form-group">
                           <input type="text" class="form-control" placeholder="Full Name">
                        </div>
                     </div>
                     <div class="col-lg-12">
                        <div class="form-group">
                           <input type="email" class="form-control" placeholder="Active Email">
                        </div>
                     </div>
                     <div class="col-lg-12">
                        <div class="form-group">
                           <input type="text" class="form-control" placeholder="Phone Number">
                        </div>
                     </div>
                     <div class="col-lg-12">
                        <div class="form-group">
                           <input type="text" class="form-control" placeholder="Course">
                        </div>
                     </div>
                     <div class="col-lg-12">
                        <button type="submit" class="default-btn btn">Send Request<i class="flaticon-paper-plane"></i></button>
                     </div>
                  </div>
               </form>
               <img class="rotateit" data-depth="-1" src="{{ asset('public/front') }}/images/shape-03.png" alt="Shape">
            </div>
         </div>
      </div>
   </div>
   <ul class="shape-group">
      <li class="shape-12 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
         <img data-depth="-1.5" src="{{ asset('public/front') }}/images/shape-16.png" alt="Shape">
      </li>
      <li class="shape-02" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
         <img data-depth="-1" src="{{ asset('public/front') }}/images/shape-02.png" alt="Shape">
      </li>
   </ul>
</div>
<div class="academic-area">
   <div class="container-fluid">
      <div class="section-title">
         <h2>Academics Programs</h2>
      </div>
      <div class="row y-gap-30 pt-60 lg:pt-50">
         <div class="col-xl-4 col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-down">
            <div class="categoryCard color-secondary-style">
               <div class="categoryCard__icon bg-light-3 mr-20">
                  <img src="{{ asset('public/front') }}/images/BA-Courses-After-12th.png">
               </div>
               <div class="categoryCard__content">
                  <h4 class="categoryCard__title">BA <span class="program--full-name">Bachlor of Arts</span></h4>
                  <div class="categoryCard__text">3 Years</div>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-right">
            <div class="categoryCard color-tertiary-style">
               <div class="categoryCard__icon bg-light-3 mr-20">
                  <img src="{{ asset('public/front') }}/images/B.com.jpeg">
               </div>
               <div class="categoryCard__content">
                  <h4 class="categoryCard__title">B.Com <span class="program--full-name">Bachlor of Commerce</span></h4>
                  <div class="categoryCard__text">3 Years</div>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-right">
            <div class="categoryCard color-primary-style">
               <div class="categoryCard__icon bg-light-3 mr-20">
                  <img src="{{ asset('public/front') }}/images/bca-program.jpg">
               </div>
               <div class="categoryCard__content">
                  <h4 class="categoryCard__title">BCA 
                     <span class="program--full-name">Bachlor in Computer Application</span>
                  </h4>
                  <div class="categoryCard__text">3 Years</div>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-left">
            <div class="categoryCard color-extra01-style">
               <div class="categoryCard__icon bg-light-3 mr-20">
                  <img src="{{ asset('public/front') }}/images/BBA.png">
               </div>
               <div class="categoryCard__content">
                  <h4 class="categoryCard__title">BBA <span class="program--full-name">Bachlor in Business Administrator</span></h4>
                  <div class="categoryCard__text">3 Years</div>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up">
            <div class="categoryCard color-extra02-style">
               <div class="categoryCard__icon bg-light-3 mr-20">
                  <img src="{{ asset('public/front') }}/images/bsc.png">
               </div>
               <div class="categoryCard__content">
                  <h4 class="categoryCard__title">B.Sc. <span class="program--full-name">Bachlor of Science</span></h4>
                  <div class="categoryCard__text">3 Years</div>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-left">
            <div class="categoryCard color-extra03-style">
               <div class="categoryCard__icon bg-light-3 mr-20">
                  <img src="{{ asset('public/front') }}/images/b-ed-500x500.png">
               </div>
               <div class="categoryCard__content">
                  <h4 class="categoryCard__title">B.Ed. <span class="program--full-name">Bachlor of Education</span></h4>
                  <div class="categoryCard__text">2 Years</div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="view-more-area">
               <a class="btn-view-more" href="#">View More Programs <i class="ri-arrow-right-line"></i></a>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="campus-life-area">
   <div class="container-fluid">
      <div class="section-title">
         <h2>Campus Life</h2>
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
         <!--<div class="single-campus-card style2  aos-init aos-animate" data-aos="fade-up">-->
         <!--   <div class="img">-->
         <!--      <a href="#"><img src="{{ asset('public/front') }}/images/campus-life2.jpg" alt="Image"></a>-->
         <!--   </div>-->
         <!--</div>-->
         <!--<div class="single-campus-card style2  aos-init aos-animate" data-aos="fade-left">-->
         <!--   <div class="img">-->
         <!--      <a href="#"><img src="{{ asset('public/front') }}/images/campus-life3.jpg" alt="Image"></a>-->
         <!--   </div>-->
         <!--</div>-->
         <!--<div class="single-campus-card style2  aos-init aos-animate" data-aos="fade-right">-->
         <!--   <div class="img">-->
         <!--      <a href="#"><img src="{{ asset('public/front') }}/images/campus-life4.jpg" alt="Image"></a>-->
         <!--   </div>-->
         <!--</div>-->
         <!--<div class="single-campus-card style2  aos-init aos-animate" data-aos="fade-up">-->
         <!--   <div class="img">-->
         <!--      <a href="#"><img src="{{ asset('public/front') }}/images/campus-life5.jpg" alt="Image"></a>-->
         <!--   </div>-->
         <!--</div>-->
         <!--<div class="single-campus-card style2  aos-init aos-animate" data-aos="fade-left">-->
         <!--   <div class="img">-->
         <!--      <a href="#"><img src="{{ asset('public/front') }}/images/campus-life6.jpg" alt="Image"></a>-->
         <!--   </div>-->
         <!--</div>-->
         <!--<div class="single-campus-card style2  aos-init aos-animate" data-aos="fade-up">-->
         <!--   <div class="img">-->
         <!--      <a href="#"><img src="{{ asset('public/front') }}/images/campus-life7.jpg" alt="Image"></a>-->
         <!--   </div>-->
         <!--</div>-->
         <!--<div class="single-campus-card style2  aos-init aos-animate" data-aos="fade-right">-->
         <!--   <div class="img">-->
         <!--      <a href="#"><img src="{{ asset('public/front') }}/images/campus-life8.jpg" alt="Image"></a>-->
         <!--   </div>-->
         <!--</div>-->
         <!--<div class="single-campus-card style2  aos-init aos-animate" data-aos="fade-left">-->
         <!--   <div class="img">-->
         <!--      <a href="#"><img src="{{ asset('public/front') }}/images/campus-life9.jpg" alt="Image"></a>-->
         <!--   </div>-->
         <!--</div>-->
         <!--<div class="single-campus-card style2  aos-init aos-animate" data-aos="fade-right">-->
         <!--   <div class="img">-->
         <!--      <a href="#"><img src="{{ asset('public/front') }}/images/campus-life10.jpg" alt="Image"></a>-->
         <!--   </div>-->
         <!--</div>-->
         <!--<div class="single-campus-card style2  aos-init aos-animate" data-aos="fade-left">-->
         <!--   <div class="img">-->
         <!--      <a href="#"><img src="{{ asset('public/front') }}/images/campus-life11.jpg" alt="Image"></a>-->
         <!--   </div>-->
         <!--</div>-->
      </div>
   </div>
</div>
<div class="it-video-area it-video-bg" data-background="{{ asset('public/front') }}/images/bg-1-1.jpg" style="background-image: url(&quot;{{ asset('public/front') }}/images/bg-1-1.jpg&quot;);">
   <div class="it-video-shape-1 d-none d-lg-block">
      <img src="{{ asset('public/front') }}/images/shape-1-1.png" alt="">
   </div>
   <div class="it-video-shape-2 d-none d-lg-block">
      <img src="{{ asset('public/front') }}/images/shape-1-2.png" alt="">
   </div>
   <div class="it-video-shape-4 d-none d-lg-block">
      <img src="{{ asset('public/front') }}/images/shape-1-4.png" alt="">
   </div>
   <div class="it-video-shape-5 d-none d-lg-block">
      <img src="{{ asset('public/front') }}/images/shape-1-5.png" alt="">
   </div>
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-7 col-md-9 col-sm-9 aos-init aos-animate" data-aos="fade-right">
            <div class="it-video-content">
               <span>Join Our New Session</span>
               <h3 class="it-video-title">Call To Begin Your Journey <br> <a href="tel:+919560614440"> +91-9773500615</a> <br> <a href="tel:+919560794440">, +91-9958299449</a><br><a href="tel:+919560794440"> +91-9773500617</a></h3>
               <div class="it-video-button">
                  <a class="it-btn" href="#">
                     <span>
                        Join With us
                        <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M11 1.24023L16 7.24023L11 13.2402" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                           <path d="M1 7.24023H16" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                     </span>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-lg-5 col-md-5 col-sm-5">
            <div class="admission-content">
               <div class="admission-image">
                  <div class="icon">
                     <a class="popup-youtube play-btn" href="https://www.youtube.com/watch?v=6WQCJx_vEX4"><i class="ri-play-fill"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="events-area">
   <div class="container">
      <div class="section-title">
         <h2>Events Images Gallery</h2>
      </div>
      <div class="row">
         <div class="col-lg-4">
            <div class="our-event-box">
               <div class="event-image-slider2 owl-carousel owl-theme">
                  <div class="slider-item">
                      <div class="event-activities-box">
                      <img src="{{ asset('public/admin') }}/images/image1712134675.jpg" class="main-logo" lt="Event Image">
                      </div>
                  </div>
                  <div class="slider-item">
                      <div class="event-activities-box">
                    <img src="{{ asset('public/admin') }}/images/image1712134675.jpg" class="main-logo" lt="Event Image">
                    </div>
                  </div>
                  <div class="slider-item">
                      <div class="event-activities-box">
                     <img src="{{ asset('public/admin') }}/images/image1712134675.jpg" class="main-logo" lt="Event Image">
                    </div>
                  </div>
               </div>
               <div class="activities-names">
                  <a  class="d_name" href="">Science Department award Ceremony</a>
               </div>
            </div>
         </div>
          <div class="col-lg-4">
            <div class="our-event-box">
               <div class="event-image-slider2 owl-carousel owl-theme">
                  <div class="slider-item">
                      <div class="event-activities-box">
                      <img src="{{ asset('public/admin') }}/images/image1712134675.jpg" class="main-logo" lt="Event Image">
                      </div>
                  </div>
                  <div class="slider-item">
                      <div class="event-activities-box">
                    <img src="{{ asset('public/admin') }}/images/image1712134675.jpg" class="main-logo" lt="Event Image">
                    </div>
                  </div>
                  <div class="slider-item">
                      <div class="event-activities-box">
                     <img src="{{ asset('public/admin') }}/images/image1712134675.jpg" class="main-logo" lt="Event Image">
                    </div>
                  </div>
               </div>
                <div class="activities-names">
                  <a  class="d_name" href="">Science Department award Ceremony</a>
               </div>
            </div>
         </div>
          <div class="col-lg-4">
            <div class="our-event-box">
               <div class="event-image-slider2 owl-carousel owl-theme">
                  <div class="slider-item">
                      <div class="event-activities-box">
                      <img src="{{ asset('public/admin') }}/images/image1712134675.jpg" class="main-logo" lt="Event Image">
                      </div>
                  </div>
                  <div class="slider-item">
                      <div class="event-activities-box">
                    <img src="{{ asset('public/admin') }}/images/image1712134675.jpg" class="main-logo" lt="Event Image">
                    </div>
                  </div>
                  <div class="slider-item">
                      <div class="event-activities-box">
                     <img src="{{ asset('public/admin') }}/images/image1712134675.jpg" class="main-logo" lt="Event Image">
                    </div>
                  </div>
               </div>
                <div class="activities-names">
                  <a  class="d_name" href="">Science Department award Ceremony</a>
               </div>
            </div>
         </div>
          <div class="col-lg-4">
            <div class="our-event-box">
               <div class="event-image-slider2 owl-carousel owl-theme">
                  <div class="slider-item">
                      <div class="event-activities-box">
                      <img src="{{ asset('public/admin') }}/images/image1712134675.jpg" class="main-logo" lt="Event Image">
                      </div>
                  </div>
                  <div class="slider-item">
                      <div class="event-activities-box">
                    <img src="{{ asset('public/admin') }}/images/image1712134675.jpg" class="main-logo" lt="Event Image">
                    </div>
                  </div>
                  <div class="slider-item">
                      <div class="event-activities-box">
                     <img src="{{ asset('public/admin') }}/images/image1712134675.jpg" class="main-logo" lt="Event Image">
                    </div>
                  </div>
               </div>
                <div class="activities-names">
                  <a  class="d_name" href="">Science Department award Ceremony</a>
               </div>
            </div>
         </div>
          <div class="col-lg-4">
            <div class="our-event-box">
               <div class="event-image-slider2 owl-carousel owl-theme">
                  <div class="slider-item">
                      <div class="event-activities-box">
                      <img src="{{ asset('public/admin') }}/images/image1712134675.jpg" class="main-logo" lt="Event Image">
                      </div>
                  </div>
                  <div class="slider-item">
                      <div class="event-activities-box">
                    <img src="{{ asset('public/admin') }}/images/image1712134675.jpg" class="main-logo" lt="Event Image">
                    </div>
                  </div>
                  <div class="slider-item">
                      <div class="event-activities-box">
                     <img src="{{ asset('public/admin') }}/images/image1712134675.jpg" class="main-logo" lt="Event Image">
                    </div>
                  </div>
               </div>
            </div>
             <div class="activities-names">
                  <a  class="d_name" href="">Science Department award Ceremony</a>
               </div>
         </div>
          <div class="col-lg-4">
            <div class="our-event-box">
               <div class="event-image-slider2 owl-carousel owl-theme">
                  <div class="slider-item">
                      <div class="event-activities-box">
                      <img src="{{ asset('public/admin') }}/images/image1712134675.jpg" class="main-logo" lt="Event Image">
                      </div>
                  </div>
                  <div class="slider-item">
                      <div class="event-activities-box">
                    <img src="{{ asset('public/admin') }}/images/image1712134675.jpg" class="main-logo" lt="Event Image">
                    </div>
                  </div>
                  <div class="slider-item">
                      <div class="event-activities-box">
                     <img src="{{ asset('public/admin') }}/images/image1712134675.jpg" class="main-logo" lt="Event Image">
                    </div>
                  </div>
               </div>
                <div class="activities-names">
                  <a  class="d_name" href="">Science Department award Ceremony</a>
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
      <div class="events-slider mb-20 owl-carousel owl-theme">
         @php
         $event = DB::table('event')->get();
         @endphp
         @foreach($event as $item)
         <div class="single-events-card style2 aos-init aos-animate" data-aos="fade-right">
            <div class="events-image event-image-sub">
               <a href="#"><img src="{{ asset('public/admin/images').'/'.$item->image ?? '' }}" alt="Image"></a>
            </div>
            <div class="events-content">
               <a href="#">
                  <h3>{{$item->title ?? '' }}</h3>
               </a>
            </div>
         </div>
         @endforeach
         <!--<div class="single-events-card style2 aos-init aos-animate" data-aos="fade-right">-->
         <!--   <div class="events-image">-->
         <!--      <a href="#"><img src="{{ asset('public/front') }}/images/events2.jpg" alt="Image"></a>-->
         <!--   </div>-->
         <!--   <div class="events-content">-->
         <!--      <a href="#">-->
         <!--         <h3>Science Department award Ceremony</h3>-->
         <!--      </a>-->
         <!--   </div>-->
         <!--</div>-->
         <!--<div class="single-events-card style2 aos-init aos-animate" data-aos="fade-right">-->
         <!--   <div class="events-image">-->
         <!--      <a href="#"><img src="{{ asset('public/front') }}/images/events3.jpg" alt="Image"></a>-->
         <!--   </div>-->
         <!--   <div class="events-content">-->
         <!--      <a href="#">-->
         <!--         <h3>Janhit’s Department meet</h3>-->
         <!--      </a>-->
         <!--   </div>-->
         <!--</div>-->
         <!--<div class="single-events-card style2 aos-init aos-animate" data-aos="fade-right">-->
         <!--   <div class="events-image">-->
         <!--      <a href="#"><img src="{{ asset('public/front') }}/images/events4.jpg" alt="Image"></a>-->
         <!--   </div>-->
         <!--   <div class="events-content">-->
         <!--      <a href="#">-->
         <!--         <h3>Annual Innovation competition</h3>-->
         <!--      </a>-->
         <!--   </div>-->
         <!--</div>-->
         <!--<div class="single-events-card style2 aos-init aos-animate" data-aos="fade-right">-->
         <!--   <div class="events-image">-->
         <!--      <a href="#"><img src="{{ asset('public/front') }}/images/events5.jpg" alt="Image"></a>-->
         <!--   </div>-->
         <!--   <div class="events-content">-->
         <!--      <a href="#">-->
         <!--         <h3>Sustainable model development competition</h3>-->
         <!--      </a>-->
         <!--   </div>-->
         <!--</div>-->
         <!--<div class="single-events-card style2 aos-init aos-animate" data-aos="fade-right">-->
         <!--   <div class="events-image">-->
         <!--      <a href="#"><img src="{{ asset('public/front') }}/images/events6.jpg" alt="Image"></a>-->
         <!--   </div>-->
         <!--   <div class="events-content">-->
         <!--      <a href="#">-->
         <!--         <h3>Best academic performance award ceremony</h3>-->
         <!--      </a>-->
         <!--   </div>-->
         <!--</div>-->
         <!--<div class="single-events-card style2 aos-init aos-animate" data-aos="fade-right">-->
         <!--   <div class="events-image">-->
         <!--      <a href="#"><img src="{{ asset('public/front') }}/images/events7.jpg" alt="Image"></a>-->
         <!--   </div>-->
         <!--   <div class="events-content">-->
         <!--      <a href="#">-->
         <!--         <h3>Annual festive programs</h3>-->
         <!--      </a>-->
         <!--   </div>-->
         <!--</div>-->
         <!--<div class="single-events-card style2 aos-init aos-animate" data-aos="fade-right">-->
         <!--   <div class="events-image">-->
         <!--      <a href="#"><img src="{{ asset('public/front') }}/images/events8.jpg" alt="Image"></a>-->
         <!--   </div>-->
         <!--   <div class="events-content">-->
         <!--      <a href="#">-->
         <!--         <h3>Research and development competition</h3>-->
         <!--      </a>-->
         <!--   </div>-->
         <!--</div>-->
         <!--<div class="single-events-card style2 aos-init aos-animate" data-aos="fade-right">-->
         <!--   <div class="events-image">-->
         <!--      <a href="#"><img src="{{ asset('public/front') }}/images/events9.jpg" alt="Image"></a>-->
         <!--   </div>-->
         <!--   <div class="events-content">-->
         <!--      <a href="#">-->
         <!--         <h3>Fresher’s at Janhit</h3>-->
         <!--      </a>-->
         <!--   </div>-->
         <!--</div>-->
      </div>
   </div>
</div>
<div class="students-stories-area">
   <div class="container-fluid">
      <div class="section-title">
         <h2>Events Videos Gallery</h2>
      </div>
      <div class="row justify-content-center">
         <div class="col-lg-3 col-md-6 aos-init aos-animate" data-aos="fade-right">
            <div class="single-stories-card style2">
               <iframe src="https://www.youtube.com/embed/dT9uXvsH6EU" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 aos-init aos-animate" data-aos="fade-up">
            <div class="single-stories-card style2">
               <iframe src="https://www.youtube.com/embed/TM9gjl-8X-E" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 aos-init aos-animate" data-aos="fade-left">
            <div class="single-stories-card style2">
               <iframe src="https://www.youtube.com/embed/yeZpJ6lJC54" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 aos-init aos-animate" data-aos="fade-right">
            <div class="single-stories-card style2">
               <iframe src="https://www.youtube.com/embed/dT9uXvsH6EU" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
         </div>
      </div>
   </div>
</div>
<!--<div class="lates-news-area bg-f4f6f9">
   <div class="container-fluid">
      <div class="section-title">
         <h2>Latest News</h2>
      </div>
      <div class="news-slider owl-carousel owl-theme">
         <div class="single-news-card style2">
            <div class="news-img">
               <a href="#"><img src="{{ asset('public/front') }}/images/news-1.jpg" alt="Image"></a>
            </div>
            <div class="news-content">
               <a href="#">
                  <h3>Professor Tom Comments On The volunteer B. Snack Brand</h3>
               </a>
               <a href="#" class="read-more-btn">read More<i class="flaticon-next"></i></a>
            </div>
         </div>
         <div class="single-news-card style2">
            <div class="news-img">
               <a href="#"><img src="{{ asset('public/front') }}/images/news-2.jpg" alt="Image"></a>
            </div>
            <div class="news-content">
               <a href="#">
                  <h3>How To Use Technology To Adapt Your Talent To The World</h3>
               </a>
               <a href="#" class="read-more-btn">read More<i class="flaticon-next"></i></a>
            </div>
         </div>
         <div class="single-news-card style2">
            <div class="news-img">
               <a href="#"><img src="{{ asset('public/front') }}/images/news-3.jpg" alt="Image"></a>
            </div>
            <div class="news-content">
               <a href="#">
                  <h3>Here Are The Things To Look For When Selecting Course</h3>
               </a>
               <a href="#" class="read-more-btn">read More<i class="flaticon-next"></i></a>
            </div>
         </div>
         <div class="single-news-card style2">
            <div class="news-img">
               <a href="#"><img src="{{ asset('public/front') }}/images/news-1.jpg" alt="Image"></a>
            </div>
            <div class="news-content">
               <a href="#">
                  <h3>Professor Tom Comments On The volunteer B. Snack Brand</h3>
               </a>
               <a href="#" class="read-more-btn">read More<i class="flaticon-next"></i></a>
            </div>
         </div>
         <div class="single-news-card style2">
            <div class="news-img">
               <a href="#"><img src="{{ asset('public/front') }}/images/news-2.jpg" alt="Image"></a>
            </div>
            <div class="news-content">
               <a href="#">
                  <h3>Professor Tom Comments On The volunteer B. Snack Brand</h3>
               </a>
               <a href="#" class="read-more-btn">read More<i class="flaticon-next"></i></a>
            </div>
         </div>
         <div class="single-news-card style2">
            <div class="news-img">
               <a href="#"><img src="{{ asset('public/front') }}/images/news-3.jpg" alt="Image"></a>
            </div>
            <div class="news-content">
               <a href="#">
                  <h3>Professor Tom Comments On The volunteer B. Snack Brand</h3>
               </a>
               <a href="#" class="read-more-btn">read More<i class="flaticon-next"></i></a>
            </div>
         </div>
         <div class="single-news-card style2">
            <div class="news-img">
               <a href="#"><img src="{{ asset('public/front') }}/images/news-2.jpg" alt="Image"></a>
            </div>
            <div class="news-content">
               <a href="#">
                  <h3>Professor Tom Comments On The volunteer B. Snack Brand</h3>
               </a>
               <a href="#" class="read-more-btn">read More<i class="flaticon-next"></i></a>
            </div>
         </div>
      </div>
   </div>
   </div>-->
@include('front.footer')
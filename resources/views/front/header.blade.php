<html lang="zxx">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Saraswati Shishu Mandir</title>
      <link rel="icon" type="image/png" href="{{ asset('public/front') }}/images/favicon.png">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="{{ asset('public/front') }}/css/bootstrap.min.css">
      <link rel="stylesheet" href="{{ asset('public/front') }}/css/meanmenu.css">
      <link rel="stylesheet" href="{{ asset('public/front') }}/css/owl.carousel.min.css">
      <link rel="stylesheet" href="{{ asset('public/front') }}/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="{{ asset('public/front') }}/css/magnific-popup.css">
      <link rel="stylesheet" href="{{ asset('public/front') }}/css/flaticon.css">
      <link rel="stylesheet" href="{{ asset('public/front') }}/css/remixicon.css">
      <link rel="stylesheet" href="{{ asset('public/front') }}/css/odometer.min.css">
      <link rel="stylesheet" href="{{ asset('public/front') }}/css/aos.css">
      <link rel="stylesheet" href="{{ asset('public/front') }}/css/style.css">
      <link rel="stylesheet" href="{{ asset('public/front') }}/css/intlTelInput.css" type="text/css">
      <link rel="stylesheet" href="{{ asset('public/front') }}/css/lightboxed.css" type="text/css">
      <link rel="stylesheet" href="{{ asset('public/front') }}/css/lightgallery.min.css" type="text/css">
      <link rel="stylesheet" href="{{ asset('public/front') }}/css/dark.css">
      <link rel="stylesheet" href="{{ asset('public/front') }}/css/responsive.css">
   </head>
    <body>
      <div class="navbar-area nav-bg-2" style="border-bottom: 2px solid #e0e0e0; padding: 5px 0;">
         <div class="mobile-responsive-nav">
            <div class="container">
               <div class="mobile-responsive-menu">
                  <div class="logo">
                     <a href="{{ url('/') }}">
                     <img src="{{ asset('public/front') }}/images/saraswati-logo-new.jpg" class="main-logo" alt="logo" style="max-height: 80px; mix-blend-mode: darken; background: transparent;">
                     <img src="{{ asset('public/front') }}/images/saraswati-logo-new.jpg" class="white-logo" alt="logo" style="max-height: 80px; mix-blend-mode: darken; background: transparent;">
                     </a>
                  </div>
                  <div class="mobile-downloads">
                     <ul>
                        <li>
                          
                           <ul class="downloads-list">
                              <li><a target="_blank" href="{{ asset('public/front') }}/images/LIST-OF-PARENTS-TEACHER-ASSOCIATION-MEMBERS.pdf" class="btn_download_brochor" alt="Brochure Download" download >Brochure Download</a></li>
                              <li><a href="{{url('apply-now')}}" class="btn_apply_now">Enquire Now</a></li>
                              <li><a  target="_blank" href="{{ asset('public/front') }}/images/LIST-OF-PARENTS-TEACHER-ASSOCIATION-MEMBERS.pdf" class="btn_admission_form" alt="Admission Form" download>Admission Form </a></li>
                           </ul>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="desktop-nav">
            <div class="container-fluid">
               <nav class="navbar navbar-expand-md navbar-light">
                  <a class="navbar-brand" href="{{ url('/') }}" style="background: transparent;">
                  <img src="{{ asset('public/front') }}/images/saraswati-logo-new.jpg" class="main-logo" alt="logo" style="max-height: 85px; mix-blend-mode: darken; background: transparent;">
                  <img src="{{ asset('public/front') }}/images/saraswati-logo-new.jpg" class="white-logo" alt="logo" style="max-height: 85px; mix-blend-mode: darken; background: transparent;">
                  </a>
                  <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                     <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                           <a href="{{ url('/') }}" class="nav-link active">Home</a>
                        </li>
                        <!--<li class="nav-item">-->
                        <!--   <a href="{{ url('about') }}" class="nav-link">About</a>-->
                        <!--</li>-->
                        <li class="nav-item">
                           <a href="#" class="nav-link dropdown-toggle">About Us</a>
                           <ul class="dropdown-menu">
                               <li><a href="{{url('about')}}">Overview</a></li>
                               <li><a href="mission-vision">Our Mission & Vision</a></li>
                               <!-- <li><a href="{{url('school-ex-director')}}">School Ex-Director's & Patron</a></li> -->
                              <li><a href="{{url('director-message')}}">Director's Message</a></li>
                              <li><a href="{{url('principle-message')}}">Principal's Message</a></li>
                               
                             <!--<li><a href="{{url('academic-streams')}}">Academic Streams</a></li>-->
                             <li class="nav-item"><a href="{{url('infrastructure')}}">Infrastructure</a></li>
                             <li class="nav-item">
                                 <a href="{{ url('faculty') }}" class="nav-link">Faculty</a>
                              </li>
                             <li class="nav-item">
                                 <a href="{{ url('association-member') }}" class="nav-link">Parents Teacher Association List</a>
                              </li>                              
                             
                              <!--<li><a href="vidya-bharti-lakshay">Vidya Bharti Lakshay</a></li>-->
                              <!--<li><a href="{{ url('association-member') }}">Association Member List</a></li>-->
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a href="#" class="nav-link dropdown-toggle">Life @ Our School</a>
                           <ul class="dropdown-menu">
                              <li class="nav-item">
                                 <a href="{{ url('achievement') }}" class="nav-link">Our Achievement</a>
                              </li>
                              <!-- <li class="nav-item">
                                 <a href="{{ url('alumni') }}" class="nav-link">Alumni</a>
                              </li> -->
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a href="{{ url('gallery') }}" class="nav-link">Gallery</a>
                        </li>
                        <li class="nav-item">
                           <a href="{{ url('event') }}" class="nav-link">Events</a>
                        </li>
                      
                        <li class="nav-item">
                           <a href="javascript:void(0);" class="nav-link dropdown-toggle">Admission</a>
                           <ul class="dropdown-menu">
                              <li><a href="{{url('admission-process')}}">Admission Process</a></li>
                              <li><a href="{{ url('school-uniform') }}">School Uniform</a></li>
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a href="javascript:void(0);" class="nav-link dropdown-toggle">Registration</a>
                           <ul class="dropdown-menu">
                              <li><a href="{{ url('registration/online') }}">Online Form</a></li>
                              <li><a href="{{ url('registration/download') }}">Download Form</a></li>
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a href="javascript:void(0)" class="nav-link dropdown-toggle">Fee & Payments</a>
                           <ul class="dropdown-menu">
                               <li><a href="{{ url('fee-structure') }}">Fee Structure</a></li>
                               <li><a href="{{ url('fee-payment') }}">Online Fee</a></li>
                            </ul>
                        </li>

                       
                        <!-- <li class="nav-item">
                           <a href="javascript:void(0);" class="nav-link dropdown-toggle">Social Activities</a>
                            <ul class="dropdown-menu">
                               @php
                               $data =DB::table('socialactivities')->get();
                               @endphp                                 
                              @foreach($data as $item)    
                              <li><a href="{{url('social-activities/'.$item->slug ??'')}}">{{$item->title}}</a></li>
                               @endforeach 
                           </ul>
                        </li> -->

                        <li class="nav-item">
                           <a href="{{url('/contact')}}" class="nav-link">Contact Us</a>
                        </li>
                     </ul>
                     <div class="others-options d-none d-md-flex align-items-center ml-auto" style="margin-left: auto; background: transparent;">
                        <img src="{{ asset('public/front') }}/images/vidyabharati_logo.jpg" alt="Vidya Bharati Logo" style="max-height: 85px; mix-blend-mode: darken; background: transparent;">
                     </div>
                  </div>
               </nav>
            </div>
         </div>
      </div>
     
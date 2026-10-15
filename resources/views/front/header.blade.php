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
      <style>
         @media (min-width: 992px) {
             .desktop-nav .navbar-nav .dropdown-menu {
                 background-color: #ffffff !important;
                 border: none !important;
                 border-radius: 12px !important;
                 box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12) !important;
                 padding: 8px 0 !important;
                 min-width: 295px !important;
                 width: max-content !important;
                 max-width: 330px !important;
                 opacity: 0;
                 visibility: hidden;
                 transform: translateY(20px);
                 display: block !important; 
                 transition: all 0.3s ease-in-out !important;
                 position: absolute !important;
                 top: 100%;
                 left: 0;
             }
             .desktop-nav .navbar-nav .nav-item:hover .dropdown-menu {
                 opacity: 1;
                 visibility: visible;
                 transform: translateY(0);
             }
             .desktop-nav .navbar-nav .dropdown-menu li {
                 display: block !important;
                 width: 100% !important;
             }
             .desktop-nav .navbar-nav .dropdown-menu li a {
                 padding: 10px 18px !important;
                 color: #333333 !important;
                 font-size: 14.5px !important;
                 font-weight: 500 !important;
                 border-bottom: 1px solid #f5f5f5 !important;
                 transition: all 0.25s ease !important;
                 display: block !important;
                 text-transform: capitalize !important;
                 white-space: normal !important;
                 word-break: normal !important;
                 line-height: 1.4 !important;
             }
             .desktop-nav .navbar-nav .dropdown-menu li:last-child a {
                 border-bottom: none !important;
             }
             .desktop-nav .navbar-nav .dropdown-menu li a:hover {
                 background-color: #fdf2f4 !important;
                 color: #e32845 !important;
                 padding-left: 22px !important; 
             }
         }

         /* =================================================== */
         /* Dual Logo Header Styles (Desktop & Mobile)           */
         /* =================================================== */
         .desktop-nav .navbar {
             position: relative !important;
             display: flex !important;
             align-items: center !important;
             justify-content: center !important;
             width: 100% !important;
             min-height: 86px !important;
             padding: 0 !important;
         }
         .desktop-logo-group {
             position: absolute !important;
             left: 15px !important;
             top: 50% !important;
             transform: translateY(-50%) !important;
             display: inline-flex !important;
             align-items: center !important;
             gap: 12px !important;
             text-decoration: none !important;
             padding: 0 !important;
             margin: 0 !important;
             z-index: 10 !important;
         }
         .desktop-logo-school {
             max-height: 80px !important;
             width: auto !important;
             display: inline-block !important;
             vertical-align: middle;
             transition: max-height 0.3s ease;
         }
         .desktop-logo-vidyabharati {
             max-height: 75px !important;
             width: auto !important;
             mix-blend-mode: multiply !important;
             display: inline-block !important;
             vertical-align: middle;
             transition: max-height 0.3s ease;
         }
         .is-sticky .desktop-logo-school {
             max-height: 65px !important;
         }
         .is-sticky .desktop-logo-vidyabharati {
             max-height: 60px !important;
         }
         .desktop-nav .navbar .navbar-collapse {
             width: 100% !important;
             display: flex !important;
             justify-content: flex-end !important;
             margin: 0 !important;
             padding-left: 260px !important;
             padding-right: 20px !important;
         }
         .desktop-nav .navbar .navbar-nav {
             margin: 0 0 0 auto !important;
             display: flex !important;
             justify-content: flex-end !important;
             align-items: center !important;
             padding: 0 !important;
         }
         .desktop-nav .navbar .navbar-nav .nav-item a {
             white-space: nowrap !important;
             letter-spacing: 0.3px;
         }

         /* Responsive adjustments for desktop sizes to ensure centered menu never overflows */
         @media (min-width: 1400px) {
             .desktop-nav .navbar .navbar-nav .nav-item a {
                 margin-left: 9px !important;
                 margin-right: 9px !important;
                 font-size: 14px !important;
             }
         }
         @media (min-width: 1200px) and (max-width: 1399px) {
             .desktop-nav .navbar .navbar-collapse {
                 padding-left: 230px !important;
                 padding-right: 15px !important;
             }
             .desktop-nav .navbar .navbar-nav .nav-item a {
                 margin-left: 6px !important;
                 margin-right: 6px !important;
                 font-size: 13px !important;
             }
             .desktop-logo-school {
                 max-height: 72px !important;
             }
             .desktop-logo-vidyabharati {
                 max-height: 68px !important;
             }
         }
         @media (min-width: 1080px) and (max-width: 1199px) {
             .desktop-nav .navbar .navbar-collapse {
                 padding-left: 190px !important;
                 padding-right: 10px !important;
             }
             .desktop-nav .navbar .navbar-nav .nav-item a {
                 margin-left: 4px !important;
                 margin-right: 4px !important;
                 font-size: 12px !important;
             }
             .desktop-logo-group {
                 left: 10px !important;
                 gap: 8px !important;
             }
             .desktop-logo-school {
                 max-height: 60px !important;
             }
             .desktop-logo-vidyabharati {
                 max-height: 56px !important;
             }
             .desktop-nav .navbar {
                 min-height: 72px !important;
             }
         }
         @media (min-width: 992px) and (max-width: 1079px) {
             .desktop-nav .navbar .navbar-collapse {
                 padding-left: 150px !important;
                 padding-right: 5px !important;
             }
             .desktop-nav .navbar .navbar-nav .nav-item a {
                 margin-left: 3px !important;
                 margin-right: 3px !important;
                 font-size: 11px !important;
             }
             .desktop-logo-group {
                 left: 8px !important;
                 gap: 6px !important;
             }
             .desktop-logo-school {
                 max-height: 48px !important;
             }
             .desktop-logo-vidyabharati {
                 max-height: 44px !important;
             }
             .desktop-nav .navbar {
                 min-height: 62px !important;
             }
         }
         .desktop-nav .container-fluid {
             position: relative !important;
             padding-left: 15px !important;
             padding-right: 15px !important;
         }

         /* Mobile Logo Settings */
         @media (max-width: 991px) {
             .mobile-responsive-nav .mobile-responsive-menu {
                 position: relative !important;
             }
             .mobile-responsive-nav .mobile-responsive-menu .logo {
                 width: auto !important;
                 max-width: calc(100% - 65px) !important;
                 float: left !important;
                 display: inline-flex !important;
                 align-items: center !important;
                 padding: 4px 0 !important;
             }
             .mobile-logo-group {
                 display: inline-flex !important;
                 align-items: center !important;
                 gap: 8px !important;
                 text-decoration: none !important;
             }
             .mobile-logo-school {
                 max-height: 42px !important;
                 width: auto !important;
                 display: inline-block !important;
                 vertical-align: middle;
             }
             .mobile-logo-vidyabharati {
                 max-height: 40px !important;
                 width: auto !important;
                 mix-blend-mode: multiply !important;
                 display: inline-block !important;
                 vertical-align: middle;
             }
         }

         @media (max-width: 480px) {
             .mobile-logo-group {
                 gap: 6px !important;
             }
             .mobile-logo-school {
                 max-height: 36px !important;
             }
             .mobile-logo-vidyabharati {
                 max-height: 34px !important;
             }
         }

         @media (max-width: 360px) {
             .mobile-logo-group {
                 gap: 4px !important;
             }
             .mobile-logo-school {
                 max-height: 32px !important;
             }
             .mobile-logo-vidyabharati {
                 max-height: 30px !important;
             }
         }
         .mobile-downloads {
             display: none !important;
         }
      </style>
   </head>
    <body>
      <div class="navbar-area nav-bg-2" style="border-bottom: 2px solid #e0e0e0; padding: 5px 0;">
         <div class="mobile-responsive-nav">
            <div class="container">
               <div class="mobile-responsive-menu">
                  <div class="logo">
                     <a href="{{ url('/') }}" class="mobile-logo-group">
                        <img src="{{ asset('public/front') }}/images/saraswati-logo-new.png" class="main-logo mobile-logo-school" alt="Saraswati Shishu Mandir">
                        <img src="{{ asset('public/front') }}/images/vidyabharati_logo.png" class="mobile-logo-vidyabharati" alt="Vidya Bharati Logo">
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
                  <a class="navbar-brand desktop-logo-group" href="{{ url('/') }}">
                     <img src="{{ asset('public/front') }}/images/saraswati-logo-new.png" class="main-logo desktop-logo-school" alt="Saraswati Shishu Mandir">
                     <img src="{{ asset('public/front') }}/images/vidyabharati_logo.png" class="desktop-logo-vidyabharati" alt="Vidya Bharati Logo">
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
                         <li class="nav-item">
                            <a href="{{ url('achievement') }}" class="nav-link">Our Achievement</a>
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
                           <a href="{{ url('fee-structure') }}" class="nav-link">Fee Structure</a>
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
                  </div>
               </nav>
            </div>
         </div>
      </div>
     
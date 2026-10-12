@include('front.header')

@php
$data = DB::table('visionmission')->first();

// Function to resolve vision & mission image path safely
if (!function_exists('getVisionMissionImg')) {
    function getVisionMissionImg($imgName, $fallbackType = 'vision') {
        if (!empty($imgName)) {
            if (file_exists(public_path('admin/images/' . $imgName))) {
                return asset('public/admin/images/' . $imgName);
            }
            if (file_exists(public_path('uploads/images/' . $imgName))) {
                return asset('public/uploads/images/' . $imgName);
            }
            if (file_exists(base_path('uploads/images/' . $imgName))) {
                return url('uploads/images/' . $imgName);
            }
        }
        if ($fallbackType === 'vision') {
            return asset('public/uploads/images/0-1791785567.jpg');
        } else {
            return asset('public/uploads/images/0-1791785767.jpg');
        }
    }
}

$visionImg = getVisionMissionImg($data->image_vision ?? '', 'vision');
$missionImg = getVisionMissionImg($data->image_mission ?? '', 'mission');
@endphp

<!-- Page Banner Area -->
<div class="page-banner-area">
   <img class="page-banner" src="{{ asset('public/front') }}/images/breadcrumb-bg-image.jpg" alt="Mission and Vision">
   <div class="page-banner-content">
      <h1>{{ $data->title_mission ?? 'Mission & Vision' }}</h1>
      <ul>
         <li><a href="{{ url('/') }}">Home</a></li>
         <li>Play to 5th Mission &amp; Vision</li>
      </ul>
   </div>
</div>

<!-- Main Mission & Vision Section -->
<section class="mission-vision-modern-sec">
   <div class="container">
      
      <!-- Top Intro Header Card -->
      <div class="mv-hero-card" data-aos="fade-up">
         <div class="row align-items-center">
            <div class="col-lg-8">
               <div class="mv-pill-row">
                  <span class="mv-pill pill-gold"><i class="ri-compass-3-line"></i> Institutional Principles</span>
                  <span class="mv-pill pill-white"><i class="ri-bear-smile-line"></i> Playgroup to Class 5th</span>
               </div>
               <h2 class="mv-hero-heading">Nurturing Young Minds with Values &amp; Wisdom</h2>
               <p class="mv-hero-desc">
                  At Saraswati Shishu Mandir, our foundational learning pedagogy for Playgroup, Nursery, KG, and Primary grades (Classes 1 to 5) harmoniously blends traditional Bharatiya sanskars with modern child-centric education.
               </p>
            </div>
            <div class="col-lg-4 text-lg-end text-start mt-3 mt-lg-0">
               <div class="mv-core-tags">
                  <span class="tag-item"><i class="ri-heart-pulse-fill text-danger"></i> Sanskar &amp; Character</span>
                  <span class="tag-item"><i class="ri-lightbulb-fill text-warning"></i> Joyful Learning</span>
                  <span class="tag-item"><i class="ri-shield-user-fill text-success"></i> Individual Care</span>
               </div>
            </div>
         </div>
      </div>

      <!-- Section 1: Vision Card -->
      <div class="mv-block-wrapper" data-aos="fade-up" data-aos-duration="900">
         <div class="row align-items-center g-4">
            <div class="col-lg-6">
               <div class="mv-image-container">
                  <div class="mv-image-frame">
                     <img src="{{ $visionImg }}" alt="Our Vision - Play School to 5th" class="img-fluid">
                     <div class="mv-image-tag">
                        <i class="ri-eye-fill"></i> Our Vision
                     </div>
                  </div>
                  <div class="mv-deco-badge">
                     <i class="ri-sparkling-fill"></i>
                     <span>Play to 5th Foundation</span>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="mv-content-box vision-box">
                  <div class="mv-badge-label">
                     <i class="ri-eye-line"></i> Guiding Light
                  </div>
                  <h3 class="mv-block-title">{{ $data->title_vision ?? 'Our Vision' }}</h3>
                  <div class="mv-rich-text">
                     {!! $data->description_vision ?? '' !!}
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- Section 2: Mission Card -->
      <div class="mv-block-wrapper mv-block-reversed" data-aos="fade-up" data-aos-duration="900">
         <div class="row align-items-center g-4">
            <div class="col-lg-6 order-2 order-lg-1">
               <div class="mv-content-box mission-box">
                  <div class="mv-badge-label">
                     <i class="ri-flag-line"></i> Our Core Purpose
                  </div>
                  <h3 class="mv-block-title">{{ $data->title_mission ?? 'Our Mission' }}</h3>
                  <div class="mv-rich-text">
                     {!! $data->description_mission ?? '' !!}
                  </div>
               </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
               <div class="mv-image-container">
                  <div class="mv-image-frame">
                     <img src="{{ $missionImg }}" alt="Our Mission - Play School to 5th" class="img-fluid">
                     <div class="mv-image-tag">
                        <i class="ri-flag-fill"></i> Our Mission
                     </div>
                  </div>
                  <div class="mv-deco-badge mission-deco">
                     <i class="ri-award-fill"></i>
                     <span>Holistic Growth</span>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- Bottom Interactive Inquire CTA -->
      <div class="mv-cta-card" data-aos="fade-up">
         <div class="row align-items-center">
            <div class="col-lg-8">
               <h4><i class="ri-school-line text-warning"></i> Enroll Your Child in Saraswati Shishu Mandir</h4>
               <p>Admissions are open for Playgroup, Nursery, KG, and Classes 1st to 5th for the Academic Session 2026–2027.</p>
            </div>
            <div class="col-lg-4 text-lg-end text-start mt-3 mt-lg-0">
               <a href="{{ url('registration/online') }}" class="btn btn-warning fw-bold px-4 py-2 me-2 text-dark shadow-sm">
                  <i class="ri-edit-box-line"></i> Apply Online
               </a>
               <a href="{{ url('contact') }}" class="btn btn-outline-light fw-bold px-4 py-2">
                  <i class="ri-phone-line"></i> Contact Campus
               </a>
            </div>
         </div>
      </div>

   </div>
</section>

<!-- Custom Styling for Mission & Vision Page -->
<style>
.mission-vision-modern-sec {
   padding: 60px 0 90px 0;
   background: #f4f6fa;
   font-family: 'Open Sans', sans-serif;
}

/* Hero Card */
.mv-hero-card {
   background: linear-gradient(135deg, #032274 0%, #0d38a5 60%, #1a49bf 100%);
   border-radius: 20px;
   padding: 40px 45px;
   color: #ffffff;
   box-shadow: 0 15px 40px rgba(3, 34, 116, 0.15);
   margin-bottom: 45px;
   position: relative;
   overflow: hidden;
}

.mv-hero-card::after {
   content: '';
   position: absolute;
   right: -50px;
   bottom: -50px;
   width: 250px;
   height: 250px;
   background: radial-gradient(circle, rgba(255,255,255,0.12) 0%, rgba(255,255,255,0) 70%);
   border-radius: 50%;
   pointer-events: none;
}

.mv-pill-row {
   display: flex;
   gap: 12px;
   flex-wrap: wrap;
   margin-bottom: 15px;
}

.mv-pill {
   display: inline-flex;
   align-items: center;
   gap: 6px;
   padding: 6px 16px;
   border-radius: 30px;
   font-size: 13px;
   font-weight: 700;
   text-transform: uppercase;
   letter-spacing: 0.4px;
}

.pill-gold {
   background: #ffd700;
   color: #032274;
}

.pill-white {
   background: rgba(255, 255, 255, 0.2);
   color: #ffffff;
   border: 1px solid rgba(255, 255, 255, 0.3);
}

.mv-hero-heading {
   font-family: 'Playfair Display', Georgia, serif;
   font-size: 32px;
   font-weight: 800;
   color: #ffffff;
   margin-bottom: 12px;
   letter-spacing: 0.5px;
}

.mv-hero-desc {
   color: #e2e8f0;
   font-size: 16px;
   line-height: 1.65;
   max-width: 740px;
   margin-bottom: 0;
}

.mv-core-tags {
   display: flex;
   flex-direction: column;
   gap: 10px;
   align-items: flex-end;
}

.tag-item {
   background: rgba(255, 255, 255, 0.12);
   border: 1px solid rgba(255, 255, 255, 0.2);
   padding: 8px 18px;
   border-radius: 30px;
   font-size: 13.5px;
   font-weight: 600;
   color: #ffffff;
   display: inline-flex;
   align-items: center;
   gap: 8px;
}

/* Block Wrapper */
.mv-block-wrapper {
   background: #ffffff;
   border-radius: 20px;
   padding: 40px;
   margin-bottom: 40px;
   box-shadow: 0 10px 35px rgba(0, 0, 0, 0.04);
   border: 1px solid #e2e8f0;
   transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.mv-block-wrapper:hover {
   box-shadow: 0 15px 45px rgba(3, 34, 116, 0.08);
}

/* Image Container */
.mv-image-container {
   position: relative;
}

.mv-image-frame {
   position: relative;
   border-radius: 16px;
   overflow: hidden;
   box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
   border: 4px solid #ffffff;
   height: 380px;
   background: #f1f5f9;
}

.mv-image-frame img {
   width: 100%;
   height: 100%;
   object-fit: cover;
   transition: transform 0.6s ease;
}

.mv-block-wrapper:hover .mv-image-frame img {
   transform: scale(1.05);
}

.mv-image-tag {
   position: absolute;
   bottom: 15px;
   left: 15px;
   background: rgba(3, 34, 116, 0.88);
   backdrop-filter: blur(8px);
   color: #ffd700;
   padding: 6px 16px;
   border-radius: 30px;
   font-size: 13px;
   font-weight: 700;
   display: flex;
   align-items: center;
   gap: 6px;
   box-shadow: 0 4px 12px rgba(0,0,0,0.25);
}

.mv-deco-badge {
   position: absolute;
   top: -12px;
   right: -12px;
   background: #ffd700;
   color: #032274;
   padding: 8px 18px;
   border-radius: 30px;
   font-size: 13px;
   font-weight: 700;
   display: inline-flex;
   align-items: center;
   gap: 6px;
   box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
   border: 2px solid #ffffff;
}

.mission-deco {
   background: #032274;
   color: #ffd700;
}

/* Content Box */
.mv-content-box {
   padding: 10px 20px;
}

.mv-badge-label {
   display: inline-flex;
   align-items: center;
   gap: 6px;
   font-size: 13px;
   font-weight: 700;
   text-transform: uppercase;
   color: #032274;
   background: #eef2ff;
   padding: 5px 14px;
   border-radius: 20px;
   margin-bottom: 12px;
}

.mv-block-title {
   font-family: 'Playfair Display', Georgia, serif;
   font-size: 28px;
   font-weight: 800;
   color: #032274;
   margin-bottom: 20px;
   position: relative;
   padding-bottom: 12px;
}

.mv-block-title::after {
   content: '';
   position: absolute;
   left: 0;
   bottom: 0;
   width: 55px;
   height: 4px;
   background: #ffd700;
   border-radius: 2px;
}

/* Rich Text & Lists */
.mv-rich-text {
   color: #334155;
   font-size: 15.5px;
   line-height: 1.8;
}

.mv-rich-text p {
   margin-bottom: 16px;
}

.mv-rich-text ul {
   list-style: none;
   padding-left: 0;
   margin-bottom: 0;
}

.mv-rich-text ul li {
   position: relative;
   padding-left: 32px;
   margin-bottom: 12px;
   font-weight: 500;
   color: #1e293b;
   line-height: 1.6;
}

.mv-rich-text ul li::before {
   content: '\ea54'; /* RemixIcon checkbox circle fill */
   font-family: 'remixicon';
   position: absolute;
   left: 0;
   top: 0;
   color: #059669;
   font-size: 20px;
   line-height: 1.4;
}

/* Bottom CTA Banner */
.mv-cta-card {
   margin-top: 50px;
   padding: 35px 40px;
   background: linear-gradient(135deg, #032274 0%, #0a2d8a 100%);
   border-radius: 18px;
   color: #ffffff;
   box-shadow: 0 10px 30px rgba(3, 34, 116, 0.15);
}

.mv-cta-card h4 {
   color: #ffffff;
   font-size: 22px;
   font-weight: 700;
   margin-bottom: 8px;
   display: flex;
   align-items: center;
   gap: 10px;
}

.mv-cta-card p {
   color: #cbd5e1;
   margin-bottom: 0;
   font-size: 15px;
}

/* Responsive adjustments */
@media (max-width: 991px) {
   .mv-hero-card { padding: 30px 25px; }
   .mv-core-tags { align-items: flex-start; margin-top: 15px; }
   .mv-block-wrapper { padding: 30px 20px; }
   .mv-image-frame { height: 320px; margin-bottom: 20px; }
   .mv-content-box { padding: 0; }
}

@media (max-width: 767px) {
   .mv-hero-heading { font-size: 24px; }
   .mv-block-title { font-size: 22px; }
   .mv-cta-card { padding: 25px 20px; }
   .mv-image-frame { height: 260px; }
}
</style>

@include('front.footer')
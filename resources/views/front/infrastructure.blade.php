@include('front.header')

@php
// Robust image resolver
if (!function_exists('getInfraImg')) {
    function getInfraImg($imgName, $fallbackIndex = 0) {
        if (!empty($imgName)) {
            if (file_exists(public_path('uploads/products/' . $imgName))) {
                return asset('public/uploads/products/' . $imgName);
            }
            if (file_exists(base_path('uploads/products/' . $imgName))) {
                return url('uploads/products/' . $imgName);
            }
            if (file_exists(public_path('uploads/images/' . $imgName))) {
                return asset('public/uploads/images/' . $imgName);
            }
        }
        $fallbacks = [
            '0-1791631228.jpg',
            '0-1791631260.jpg',
            '0-1791631301.jpg',
            '0-1791631445.jpg',
            '0-1791631471.jpg',
            '0-1791631489.jpg',
            '0-1791631532.jpg',
            '0-1791631591.jpg',
            '0-1791785567.jpg',
            '0-1791785767.jpg',
            '0-1791785889.jpg',
            '0-1791786140.jpg'
        ];
        $selected = $fallbacks[$fallbackIndex % count($fallbacks)];
        if (file_exists(public_path('uploads/images/' . $selected))) {
            return asset('public/uploads/images/' . $selected);
        }
        return asset('public/front/images/generated_school_front.jpg');
    }
}
@endphp

<!-- Page Banner Area -->
<div class="page-banner-area">
   <img class="page-banner" src="{{ asset('public/front') }}/images/banner_infrastructure.jpg" alt="School Infrastructure">
   <div class="page-banner-content">
      <h1>School Infrastructure</h1>
      <ul>
         <li><a href="{{ url('/') }}">Home</a></li>
         <li>Play to 5th Infrastructure</li>
      </ul>
   </div>
</div>

<!-- Main Infrastructure Section -->
<section class="infra-showcase-section">
   <div class="container">
      
      <!-- Premium Hero Banner -->
      <div class="infra-hero-banner" data-aos="fade-up">
         <div class="row align-items-center">
            <div class="col-lg-8">
               <div class="infra-hero-badge">
                  <span class="badge-pill session-badge"><i class="ri-building-4-line"></i> Campus Facility</span>
                  <span class="badge-pill age-badge"><i class="ri-bear-smile-line"></i> Play School to Class 5th</span>
               </div>
               <h2 class="infra-hero-title">World-Class Infrastructure for Young Learners</h2>
               <p class="infra-hero-desc">
                  Safe, nurturing, colorful, and tech-enabled learning spaces meticulously designed for our Playgroup, Nursery, KG, and Primary (Class 1 to 5) students.
               </p>
            </div>
            <div class="col-lg-4 text-lg-end text-start mt-3 mt-lg-0">
               <div class="infra-stat-pills">
                  <div class="stat-item">
                     <i class="ri-shield-check-fill"></i> 100% Safe Campus
                  </div>
                  <div class="stat-item">
                     <i class="ri-palette-line"></i> Child-Centric Design
                  </div>
                  <div class="stat-item">
                     <i class="ri-football-line"></i> Dedicated Play Area
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- Quick Feature Highlights -->
      <div class="row g-3 mb-5" data-aos="fade-up" data-aos-delay="100">
         <div class="col-md-3 col-6">
            <div class="infra-feature-mini-card">
               <div class="icon-wrap color-1"><i class="ri-book-read-line"></i></div>
               <div>
                  <h5>Kids Library</h5>
                  <p>Picture books &amp; moral tales</p>
               </div>
            </div>
         </div>
         <div class="col-md-3 col-6">
            <div class="infra-feature-mini-card">
               <div class="icon-wrap color-2"><i class="ri-computer-line"></i></div>
               <div>
                  <h5>Smart Digital Lab</h5>
                  <p>Early computer literacy</p>
               </div>
            </div>
         </div>
         <div class="col-md-3 col-6">
            <div class="infra-feature-mini-card">
               <div class="icon-wrap color-3"><i class="ri-door-open-line"></i></div>
               <div>
                  <h5>Sunny Classrooms</h5>
                  <p>Ventilated &amp; colorful</p>
               </div>
            </div>
         </div>
         <div class="col-md-3 col-6">
            <div class="infra-feature-mini-card">
               <div class="icon-wrap color-4"><i class="ri-riding-line"></i></div>
               <div>
                  <h5>Play &amp; Activity Zone</h5>
                  <p>Slides, swings &amp; turf</p>
               </div>
            </div>
         </div>
      </div>

      @php
      $infrastructures = DB::table('infrastructures')->get();
      $globalIdx = 0;
      @endphp

      @foreach($infrastructures as $sectionIdx => $item)
         @php
         $infraImages = DB::table('infrastructure_images')->where('infrastructure_id', $item->id)->get();
         @endphp
         <div class="infra-block-wrap" data-aos="fade-up" data-aos-duration="800">
            <!-- Block Header Bar -->
            <div class="infra-block-header">
               <div class="infra-block-title-box">
                  <span class="infra-step-number">0{{ $sectionIdx + 1 }}</span>
                  <div>
                     <h3 class="infra-block-title">{{ $item->title }}</h3>
                     <span class="infra-block-tag"><i class="ri-check-double-line"></i> Playgroup to Primary (Class 1 to 5)</span>
                  </div>
               </div>
               @if(!empty($item->description))
               <p class="infra-block-desc">{!! nl2br(e($item->description)) !!}</p>
               @endif
            </div>

            <!-- Image Showcase Grid -->
            <div class="row g-4 infra-block-grid">
               @if($infraImages->count() > 0)
                  @foreach ($infraImages as $imgItem)
                     @php
                     $imgSrc = getInfraImg($imgItem->image, $globalIdx++);
                     @endphp
                     <div class="col-lg-3 col-md-6 col-12">
                        <div class="infra-photo-card">
                           <div class="infra-photo-frame">
                              <img src="{{ $imgSrc }}" alt="{{ $item->title }}" loading="lazy">
                              <div class="infra-photo-overlay">
                                 <span class="overlay-badge"><i class="ri-eye-line"></i> View</span>
                              </div>
                           </div>
                           <div class="infra-photo-caption">
                              <span class="caption-tag"><i class="ri-map-pin-2-fill"></i> Campus Facility</span>
                              <h5 class="caption-title">{{ $item->title }}</h5>
                           </div>
                        </div>
                     </div>
                  @endforeach
               @else
                  <!-- Default sample showcase if no images attached -->
                  @for($k = 0; $k < 4; $k++)
                     @php
                     $imgSrc = getInfraImg('', $globalIdx++);
                     @endphp
                     <div class="col-lg-3 col-md-6 col-12">
                        <div class="infra-photo-card">
                           <div class="infra-photo-frame">
                              <img src="{{ $imgSrc }}" alt="{{ $item->title }}" loading="lazy">
                              <div class="infra-photo-overlay">
                                 <span class="overlay-badge"><i class="ri-eye-line"></i> View</span>
                              </div>
                           </div>
                           <div class="infra-photo-caption">
                              <span class="caption-tag"><i class="ri-map-pin-2-fill"></i> Campus Facility</span>
                              <h5 class="caption-title">{{ $item->title }}</h5>
                           </div>
                        </div>
                     </div>
                  @endfor
               @endif
            </div>
         </div>
      @endforeach

      <!-- Bottom Inquire & Admission CTA -->
      <div class="infra-bottom-cta" data-aos="fade-up">
         <div class="row align-items-center">
            <div class="col-lg-8">
               <h4><i class="ri-compass-3-line text-warning"></i> Want to Experience Our Campus in Person?</h4>
               <p>We welcome parents and prospective young learners for guided campus tours Monday to Saturday (8:00 AM – 2:00 PM).</p>
            </div>
            <div class="col-lg-4 text-lg-end text-start mt-3 mt-lg-0">
               <a href="{{ url('admission-process') }}" class="btn btn-warning fw-bold px-4 py-2 me-2 text-dark shadow-sm">
                  <i class="ri-file-list-3-line"></i> Admission Info
               </a>
               <a href="{{ url('contact') }}" class="btn btn-outline-light fw-bold px-4 py-2">
                  <i class="ri-phone-line"></i> Schedule Visit
               </a>
            </div>
         </div>
      </div>

   </div>
</section>

<!-- Custom Styling for Infrastructure Page -->
<style>
.infra-showcase-section {
   padding: 60px 0 90px 0;
   background: #f4f6fa;
   font-family: 'Open Sans', sans-serif;
}

/* Hero Banner */
.infra-hero-banner {
   background: linear-gradient(135deg, #032274 0%, #0c36a0 60%, #1748bc 100%);
   border-radius: 20px;
   padding: 40px 45px;
   color: #ffffff;
   box-shadow: 0 15px 40px rgba(3, 34, 116, 0.15);
   margin-bottom: 30px;
   position: relative;
   overflow: hidden;
}

.infra-hero-banner::after {
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

.infra-hero-badge {
   display: flex;
   gap: 12px;
   flex-wrap: wrap;
   margin-bottom: 15px;
}

.badge-pill {
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

.session-badge {
   background: rgba(255, 255, 255, 0.2);
   color: #ffffff;
   border: 1px solid rgba(255, 255, 255, 0.3);
}

.age-badge {
   background: #ffd700;
   color: #032274;
}

.infra-hero-title {
   font-family: 'Playfair Display', Georgia, serif;
   font-size: 32px;
   font-weight: 800;
   color: #ffffff;
   margin-bottom: 12px;
   letter-spacing: 0.5px;
}

.infra-hero-desc {
   color: #e2e8f0;
   font-size: 16px;
   line-height: 1.6;
   max-width: 720px;
   margin-bottom: 0;
}

.infra-stat-pills {
   display: flex;
   flex-direction: column;
   gap: 10px;
   align-items: flex-end;
}

.stat-item {
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

.stat-item i {
   color: #ffd700;
   font-size: 16px;
}

/* Feature Mini Cards */
.infra-feature-mini-card {
   background: #ffffff;
   border: 1px solid #e2e8f0;
   border-radius: 14px;
   padding: 18px 20px;
   display: flex;
   align-items: center;
   gap: 15px;
   box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
   transition: transform 0.3s ease, box-shadow 0.3s ease;
   height: 100%;
}

.infra-feature-mini-card:hover {
   transform: translateY(-4px);
   box-shadow: 0 10px 25px rgba(3, 34, 116, 0.08);
   border-color: #032274;
}

.icon-wrap {
   width: 48px;
   height: 48px;
   border-radius: 12px;
   display: flex;
   align-items: center;
   justify-content: center;
   font-size: 24px;
   flex-shrink: 0;
}

.color-1 { background: #eef2ff; color: #4338ca; }
.color-2 { background: #fef3c7; color: #d97706; }
.color-3 { background: #dcfce7; color: #15803d; }
.color-4 { background: #fce7f3; color: #be185d; }

.infra-feature-mini-card h5 {
   font-size: 15px;
   font-weight: 700;
   margin-bottom: 2px;
   color: #0f172a;
}

.infra-feature-mini-card p {
   font-size: 12.5px;
   color: #64748b;
   margin-bottom: 0;
}

/* Block Wrapper */
.infra-block-wrap {
   background: #ffffff;
   border-radius: 18px;
   padding: 35px 35px 40px 35px;
   margin-bottom: 45px;
   box-shadow: 0 10px 35px rgba(0, 0, 0, 0.04);
   border: 1px solid #e2e8f0;
}

.infra-block-header {
   margin-bottom: 25px;
   padding-bottom: 20px;
   border-bottom: 2px solid #f1f5f9;
}

.infra-block-title-box {
   display: flex;
   align-items: center;
   gap: 16px;
   margin-bottom: 12px;
}

.infra-step-number {
   width: 46px;
   height: 46px;
   background: linear-gradient(135deg, #032274 0%, #0d38a5 100%);
   color: #ffd700;
   border-radius: 12px;
   font-family: 'Playfair Display', Georgia, serif;
   font-size: 20px;
   font-weight: 800;
   display: flex;
   align-items: center;
   justify-content: center;
   flex-shrink: 0;
   box-shadow: 0 4px 12px rgba(3, 34, 116, 0.2);
}

.infra-block-title {
   font-family: 'Playfair Display', Georgia, serif;
   font-size: 24px;
   font-weight: 700;
   color: #032274;
   margin-bottom: 3px;
}

.infra-block-tag {
   font-size: 13px;
   font-weight: 600;
   color: #059669;
   display: inline-flex;
   align-items: center;
   gap: 5px;
}

.infra-block-desc {
   color: #475569;
   font-size: 15px;
   line-height: 1.65;
   margin-bottom: 0;
   padding-left: 62px;
}

/* Photo Cards */
.infra-photo-card {
   background: #ffffff;
   border: 1px solid #e2e8f0;
   border-radius: 14px;
   overflow: hidden;
   box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04);
   transition: all 0.35s ease;
   display: flex;
   flex-direction: column;
   height: 100%;
}

.infra-photo-card:hover {
   transform: translateY(-7px);
   box-shadow: 0 14px 30px rgba(3, 34, 116, 0.12);
   border-color: #032274;
}

.infra-photo-frame {
   position: relative;
   width: 100%;
   height: 220px;
   overflow: hidden;
   background: #e2e8f0;
}

.infra-photo-frame img {
   width: 100%;
   height: 100%;
   object-fit: cover;
   transition: transform 0.6s ease;
}

.infra-photo-card:hover .infra-photo-frame img {
   transform: scale(1.08);
}

.infra-photo-overlay {
   position: absolute;
   top: 0;
   left: 0;
   right: 0;
   bottom: 0;
   background: rgba(3, 34, 116, 0.4);
   display: flex;
   align-items: center;
   justify-content: center;
   opacity: 0;
   transition: opacity 0.3s ease;
}

.infra-photo-card:hover .infra-photo-overlay {
   opacity: 1;
}

.overlay-badge {
   background: #ffffff;
   color: #032274;
   padding: 7px 18px;
   border-radius: 30px;
   font-size: 13px;
   font-weight: 700;
   box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

.infra-photo-caption {
   padding: 14px 16px;
   background: #ffffff;
}

.caption-tag {
   font-size: 11.5px;
   font-weight: 700;
   color: #64748b;
   text-transform: uppercase;
   letter-spacing: 0.4px;
   display: flex;
   align-items: center;
   gap: 4px;
   margin-bottom: 4px;
}

.caption-tag i {
   color: #032274;
}

.caption-title {
   font-size: 14.5px;
   font-weight: 700;
   color: #0f172a;
   margin-bottom: 0;
   white-space: nowrap;
   overflow: hidden;
   text-overflow: ellipsis;
}

/* Bottom CTA Banner */
.infra-bottom-cta {
   margin-top: 50px;
   padding: 35px 40px;
   background: linear-gradient(135deg, #032274 0%, #0a2d8a 100%);
   border-radius: 16px;
   color: #ffffff;
   box-shadow: 0 10px 30px rgba(3, 34, 116, 0.15);
}

.infra-bottom-cta h4 {
   color: #ffffff;
   font-size: 22px;
   font-weight: 700;
   margin-bottom: 8px;
   display: flex;
   align-items: center;
   gap: 10px;
}

.infra-bottom-cta p {
   color: #cbd5e1;
   margin-bottom: 0;
   font-size: 15px;
}

/* Responsive adjustments */
@media (max-width: 991px) {
   .infra-hero-banner { padding: 30px 25px; }
   .infra-stat-pills { align-items: flex-start; margin-top: 15px; }
   .infra-block-wrap { padding: 25px 20px; }
   .infra-block-desc { padding-left: 0; margin-top: 10px; }
}

@media (max-width: 767px) {
   .infra-hero-title { font-size: 24px; }
   .infra-block-title { font-size: 20px; }
   .infra-bottom-cta { padding: 25px 20px; }
   .infra-photo-frame { height: 200px; }
}
</style>

@include('front.footer')
@include('front.header')

@php
// Robust image resolver
if (!function_exists('getAchievementImg')) {
    function getAchievementImg($imgName, $fallbackIndex = 0) {
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
            '0-1791631301.jpg',
            '0-1791631445.jpg',
            '0-1791631591.jpg',
            '0-1791785567.jpg',
            '0-1791785767.jpg',
            '0-1791785889.jpg',
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
   <img class="page-banner" src="{{ asset('public/front') }}/images/banner_achievement.jpg" alt="Our Achievements">
   <div class="page-banner-content">
      <h1>Our Achievements</h1>
      <ul>
         <li><a href="{{ url('/') }}">Home</a></li>
         <li>Our Achievements</li>
      </ul>
   </div>
</div>

<!-- Main Achievement Showcase Section -->
<section class="achievements-showcase-area">
   <div class="container">
      
      <!-- Top Title Header -->
      <div class="achievements-top-intro text-center">
         <span class="achievements-tag-pill">
            <i class="ri-trophy-fill"></i> Honors &amp; Accolades
         </span>
         <h2 class="achievements-main-title">Celebrating Student Excellence</h2>
         <p class="achievements-subtitle">
            Glimpses of remarkable success, competitions, and outstanding achievements of our students
         </p>
         <div class="title-bottom-bar"></div>
      </div>

      @php
         $achievements = DB::table('achievements')->orderBy('id', 'desc')->get();
      @endphp

      @if($achievements->count() > 0)
      <div class="row g-4">
         @foreach($achievements as $index => $item)
         @php
            $itemImages = DB::table('achievement_images')->where('achievement_id', $item->id)->get();
         @endphp
         <div class="col-lg-4 col-md-6 col-12">
            <div class="achievement-showcase-card">
               
               <!-- Image / Carousel Container -->
               <div class="achievement-img-box">
                  <div class="achievement-trophy-badge">
                     <i class="ri-trophy-fill"></i>
                  </div>

                  @if($itemImages->count() > 1)
                     <!-- Slider for multi-images -->
                     <div class="achievement-card-carousel owl-carousel owl-theme">
                        @foreach($itemImages as $imgKey => $img)
                           <div class="carousel-img-item">
                              <img src="{{ getAchievementImg($img->image, $index + $imgKey) }}" alt="{{ $item->title ?? 'Achievement' }}" loading="lazy">
                           </div>
                        @endforeach
                     </div>
                     <span class="photo-count-badge">
                        <i class="ri-image-line"></i> {{ $itemImages->count() }} Photos
                     </span>
                  @elseif($itemImages->count() == 1)
                     <!-- Single Photo -->
                     <div class="single-img-item">
                        <img src="{{ getAchievementImg($itemImages[0]->image, $index) }}" alt="{{ $item->title ?? 'Achievement' }}" loading="lazy">
                     </div>
                  @else
                     <!-- School Award Placeholder -->
                     <div class="single-img-item">
                        <img src="{{ getAchievementImg(null, $index) }}" alt="{{ $item->title ?? 'Achievement' }}" loading="lazy">
                     </div>
                  @endif
               </div>

               <!-- Title & Details Box (Without Description) -->
               <div class="achievement-info-box">
                  <div class="achievement-label-row">
                     <span class="achievement-school-tag">
                        <i class="ri-school-line"></i> Saraswati Shishu Mandir
                     </span>
                     <span class="achievement-num-badge">#{{ $index + 1 }}</span>
                  </div>

                  <h3 class="achievement-title-text">{{ $item->title ?? '' }}</h3>

                  <div class="achievement-card-bottom-bar">
                     <span class="badge-pride">
                        <i class="ri-star-fill"></i> Proud Moment
                     </span>
                     <span class="school-honor-text">
                        <i class="ri-medal-fill"></i> Award Winner
                     </span>
                  </div>
               </div>

            </div>
         </div>
         @endforeach
      </div>
      @else
      <div class="empty-achievement-box text-center">
         <i class="ri-trophy-line empty-trophy-icon"></i>
         <h3>Achievements Will Be Updated Soon</h3>
         <p>Stay tuned for updates celebrating our talented students' milestones and victories.</p>
      </div>
      @endif

   </div>
</section>

<!-- Custom Styling for Achievements Showcase -->
<style>
.achievements-showcase-area {
   background: #f4f6fa;
   padding: 55px 0 90px 0;
   font-family: 'Open Sans', sans-serif;
}

/* Intro Section */
.achievements-top-intro {
   max-width: 760px;
   margin: 0 auto 45px auto;
}

.achievements-tag-pill {
   display: inline-flex;
   align-items: center;
   gap: 6px;
   background: #eef2ff;
   color: #032274;
   padding: 6px 18px;
   border-radius: 30px;
   font-size: 13px;
   font-weight: 700;
   text-transform: uppercase;
   letter-spacing: 0.5px;
   margin-bottom: 14px;
   border: 1px solid #c7d2fe;
}

.achievements-main-title {
   font-family: 'Playfair Display', Georgia, serif;
   font-size: 32px;
   font-weight: 800;
   color: #032274 !important;
   -webkit-text-fill-color: #032274 !important;
   background: none !important;
   margin-bottom: 12px;
}

.achievements-subtitle {
   font-size: 15.5px;
   color: #64748b;
   line-height: 1.6;
   margin-bottom: 18px;
}

.title-bottom-bar {
   width: 65px;
   height: 3px;
   background: linear-gradient(90deg, #032274, #ffd700);
   margin: 0 auto;
   border-radius: 3px;
}

/* Showcase Card */
.achievement-showcase-card {
   background: #ffffff;
   border-radius: 16px;
   overflow: hidden;
   border: 1px solid #e2e8f0;
   box-shadow: 0 8px 25px rgba(3, 34, 116, 0.06);
   transition: all 0.35s ease;
   display: flex;
   flex-direction: column;
   height: 100%;
}

.achievement-showcase-card:hover {
   transform: translateY(-8px);
   box-shadow: 0 18px 40px rgba(3, 34, 116, 0.12);
   border-color: #032274;
}

/* Image Container */
.achievement-img-box {
   position: relative;
   width: 100%;
   height: 250px;
   background: #0f172a;
   overflow: hidden;
}

.achievement-trophy-badge {
   position: absolute;
   top: 14px;
   left: 14px;
   width: 38px;
   height: 38px;
   background: linear-gradient(135deg, #032274 0%, #1e40af 100%);
   color: #ffd700;
   border-radius: 50%;
   display: flex;
   align-items: center;
   justify-content: center;
   font-size: 19px;
   z-index: 10;
   box-shadow: 0 4px 12px rgba(0,0,0,0.25);
   border: 2px solid #ffffff;
}

.photo-count-badge {
   position: absolute;
   bottom: 12px;
   right: 12px;
   background: rgba(15, 23, 42, 0.85);
   color: #ffffff;
   padding: 4px 10px;
   border-radius: 20px;
   font-size: 11.5px;
   font-weight: 600;
   z-index: 10;
   backdrop-filter: blur(4px);
   display: flex;
   align-items: center;
   gap: 4px;
}

.single-img-item,
.carousel-img-item {
   width: 100%;
   height: 250px;
   overflow: hidden;
}

.single-img-item img,
.carousel-img-item img {
   width: 100%;
   height: 100%;
   object-fit: cover;
   object-position: center;
   transition: transform 0.4s ease;
}

.achievement-showcase-card:hover .single-img-item img,
.achievement-showcase-card:hover .carousel-img-item img {
   transform: scale(1.06);
}

/* Owl Carousel inside card */
.achievement-card-carousel.owl-carousel .owl-nav {
   position: absolute;
   top: 50%;
   transform: translateY(-50%);
   width: 100%;
   display: flex;
   justify-content: space-between;
   padding: 0 8px;
   pointer-events: none;
   z-index: 5;
}

.achievement-card-carousel.owl-carousel .owl-nav button.owl-prev,
.achievement-card-carousel.owl-carousel .owl-nav button.owl-next {
   width: 30px;
   height: 30px;
   background: rgba(255, 255, 255, 0.9) !important;
   color: #032274 !important;
   border-radius: 50% !important;
   display: flex;
   align-items: center;
   justify-content: center;
   pointer-events: auto;
   box-shadow: 0 2px 6px rgba(0,0,0,0.2);
   transition: all 0.2s;
}

.achievement-card-carousel.owl-carousel .owl-nav button.owl-prev:hover,
.achievement-card-carousel.owl-carousel .owl-nav button.owl-next:hover {
   background: #032274 !important;
   color: #ffffff !important;
}

.achievement-card-carousel.owl-carousel .owl-dots {
   position: absolute;
   bottom: 8px;
   left: 0;
   right: 0;
   text-align: center;
   z-index: 5;
}

.achievement-card-carousel.owl-carousel .owl-dots .owl-dot span {
   width: 7px;
   height: 7px;
   background: rgba(255, 255, 255, 0.6) !important;
   margin: 0 3px;
   transition: all 0.3s;
}

.achievement-card-carousel.owl-carousel .owl-dots .owl-dot.active span {
   background: #ffd700 !important;
   width: 18px;
}

/* Card Info Box */
.achievement-info-box {
   padding: 22px 22px 20px 22px;
   display: flex;
   flex-direction: column;
   flex-grow: 1;
}

.achievement-label-row {
   display: flex;
   justify-content: space-between;
   align-items: center;
   margin-bottom: 10px;
}

.achievement-school-tag {
   font-size: 12.5px;
   color: #64748b;
   font-weight: 600;
   display: flex;
   align-items: center;
   gap: 4px;
}

.achievement-school-tag i {
   color: #032274;
}

.achievement-num-badge {
   background: #f1f5f9;
   color: #475569;
   font-size: 11px;
   font-weight: 700;
   padding: 2px 8px;
   border-radius: 12px;
}

.achievement-title-text {
   font-family: 'Playfair Display', Georgia, serif;
   font-size: 19px;
   font-weight: 700;
   color: #032274 !important;
   -webkit-text-fill-color: #032274 !important;
   background: none !important;
   line-height: 1.45;
   margin-bottom: 16px;
   flex-grow: 1;
   transition: color 0.2s;
}

.achievement-showcase-card:hover .achievement-title-text {
   color: #1e40af !important;
   -webkit-text-fill-color: #1e40af !important;
}

/* Bottom Bar */
.achievement-card-bottom-bar {
   display: flex;
   justify-content: space-between;
   align-items: center;
   padding-top: 14px;
   border-top: 1px solid #f1f5f9;
   margin-top: auto;
}

.badge-pride {
   background: #fef3c7;
   color: #b45309;
   font-size: 12px;
   font-weight: 700;
   padding: 3px 10px;
   border-radius: 12px;
   display: flex;
   align-items: center;
   gap: 4px;
}

.school-honor-text {
   font-size: 12px;
   color: #032274;
   font-weight: 700;
   display: flex;
   align-items: center;
   gap: 3px;
}

.school-honor-text i {
   color: #ffd700;
   font-size: 15px;
}

/* Empty State */
.empty-achievement-box {
   background: #ffffff;
   border-radius: 16px;
   padding: 60px 20px;
   border: 2px dashed #cbd5e1;
   color: #64748b;
}

.empty-trophy-icon {
   font-size: 50px;
   color: #032274;
   margin-bottom: 15px;
   display: inline-block;
}

/* Mobile Responsiveness */
@media (max-width: 768px) {
   .achievements-showcase-area {
      padding: 35px 0 60px 0;
   }
   .achievements-main-title {
      font-size: 24px;
   }
   .achievement-img-box,
   .single-img-item,
   .carousel-img-item {
      height: 220px;
   }
   .achievement-info-box {
      padding: 18px 16px;
   }
   .achievement-title-text {
      font-size: 17.5px;
   }
}
</style>

<!-- Carousel Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
   if (window.jQuery && jQuery().owlCarousel) {
      $('.achievement-card-carousel').owlCarousel({
         loop: true,
         margin: 0,
         nav: true,
         dots: true,
         items: 1,
         autoplay: true,
         autoplayTimeout: 3500,
         smartSpeed: 700,
         autoplayHoverPause: true,
         navText: ['<i class="ri-arrow-left-s-line"></i>', '<i class="ri-arrow-right-s-line"></i>']
      });
   }
});
</script>

@include('front.footer')
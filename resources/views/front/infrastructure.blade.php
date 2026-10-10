@include('front.header')
<div class="page-banner-area">
   <img class="page-banner" src="{{ asset('public/front') }}/images/breadcrumb-bg-image.jpg" alt="Courses">
   <div class="page-banner-content">
      <h1>{{ $infrastructures->title }}</h1>
      <ul>
         <li><a href="{{ url('/') }}">Home</a></li>
         <li>{{ $infrastructures->title }}</li>
      </ul>
   </div>
</div>
<style>
.infrastructure-sec-page {
    padding: 70px 0;
    background-color: #f9faff;
}
.infrastructure-text-box {
    background: #ffffff;
    padding: 40px 50px;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    border: 1px solid #eaeaea;
    margin-bottom: 40px;
}
.tittle-infrastructure {
    font-size: 32px;
    font-weight: 700;
    color: #032274;
    margin-bottom: 0;
    position: relative;
    padding-bottom: 15px;
}
.tittle-infrastructure::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 60px;
    height: 4px;
    background-color: #e32845;
    border-radius: 2px;
}
.infrastructure-card-box {
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    margin-bottom: 30px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: 1px solid #f1f1f1;
}
.infrastructure-card-box:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.12);
}
.infrastructure-image-box {
    height: 220px;
}
.infrastructure-image-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}
.infrastructure-card-box:hover .infrastructure-image-box img {
    transform: scale(1.08);
}
@media only screen and (max-width: 767px) {
    .infrastructure-text-box { padding: 25px 20px; }
    .tittle-infrastructure { font-size: 26px; }
}
</style>
<section class="infrastructure-sec-page">
   @php
   $infrastructure = DB::table('infrastructures')->get();
   @endphp     
   @foreach($infrastructure as $item)
   <div class="container mb-5" data-aos="fade-up" data-aos-duration="1000">
      <div class="row">
         <div class="col-lg-12">
            <div class="infrastructure-text-box">
               <h2 class="tittle-infrastructure">{{ $item->title }}</h2>
               <!--<p class="Infrastructure-paragraph">{{ $item->description }}</p>-->
            </div>
         </div>
      </div>
      <div class="row infrastructure-gallery">
        @php
        $infraImages = DB::table('infrastructure_images')->where('infrastructure_id', $item->id)->get();
        @endphp             
         @foreach ($infraImages as $item)
         <div class="col-lg-3">
            <div class="infrastructure-card-box page1">
               <div class="infrastructure-image-box">
                  <img  src="{{ url('/uploads/products/'.$item->image) }}" alt="Courses">
               </div>
            </div>
         </div>
         @endforeach 
      </div>
   </div>
   @endforeach
</section>
@include('front.footer')
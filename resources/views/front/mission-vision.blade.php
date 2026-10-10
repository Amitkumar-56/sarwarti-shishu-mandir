@include('front.header')
<div class="page-banner-area">
   <img class="page-banner" src="{{ asset('public/front') }}/images/breadcrumb-bg-image.jpg" alt="Courses">
   <div class="container">
      <div class="page-banner-content">
         <h1>Mission & Vision</h1>
         <ul>
            <li><a href="{{ url('/')}}">Home</a></li>
            <li>Mission & Vision</li>
         </ul>
      </div>
   </div>
</div>
<style>
.events-area {
    padding: 70px 0;
    background-color: #f9faff;
}
.mission-text-box, .vision-text-box {
    background: #ffffff;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    border: 1px solid #eaeaea;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.mission-text-box:hover, .vision-text-box:hover {
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
    transform: translateY(-5px);
}
.mission-text-box h2, .vision-text-box h2 {
    font-size: 30px;
    font-weight: 700;
    color: #032274;
    margin-bottom: 20px;
    position: relative;
    padding-bottom: 15px;
}
.mission-text-box h2::after, .vision-text-box h2::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 60px;
    height: 4px;
    background-color: #e32845;
    border-radius: 2px;
}
.mission-text-box p, .vision-text-box p {
    font-size: 16.5px;
    line-height: 1.8;
    color: #555;
    text-align: justify;
}
.vision-image-box img, .mission-image-box img {
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    width: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}
.vision-image-box, .mission-image-box {
    overflow: hidden;
    border-radius: 12px;
}
.vision-image-box:hover img, .mission-image-box:hover img {
    transform: scale(1.05);
}
.custom-row {
    margin-bottom: 50px;
    align-items: center;
}
</style>
<div class="events-area">
   @php
   $data = DB::table('visionmission')->first();
   @endphp 
   <div class="container">
      <div class="row custom-row" data-aos="fade-up" data-aos-duration="1000">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <div class="vision-image-box">
                <img src="{{ asset('public/admin/images').'/'.$data->image_vision ?? '' }}" alt="Vision" onerror="this.src='{{ asset('public/front/images/dummy-image.jpg') }}'">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mission-text-box">
               <h2>{{$data->title_vision ?? '' }}</h2>
               <p>{!! $data->description_vision ?? '' !!}</p>
            </div>
        </div>        
      </div>
      <div class="row custom-row" data-aos="fade-up" data-aos-duration="1000">
        <div class="col-lg-6 order-2 order-lg-1">
            <div class="vision-text-box">
               <h2>{{$data->title_mission ?? '' }}</h2>
               <p>{!! $data->description_mission ?? '' !!}</p>
            </div>
        </div>           
        <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
            <div class="mission-image-box">
                <img src="{{ asset('public/admin/images').'/'.$data->image_mission ?? '' }}" alt="Mission" onerror="this.src='{{ asset('public/front/images/dummy-image.jpg') }}'">
            </div>
        </div>
      </div>      
   </div>
</div>
@include('front.footer')
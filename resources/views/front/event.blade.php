@include('front.header')
<div class="page-banner-area">
   <img class="page-banner" src="{{ asset('public/front') }}/images/breadcrumb-bg-image.jpg" alt="Courses">
   <div class="container">
      <div class="page-banner-content">
         <h1>Events List</h1>
         <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li>Events List</li>
         </ul>
      </div>
   </div>
</div>
<style>
.events-area {
    padding: 70px 0;
    background-color: #f9faff;
}
.our-event-box {
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    margin-bottom: 30px;
    overflow: hidden;
    transition: all 0.3s ease-in-out;
    border: 1px solid #f1f1f1;
    display: flex;
    flex-direction: column;
    height: calc(100% - 30px);
}
.our-event-box:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
}
.event-activities-box {
    position: relative;
    overflow: hidden;
    width: 100%;
    height: 250px; /* Fixed uniform height */
}
.event-activities-box img {
    width: 100% !important;
    height: 100% !important;
    object-fit: cover;
    transition: transform 0.5s ease;
}
.our-event-box:hover .event-activities-box img {
    transform: scale(1.08);
}
.activities-names {
    padding: 22px 25px;
    text-align: center;
    background-color: #fff;
    flex-grow: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    border-top: 4px solid #e32845;
}
.activities-names a.d_name {
    font-family: 'Poppins', sans-serif !important;
    font-size: 20px;
    font-weight: 700;
    color: #032274;
    text-decoration: none;
    transition: color 0.3s;
    line-height: 1.4;
}
.activities-names a.d_name:hover {
    color: #e32845;
}
/* Adjust owl-carousel internal elements to look cleaner */
.event-image-slider2 .owl-nav {
    display: none !important; 
}
.event-image-slider2 .owl-dots {
    position: absolute;
    bottom: 10px;
    width: 100%;
    text-align: center;
}
.event-image-slider2 .owl-dot span {
    background: rgba(255,255,255,0.7) !important;
    width: 10px !important;
    height: 10px !important;
}
.event-image-slider2 .owl-dot.active span {
    background: #e32845 !important;
    width: 12px !important;
    height: 12px !important;
}
</style>
<div class="events-area">
    @php
    $event = DB::table('events')->get(); 
    $eventIds = $event->pluck('id')->toArray();
    // Fetch all images for these events in ONE query instead of N queries
    $allEvtImages = DB::table('event_images')->whereIn('event_id', $eventIds)->get()->groupBy('event_id');
    @endphp     
   <div class="container">
      <div class="section-title text-center mb-5">
         <span class="sub-title" style="color: #e32845; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Our Gallery</span>
         <h2 style="font-size: 35px; font-weight: 700; color: #032274;">Latest Events & Activities</h2>
      </div>
      <div class="row">
         @foreach ($event as $itm)
         <div class="col-lg-4 col-md-6 col-sm-12 mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
            <div class="our-event-box">
               <div class="event-image-slider2 owl-carousel owl-theme">
                  @php
                  // Get images for this specific event from the pre-fetched collection
                  $evtImages = $allEvtImages->get($itm->id, collect([]));
                  @endphp     
                  @foreach($evtImages as $item)
                  <div class="slider-item">
                     <div class="event-activities-box">
                        <img src="{{ url('/').'/'.$item->image ?? '' }}" loading="lazy" onerror="this.src='{{ asset('public/front/images/dummy-image.jpg') }}'">
                     </div>
                  </div>
                  @endforeach
               </div>
               <div class="activities-names">
                  <a class="d_name" href="{{url('event-details/'.$itm->slug ??'')}}">{{ $itm->title ?? '' }}</a>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>
@include('front.footer')
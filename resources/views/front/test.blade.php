@include('front.header')
<div class="page-banner-area">
   <img class="page-banner" src="{{ asset('public/front') }}/images/PPGallery.png" alt="Courses">
   <div class="container">
      <div class="page-banner-content">
         <h1>Events List</h1>
         <ul>
            <li><a href="index.php">Home</a></li>
            <li>Events List</li>
         </ul>
      </div>
   </div>
</div>
<div class="events-area">
   <div class="container-fluid">
      <div class="row">
         @foreach($event_gallery as $item)
         <div class="col-lg-4 aos-init aos-animate" data-aos="fade-right">
            <div class="our-event-box">
               <div class="event-image-slider2 owl-carousel owl-theme">
                  @foreach($item['images'] as $itemdata)
                  <div class="slider-item">
                     <div class="event-activities-box">
                        <img src="{{ asset('public/admin/images').'/'.$itemdata ?? '' }}" class="main-logo" lt="{{$itemdata}}">
                     </div>
                  </div>
                  @endforeach
               </div>
               <div class="activities-names">
                  <a style="font-family: serif;" class="d_name" href="">{{$item['event_title'] ?? '' }}</a>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>
@include('front.footer')
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
<div class="events-area">
    @php
    $event =DB::table('events')->get(); 
    @endphp     
   <div class="container-fluid">
      <div class="row">
         @foreach ($event as $itm)
         <div class="col-lg-4 aos-init aos-animate" data-aos="fade-right">
            <div class="our-event-box">
               <div class="event-image-slider2 owl-carousel owl-theme">
                  @php
                  $evtImages = DB::table('event_images')->where('event_id', $itm->id)->get();
                  @endphp     
                  @foreach($evtImages as $item)
                  <div class="slider-item">
                     <div class="event-activities-box">
                        <img src="{{ url('/').'/'.$item->image ?? '' }}">
                     </div>
                  </div>
                  @endforeach
               </div>
               <div class="activities-names">
                  <a style="font-family: serif;" class="d_name" href="{{url('event-details/'.$itm->slug ??'')}}">{{ $itm->title ?? '' }}</a>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>
@include('front.footer')
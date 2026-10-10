@include('front.header')
<div class="page-banner-area">
   <img class="page-banner" src="{{ asset('public/front') }}/images/breadcrumb-bg-image.jpg" alt="Courses">
   <div class="page-banner-content">
      <h1>{{ $event->title }}</h1>
      <ul>
         <li><a href="index.php">Home</a></li>
         <li>{{ $event->title }}</li>
      </ul>
   </div>
</div>
<div class="Social-Activities-page-sec">
   <div class="container">
      <div class="row">
         <div class="social-activities">
            <h2 class="social-tittle">{{ $event->title }}</h2>
            <p>{!! $event->description ?? '' !!}</p>
         </div>
      </div>
      <div class="row">
         @php
         $evtImages = DB::table('event_images')->where('event_id', $event->id)->get();
         @endphp     
         @foreach($evtImages as $item)
         <div class="col-lg-3">
            <div class="event-activities-box">
               <img  src="{{ url('/').'/'.$item->image ?? '' }}" alt="Courses">
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>
@include('front.footer')
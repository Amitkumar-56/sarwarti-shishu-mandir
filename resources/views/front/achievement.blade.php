@include('front.header')
<div class="page-banner-area">
   <img class="page-banner" src="{{ asset('public/front') }}/images/breadcrumb-bg-image.jpg" alt="Courses">
   <div class="page-banner-content">
      <h1>Our Achievments</h1>
      <ul>
         <li><a href="{{ url('/') }}">Home</a></li>
         <li>Our Achievments</li>
      </ul>
   </div>
</div>
<section class="inner-page-content-area achievements-page">
   <div class="container">
       @php
       $achievement = DB::table('achievements')->get();
       @endphp     
       @foreach($achievement as $item)       
       <div class="row">
         <div class="col-lg-6 col-md-6 col-sm-12 imgs">
            <div class="page-image-box">
               <div class="achievmentSlide owl-carousel owl-theme">
                  @php
                  $achievtImages = DB::table('achievement_images')->where('achievement_id', $item->id)->get();
                  @endphp             
                  @foreach ($achievtImages as $items)                   
                  <div class="achievItem">
                     <img  src="{{ url('/uploads/products/'.$items->image) }}" alt="Courses">
                  </div>
                  @endforeach 
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 txts">
            <div class="page-content-box">
               <h2> {{$item->title ?? '' }} </h2>
               <p>{!! $item->description ?? '' !!}</p>
            </div>
         </div>
      </div>
       @endforeach
   </div>
</section>
@include('front.footer')
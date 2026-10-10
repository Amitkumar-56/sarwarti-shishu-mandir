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
<div class="events-area">
   @php
   $data = DB::table('visionmission')->first();
   @endphp 
   <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="vision-image-box">
                <img src="{{ asset('public/admin/images').'/'.$data->image_vision ?? '' }}" alt="" >
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mission-text-box">
               <h2>{{$data->title_vision ?? '' }}</h2>
               <p>{!! $data->description_vision ?? '' !!}</p>
               
            </div>
        </div>        
      </div>
      <div class="row">
        <div class="col-lg-6">
            <div class="vision-text-box">
               <h2>{{$data->title_mission ?? '' }}</h2>
               <p>{!! $data->description_mission ?? '' !!}</p>
            </div>
        </div>           
        <div class="col-lg-6">
            <div class="mission-image-box">
                <img src="{{ asset('public/admin/images').'/'.$data->image_mission ?? '' }}" alt="">
            </div>
           
        </div>
       
      </div>      
   </div>
</div>
@include('front.footer')
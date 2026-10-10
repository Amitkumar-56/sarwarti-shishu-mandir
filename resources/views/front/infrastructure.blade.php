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
<section class="infrastructure-sec-page">
   @php
   $infrastructure = DB::table('infrastructures')->get();
   @endphp     
   @foreach($infrastructure as $item)
   <div class="container">
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
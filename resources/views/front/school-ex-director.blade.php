@include('front.header')
@php
$exdirector = DB::table('exdirectors')->get()
@endphp 
<div class="page-banner-area">
   <img class="page-banner" src="{{ asset('public/front') }}/images/breadcrumb-bg-image.jpg" alt="Courses">
   <div class="page-banner-content">
      <h1>School Ex-Directors & Patrons</h1>
      <ul>
         <li><a href="{{ url('/') }}">Home</a></li>
         <li>School Ex-Directors & Patrons</li>
      </ul>
   </div>
</div>
<section class="ex-director-sec">
   <div class="container-fluid">
      <div class="row">
         @foreach($exdirector as $item) 
         <div class="col-lg-4">
            <div class="ex-director-text-image-box">
               <div class="ex-director-image">
                  <img class="aos-init aos-animate"  data-aos="fade-up" src="{{ url('public/uploads/images/'.$item->image  ?? '')}}" alt="Ex-Director">
               </div>
               <div class="ex-director-message">
                  <h2 class="ex-director-tittle">{{ $item->title ?? '' }}</h2>
                  <p class="ex-paragraph">{!! $item->description ?? '' !!}</p>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</section>
@include('front.footer')
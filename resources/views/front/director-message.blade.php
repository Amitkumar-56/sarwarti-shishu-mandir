@include('front.header')
<div class="page-banner-area">
   @php
   $message = DB::table('directormessages')->first();
   @endphp      
   <img class="page-banner" src="{{ asset('public/front') }}/images/breadcrumb-bg-image.jpg" alt="">
   <div class="page-banner-content">
      <h1>Director's Message</h1>
      <ul>
         <li><a href="{{ url('/') }}">Home</a></li>
         <li>{{ $message->title ?? '' }}</li>
      </ul>
   </div>
</div>
<section class="about-history-area">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-9 col-sm-12 ">
            <div class="director-message-text-box">
               <img src="{{ asset('public/admin/images').'/'.$message->image ?? '' }}"  alt="Director">
               <h2 class="message-tittle-sub">{{ $message->title ?? '' }}</h2>
               <p>{!! $message->description ?? '' !!}</p>
            </div>
         </div>
      </div>
   </div>
</section>
@include('front.footer')
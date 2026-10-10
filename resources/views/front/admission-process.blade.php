@include('front.header')
@php
$apdata = DB::table('admissionprocesses')->first();
@endphp
<div class="page-banner-area">
   <img class="page-banner" src="{{ asset('public/front') }}/images/breadcrumb-bg-image.jpg" alt="Courses">
   <div class="page-banner-content">
      <h1>{{ $apdata->title ?? '' }}</h1>
      <ul>
         <li><a href="{{ url('/') }}">Home</a></li>
         <li>{{ $apdata->title ?? '' }}</li>
      </ul>
   </div>
</div>
<section class="page-admission-process-area">
   <div class="container">
      <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="admission-process-text-box">
                <h1>{{ $apdata->title ?? '' }}</h1>
                {!! $apdata->description ?? '' !!}
            </div>
         </div>
      </div>
   </div>
</section>
@include('front.footer')
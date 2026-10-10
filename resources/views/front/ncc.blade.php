@include('front.header')
<div class="page-banner-area">
   <img class="page-banner" src="{{ asset('public/front') }}/images/breadcrumb-bg-image.jpg" alt="Courses">
   <div class="page-banner-content">
      <h1>NCC</h1>
      <ul>
         <li><a href="{{ url('/') }}">Home</a></li>
         <li>NCC</li>
      </ul>
   </div>
</div>
<section class="page-admission-process-area">
   <div class="container">
      <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="admission-process-text-box">
                <h1 class="ncc-tittle">{{ $ncc->title ?? '' }}</h1>
                {!! $ncc->description ?? '' !!}
            </div>
         </div>
      </div>
      <div class="row">
          @foreach($nccgalleries as $item)
          <div class="col-lg-3">
              <div class="ncc-card-image page1">
                  <div class="ncc-image">
                      <img src="{{ url('public/uploads/images/'.$item->image  ?? '')}}" alt="Courses">
                      <h1 class="ncc-image-title">{{ $item->title ?? '' }}</h1>
                      <p class="ncc-paragraph-image">{!! $item->description ?? '' !!}</p>
                  </div>
              </div>
          </div>
          @endforeach

      </div>
   </div>
</section>
@include('front.footer')
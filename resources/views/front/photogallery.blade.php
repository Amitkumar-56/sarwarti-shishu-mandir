@include('front.header')
<div class="page-banner-area">
   <img class="page-banner" src="{{ asset('public/front') }}/images/banner_gallery.jpg" alt="Photos Gallery">
   <div class="page-banner-content">
      <h1>Photos Gallery</h1>
      <ul>
         <li><a href="{{ url('/') }}">Home</a></li>
         <li>Photos Gallery</li>
      </ul>
   </div>
</div>
@php
$gallery = DB::table('gallery')->get();
@endphp
<div class="photos-gallery-area pt-100 pb-70">
   <div class="container-fluid">
      <div class="row">
         @foreach ($gallery as $item)
         <div class="col-lg-3 ">
            <div class="photos-gallery-box page1">
               <div class="photos-gallery-pics-box">
                  <img src="{{ asset('public/admin/images').'/'.$item->thumbnail ?? '' }}" alt="Photo Gallery">
                  <a class="zoom-anchor" data-fslightbox="gallery_1" data-type="image" href="{{ asset('public/admin/images').'/'.$item->thumbnail ?? '' }}" class="btn_1 outline">
                        </a>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>
@include('front.footer')
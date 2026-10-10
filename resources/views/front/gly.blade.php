            @include('front.header')
<section class="gallery-page">
   <div class="container-fluid">
      <div class="isotope-wrapper">
         <div class="row">            
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="light-gallery-box">
                        <img src="{{ asset('public/front') }}/images/gallery13.jpg">
                        <a class="zoom-anchor" data-fslightbox="gallery_1" data-type="image" href="{{ asset('public/front') }}/images/gallery13.jpg" class="btn_1 outline">
                        </a>
                    </div>
                </div> 
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="light-gallery-box">
                        <img src="{{ asset('public/front') }}/images/gallery14.jpg">
                        <a class="zoom-anchor" data-fslightbox="gallery_1" data-type="image" href="{{ asset('public/front') }}/images/gallery14.jpg" class="btn_1 outline">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="light-gallery-box">
                        <img src="{{ asset('public/front') }}/images/gallery15.jpg">
                        <a class="zoom-anchor" data-fslightbox="gallery_1" data-type="image" href="{{ asset('public/front') }}/images/gallery15.jpg" class="btn_1 outline">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="light-gallery-box">
                        <img src="{{ asset('public/front') }}/images/gallery15.jpg">
                        <a class="zoom-anchor" data-fslightbox="gallery_1" data-type="image" href="{{ asset('public/front') }}/images/gallery15.jpg" class="btn_1 outline">
                        </a>
                    </div>
                </div>
        </div>
    </div>
</div>  
</section>
            @include('front.footer')
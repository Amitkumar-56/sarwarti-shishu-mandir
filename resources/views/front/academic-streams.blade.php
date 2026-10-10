@include('front.header')
<div class="page-banner-area">
   <img class="page-banner" src="{{ asset('public/front') }}/images/breadcrumb-bg-image.jpg" alt="Courses">
   <div class="page-banner-content">
      <h1>Academic Streams</h1>
      <ul>
         <li><a href="{{ url('/') }}">Home</a></li>
         <li>Academic Streams</li>
      </ul>
   </div>
</div>
<section class="inner-page-content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="page-content-box">
                   
                </div>
            </div>
        </div>
    </div>    
</section>

@include('front.footer')
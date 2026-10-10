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
<style>
.about-history-area {
    padding: 70px 0;
    background-color: #f9faff;
}
.director-message-text-box {
    background: #ffffff;
    padding: 45px 50px;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    border: 1px solid #eaeaea;
    transition: all 0.3s ease;
}
.director-message-text-box:hover {
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
}
.director-message-text-box img {
    float: left;
    margin-right: 30px;
    margin-bottom: 20px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    max-width: 300px;
    border: 3px solid #fff;
}
.director-message-text-box h2 {
    font-size: 32px;
    font-weight: 700;
    color: #032274;
    margin-bottom: 25px;
    position: relative;
    padding-bottom: 15px;
    margin-top: 0;
}
.director-message-text-box h2::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 60px;
    height: 4px;
    background-color: #e32845;
    border-radius: 2px;
}
.director-message-text-box p {
    font-size: 16.5px;
    line-height: 1.9;
    color: #555;
    text-align: justify;
}
@media only screen and (max-width: 767px) {
    .director-message-text-box { padding: 25px 20px; }
    .director-message-text-box img { float: none; margin: 0 auto 20px auto; display: block; max-width: 100%; }
}
</style>
<section class="about-history-area">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-12 col-md-12 col-sm-12 ">
            <div class="director-message-text-box aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
               <img src="{{ asset('public/admin/images').'/'.$message->image ?? '' }}"  alt="Director" onerror="this.src='{{ asset('public/front/images/user-dummy.png') }}'">
               <h2 class="message-tittle-sub">{{ $message->title ?? '' }}</h2>
               <p>{!! $message->description ?? '' !!}</p>
               <div style="clear: both;"></div>
            </div>
         </div>
      </div>
   </div>
</section>
@include('front.footer')
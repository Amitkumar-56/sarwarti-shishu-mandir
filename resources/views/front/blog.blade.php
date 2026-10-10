@include('front.header')
<div class="page-banner-area">
     <img class="page-banner" src="{{ asset('public/front') }}/images/breadcrumb-bg-image.jpg" alt="Courses">
   <div class="container">
      <div class="page-banner-content">
         <h1>Blogs</h1>
         <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>Blogs List</li>
         </ul>
      </div>
   </div>
</div>
@php
$blog = DB::table('blog')->get();
@endphp
<div class="events-area pt-100 pb-70">
   <div class="container">
      <div class="row justify-content-center">
          @foreach($blog as $item)
         <div class="col-lg-4 aos-init aos-animate" data-aos="fade-right">
            <div class="single-events-card style-4">
               <div class="events-image">
                  <a href="{{ url('blog-details'.'/'.$item->slug ) }}"><img src="{{ asset('public/admin/images').'/'.$item->image ?? '' }}" alt="Image"></a>
               </div>
               <div class="events-content">
                  <a href="{{ url('blog-details'.'/'.$item->slug ) }}">
                     <h3>{{$item->title ?? '' }}</h3>
                  </a>
               </div>
            </div>
         </div>
         @endforeach
         <!--<div class="col-lg-3 aos-init aos-animate" data-aos="fade-down">-->
         <!--   <div class="single-events-card style-4">-->
         <!--      <div class="events-image">-->
         <!--         <a href="blog-details.php"><img src="assets/images/event-pics2.jpeg" alt="Image"></a>-->
         <!--      </div>-->
         <!--      <div class="events-content">-->
         <!--         <a href="blog-details.php">-->
         <!--            <h3>ALUMNI MEET -2020 at Janhit College of Law, Greater Noida</h3>-->
         <!--         </a>-->
         <!--      </div>-->
         <!--   </div>-->
         <!--</div>-->
         <!--<div class="col-lg-3 aos-init aos-animate" data-aos="fade-left">-->
         <!--   <div class="single-events-card style-4">-->
         <!--      <div class="events-image">-->
         <!--         <a href="blog-details.php"><img src="assets/images/event-pics1.jpeg" alt="Image"></a>-->
         <!--      </div>-->
         <!--      <div class="events-content">-->
         <!--         <a href="blog-details.php">-->
         <!--            <h3>ALUMNI MEET -2020 at Janhit Institute of Education & Information, Greater Noida</h3>-->
         <!--         </a>-->
         <!--      </div>-->
         <!--   </div>-->
         <!--</div>-->
         <!--<div class="col-lg-3 aos-init aos-animate" data-aos="fade-right">-->
         <!--   <div class="single-events-card style-4">-->
         <!--      <div class="events-image">-->
         <!--         <a href="blog-details.php"><img src="assets/images/event-pics1.jpeg" alt="Image"></a>-->
         <!--      </div>-->
         <!--      <div class="events-content">-->
         <!--         <a href="blog-details.php">-->
         <!--            <h3>ALUMNI MEET -2020 at Janhit Institute of Education & Information, Greater Noida</h3>-->
         <!--         </a>-->
         <!--      </div>-->
         <!--   </div>-->
         <!--</div>-->
      </div>
   </div>
</div>
@include('front.footer')
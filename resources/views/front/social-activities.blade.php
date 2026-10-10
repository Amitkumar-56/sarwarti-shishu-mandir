@include('front.header')
<div class="page-banner-area">
   <img class="page-banner" src="{{ asset('public/front') }}/images/breadcrumb-bg-image.jpg" alt="Courses">
   <div class="page-banner-content">
      <h1>{{ $socialactivities->title }}</h1>
      <ul>
         <li><a href="index.php">Home</a></li>
         <li>{{ $socialactivities->title }}</li>
      </ul>
   </div>
</div>
<div class="Social-Activities-page-sec">
   <div class="container">
      <div class="row">
         <div class="social-activities">
            <h2 class="social-tittle">{{ $socialactivities->title }}</h2>
            <p>{{ $socialactivities->description }}</p>
         </div>
      </div>
      <div class="row">
         @foreach ($socialactivitiesImages as $socialImg)
         <div class="col-lg-4">
            <div class="infrastructure-card-box page1">
               <div class="infrastructure-image-box">
                  <img src="{{ url('/uploads/products/'.$socialImg->image) }}" alt="Img" />
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>
@include('front.footer')
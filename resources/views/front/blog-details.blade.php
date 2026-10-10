@include('front.header')
<div class="page-banner-area">
   <img class="page-banner" src="{{ asset('public/front') }}/images/breadcrumb-bg-image.jpg" alt="Courses">
   <div class="container">
      <div class="page-banner-content">
         <h1>Blogs Details</h1>
         <ul>
            <li><a href="index.html">Home</a></li>
            <li>Blogs Details</li>
         </ul>
      </div>
   </div>
</div>
<div class="events-details-area pt-100 ">
   <div class="container">
      <div class="row">
         <div class="col-lg-8">
            <div class="events-details-left-content pr-20">
               <div class="events-image event-details-image">
                  <img src="{{ asset('public/admin/images').'/'.$blogdetails->image ?? '' }}" alt="Image">
               </div>
               <div class="meetings details-text">
                  <h2>{{$blogdetails->title ?? '' }}</h2>
                  <?= $blogdetails->description ?? ''  ?>
               </div>
            </div>
         </div>
         @php
         $blog = DB::table('blog')->get();
         @endphp
         <div class="col-lg-4">
            @foreach($blog as $item)
            <div class="right-events-list">
               <div class="right-events-box">
                  <img src="{{ asset('public/admin/images').'/'.$item->image ?? '' }}" alt="Image">
               </div>
               <div class="tittle-details">
                  <h4><a href="#">{{$item->title ?? ''}}</a></h4>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>
</div>
@include('front.footer')
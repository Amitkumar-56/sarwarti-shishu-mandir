@include('front.header')
<div class="page-banner-area">
   <img class="page-banner" src="{{ asset('public/front') }}/images/breadcrumb-bg-image.jpg" alt="Courses">
   <div class="page-banner-content">
      <h1>Patrika</h1>
      <ul>
         <li><a href="index.php">Home</a></li>
         <li>Patrika</li>
      </ul>
   </div>
</div>
<div class="Patrika-page-sec">
    @php
    $patrika =DB::table('patrika')->get();
    @endphp     
   <div class="container">
     <div class="row">
         @foreach($patrika as $item)
         <div class="col-lg-4 col-md-9">
             <div class="patrika-card-box">
                 <div class="patrika-img">
                     <img  src="{{ asset('public/admin/images').'/'.$item->thumbnail ?? '' }}" alt="patrika">
                 </div>
                 <div class="patrika-tittle">
                      <a download target="_blank" href="{{ asset('public/admin/images').'/'.$item->pdf_file ?? '' }}" class="patrika-link">{{ $item->title }}</a>
                      <p class="patrika-date">{{ $item->patrika_date }}</p>
                 </div>
             </div>
         </div>
         @endforeach
     </div>
   </div>
</div>
@include('front.footer')
@include('front.header')

<div class="page-banner-area">
        <img class="page-banner" src="{{ asset('public/front') }}/images/breadcrumb-bg-image.jpg" alt="Courses">
         <div class="page-banner-content">
            <h1>Students</h1>
            <ul>
               <li><a href="index.php">Home</a></li>
               <li>Student</li>
            </ul>
         </div>
      </div>      
      @php
        $student = DB::table('student')->get();
      @endphp
      <div class="students-area">
         <div class="container-fluid">
            <div class="row">
            @foreach ($student as $item)
                 <div class="col-lg-3">
                  <div class="student-detail-box">
                     <img class="page-banner" src="{{ asset('public/admin/images').'/'.$item->thumbnail ?? '' }}" alt="Courses">
                     <h4>{{ $item->name ?? ''  }}</h4>
                  </div>
               </div>
            @endforeach
              
                              
            </div>
         </div>
      </div>
@include('front.footer')
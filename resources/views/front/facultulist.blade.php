@include('front.header')
<div class="page-banner-area">
   <img class="page-banner" src="{{ asset('public/front') }}/images/breadcrumb-bg-image.jpg" alt="Courses">
   <div class="page-banner-content">
      <h1>Faculty</h1>
      <ul>
         <li><a href="{{ url('/') }}">Home</a></li>
         <li>Faculty</li>
      </ul>
   </div>
</div>
<section class="faculty-area facility-sec-page">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 aos-init aos-animate" data-aos="fade-right">
            <div class="faculty-detail-box table-responsive">
               <table class="table table-striped table-bordered">
                  <thead>
                     <tr>
                        <th>S. No.</th>
                        <th>Name</th>
                        <th>Designation</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>1.</td>
                        <td>PANKAJ KUMAR</td>
                        <td>PRINCIPAL</td>
                     </tr>
                     <tr>
                        <td>2.</td>
                        <td>PRIYANKA SHARMA</td>
                        <td>VICE- PRINCIPAL</td>
                     </tr>                      
                     @php
                     $faculty =DB::table('faculties')->where('faculty_id','1')->get();
                     @endphp 
                     @foreach($faculty as $key=>$item)
                     <tr>
                        <td>{{ $key+1 ?? '' }}</td>
                        <td>{{ $item->name ?? '' }}</td>
                        <td>PRINCIPAL</td>
                     </tr>
                     @endforeach
                     <tr>
                        <td style="background-color:#7b4d9d; color:#fff;font-size:17px; font-weight:600;" class="text-center" colspan="3">Hindi</td>
                     </tr> 
                     @php
                     $faculty =DB::table('faculties')->where('faculty_id','1')->get();
                     @endphp 
                     @foreach($faculty as $key=>$item)
                     <tr>
                        <td>{{ $key+1 ?? '' }}</td>
                        <td>{{ $item->name ?? '' }}</td>
                        <td>PRINCIPAL</td>
                     </tr>
                     @endforeach  
                     <tr>
                        <td style="background-color:#7b4d9d; color:#fff;font-size:17px; font-weight:600;" class="text-center" colspan="3">ENGLISH</td>
                     </tr> 
                     @php
                     $faculty =DB::table('faculties')->where('faculty_id','3')->get();
                     @endphp 
                     @foreach($faculty as $key=>$item)
                     <tr>
                        <td>{{ $key+1 ?? '' }}</td>
                        <td>{{ $item->name ?? '' }}</td>
                        <td>PRINCIPAL</td>
                     </tr>
                     @endforeach  
                     <tr>
                        <td style="background-color:#7b4d9d; color:#fff;font-size:17px; font-weight:600;" class="text-center" colspan="3">MATHS</td>
                     </tr> 
                     @php
                     $faculty =DB::table('faculties')->where('faculty_id','4')->get();
                     @endphp 
                     @foreach($faculty as $key=>$item)
                     <tr>
                        <td>{{ $key+1 ?? '' }}</td>
                        <td>{{ $item->name ?? '' }}</td>
                        <td>PRINCIPAL</td>
                     </tr>
                     @endforeach  
                     <tr>
                        <td style="background-color:#7b4d9d; color:#fff;font-size:17px; font-weight:600;" class="text-center" colspan="3">SCIENCE</td>
                     </tr> 
                     @php
                     $faculty =DB::table('faculties')->where('faculty_id','5')->get();
                     @endphp 
                     @foreach($faculty as $key=>$item)
                        <td>{{ $key+1 ?? '' }}</td>
                        <td>{{ $item->name ?? '' }}</td>
                        <td>PRINCIPAL</td>
                     </tr>
                     @endforeach  
                     <tr>
                        <td style="background-color:#7b4d9d; color:#fff;font-size:17px; font-weight:600;" class="text-center" colspan="3">COMMERCE</td>
                     </tr> 
                     @php
                     $faculty =DB::table('faculties')->where('faculty_id','6')->get();
                     @endphp 
                     @foreach($faculty as $key=>$item)
                     <tr>
                        <td>{{ $key+1 ?? '' }}</td>
                        <td>{{ $item->name ?? '' }}</td>
                        <td>PRINCIPAL</td>
                     </tr>
                     @endforeach     
                     <tr>
                        <td style="background-color:#7b4d9d; color:#fff;font-size:17px; font-weight:600;" class="text-center" colspan="3">SOCIAL SCIENCE</td>
                     </tr> 
                     @php
                     $faculty =DB::table('faculties')->where('faculty_id','7')->get();
                     @endphp 
                     @foreach($faculty as $key=>$item)
                     <tr>
                        <td>{{ $key+1 ?? '' }}</td>
                        <td>{{ $item->name ?? '' }}</td>
                        <td>PRINCIPAL</td>
                     </tr>
                     @endforeach 
                     <tr>
                        <td style="background-color:#7b4d9d; color:#fff;font-size:17px; font-weight:600;" class="text-center" colspan="3">PHYSICAL EDUCATION</td>
                     </tr> 
                     @php
                     $faculty =DB::table('faculties')->where('faculty_id','8')->get();
                     @endphp 
                     @foreach($faculty as $key=>$item)
                     <tr>
                        <td>{{ $key+1 ?? '' }}</td>
                        <td>{{ $item->name ?? '' }}</td>
                        <td>PRINCIPAL</td>
                     </tr>
                     @endforeach    
                     <tr>
                        <td style="background-color:#7b4d9d; color:#fff;font-size:17px; font-weight:600;" class="text-center" colspan="3">COMPUTER</td>
                     </tr> 
                     @php
                     $faculty =DB::table('faculties')->where('faculty_id','9')->get();
                     @endphp 
                     @foreach($faculty as $key=>$item)
                     <tr>
                        <td>{{ $key+1 ?? '' }}</td>
                        <td>{{ $item->name ?? '' }}</td>
                        <td>PRINCIPAL</td>
                     </tr>
                     @endforeach      
                     <tr>
                        <td style="background-color:#7b4d9d; color:#fff;font-size:17px; font-weight:600;" class="text-center" colspan="3">PRT</td>
                     </tr> 
                     @php
                     $faculty =DB::table('faculties')->where('faculty_id','10')->get();
                     @endphp 
                     @foreach($faculty as $key=>$item)
                     <tr>
                        <td>{{ $key+1 ?? '' }}</td>
                        <td>{{ $item->name ?? '' }}</td>
                        <td>PRINCIPAL</td>
                     </tr>
                     @endforeach  
                     <tr>
                        <td style="background-color:#7b4d9d; color:#fff;font-size:17px; font-weight:600;" class="text-center" colspan="3">LIBRARY</td>
                     </tr> 
                     @php
                     $faculty =DB::table('faculties')->where('faculty_id','11')->get();
                     @endphp 
                     @foreach($faculty as $key=>$item)
                     <tr>
                        <td>{{ $key+1 ?? '' }}</td>
                        <td>{{ $item->name ?? '' }}</td>
                        <td>PRINCIPAL</td>
                     </tr>
                     @endforeach 
                     <tr>
                        <td style="background-color:#7b4d9d; color:#fff;font-size:17px; font-weight:600;" class="text-center" colspan="3">MUSUC</td>
                     </tr> 
                     @php
                     $faculty =DB::table('faculties')->where('faculty_id','12')->get();
                     @endphp 
                     @foreach($faculty as $key=>$item)
                     <tr>
                        <td>{{ $key+1 ?? '' }}</td>
                        <td>{{ $item->name ?? '' }}</td>
                        <td>PRINCIPAL</td>
                     </tr>
                     @endforeach                     
                    
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</section>
@include('front.footer')
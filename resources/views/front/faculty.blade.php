@include('front.header')
<div class="page-banner-area">
   <img class="page-banner" src="{{ asset('public/front') }}/images/banner_faculty.jpg" alt="Faculty">
   <div class="page-banner-content">
      <h1>Faculty</h1>
      <ul>
         <li><a href="{{ url('/') }}">Home</a></li>
         <li>Faculty</li>
      </ul>
   </div>
</div>
<style>
.facility-sec-page {
    padding: 70px 0;
    background-color: #f9faff;
}
.faculty-detail-box {
    background: #ffffff;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
    border: 1px solid #eaeaea;
}
.table-bordered {
    border: none;
}
.table-bordered th, .table-bordered td {
    border: 1px solid #f1f1f1;
    vertical-align: middle;
    padding: 15px;
}
.table-bordered thead th {
    background-color: #032274;
    color: #ffffff;
    font-weight: 600;
    font-size: 16px;
    border-bottom: none;
    text-transform: uppercase;
    letter-spacing: 1px;
}
.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(3, 34, 116, 0.02);
}
.table-striped tbody tr:hover {
    background-color: rgba(227, 40, 69, 0.05);
}
/* Custom headings for faculty groups */
td.text-center[colspan="3"] {
    background-color: #e32845 !important;
    color: #fff !important;
    font-size: 18px !important;
    font-weight: 700 !important;
    letter-spacing: 2px;
    text-transform: uppercase;
}
@media only screen and (max-width: 767px) {
    .faculty-detail-box { padding: 15px; }
}
</style>
<section class="faculty-area facility-sec-page">
   <div class="container">
      <div class="row">
         <div class="col-lg-12" data-aos="fade-up" data-aos-duration="1000">
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
                        <td>{{ $item->designation ?? '' }}</td>
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
                        <td>{{ $item->designation ?? '' }}</td>
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
                        <td>{{ $item->designation ?? '' }}</td>
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
                        <td>{{ $item->designation ?? '' }}</td>
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
                        <td>{{ $item->designation ?? '' }}</td>
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
                        <td>{{ $item->designation ?? '' }}</td>
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
                        <td>{{ $item->designation ?? '' }}</td>
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
                        <td>{{ $item->designation ?? '' }}</td>
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
                        <td>{{ $item->designation ?? '' }}</td>
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
                        <td>{{ $item->designation ?? '' }}</td>
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
                        <td>{{ $item->designation ?? '' }}</td>
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
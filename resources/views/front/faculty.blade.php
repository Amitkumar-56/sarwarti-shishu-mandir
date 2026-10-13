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
                     @php
                     $faculty = DB::table('faculty')
                        ->orderByRaw("
                           CASE 
                              WHEN UPPER(designation) LIKE '%PRINCIPAL%' AND UPPER(designation) NOT LIKE '%VICE%' THEN 1
                              WHEN UPPER(designation) LIKE '%VICE%PRINCIPAL%' THEN 2
                              WHEN UPPER(designation) LIKE '%PGT%' THEN 3
                              WHEN UPPER(designation) LIKE '%TGT%' THEN 4
                              WHEN UPPER(designation) LIKE '%PRT%' THEN 5
                              ELSE 6
                           END, id ASC
                        ")
                        ->get();
                     @endphp
                     @forelse($faculty as $key => $item)
                     <tr>
                        <td style="width: 10%; text-align: center; font-weight: 600;">{{ $key + 1 }}.</td>
                        <td style="width: 50%; font-weight: 600; color: #1a1a1a;">{{ $item->name ?? '' }}</td>
                        <td style="width: 40%; color: #032274; font-weight: 500;">{{ $item->designation ?? '' }}</td>
                     </tr>
                     @empty
                     <tr>
                        <td colspan="3" class="text-center py-4">No faculty records found.</td>
                     </tr>
                     @endforelse
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</section>
@include('front.footer')
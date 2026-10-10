@include('front.header')
<div class="page-banner-area">
   <img class="page-banner" src="{{ asset('public/front') }}/images/breadcrumb-bg-image.jpg" alt="Courses">
   <div class="page-banner-content">
      <h1>Parents Teacher Association List</h1>
      <ul>
         <li><a href="{{ url('/') }}">Home</a></li>
         <li>Parents Teacher Association List</li>
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
         @php
         $faculty = DB::table('associate_members')->get();
         @endphp
         <div class="col-lg-12" data-aos="fade-up" data-aos-duration="1000">
            <div class="faculty-detail-box table-responsive">
               <table class="table table-striped table-bordered">
                  <thead>
                     <tr>
                        <th>Sr. No.</th>
                        <th> Name</th>
                        <th>Roll</th>
                        <th>Phone No.</th>
                        <th>Address</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($faculty as $key=>$item)
                     <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $item->name ?? ''  }}</td>
                        <td>{{ $item->roll ?? ''  }}</td>
                        <td>{{ $item->phone ?? ''  }}</td>
                        <td>{{ $item->address ?? ''  }}</td>
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
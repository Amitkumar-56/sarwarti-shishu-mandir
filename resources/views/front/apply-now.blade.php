@include('front.header')
<div class="page-banner-area">
   <img class="page-banner" src="{{ asset('public/front') }}/images/breadcrumb-bg-image.jpg" alt="Courses">
   <div class="page-banner-content">
      <h1>Apply Now</h1>
      <ul>
         <li><a href="{{ url('/') }}">Home</a></li>
         <li>Apply Now</li>
      </ul>
   </div>
</div>
<div class="apply-now-area">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="apply-now-box">
               <div class="apply-now-img-box">
                  <img src="{{ asset('public/front') }}/images/new-student.jpg" alt="New Student">
               </div>
               @if (\Session::has('success'))
         <div class="alert alert-info">
            {!! \Session::get('success') !!}
         </div>
         @endif
               <div class="apply-now-form-box" >
               
                  <form method="Post" action="{{ url('createapply') }}">
                       @csrf
                     <div class="form-apply-now-group-box">
                        <label>Student Name</label>
                        <input type="type" placeholder="Enter Full Name" name="name">
                     </div>
                     <div class="form-apply-now-group-box">
                        <label>Email Address</label>
                        <input type="type" placeholder="Enter Email" name="email">
                     </div>
                     <div class="form-apply-now-group-box">
                        <label>Mobile Number</label>
                        <input type="type" placeholder="Enter Mobile Number" name="mobile">
                     </div>
                     <div class="form-apply-now-group-box">
                        <label>Class</label>
                       <input type="type" placeholder="Enter Your Class" name="mobile">
                     </div>
                     <div class="form-apply-now-group-box">
                        <label>Message</label>
                        <textarea rows="3" placeholter="Type your message..." name="message"></textarea>
                     </div>
                     <div class="form-apply-now-group-box">
                        <input class=btn-apply-form-submit type="submit" value="Submit">
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>


@include('front.footer')
@include('front.header')
<div class="page-banner-area">
   <img class="page-banner" src="{{ asset('public/front') }}/images/breadcrumb-bg-image.jpg" alt="Courses">
   <div class="page-banner-content">
      <h1>Time Contribution</h1>
      <ul>
         <li><a href="index.php">Home</a></li>
         <li>Time Contribution</li>
      </ul>
   </div>
</div>
<div class="register-area time-contribution-page">
   <div class="container">
      <div class="register">
         <h3>Time Contribution</h3>
         <h6 class="enquary-tittle-text" style="text-align:justify">Our school welcomes all the well-wishers from the society who would like to 
contribute towards the development of our school by making some contribution in 
kind or by spending some of their valuable time in school. In case you are interested 
for making any such contribution you can fill the form below:</h6>
         <form>
            <div class="row">
               
               <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label class="control-label">First Name*</label>
                     <input type="text" id="name" class="form-control" placeholder="First Name">
                  </div>
               </div>
               <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                     <label class="control-label">Last Name*</label> 
                     <input type="text" id="lname" class="form-control" placeholder="Last Name">
                  </div>
               </div>
               <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                      <label class="control-label">Phone Number</label>
                     <input type="tel" id="phone" name="phone" class="form-control"
                        placeholder="Phone Number">
                  </div>
               </div>

            </div>
            <button type="submit" class="default-btn btn active">Submit Now</button>
         </form>
      </div>
   </div>
</div>
@include('front.footer')
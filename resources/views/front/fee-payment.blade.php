@include('front.header')
 
<div class="page-banner-area">
   <img class="page-banner" src="{{ asset('public/front') }}/images/breadcrumb-bg-image.jpg" alt="Courses">
   <div class="page-banner-content">
      <h1>Fee Payment</h1>
      <ul>
         <li><a href="index.php">Home</a></li>
         <li>Fee Payment</li>
      </ul>
   </div>
</div>
<section class="fee-section-page">
   <div class="container">
      <div class="bank-details-card">
         <div class="row">
              <div class="col-lg-12">
                  <div class="fee-text-box">
                      <h6 class="enquary-tittle-text"> The fee can be paid online using the below account details of the schools. Please take 
                         the screenshot of the payment made.</h6>
                  </div>
              </div>
          </div>
         <div class="row">
            <!--<div class="col-lg-4">-->
               <!--<div class="qr-code">-->
               <!--   <img src="{{ asset('public/front') }}/images/qr-code.jpeg" alt="fee Payment">-->
               <!--</div>-->
            <!--</div>-->
            <div class="col-lg-12">
               <div class="bank-detail-box">
                  <h1>Bank Details</h1>
                  <table class="table table-striped">
                     <tbody>
                        <tr>
                           <td> Account Holder Name: </td>
                           <td>Kusum Goel Dr. Santosh Saraswati Vidya Mandir</td>
                        </tr>
                        <tr>
                           <td> Bank Name: </td>
                           <td> Bank Of Baroda</td>
                        </tr>
                        <tr>
                           <td>Our Bank Account Number/Details :</td>
                           <td>21860200000865</td>
                        </tr>
                        <tr>
                           <td>IFSC Details :</td>
                           <td>BARB0RAJNAG</td>
                        </tr>
                        <tr>
                           <td>Branch:</td>
                           <td>RDC Raj Nagar, Ghaziabad</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<div class="register-area">
   <div class="container">
      <div class="register">
         <!--<h3>Enquiry</h3>-->
         <h6 class="enquary-tittle-text">After making the online payment kindly fill and submit the form below and kindly 
             upload the payment screenshot</h6>
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
                     <label class="control-label">Father's Name</label> 
                     <input type="text" id="fathersname" class="form-control" placeholder="Father's Name">
                  </div>
               </div>
               <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                      <label class="control-label">Phone Number</label>
                     <input type="tel" id="phone" name="phone" class="form-control"
                        placeholder="Phone Number">
                  </div>
               </div>
               <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                      <label class="control-label">Select Class</label>
                     <select name="country" class="form-textarea" value="101">
                        <option value=""> Select Class </option>
                        <option value="class I">class I</option>
                        <option value="class II">class II</option>
                        <option value="class III">class III</option>
                        <option value="class IV">class IV</option>
                        <option value="class V">class V</option>
                        <option value="class VI">class VI</option>
                        <option value="class VII">class VII</option>
                        <option value="class VIII">class VII</option>
                        <option value="class IX">class IX</option>
                        <option value="class X">class X</option>
                     </select>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                      <label class="control-label">Select Month</label>
                     <select name="country" class="form-textarea" value="101">
                        <option value=""> Select Month </option>
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                     
                     </select>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="form-group">
                      <label class="control-label">Fee</label>
                     <input type="text" id="fee" name="fee" class="form-control"
                        placeholder="Fee">
                  </div>
               </div>
              
               <div class="col-lg-6">
                  <div class="form-group">
                      <label class="control-label">Upload File</label>
                     <input type="file"  class="form-control">
                  </div>
               </div>
               
            </div>
            <button type="submit" class="default-btn btn active">Submit Now</button>
         </form>
       
      </div>
      
   </div>
</div>
@include('front.footer')
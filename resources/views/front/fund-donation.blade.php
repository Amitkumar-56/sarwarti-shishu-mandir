@include('front.header')
<div class="page-banner-area">
   <img class="page-banner" src="{{ asset('public/front') }}/images/breadcrumb-bg-image.jpg" alt="Courses">
   <div class="page-banner-content">
      <h1>Fund Donation</h1>
      <ul>
         <li><a href="index.php">Home</a></li>
         <li>Fund Donation</li>
      </ul>
   </div>
</div>
<section class="fee-section-page">
   <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-11">       
                <h6 class="enquary-tittle-text text-center"> Those who would like to financially contribute towards the development and growth of the school and 
                thus help students in getting quality education can make their contribution using the below mentioned account 
                details:</h6>
               
          </div>
            </div>
         <div class="container">
            <div class="col-lg-8">
               <div class="bank-detail-box">
                  <h1>Donation for domestic (Bank Details)</h1>
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
                           <td>21860200001001</td>
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
            <!--<div class="col-lg-6">-->
            <!--   <div class="bank-detail-box">-->
            <!--      <h1>Donation for International (Bank Details)</h1>-->
            <!--      <table class="table table-striped">-->
            <!--         <tbody>-->
            <!--            <tr>-->
            <!--               <td> Account Holder Name: </td>-->
            <!--               <td>Kusum Goel Dr. Santosh Saraswati Vidya Mandir </td>-->
            <!--            </tr>-->
            <!--            <tr>-->
            <!--               <td> Bank Name: </td>-->
            <!--               <td> SBI Bank Ghaziabad </td>-->
            <!--            </tr>-->
            <!--            <tr>-->
            <!--               <td>Our Bank Account Number/Details :</td>-->
            <!--               <td>5874236812358 </td>-->
            <!--            </tr>-->
            <!--            <tr>-->
            <!--               <td>IFSC Details :</td>-->
            <!--               <td>SBIN87951</td>-->
            <!--            </tr>-->
            <!--         </tbody>-->
            <!--      </table>-->
            <!--   </div>-->
            <!--</div>-->
         </div>
      </div>
</section>
<div class="register-area">
   <div class="container">
      <div class="register">
         <h3>Enquiry</h3>
          <h6 class="enquary-tittle-text"> After making the online payment kindly fill and submit the form below and kindly upload the payment 
                screenshot </h6>
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
               <div class="col-lg-6">
                  <div class="form-group">
                     <label class="control-label">Amount</label>
                     <input type="text" id="Amount" name="Amount" class="form-control"
                        placeholder="Amount">
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="form-group">
                     <label class="control-label"> Transaction Number</label>
                     <input type="text" id="transaction" name="transection" class="form-control"
                        placeholder="Transaction Number">
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
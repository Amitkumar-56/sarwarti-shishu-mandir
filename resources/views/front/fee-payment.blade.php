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
@php
if (!isset($bank) || !$bank) {
   $bank = DB::table('bank_details')->first();
}
@endphp
<section class="fee-section-page">
   <div class="container">
      <div class="bank-details-card">
         <div class="row">
              <div class="col-lg-12">
                  <div class="fee-text-box">
                      <h6 class="enquary-tittle-text">{{ $bank->note ?? 'The fee can be paid online using the below account details of the school. Please take a screenshot of the payment made.' }}</h6>
                  </div>
              </div>
          </div>
         <div class="row align-items-center">
            @if(!empty($bank->qr_code) && file_exists(public_path('uploads/bank/' . $bank->qr_code)))
            <div class="col-lg-4 text-center mb-4 mb-lg-0">
               <div class="qr-code-box p-3 bg-white shadow-sm rounded border">
                  <h6 class="fw-bold mb-2 text-primary"><i class="ri-qr-code-line"></i> Scan UPI QR Code</h6>
                  <img src="{{ asset('public/uploads/bank/' . $bank->qr_code) }}" alt="Fee Payment QR" class="img-fluid" style="max-height: 220px; border-radius: 8px;">
               </div>
            </div>
            <div class="col-lg-8">
            @else
            <div class="col-lg-12">
            @endif
               <div class="bank-detail-box">
                  <h1><i class="ri-bank-card-line me-2"></i> Bank Details</h1>
                  <table class="table table-striped table-bordered">
                     <tbody>
                        <tr>
                           <td style="width: 35%; font-weight: 600;"> Account Holder Name: </td>
                           <td style="font-weight: 700; color: #032274;">{{ $bank->account_holder ?? 'Kusum Goel Dr. Santosh Saraswati Vidya Mandir' }}</td>
                        </tr>
                        <tr>
                           <td style="font-weight: 600;"> Bank Name: </td>
                           <td style="font-weight: 700;">{{ $bank->bank_name ?? 'Bank Of Baroda' }}</td>
                        </tr>
                        <tr>
                           <td style="font-weight: 600;">Our Bank Account Number/Details :</td>
                           <td style="font-weight: 700; color: #d97706; font-size: 16px;">{{ $bank->account_number ?? '21860200000865' }}</td>
                        </tr>
                        <tr>
                           <td style="font-weight: 600;">IFSC Details :</td>
                           <td style="font-weight: 700; font-family: monospace; font-size: 15px;">{{ $bank->ifsc_code ?? 'BARB0RAJNAG' }}</td>
                        </tr>
                        <tr>
                           <td style="font-weight: 600;">Branch:</td>
                           <td>{{ $bank->branch ?? 'RDC Raj Nagar, Ghaziabad' }}</td>
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
                        <option value="Playgroup">Playgroup</option>
                        <option value="Nursery">Nursery</option>
                        <option value="KG">KG</option>
                        <option value="class I">Class I</option>
                        <option value="class II">Class II</option>
                        <option value="class III">Class III</option>
                        <option value="class IV">Class IV</option>
                        <option value="class V">Class V</option>
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
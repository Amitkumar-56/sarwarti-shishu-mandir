@include('front.header')
<div class="page-banner-area">
      <img class="page-banner" src="{{ asset('public/front') }}/images/banner_contact.jpg" alt="Contact Us">
   <div class="page-banner-content">
      <h1>Contact Us</h1>
      <ul>
         <li><a href="{{ url('/') }}">Home</a></li>
         <li>Contact Us</li>
      </ul>
   </div>
</div>
<div class="contact-us-area pt-100 pb-70">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="contacts-form contact-card-page">
               <h3>Leave a message</h3>
               @if (\Session::has('success'))
               <div class="alert alert-info">
                  {!! \Session::get('success') !!}
               </div>
               @endif
               <form  method="Post" action="{{ url('createcontact') }}">
                  @csrf
                  <div class="row">
                     <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                           <label>Your name</label>
                           <input type="text" class="form-control" name="name">
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                           <label>Your email</label>
                           <input type="email" class="form-control" name="email">
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                           <label>Your phone</label>
                           <input type="text" class="form-control" name="mobile">
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                           <label>Subject</label>
                           <input type="text" name="subject" class="form-control" >
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="form-group">
                           <label>Your message</label>
                           <textarea name="message" class="form-control"  rows="3"></textarea>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="form-check">
                           <input name="gridCheck" value="I agree to the terms and privacy policy." class="form-check-input" type="checkbox" >
                           <label class="form-check-label" for="gridCheck">
                           I agree to the <a href="terms-conditions.html">terms</a> and <a href="privacy-policy.html">privacy policy</a>
                           </label>
                           <div class="help-block with-errors gridCheck-error"></div>
                        </div>
                     </div>
                     <div class="col-lg-12 col-md-12">
                        <input type="submit" name="submit" value="Submit" class="default-btn">
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="contact-and-address">
               <h2>Let's Connect</h2>
               <div class="contact-and-address-content">
                  <div class="row">
                     <div class="col-lg-6 col-md-6">
                        <div class="contact-card mobile-cerd">
                           <div class="icon">
                              <i class="ri-phone-line"></i>
                           </div>
                           <h4>Contact</h4>
                           <p>Mobile: <a href="tel:9899350728">9899350728</a></p>
                          
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6">
                        <div class="contact-card">
                           <div class="icon">
                              <i class="ri-map-pin-line"></i>
                           </div>
                           <h4>Address</h4>
                           <p>Saraswati Shishu Mandir School, Ghaziabad, Uttar Pradesh 201002
                           </p>
                        </div>
                     </div>
                     <div class="col-lg-12 col-md-6">
                        <div class="contact-card">
                           <div class="icon">
                              <i class="ri-mail-line"></i>
                           </div>
                           <h4>Email</h4>
                           <p><a href="mailto:ssswup2013@gmail.com"><span class="__cf_email__"> ssswup2013@gmail.com</span></a>
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
              
            </div>
         </div>
      </div>
   </div>
</div>
<section class="map-location-area">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="map-location">
               <div style="overflow:hidden;resize:none;max-width:100%;width:100%;height:400px;">
                  <div id="embed-map-canvas" style="height:100%; width:100%;max-width:100%;"><iframe src="https://maps.google.com/maps?q=Nehru%20Nagar,%20Ghaziabad&t=&z=15&ie=UTF8&iwloc=&output=embed" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                  <a class="google-map-code-enabler" href="https://www.bootstrapskins.com/themes" id="make-map-data">premium bootstrap themes</a>
                  <style>#embed-map-canvas img{max-width:none!important;background:none!important;font-size: inherit;font-weight:inherit;}</style>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@include('front.footer')
<style>
</style>
<div class="footer-area  pb-20">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-4 col-sm-6">
            <div class="footer-logo-area footer-widjet">
                <h3>About Us</h3>
               <div class="sidebar-contact-info">
                <p>

Established in 1956, Saraswati Shishu Mandir provides quality education, modern facilities, and child-centred learning as per NEP 2020 for the all-round development of every child.</p>
               </div>
           
            </div>
         </div>
        <div class="col-lg-1"></div>
         <div class="col-lg-3 col-sm-6">
            <div class="footer-widjet pd-left-50">
               <h3>Quick Links</h3>
               <div class="list">
                  <ul>
                     <li><a href="{{ url('/') }}"><i class="flaticon-next"></i> Home</a></li>
                     <li><a href="{{ url('about') }}"><i class="flaticon-next"></i> About Us</a></li>
                     <li><a href="{{ url('infrastructure') }}"><i class="flaticon-next"></i> Infrastructure </a></li>
                     <li><a href="{{ url('faculty') }}"><i class="flaticon-next"></i> Faculty </a></li>
                     <li><a href="{{ url('admission-process') }}"><i class="flaticon-next"></i> Admission Process </a></li>

                     <li><a href="{{ url('contact') }}"><i class="flaticon-next"></i>Contact Us</a></li>
                  </ul>
               </div>
            </div>
          
         </div>
         <div class="col-lg-4 col-sm-6">
            <div class="footer-logo-area footer-widjet">
               <h3>Contact Us</h3>
               <div class="sidebar-contact-info">
                  <ul class="info-list">
                     <li><i class="ri-phone-fill"></i> <a href="tel:9899350728"> 9899350728</a></li>
                     
                     <li><i class="ri-mail-line"></i><a href="ssswup2013@gmail.com"><span class="__cf_email__"> ssswup2013@gmail.com</span></a></li>
                     <li><i class="ri-map-pin-line"></i><a ><span class="__cf_email__"> Saraswati Shishu Mandir 
                     <br>  Ghaziabad, Uttar Pradesh 201002</span></a></li>
                  </ul>
    
               </div>
               <div class="social-content">
                  <ul>
                     <li>
                        <a href="https://www.facebook.com/groups/665338486989843/" target="_blank"><i class="ri-facebook-fill" aria-hidden="true"></i></a>
                     </li>
                
                     <li>
                        <a href="https://twitter.com/svmrajnagar" target="_blank"><i class="ri-twitter-line"></i></a>
                     </li>
                     <li>
                        <a href="javascript:void(0)" target="_blank"><i class="ri-linkedin-fill"></i></a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
       
      </div>
      <div class="shape">
         <img src="{{ asset('public/front') }}/images/shape-1.png" alt="Image">
      </div>
   </div>
</div>
<div class="copyright-area">
   <div class="container-fluid">
      <div class="copyright">
         <div class="row">
            <div class="col-lg-12 col-md-12">
               <div class="copy">
                  <p>© 2026 Saraswati Shishu Mandir School Designed By AIS. All Rights Reserved</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="auto-hide socialsticky">
   <a class="social_icon ion-social-facebook s-i" target="_blank" href="https://www.facebook.com/groups/665338486989843/" title="Click to open in a new window" rel="nofollow"><i class="ri-facebook-fill"></i></a>
   
   <a class="social_icon ion-social-youtube s-i" target="_blank" href="javascript:void(0)" title="Click to open in a new window" rel="nofollow"><i class="ri-linkedin-fill"></i></a>
   <a class="social_icon ion-social-instagram s-i" target="_blank" href="https://twitter.com/svmrajnagar" title="Click to open in a new window" rel="nofollow"><i class="ri-twitter-fill"></i></a>
   <a class="social_icon ion-social-phone s-i" target="_blank" href="tel:9899350728" title="Click to open in a new window" rel="nofollow"><i class="ri-phone-fill"></i></a>
   <a class="social_icon ion-social-phone s-i" target="_blank" href="https://wa.me/919899350728" title="Click to open in a new window" rel="nofollow"><i class="ri-whatsapp-fill"></i></a>
</div>
<div id="slider" style="right:-315px;">
   <div id="sidebar" onclick="open_panel()">
      <button class="button-two"><span>Enquiry Now</span> </button>
   </div>
   <div id="header">
      <div class="form-wrapper active">
         <section class="contact-button">
            <div class="small-12 columns">
               <button type="button" class="download form-toggle"> Drop us a  Query!</button>
            </div>
         </section>
         <div  style="display:flex"> <i  class="phone-icon-form ri-phone-fill"></i>
            <span style="font-size: 13px;line-height: 20px;"> <strong
               style="font-size: 18px; color: #5a281d; font-weight: 600;">9899350728</strong><br>
            Available 24x7 for your queries</span> 
         </div>
         <div style="padding-top:12px">
            <form method="Post" action="{{ url('createquery') }}">
                @csrf
               <div class="row form-group"> 
                  <input class="form-control mob_no" type="text" value="" name="mobile" placeholder="Enter Mobile Number *" >
                  <span class="country-code">+91</span>
               </div>
               <div class="row form-group"> 
                  <input class="form-control " type="text" value="" name="email" placeholder="Enter Your Email*" required="">
               </div>
                 <div class="row form-group"> 
                  <textarea class="form-control new-duq-query-in" placeholder="Type your query here*" style="height:60px" name="message"></textarea>
               </div>
                <div class=" form-group"> 
                 <!--<button type="submit" style="width: 100%; background: #000063; color: #fff; border-radius: 10px !important; padding: 7px;font-size: 16px;" id="StarWebMakerDropUs">Submit Query</button>-->
                 <input type="submit" name="submit" value="Submit Query"  class="btn contact-btn btn-primary">
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<div class="go-top">
   <i class="ri-arrow-up-s-line"></i>
   <i class="ri-arrow-up-s-line"></i>
</div>
<script>
   function open_panel() {
       slideIt();
       var a = document.getElementById("sidebar");
       a.setAttribute("id", "sidebar1");
       a.setAttribute("onclick", "close_panel()");
     }
    
     function slideIt() {
       var slidingDiv = document.getElementById("slider");
       var stopPosition = 0;
       if (parseInt(slidingDiv.style.right) < stopPosition) {
         slidingDiv.style.right = parseInt(slidingDiv.style.right) + 2 + "px";
         setTimeout(slideIt, 1);
       }
     }
    
     function close_panel() {
       slideIn();
       a = document.getElementById("sidebar1");
       a.setAttribute("id", "sidebar");
       a.setAttribute("onclick", "open_panel()");
     }
   
     function slideIn() {
       var slidingDiv = document.getElementById("slider");
       var stopPosition = -315;
       if (parseInt(slidingDiv.style.right) > stopPosition) {
         slidingDiv.style.right = parseInt(slidingDiv.style.right) - 2 + "px";
         setTimeout(slideIn, 1);
       }
     }
</script>
<script src="{{ asset('public/front') }}/js/jquery.min.js"></script>
<script src="{{ asset('public/front') }}/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('public/front') }}/js/jquery.meanmenu.js"></script>
<script src="{{ asset('public/front') }}/js/owl.carousel.min.js"></script>
<script src="{{ asset('public/front') }}/js/carousel-thumbs.min.js"></script>
<script src="{{ asset('public/front') }}/js/jquery.magnific-popup.js"></script>
<script src="{{ asset('public/front') }}/js/aos.js"></script>
<script src="{{ asset('public/front') }}/js/odometer.min.js"></script>
<script src="{{ asset('public/front') }}/js/appear.min.js"></script>
<script src="{{ asset('public/front') }}/js/form-validator.min.js"></script>
<script src="{{ asset('public/front') }}/js/contact-form-script.js"></script>
<script src="{{ asset('public/front') }}/js/ajaxchimp.min.js"></script>
<script src="{{ asset('public/front') }}/js/custom.js"></script>
<script src="{{ asset('public/front') }}/js/jqueryg.min.js"></script>
<script src="{{ asset('public/front') }}/js/jquery.marquee.js"></script>

<script src="{{ asset('public/front') }}/js/common_scripts.js"></script>
<script src="{{ asset('public/front') }}/js/common_functions.js"></script>

<script id="rendered-js">
   AOS.init({
     duration: 1200 });             
</script>   

      <script type="text/javascript">
         $(function(){    
         $('#marquee-vertical').marquee();  
         $('#marquee-horizontal').marquee({direction:'horizontal', delay:0, timing:10});          
         });         
      </script>


</body>
</html>
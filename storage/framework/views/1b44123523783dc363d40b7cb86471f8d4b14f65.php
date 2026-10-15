<style>
.socialsticky, .auto-hide.socialsticky {
    display: none !important;
}

.social-content ul {
    display: flex !important;
    align-items: center;
    gap: 8px;
    padding-left: 0;
    margin-top: 15px;
    list-style: none;
    flex-wrap: wrap;
}
.social-content ul li {
    margin-right: 0 !important;
    float: none !important;
    display: inline-block !important;
}
.social-content ul li a {
    display: inline-flex !important;
    align-items: center;
    justify-content: center;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    color: #ffffff !important;
    transition: transform 0.25s ease;
    text-decoration: none;
}
.social-content ul li a:hover {
    transform: translateY(-3px) scale(1.08);
}
.social-content ul li a i {
    color: #ffffff !important;
    font-size: 18px;
}

/* =================================================== */
/* Modern Floating Enquiry Drawer & Form Styles        */
/* =================================================== */
#slider {
    width: 430px !important;
    top: 240px !important;
    right: -335px !important;
    position: fixed !important;
    z-index: 99999 !important;
    transition: right 0.35s cubic-bezier(0.16, 1, 0.3, 1) !important;
}
#slider.drawer-open {
    right: 0 !important;
}
#slider #header {
    width: 335px !important;
    position: absolute !important;
    right: 0 !important;
    top: -90px !important;
    border-radius: 14px 0 0 14px !important;
    box-shadow: -10px 10px 35px rgba(0, 0, 0, 0.22) !important;
    background: #ffffff !important;
    border: 1px solid rgba(15, 44, 105, 0.12) !important;
    border-right: none !important;
    overflow: hidden !important;
    padding: 0 !important;
    margin: 0 !important;
}
#slider .form-wrapper {
    box-shadow: none !important;
    padding: 0 !important;
    border-radius: 0 !important;
    background: #ffffff !important;
}
.enquiry-drawer-top {
    background: linear-gradient(135deg, #0f2c69 0%, #17387e 100%);
    padding: 14px 18px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    color: #ffffff;
}
.enquiry-top-title {
    display: flex;
    align-items: center;
    gap: 10px;
}
.enquiry-top-icon {
    width: 34px;
    height: 34px;
    border-radius: 50%;
    background: rgba(255, 215, 0, 0.18);
    color: #ffd700;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    flex-shrink: 0;
}
.enquiry-main-heading {
    color: #ffffff !important;
    font-size: 15px;
    font-weight: 700;
    letter-spacing: 0.3px;
    margin: 0;
    line-height: 1.2;
}
.enquiry-sub-heading {
    color: rgba(255, 255, 255, 0.8);
    font-size: 11px;
    display: block;
    margin-top: 2px;
}
.enquiry-close-btn {
    background: rgba(255, 255, 255, 0.15) !important;
    border: none !important;
    color: #ffffff !important;
    width: 28px !important;
    height: 28px !important;
    border-radius: 50% !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    font-size: 20px !important;
    line-height: 1 !important;
    cursor: pointer !important;
    padding: 0 !important;
    margin: 0 !important;
    transition: all 0.2s ease !important;
}
.enquiry-close-btn:hover {
    background: rgba(255, 255, 255, 0.3) !important;
    color: #ffd700 !important;
    transform: rotate(90deg);
}

.enquiry-helpline-box {
    margin: 12px 16px 8px 16px;
    padding: 9px 12px;
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    display: flex;
    align-items: center;
    gap: 10px;
}
.enquiry-help-icon {
    width: 34px;
    height: 34px;
    border-radius: 6px;
    background: #0f2c69;
    color: #ffd700;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    flex-shrink: 0;
}
.enquiry-help-phone {
    font-size: 16px;
    font-weight: 700;
    color: #0f2c69 !important;
    text-decoration: none;
    line-height: 1.2;
    display: block;
}
.enquiry-help-phone:hover {
    color: #e69a0a !important;
}
.enquiry-help-tag {
    font-size: 11px;
    color: #64748b;
    display: block;
}

.enquiry-form-body {
    padding: 8px 16px 16px 16px;
}
.enquiry-field-wrap {
    margin-bottom: 11px;
}
.enquiry-label {
    display: block;
    font-size: 12px;
    font-weight: 600;
    color: #334155;
    margin-bottom: 3px;
    text-align: left;
}
.enquiry-phone-control {
    display: flex;
    align-items: stretch;
    border: 1.5px solid #cbd5e1;
    border-radius: 8px;
    overflow: hidden;
    background: #ffffff;
    transition: all 0.2s ease;
    height: 42px;
}
.enquiry-phone-control:focus-within {
    border-color: #0f2c69 !important;
    box-shadow: 0 0 0 3px rgba(15, 44, 105, 0.12) !important;
}
.enquiry-dial-code {
    display: flex;
    align-items: center;
    justify-content: center;
    background: #f1f5f9;
    color: #1e293b;
    font-size: 13.5px;
    font-weight: 700;
    padding: 0 10px;
    border-right: 1.5px solid #cbd5e1;
    user-select: none;
    flex-shrink: 0;
    letter-spacing: 0.5px;
}
.enquiry-phone-control .enquiry-input-field {
    flex: 1;
    width: 100%;
    border: none !important;
    outline: none !important;
    box-shadow: none !important;
    padding: 0 12px !important;
    font-size: 13.5px !important;
    color: #1e293b !important;
    background: transparent !important;
    height: 100% !important;
    margin: 0 !important;
}
.enquiry-input-control {
    border: 1.5px solid #cbd5e1;
    border-radius: 8px;
    background: #ffffff;
    transition: all 0.2s ease;
    overflow: hidden;
}
.enquiry-input-control:focus-within {
    border-color: #0f2c69 !important;
    box-shadow: 0 0 0 3px rgba(15, 44, 105, 0.12) !important;
}
.enquiry-input-control .enquiry-input-field {
    width: 100% !important;
    border: none !important;
    outline: none !important;
    box-shadow: none !important;
    padding: 8px 12px !important;
    font-size: 13.5px !important;
    color: #1e293b !important;
    height: 42px !important;
    background: transparent !important;
    margin: 0 !important;
}
.enquiry-textarea-field {
    width: 100% !important;
    border: none !important;
    outline: none !important;
    box-shadow: none !important;
    padding: 8px 12px !important;
    font-size: 13.5px !important;
    color: #1e293b !important;
    resize: none !important;
    display: block !important;
    background: transparent !important;
    line-height: 1.4 !important;
    min-height: 65px !important;
    height: 65px !important;
    margin: 0 !important;
}
.enquiry-input-field::placeholder,
.enquiry-textarea-field::placeholder {
    color: #94a3b8 !important;
    font-size: 12.5px !important;
}
.enquiry-btn-submit {
    width: 100% !important;
    height: 44px !important;
    border: none !important;
    border-radius: 8px !important;
    background: linear-gradient(135deg, #0f2c69 0%, #1e3a8a 100%) !important;
    color: #ffffff !important;
    font-size: 14px !important;
    font-weight: 700 !important;
    letter-spacing: 0.5px !important;
    text-transform: uppercase !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 8px !important;
    cursor: pointer !important;
    box-shadow: 0 4px 14px rgba(15, 44, 105, 0.3) !important;
    transition: all 0.25s ease !important;
    margin-top: 4px !important;
    padding: 0 !important;
}
.enquiry-btn-submit:hover {
    background: linear-gradient(135deg, #ffd700 0%, #f59e0b 100%) !important;
    color: #0f2c69 !important;
    box-shadow: 0 6px 18px rgba(245, 158, 11, 0.45) !important;
    transform: translateY(-1px);
}
@media (max-width: 576px) {
    #slider {
        width: 370px !important;
        right: -290px !important;
    }
    #slider #header {
        width: 290px !important;
    }
    .button-two{
        margin-left:-14px !important;
    }
}

/* Footer layout and left text safety */
.footer-area {
    padding-left: 20px !important;
    padding-right: 20px !important;
}
.footer-area .container,
.copyright-area .container {
    max-width: 1200px;
    margin: 0 auto;
    padding-left: 15px;
    padding-right: 15px;
}
.footer-logo-area p {
    text-align: left !important;
    word-break: normal;
    padding-left: 0 !important;
    margin-left: 0 !important;
}
.footer-logo-area h3,
.footer-widjet h3 {
    text-align: left !important;
}
.sidebar-contact-info ul.info-list li {
    padding-left: 28px !important;
    position: relative !important;
}
.sidebar-contact-info ul.info-list li i {
    left: 0 !important;
    top: 2px !important;
}

@media (max-width: 767px) {
    .footer-area {
        padding-left: 20px !important;
        padding-right: 20px !important;
    }
    .footer-area .container {
        padding-left: 10px !important;
        padding-right: 10px !important;
    }
    .footer-logo-area, .footer-widjet {
        padding-left: 5px !important;
        padding-right: 5px !important;
        margin-bottom: 25px !important;
    }
    .footer-widjet.pd-left-50 {
        padding-left: 5px !important;
    }
    .social-content {
        padding-top: 15px !important;
        padding-left: 0 !important;
    }
    .social-content ul {
        justify-content: flex-start !important;
        gap: 12px !important;
        padding-left: 0 !important;
        margin: 10px 0 0 0 !important;
    }
    .social-content ul li {
        margin: 0 !important;
    }
}
</style>
<div class="footer-area pb-20">
   <div class="container">
      <div class="row">
         <div class="col-lg-4 col-sm-6">
            <div class="footer-logo-area footer-widjet">
                <h3>About Us</h3>
               <div class="sidebar-contact-info">
                <p>Established in 1956, Saraswati Shishu Mandir provides quality education, modern facilities, and child-centred learning as per NEP 2020 for the all-round development of every child.</p>
               </div>
            </div>
         </div>
        <div class="col-lg-1"></div>
         <div class="col-lg-3 col-sm-6">
            <div class="footer-widjet pd-left-50">
               <h3>Quick Links</h3>
               <div class="list">
                  <ul>
                     <li><a href="<?php echo e(url('/')); ?>"><i class="flaticon-next"></i> Home</a></li>
                     <li><a href="<?php echo e(url('about')); ?>"><i class="flaticon-next"></i> About Us</a></li>
                     <li><a href="<?php echo e(url('infrastructure')); ?>"><i class="flaticon-next"></i> Infrastructure </a></li>
                     <li><a href="<?php echo e(url('faculty')); ?>"><i class="flaticon-next"></i> Faculty </a></li>
                     <li><a href="<?php echo e(url('admission-process')); ?>"><i class="flaticon-next"></i> Admission Process </a></li>
                     <li><a href="<?php echo e(url('contact')); ?>"><i class="flaticon-next"></i> Contact Us</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-6">
            <div class="footer-logo-area footer-widjet">
               <h3>Contact Us</h3>
               <div class="sidebar-contact-info">
                  <ul class="info-list">
                     <li><i class="ri-phone-fill"></i> <a href="tel:+919899350728">+91-9899350728</a></li>
                     <li><i class="ri-mail-line"></i><a href="mailto:ssswup2013@gmail.com"><span class="__cf_email__"> ssswup2013@gmail.com</span></a></li>
                     <li><i class="ri-map-pin-line"></i><a><span> Saraswati Shishu Mandir<br> Ghaziabad, Uttar Pradesh 201002</span></a></li>
                  </ul>
               </div>
               <div class="social-content">
                  <ul>
                     <li>
                        <a href="https://www.facebook.com/profile.php?id=61572129551488" target="_blank" title="Facebook" style="background-color: #3b5998 !important;"><i class="ri-facebook-fill" aria-hidden="true"></i></a>
                     </li>
                     <li>
                        <a href="javascript:void(0)" target="_blank" title="LinkedIn" style="background-color: #0077b5 !important;"><i class="ri-linkedin-fill"></i></a>
                     </li>
                     <li>
                        <a href="https://twitter.com/svmrajnagar" target="_blank" title="Twitter" style="background-color: #1da1f2 !important;"><i class="ri-twitter-fill"></i></a>
                     </li>
                     <li>
                        <a href="tel:9899350728" target="_blank" title="Call Us" style="background-color: #008000 !important;"><i class="ri-phone-fill"></i></a>
                     </li>
                     <li>
                        <a href="https://wa.me/919899350728" target="_blank" title="WhatsApp" style="background-color: #25d366 !important;"><i class="ri-whatsapp-fill"></i></a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="shape">
         <img src="<?php echo e(asset('public/front')); ?>/images/shape-1.png" alt="Image">
      </div>
   </div>
</div>
<div class="copyright-area">
   <div class="container">
      <div class="copyright">
         <div class="row">
            <div class="col-lg-12 col-md-12">
               <div class="copy text-center">
                  <p>© 2026 Saraswati Shishu Mandir School Designed By AIS. All Rights Reserved</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div id="slider">
   <div id="sidebar" onclick="toggle_enquiry_drawer()">
      <button class="button-two"><span>Enquiry Now</span> </button>
   </div>
   <div id="header">
      <div class="form-wrapper active">
         <!-- Modern Header -->
         <div class="enquiry-drawer-top">
            <div class="enquiry-top-title">
               <div class="enquiry-top-icon">
                  <i class="ri-mail-send-line"></i>
               </div>
               <div>
                  <h5 class="m-0 enquiry-main-heading">Drop us a Query!</h5>
                  <span class="enquiry-sub-heading">We'll get back to you shortly</span>
               </div>
            </div>
            <button type="button" class="enquiry-close-btn" onclick="toggle_enquiry_drawer(false)" title="Close">&times;</button>
         </div>

         <!-- Helpline Box -->
         <div class="enquiry-helpline-box">
            <div class="enquiry-help-icon">
               <i class="ri-phone-fill"></i>
            </div>
            <div class="enquiry-help-details">
               <a href="tel:+919899350728" class="enquiry-help-phone">+91-9899350728</a>
               <span class="enquiry-help-tag">Available for your queries</span>
            </div>
         </div>

         <!-- Clean Form with Zero-Overlap Inputs -->
         <form method="Post" action="<?php echo e(url('createquery')); ?>" class="enquiry-form-body">
             <?php echo csrf_field(); ?>
            
            <!-- Mobile Number with separated +91 - dial badge -->
            <div class="enquiry-field-wrap">
               <label class="enquiry-label">Mobile Number <span class="text-danger">*</span></label>
               <div class="enquiry-phone-control">
                  <span class="enquiry-dial-code">+91 -</span>
                  <input type="tel" name="mobile" class="enquiry-input-field phone-field" placeholder="10-digit mobile number" required maxlength="10" pattern="[0-9]{10}">
               </div>
            </div>

            <!-- Email -->
            <div class="enquiry-field-wrap">
               <label class="enquiry-label">Email Address <span class="text-danger">*</span></label>
               <div class="enquiry-input-control">
                  <input type="email" name="email" class="enquiry-input-field" placeholder="Enter your email" required>
               </div>
            </div>

            <!-- Message -->
            <div class="enquiry-field-wrap">
               <label class="enquiry-label">Your Query <span class="text-muted fw-normal">(Optional)</span></label>
               <div class="enquiry-input-control">
                  <textarea name="message" class="enquiry-textarea-field" placeholder="Type your query here..." rows="3"></textarea>
               </div>
            </div>

            <!-- Submit Button -->
            <div class="enquiry-action-wrap">
               <button type="submit" name="submit" class="enquiry-btn-submit">
                  <span>Submit Query</span>
                  <i class="ri-send-plane-fill"></i>
               </button>
            </div>
         </form>
      </div>
   </div>
</div>
<div class="go-top">
   <i class="ri-arrow-up-s-line"></i>
   <i class="ri-arrow-up-s-line"></i>
</div>
<script>
   function toggle_enquiry_drawer(state) {
       var slider = document.getElementById("slider");
       if (!slider) return;
       if (typeof state === "boolean") {
           if (state) {
               slider.classList.add("drawer-open");
           } else {
               slider.classList.remove("drawer-open");
           }
       } else {
           slider.classList.toggle("drawer-open");
       }
   }
   function open_panel() { toggle_enquiry_drawer(true); }
   function close_panel() { toggle_enquiry_drawer(false); }

   // Close drawer on click outside
   document.addEventListener('click', function(e) {
       var slider = document.getElementById("slider");
       if (!slider || !slider.classList.contains("drawer-open")) return;
       if (!slider.contains(e.target)) {
           slider.classList.remove("drawer-open");
       }
   });

   // Close on ESC
   document.addEventListener('keydown', function(e) {
       if (e.key === "Escape") {
           var slider = document.getElementById("slider");
           if (slider) slider.classList.remove("drawer-open");
       }
   });
</script>
<script src="<?php echo e(asset('public/front')); ?>/js/jquery.min.js"></script>
<script src="<?php echo e(asset('public/front')); ?>/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo e(asset('public/front')); ?>/js/jquery.meanmenu.js"></script>
<script src="<?php echo e(asset('public/front')); ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo e(asset('public/front')); ?>/js/carousel-thumbs.min.js"></script>
<script src="<?php echo e(asset('public/front')); ?>/js/jquery.magnific-popup.js"></script>
<script src="<?php echo e(asset('public/front')); ?>/js/aos.js"></script>
<script src="<?php echo e(asset('public/front')); ?>/js/odometer.min.js"></script>
<script src="<?php echo e(asset('public/front')); ?>/js/appear.min.js"></script>
<script src="<?php echo e(asset('public/front')); ?>/js/form-validator.min.js"></script>
<script src="<?php echo e(asset('public/front')); ?>/js/contact-form-script.js"></script>
<script src="<?php echo e(asset('public/front')); ?>/js/ajaxchimp.min.js"></script>
<script src="<?php echo e(asset('public/front')); ?>/js/custom.js?v=1.2"></script>
<script src="<?php echo e(asset('public/front')); ?>/js/jqueryg.min.js"></script>
<script src="<?php echo e(asset('public/front')); ?>/js/jquery.marquee.js"></script>

<script src="<?php echo e(asset('public/front')); ?>/js/common_scripts.js"></script>
<script src="<?php echo e(asset('public/front')); ?>/js/common_functions.js"></script>

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
</html><?php /**PATH C:\xamp\htdocs\saravatividyarajnagar\resources\views/front/footer.blade.php ENDPATH**/ ?>
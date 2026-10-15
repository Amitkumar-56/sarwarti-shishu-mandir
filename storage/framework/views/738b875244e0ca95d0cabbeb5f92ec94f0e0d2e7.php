<?php echo $__env->make('front.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="page-banner-area">
   <img class="page-banner" src="<?php echo e(asset('public/front')); ?>/images/banner_about.jpg" alt="About Us">
   <div class="page-banner-content">
      <h1>About Us</h1>
      <ul>
         <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
         <li>About Us</li>
      </ul>
   </div>
</div>
<style>
.page-janhit-about-area {
    padding: 70px 0;
    background-color: #f9faff;
}
.about-text-box {
    background: #ffffff;
    padding: 45px 50px;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    border: 1px solid #eaeaea;
    transition: all 0.3s ease;
}
.about-text-box:hover {
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
}
.about-text-box h2 {
    font-size: 32px;
    font-weight: 700;
    color: #032274;
    margin-bottom: 25px;
    position: relative;
    padding-bottom: 15px;
}
.about-text-box h2::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 60px;
    height: 4px;
    background-color: #e32845;
    border-radius: 2px;
}
.about-text-box p {
    font-size: 16.5px;
    line-height: 1.9;
    color: #555;
    text-align: justify;
}
/* Responsive padding for mobile */
@media only screen and (max-width: 767px) {
    .about-text-box {
        padding: 25px 20px;
    }
    .about-text-box h2 {
        font-size: 26px;
    }
}
</style>
<section class="page-janhit-about-area">
   <?php
   $about = DB::table('about')->first();
   ?>    
   <div class="container">
      <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="about-text-box aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                <div class="about-img-group-box">
                    <!--<div class="about-img159-box">-->
                    <!--    <img class="aos-init aos-animate"  data-aos="fade-up" src="<?php echo e(asset('public/admin/images').'/'.$about->image ?? ''); ?>" alt="Courses">-->
                    <!--</div>-->
                    <!--<div class="about-img159-box">-->
                    <!--    <img class="aos-init aos-animate"  data-aos="fade-up" src="<?php echo e(asset('public/admin/images').'/'.$about->image2 ?? ''); ?>" alt="Courses">-->
                    <!--</div>-->
                </div>
               <h2><?php echo e($about->title ?? ''); ?></h2>
               <p><?php echo $about->description ?? ''; ?></p>
            </div>
         </div>
      </div>
   </div>
</section>
<?php echo $__env->make('front.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamp\htdocs\saravatividyarajnagar\resources\views/front/about.blade.php ENDPATH**/ ?>
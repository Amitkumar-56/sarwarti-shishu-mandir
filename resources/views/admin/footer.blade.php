<footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> ©  Saraswati Shishu Mandir 
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Arrow Info System.
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>


    <!-- Theme Settings -->
    <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
        <div class="d-flex align-items-center bg-primary bg-gradient p-3 offcanvas-header">
            <h5 class="m-0 me-2 text-white">Theme Customizer</h5>

            <button type="button" class="btn-close btn-close-white ms-auto" id="customizerclose-btn" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        
        <div class="offcanvas-footer border-top p-3 text-center">
            <div class="row">
                <div class="col-6">
                    <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
                </div>
                <div class="col-6">
                    <a href="https://1.envato.market/velzon-admin" target="_blank" class="btn btn-primary w-100">Buy Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('public/admin') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!--<script src="{{ asset('public/admin') }}/libs/simplebar/simplebar.min.js"></script>-->
    <script src="{{ asset('public/admin') }}/libs/node-waves/waves.min.js"></script>
    <script src="{{ asset('public/admin') }}/libs/feather-icons/feather.min.js"></script>
    <script src="{{ asset('public/admin') }}/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="{{ asset('public/admin') }}/js/plugins.js"></script>

    <!-- apexcharts -->
    <script src="{{ asset('public/admin') }}/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="{{ asset('public/admin') }}/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="{{ asset('public/admin') }}/libs/jsvectormap/maps/world-merc.js"></script>

    <!--Swiper slider js-->
    <script src="{{ asset('public/admin') }}/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Dashboard init -->
    <script src="{{ asset('public/admin') }}/js/pages/dashboard-ecommerce.init.js"></script>
 <script src="{{ asset('public/admin') }}/jquery-3.6.0.min.js"></script>

    <!--datatable js-->
    <script src="{{ asset('public/admin') }}/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('public/admin') }}/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{ asset('public/admin') }}/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('public/admin') }}/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('public/admin') }}/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="{{ asset('public/admin') }}/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="{{ asset('public/admin') }}/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="{{ asset('public/admin') }}/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="{{ asset('public/admin') }}/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script src="{{ asset('public/admin') }}/js/pages/datatables.init.js"></script>
    <!-- App js -->
    <script src="{{ asset('public/admin') }}/js/app.js"></script>
      <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>

<script>
   ClassicEditor.create( document.querySelector( '#content' ) )
      .catch( error => {
      console.error( error );
   } );
</script>
<script>
   ClassicEditor.create( document.querySelector( '#content1' ) )
      .catch( error => {
      console.error( error );
   } );
</script>  
   
</body>
</html>
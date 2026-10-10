<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
   <!-- LOGO -->
   <div class="navbar-brand-box">
      <!-- Dark Logo-->
      <a href="index.html" class="logo logo-dark">
      <span class="logo-sm">
      <img src="{{ asset('public/front') }}/images/saraswati-logo.png" alt="" style="max-width: 100%; max-height: 50px;">
      </span>
      <span class="logo-lg">
      <img src="{{ asset('public/front') }}/images/saraswati-logo.png" alt="" style="max-width: 100%; max-height: 50px;">
      </span>
      </a>
      <!-- Light Logo-->
      <a href="index.html" class="logo logo-light">
      <span class="logo-sm">
      <img src="{{ asset('public/front') }}/images/saraswati-logo.png" alt="" style="max-width: 100%; max-height: 50px;">
      </span>
      <span class="logo-lg">
      <img src="{{ asset('public/front') }}/images/saraswati-logo.png" alt="" style="max-width: 100%; max-height: 50px;">
      </span>
      </a>
      <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
      <i class="ri-record-circle-line"></i>
      </button>
   </div>
   <div id="scrollbar">
      <div class="container-fluid">
         <div id="two-column-menu">
         </div>
         <ul class="navbar-nav" id="navbar-nav">
            <li class="nav-item">
               <a class="nav-link menu-link" href="{{ url('dashboard') }}" >
               <i class="mdi mdi-speedometer"></i> <span data-key="t-dashboards">Dashboards</span>
               </a>
            </li>
            <!-- end Dashboard Menu -->
            <li class="nav-item">
               <a class="nav-link menu-link" href="{{ route('admin.online-registrations') }}" >
               <i class="mdi mdi-clipboard-text-outline"></i> <span data-key="t-online-registrations">Online Registrations</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link menu-link" href="{{ url('admin/banner') }}" >
               <i class="mdi mdi-view-grid-plus-outline"></i> <span data-key="t-apps">Banner</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link menu-link" href="#sidebarForms" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarForms">
               <i class="mdi mdi-form-select"></i> <span data-key="t-forms">Content Management</span>
               </a>
               <div class="collapse menu-dropdown" id="sidebarForms">
                  <ul class="nav nav-sm flex-column">
                     <li class="nav-item">
                        <a class="nav-link menu-link" href="{{ url('admin/aboutlist') }}" >
                        <i class="mdi mdi-view-carousel-outline"></i> <span data-key="t-layouts">About</span> 
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link menu-link" href="{{ url('admin/patrika-list') }}">
                        <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Patrika</span>
                        </a>
                     </li>  
                    <li class="nav-item">
                       <a class="nav-link menu-link" href="{{ url('admin/add-ncc') }}" >
                       <i class="mdi mdi-view-grid-plus-outline"></i> <span data-key="t-apps">NCC</span>
                       </a>
                    </li>                    
                     <li class="nav-item">
                        <a class="nav-link menu-link" href="{{ url('admin/student') }}">
                        <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Students</span>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link menu-link" href="{{ url('admin/gallerys') }}">
                        <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Gallery</span>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link menu-link" href="{{ url('admin/alumnis') }}">
                        <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Alumni</span>
                        </a>
                     </li>
                      <li class="nav-item">
                        <a class="nav-link menu-link" href="{{ url('admin/add-testimonial') }}">
                        <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Testimonials </span>
                        </a>
                     </li> 
                      <li class="nav-item">
                        <a class="nav-link menu-link" href="{{ url('admin/notification-list') }}">
                        <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Notifications </span>
                        </a>
                     </li>                      
                      <li class="nav-item">
                        <a class="nav-link menu-link" href="{{ url('admin/visionmission-list') }}">
                        <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Vision & Mission </span>
                        </a>
                     </li>
                     
                     <li class="nav-item">
                        <a class="nav-link menu-link" href="{{ url('admin/videolist') }}">
                        <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Video</span>
                        </a>
                     </li>
                  </ul>
               </div>
            </li>
            
            <li class="nav-item">
               <a class="nav-link menu-link" href="#faculty" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="faculty">
               <i class="mdi mdi-form-select"></i> <span data-key="t-forms">Faculty</span>
               </a>
               <div class="collapse menu-dropdown" id="faculty">
                  <ul class="nav nav-sm flex-column">
                     <li class="nav-item">
                        <a class="nav-link menu-link" href="{{ url('admin/add-faculty-category') }}" >
                        <i class="mdi mdi-view-carousel-outline"></i> <span data-key="t-layouts">Add Faculty Category</span> 
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link menu-link" href="{{ url('admin/faculty-list') }}">
                        <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Add Faculty</span>
                        </a>
                     </li>

                  </ul>
               </div>
            </li>
            <li class="nav-item">
               <a class="nav-link menu-link" href="{{ url('admin/admission-process-list') }}">
               <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Admission Process</span>
               </a>
            </li>            
            <li class="nav-item">
               <a class="nav-link menu-link" href="{{ url('admin/event-list') }}">
               <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Event</span>
               </a>
            </li>            
            <li class="nav-item">
               <a class="nav-link menu-link" href="#messages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarForms">
               <i class="mdi mdi-form-select"></i> <span data-key="t-forms">Messages</span>
               </a>
               <div class="collapse menu-dropdown" id="messages">
                  <ul class="nav nav-sm flex-column">
                     <li class="nav-item">
                        <a class="nav-link menu-link" href="{{ url('admin/director-message-list') }}">
                        <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Director Message</span>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link menu-link" href="{{ url('admin/vice-principal-message-list') }}">
                        <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Principal Message</span>
                        </a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link menu-link" href="{{ url('admin/add-exdirector') }}" >
                       <i class="mdi mdi-view-grid-plus-outline"></i> <span data-key="t-apps">Ex-Director</span>
                       </a>
                     </li>                     
                </ul>
               </div>
            </li> 
            <li class="nav-item">
               <a class="nav-link menu-link" href="{{ url('admin/create-social-activities') }}">
               <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Social Activities</span>
               </a>
            </li>     
            <li class="nav-item">
               <a class="nav-link menu-link" href="{{ url('admin/add-ncc') }}" >
               <i class="mdi mdi-view-grid-plus-outline"></i> <span data-key="t-apps">NCC</span>
               </a>
            </li>           
            <li class="nav-item">
               <a class="nav-link menu-link" href="{{ url('admin/associate-member-list') }}">
               <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Associate Members</span>
               </a>
            </li>  
            <li class="nav-item">
               <a class="nav-link menu-link" href="{{ url('admin/achievement-list') }}" >
               <i class="mdi mdi-view-grid-plus-outline"></i> <span data-key="t-apps">Achievement</span>
               </a>
            </li>           
            <li class="nav-item">
               <a class="nav-link menu-link" href="{{ url('admin/create-infrastructure') }}" >
               <i class="mdi mdi-view-grid-plus-outline"></i> <span data-key="t-apps">Add infrastructure</span>
               </a>
            </li>                
            <li class="nav-item">
               <a class="nav-link menu-link" href="{{ url('admin/toppers') }}">
               <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Toppers List</span>
               </a>
            </li>            
            <li class="nav-item">
               <a class="nav-link menu-link" href="{{ url('admin/blog-list') }}">
               <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Blog</span>
               </a>
            </li>
            <li class="nav-item">
                        <a class="nav-link menu-link" href="{{ url('admin/contact-list') }}">
                        <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Contact List</span>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link menu-link" href="{{ url('admin/query-list') }}">
                        <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Query List</span>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link menu-link" href="{{ url('admin/apply-list') }}">
                        <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Apply List</span>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link menu-link" href="{{ url('admin/helpdesk-list') }}">
                        <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Help desk List</span>
                        </a>
                     </li>
            {{--  
            <li class="nav-item">
               <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
               <i class="mdi mdi-share-variant-outline"></i> <span data-key="t-multi-level">Multi Level</span>
               </a>
               <div class="collapse menu-dropdown" id="sidebarMultilevel">
                  <ul class="nav nav-sm flex-column">
                     <li class="nav-item">
                        <a href="#" class="nav-link" data-key="t-level-1.1"> Level 1.1 </a>
                     </li>
                     <li class="nav-item">
                        <a href="#sidebarAccount" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAccount" data-key="t-level-1.2"> Level 1.2
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarAccount">
                           <ul class="nav nav-sm flex-column">
                              <li class="nav-item">
                                 <a href="#" class="nav-link" data-key="t-level-2.1"> Level 2.1 </a>
                              </li>
                              <li class="nav-item">
                                 <a href="#sidebarCrm" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCrm" data-key="t-level-2.2"> Level 2.2
                                 </a>
                                 <div class="collapse menu-dropdown" id="sidebarCrm">
                                    <ul class="nav nav-sm flex-column">
                                       <li class="nav-item">
                                          <a href="#" class="nav-link" data-key="t-level-3.1"> Level 3.1 </a>
                                       </li>
                                       <li class="nav-item">
                                          <a href="#" class="nav-link" data-key="t-level-3.2"> Level 3.2 </a>
                                       </li>
                                    </ul>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </li>
                  </ul>
               </div>
            </li>
            --}}
         </ul>
      </div>
   </div>
   <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InfrastructureImageController;
use App\Http\Controllers\SocialactivitiesImageController;
use App\Http\Controllers\EventImageController;
use App\Http\Controllers\AchievementImageController;
use App\Http\Controllers\EventController;
use App\Models\Topper;
use App\Models\Infrastructure;
use App\Models\InfrastructureImage;
use App\Models\Socialactivities;
use App\Models\SocialactivitiesImage;
use App\Models\Feedback;
use App\Models\Ncc;
use App\Models\NccImage;
use App\Models\Nccgallery;
use App\Models\Exdirector;
use App\Models\Event;
use App\Models\EventImage;
use App\Models\Achievement;
use App\Models\AchievementImage;
use App\Models\Faculty;
use App\Models\Facultycategory;
use App\Models\Admissionprocess;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('admin-login',[AdminController::class, 'Admin'])->name('Admin');

Route::Post('loginchecks',[AdminController::class, 'Loginchecks'])->name('loginchecks');
Route::get('logout',[AdminController::class, 'Logout'])->name('logout');
Route::group(['middleware' => ['adminchack']], function () {
//Route::get('dashboard',[AdminController::class,'dashboard'])->name('dashboard');
Route::get('dashboard',[AdminController::class, 'Dashboard'])->name('dashboard');
//banner
Route::get('admin/banner',[AdminController::class, 'banner'])->name('banner');
Route::Post('admin/addbanner',[AdminController::class, 'addbanner'])->name('addbanner');
Route::get('admin/EditBanner/{id}',[AdminController::class, 'EditBanner'])->name('EditBanner');
Route::get('admin/deletebanner/{id}',[AdminController::class, 'deletebanner'])->name('deletebanner');
//About
Route::get('admin/addabout',[AdminController::class, 'addabout'])->name('addabout');
Route::Post('admin/addabouts',[AdminController::class, 'Createabout'])->name('addabouts');
Route::get('admin/aboutlist',[AdminController::class, 'aboutlist'])->name('aboutlist');
Route::get('admin/deleteabout/{id}',[AdminController::class, 'deleteabout'])->name('deleteabout');
Route::get('admin/editabout/{id}',[AdminController::class, 'Editabout'])->name('editabout');
Route::post('admin/editabouts',[AdminController::class, 'aboutUpdate'])->name('editabouts');
//faculty
Route::get('admin/faculty',[AdminController::class, 'faculty'])->name('faculty');
Route::Post('admin/addfaculty',[AdminController::class, 'addfaculty'])->name('addfaculty');
Route::get('admin/Editfaculty/{id}',[AdminController::class, 'Editfaculty'])->name('Editfaculty');
Route::get('admin/deletefaculty/{id}',[AdminController::class, 'deletefaculty'])->name('deletefaculty');
//Students
Route::get('admin/student',[AdminController::class, 'student'])->name('student');
Route::Post('admin/addstudent',[AdminController::class, 'addstudent'])->name('addstudent');
Route::get('admin/Editstudent/{id}',[AdminController::class, 'Editstudent'])->name('Editstudent');
Route::get('admin/deletestudent/{id}',[AdminController::class, 'deletestudent'])->name('deletestudent');
//gallery
Route::get('admin/gallerys',[AdminController::class, 'gallerys'])->name('gallerys');
Route::Post('admin/addgallery',[AdminController::class, 'addgallery'])->name('addgallery');
Route::get('admin/Editgallery/{id}',[AdminController::class, 'Editgallery'])->name('Editgallery');
Route::get('admin/deletegallery/{id}',[AdminController::class, 'deletegallery'])->name('deletegallery');
//Alumnis
Route::get('admin/alumnis',[AdminController::class, 'alumnis'])->name('alumnis');
Route::Post('admin/addalumni',[AdminController::class, 'addalumni'])->name('addalumni');
Route::get('admin/Editalumni/{id}',[AdminController::class, 'Editalumni'])->name('Editalumni');
Route::get('admin/deletealumni/{id}',[AdminController::class, 'deletealumni'])->name('deletealumni');





//course
Route::get('admin/addcourse',[AdminController::class, 'addcourse'])->name('addcourse');
Route::Post('admin/addcourses',[AdminController::class, 'Createcourse'])->name('addcourses');
Route::get('admin/course-list',[AdminController::class, 'courselist'])->name('course-list');
Route::get('admin/deletecourse/{id}',[AdminController::class, 'deletecourse'])->name('deletecourse');
Route::get('admin/editcourse/{id}',[AdminController::class, 'Editcourse'])->name('editcourse');
Route::post('admin/editcourses',[AdminController::class, 'courseUpdate'])->name('editcourses');
//Blog
Route::get('admin/addblog',[AdminController::class, 'addblog'])->name('addblog');
Route::Post('admin/addblogs',[AdminController::class, 'Createblog'])->name('addblogs');
Route::get('admin/blog-list',[AdminController::class, 'bloglist'])->name('blog-list');
Route::get('admin/deleteblog/{id}',[AdminController::class, 'deleteblog'])->name('deleteblog');
Route::get('admin/editblog/{id}',[AdminController::class, 'Editblog'])->name('editblog');
Route::post('admin/editblogs',[AdminController::class, 'blogUpdate'])->name('editblogs');




//Toppers 
Route::get('/admin/toppers', [AdminController::class, 'toppers']);
Route::get('/admin/create-toppers', [AdminController::class, 'create_toppers']);
Route::post('/admin/store-toppers', [AdminController::class, 'store_toppers']);
Route::get('/admin/edit-toppers/{id}', [AdminController::class, 'edit_toppers']);
Route::put('/admin/update-toppers/{id}', [AdminController::class, 'update_toppers']);
Route::get('/admin/delete-toppers/{id}', [AdminController::class, 'destroy_toppers']);

//Notification
Route::get('admin/addnotification',[AdminController::class, 'addnotification'])->name('addnotification');
Route::Post('admin/addnotifications',[AdminController::class, 'Createnotification'])->name('addnotifications');
Route::get('admin/notification-list',[AdminController::class, 'notificationlist'])->name('notification-list');
Route::get('admin/deletenotification/{id}',[AdminController::class, 'deletenotification'])->name('deletenotification');
Route::get('admin/editnotification/{id}',[AdminController::class, 'Editnotification'])->name('editnotification');
Route::post('admin/editnotifications',[AdminController::class, 'notificationUpdate'])->name('editnotifications');

//Vision & Mission 
Route::get('admin/addvisionmission',[AdminController::class, 'addvisionmission'])->name('addvisionmission');
Route::Post('admin/addvisionmissions',[AdminController::class, 'Createvisionmission'])->name('addvisionmissions');
Route::get('admin/visionmission-list',[AdminController::class, 'visionmissionlist'])->name('visionmission-list');
Route::get('admin/deletevisionmission/{id}',[AdminController::class, 'deletevisionmission'])->name('deletevisionmission');
Route::get('admin/editvisionmission/{id}',[AdminController::class, 'Editvisionmission'])->name('editvisionmission');
Route::post('admin/editvisionmissions',[AdminController::class, 'visionmissionUpdate'])->name('editvisionmissions');



//Director's Message
Route::get('admin/add-director-message',[AdminController::class, 'adddirectormessage']);
Route::Post('admin/add-director-message',[AdminController::class, 'Createdirectormessage']);
Route::get('admin/director-message-list',[AdminController::class, 'directormessagelist']);
Route::get('admin/delete-director-message/{id}',[AdminController::class, 'deletedirectormessage']);
Route::get('admin/edit-director-message/{id}',[AdminController::class, 'Editdirectormessage']);
Route::post('admin/edit-director-message',[AdminController::class, 'directormessageUpdate']);

//Vice Principal's Message
Route::get('admin/add-vice-principal-message',[AdminController::class, 'addvpmessage']);
Route::Post('admin/add-vice-principal-message',[AdminController::class, 'Createvpmessage']);
Route::get('admin/vice-principal-message-list',[AdminController::class, 'vpmessagelist']);
Route::get('admin/delete-vice-principal-message/{id}',[AdminController::class, 'deletevpmessage']);
Route::get('admin/edit-vice-principal-message/{id}',[AdminController::class, 'Editvpmessage']);
Route::post('admin/edit-vice-principal-message',[AdminController::class, 'vpmessageUpdate']);

//Associate Members
Route::get('admin/add-associate-member',[AdminController::class, 'addassociatemember']);
Route::Post('admin/add-associate-member',[AdminController::class, 'Createassociatemember']);
Route::get('admin/associate-member-list',[AdminController::class, 'associatememberlist']);
Route::get('admin/delete-associate-member/{id}',[AdminController::class, 'deleteassociatemember']);
Route::get('admin/edit-associate-member/{id}',[AdminController::class, 'Editassociatemember']);
Route::post('admin/edit-associate-member',[AdminController::class, 'associatememberUpdate']);

Route::get('admin/contact-list',[AdminController::class, 'contactlist'])->name('contactlist');
Route::get('admin/query-list',[AdminController::class, 'querylist'])->name('query-list');

Route::get('admin/apply-list',[AdminController::class, 'applylist'])->name('apply-list');

//video
Route::get('admin/addvideo',[AdminController::class, 'addvideo'])->name('addvideo');
Route::Post('admin/addvideos',[AdminController::class, 'Createvideo'])->name('addvideos');
Route::get('admin/videolist',[AdminController::class, 'videolist'])->name('videolist');
Route::get('admin/deletevideo/{id}',[AdminController::class, 'deletevideo'])->name('deletevideo');
Route::get('admin/editvideo/{id}',[AdminController::class, 'Editvideo'])->name('editvideo');
Route::post('admin/editvideos',[AdminController::class, 'videoUpdate'])->name('editvideos');

Route::get('admin/helpdesk-list',[AdminController::class, 'helpdesklist'])->name('helpdesk-list');

// Online Registrations
Route::get('admin/online-registrations',[AdminController::class, 'online_registrations'])->name('admin.online-registrations');
Route::get('admin/online-registration/view/{id}',[AdminController::class, 'view_online_registration'])->name('admin.view-online-registration');

});

Route::get('/',[App\Http\Controllers\IndexfrontendController::class, 'Index'])->name('home');
Route::get('about',[App\Http\Controllers\IndexfrontendController::class, 'About'])->name('about');
Route::get('gly',[App\Http\Controllers\IndexfrontendController::class, 'gly'])->name('gly');

Route::get('admission-process',[App\Http\Controllers\IndexfrontendController::class, 'admission_process']);

Route::get('school-ex-director',[App\Http\Controllers\IndexfrontendController::class, 'school_ex_director']);

Route::get('ncc',[App\Http\Controllers\IndexfrontendController::class, 'ncc']);
Route::get('infrastructure',[App\Http\Controllers\IndexfrontendController::class, 'infrastructure']);

Route::get('mission-vision',[App\Http\Controllers\IndexfrontendController::class, 'mission_vision'])->name('mission-vision');

Route::get('director-message',[App\Http\Controllers\IndexfrontendController::class, 'director_message']);

Route::get('principle-message',[App\Http\Controllers\IndexfrontendController::class, 'principle_message']);

Route::get('apply-now',[App\Http\Controllers\IndexfrontendController::class, 'applynow'])->name('apply-now');

Route::get('contact',[App\Http\Controllers\IndexfrontendController::class, 'Contact'])->name('contact');
Route::Post('createcontact',[App\Http\Controllers\IndexfrontendController::class, 'createcontact'])->name('createcontact');
Route::get('faculty',[App\Http\Controllers\IndexfrontendController::class, 'Faculty'])->name('faculty');
Route::get('association-member',[App\Http\Controllers\IndexfrontendController::class, 'association_member'])->name('association-member');

Route::get('school-uniform',[App\Http\Controllers\IndexfrontendController::class, 'school_uniform'])->name('school-uniform');

Route::get('vidya-bharti-lakshay',[App\Http\Controllers\IndexfrontendController::class, 'vidya_bharti_lakshay'])->name('vidya-bharti-lakshay');

Route::get('students',[App\Http\Controllers\IndexfrontendController::class, 'Students'])->name('students');
Route::get('gallery',[App\Http\Controllers\IndexfrontendController::class, 'gallery'])->name('gallery');
Route::get('achievement',[App\Http\Controllers\IndexfrontendController::class, 'achievement'])->name('achievement');
Route::get('academic-streams',[App\Http\Controllers\IndexfrontendController::class, 'academic_streams'])->name('academic-streams');


Route::get('alumni',[App\Http\Controllers\IndexfrontendController::class, 'alumni'])->name('alumni');

Route::get('social-activities/{id}',[App\Http\Controllers\IndexfrontendController::class, 'social_activities']);

Route::get('event-details/{slug}',[App\Http\Controllers\IndexfrontendController::class, 'event_detail']);

Route::get('fee-payment',[App\Http\Controllers\IndexfrontendController::class, 'feepayment'])->name('fee-payment');

Route::get('patrika',[App\Http\Controllers\IndexfrontendController::class, 'patrika'])->name('patrika');

Route::get('fee-structure',[App\Http\Controllers\IndexfrontendController::class, 'feestructure'])->name('fee-structure');
Route::get('fund-donation',[App\Http\Controllers\IndexfrontendController::class, 'funddonation'])->name('fund-donation');
Route::get('time-contribution',[App\Http\Controllers\IndexfrontendController::class, 'timecontribution'])->name('time-contribution');
Route::get('other-contribution',[App\Http\Controllers\IndexfrontendController::class, 'othercontribution'])->name('other-contribution');


Route::get('facultulist',[App\Http\Controllers\IndexfrontendController::class, 'facultulist']);

Route::get('why-janhit',[App\Http\Controllers\IndexfrontendController::class, 'whyjanhit'])->name('why-janhit');
Route::get('vision-mission',[App\Http\Controllers\IndexfrontendController::class, 'visionmission'])->name('vision-mission');

Route::get('event',[App\Http\Controllers\IndexfrontendController::class, 'Event'])->name('event');
Route::get('course-details/{slug}',[App\Http\Controllers\IndexfrontendController::class, 'Coursedetail'])->name('course-detail');
Route::get('blogs',[App\Http\Controllers\IndexfrontendController::class, 'Blog'])->name('blogs');
Route::get('blog-details/{slug}',[App\Http\Controllers\IndexfrontendController::class, 'Blogdetail'])->name('blog-details');
Route::Post('createquery',[App\Http\Controllers\IndexfrontendController::class, 'createquery'])->name('createquery');
Route::Post('createapply',[App\Http\Controllers\IndexfrontendController::class, 'createapply'])->name('createapply');
Route::Post('createhelpdesk',[App\Http\Controllers\IndexfrontendController::class, 'createhelpdesk'])->name('createhelpdesk');



//Vidya Bharti Lakshay
Route::get('admin/add-vidya-bharti-lakshay',[AdminController::class, 'addvbl']);

Route::Post('admin/add-vidya-bharti-lakshay',[AdminController::class, 'Createvbl']);

Route::get('admin/vidya-bharti-lakshay-list',[AdminController::class, 'vbllist']);

Route::get('admin/delete-vidya-bharti-lakshay/{id}',[AdminController::class, 'deletevbl']);

Route::get('admin/edit-vidya-bharti-lakshay/{id}',[AdminController::class, 'Editvbl']);

Route::post('admin/edit-vidya-bharti-lakshay',[AdminController::class, 'vblUpdate']);

//Patrika 
Route::get('admin/add-patrika',[AdminController::class, 'addpatrika']);

Route::Post('admin/add-patrika',[AdminController::class, 'Createpatrika']);

Route::get('admin/patrika-list',[AdminController::class, 'patrikalist']);

Route::get('admin/delete-patrika/{id}',[AdminController::class, 'deletepatrika']);

Route::get('admin/edit-patrika/{id}',[AdminController::class, 'Editpatrika']);

Route::post('admin/edit-patrika',[AdminController::class, 'patrikaUpdate']);



//infrastructure
Route::get('/admin/infrastructure', [AdminController::class, 'infrastructure']);

Route::get('/admin/create-infrastructure', [AdminController::class, 'create_infrastructure']);

Route::post('/admin/store-infrastructure', [AdminController::class, 'store_infrastructure']);

Route::get('/admin/edit-infrastructure/{id}', [AdminController::class, 'edit_infrastructure']);

Route::put('/admin/update-infrastructure/{id}', [AdminController::class, 'update_infrastructure']);

Route::get('/admin/delete-infrastructure/{id}', [AdminController::class, 'destroy_infrastructure']);


// infrastructure Images
Route::get('/admin/infrastructure/{infrastructureId}/upload', [InfrastructureImageController::class, 'infratech']);
Route::post('/admin/infrastructure/{infrastructureId}/upload', [InfrastructureImageController::class, 'store']);
Route::get('/admin/infrastructure-image/{infrastructureImageId}/delete', [InfrastructureImageController::class, 'destroy']);


//Social Activities 
Route::get('/admin/social-activities', [AdminController::class, 'social_activities']);
Route::get('/admin/create-social-activities', [AdminController::class, 'create_social_activities']);
Route::post('/admin/store-social-activities', [AdminController::class, 'store_social_activities']);
Route::get('/admin/edit-social-activities/{id}', [AdminController::class, 'edit_social_activities']);
Route::put('/admin/update-social-activities/{id}', [AdminController::class, 'update_social_activities']);
Route::get('/admin/delete-social-activities/{id}', [AdminController::class, 'destroy_social_activities']);

// Social Activities Images 
Route::get('/admin/social-activities/{socialactivitiesId}/upload', [SocialactivitiesImageController::class, 'index']);
Route::post('/admin/social-activities/{socialactivitiesId}/upload', [SocialactivitiesImageController::class, 'store']);
Route::get('/admin/social-activities-image/{socialactivitiesImageId}/delete', [SocialactivitiesImageController::class, 'destroy']);


//Feedback 
Route::get('/admin/testimonial', [AdminController::class, 'testimonial']);
Route::get('/admin/add-testimonial', [AdminController::class, 'create_testimonial']);
Route::post('/admin/store-testimonial', [AdminController::class, 'store_testimonial']);
Route::get('/admin/edit-testimonial/{id}', [AdminController::class, 'edit_testimonial']);
Route::put('/admin/update-testimonial/{id}', [AdminController::class, 'update_testimonial']);
Route::get('/admin/delete-testimonial/{id}', [AdminController::class, 'destroy_testimonial']);


//Ncc
Route::get('/admin/ncc', [AdminController::class, 'ncc']);
Route::get('/admin/add-ncc', [AdminController::class, 'create_ncc']);
Route::post('/admin/store-ncc', [AdminController::class, 'store_ncc']);
Route::get('/admin/edit-ncc/{id}', [AdminController::class, 'edit_ncc']);
Route::put('/admin/update-ncc/{id}', [AdminController::class, 'update_ncc']);
Route::get('/admin/delete-ncc/{id}', [AdminController::class, 'destroy_ncc']);


//Ncc Gallery
Route::get('/admin/ncc-gallery-list', [AdminController::class, 'ncc_gallery_list']);

Route::get('/admin/add-ncc-gallery', [AdminController::class, 'create_ncc_gallery']);

Route::post('/admin/store-ncc-gallery', [AdminController::class, 'store_ncc_gallery']);

Route::get('/admin/edit-ncc-gallery/{id}', [AdminController::class, 'edit_ncc_gallery']);

Route::put('/admin/update-ncc-gallery/{id}', [AdminController::class, 'update_ncc_gallery']);

Route::get('/admin/delete-ncc-gallery/{id}', [AdminController::class, 'destroy_ncc_gallery']);


//Exdirector
Route::get('/admin/exdirector', [AdminController::class, 'exdirector']);

Route::get('/admin/add-exdirector', [AdminController::class, 'add_exdirector']);

Route::post('/admin/store-exdirector', [AdminController::class, 'store_exdirector']);

Route::get('/admin/edit-exdirector/{id}', [AdminController::class, 'edit_exdirector']);

Route::put('/admin/update-exdirector/{id}', [AdminController::class, 'update_exdirector']);

Route::get('/admin/delete-exdirector/{id}', [AdminController::class, 'destroy_exdirector']);

//Events 
Route::get('/admin/event-list', [AdminController::class, 'event_list']);
Route::get('/admin/add-event', [AdminController::class, 'add_event']);
Route::post('/admin/store-event', [AdminController::class, 'store_event']);
Route::get('/admin/edit-event/{id}', [AdminController::class, 'edit_event']);
Route::put('/admin/update-event/{id}', [AdminController::class, 'update_event']);
Route::get('/admin/delete-event/{id}', [AdminController::class, 'destroy_event']);

// Events Images 
Route::get('/admin/event-list/{eventId}/upload', [EventImageController::class, 'index']);
Route::post('/admin/event-list/{eventId}/upload', [EventImageController::class, 'store']);
Route::get('/admin/event-image/{eventImageId}/delete', [EventImageController::class, 'destroy']);


//Achievement
Route::get('/admin/achievement-list', [AdminController::class, 'achievement_list']);
Route::get('/admin/add-achievement', [AdminController::class, 'add_achievement']);
Route::post('/admin/store-achievement', [AdminController::class, 'store_achievement']);
Route::get('/admin/edit-achievement/{id}', [AdminController::class, 'edit_achievement']);
Route::put('/admin/update-achievement/{id}', [AdminController::class, 'update_achievement']);
Route::get('/admin/delete-achievement/{id}', [AdminController::class, 'destroy_achievement']);
// Achievement Images
Route::get('/admin/achievement-list/{achievementId}/upload', [AchievementImageController::class, 'index']);
Route::post('/admin/achievement-list/{achievementId}/upload', [AchievementImageController::class, 'store']);
Route::get('/admin/achievement-image/{achievementImageId}/delete', [AchievementImageController::class, 'destroy']);


//Faculty Category
Route::get('/admin/faculty-category-list', [AdminController::class, 'faculty_category_list']);

Route::get('/admin/add-faculty-category', [AdminController::class, 'add_faculty_category']);

Route::post('/admin/store-faculty-category', [AdminController::class, 'store_faculty_category']);

Route::get('/admin/edit-faculty-category/{id}', [AdminController::class, 'edit_faculty_category']);

Route::put('/admin/update-faculty-category/{id}', [AdminController::class, 'update_faculty_category']);

Route::get('/admin/delete-faculty-category/{id}', [AdminController::class, 'destroy_faculty_category']);

//Faculty
Route::get('/admin/faculty-list', [AdminController::class, 'faculty_list']);

Route::get('/admin/add-faculty', [AdminController::class, 'add_faculty']);

Route::post('/admin/store-faculty', [AdminController::class, 'store_faculty']);

Route::get('/admin/edit-faculty/{id}', [AdminController::class, 'edit_faculty']);

Route::put('/admin/update-faculty/{id}', [AdminController::class, 'update_faculty']);

Route::get('/admin/delete-faculty/{id}', [AdminController::class, 'destroy_faculty']);

//Admission Pocess
Route::get('/admin/admission-process-list', [AdminController::class, 'admission_process_list']);

Route::get('/admin/add-admission-process', [AdminController::class, 'add_admission_process']);

Route::post('/admin/store-admission-process', [AdminController::class, 'store_admission_process']);

Route::get('/admin/edit-admission-process/{id}', [AdminController::class, 'edit_admission_process']);

Route::put('/admin/update-admission-process/{id}', [AdminController::class, 'update_admission_process']);

Route::get('/admin/delete-admission-process/{id}', [AdminController::class, 'destroy_admission_process']);

// Fee Structure
Route::get('/admin/fee-structure-list', [AdminController::class, 'fee_structure_list']);
Route::get('/admin/add-fee-structure', [AdminController::class, 'add_fee_structure']);
Route::post('/admin/store-fee-structure', [AdminController::class, 'store_fee_structure']);
Route::get('/admin/edit-fee-structure/{id}', [AdminController::class, 'edit_fee_structure']);
Route::put('/admin/update-fee-structure/{id}', [AdminController::class, 'update_fee_structure']);
Route::get('/admin/delete-fee-structure/{id}', [AdminController::class, 'destroy_fee_structure']);

// Bank Details
Route::get('/admin/bank-details', [AdminController::class, 'bank_details']);
Route::post('/admin/update-bank-details', [AdminController::class, 'update_bank_details']);










Route::get('/registration/online', function () { return view('front.registration-online'); });
Route::post('/registration/online', [App\Http\Controllers\OnlineRegistrationController::class, 'store']);
Route::get('/registration/download', function () { return view('front.registration-download'); });

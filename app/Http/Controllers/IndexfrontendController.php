<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\customers;
use App\Models\admin;
use App\Models\category;
use App\Models\categorymaster;
use Session;
use DB;
use Validator;
class IndexfrontendController extends Controller
{

    protected $admin;
    public function __construct()
    {
         $this->admin = new admin();
    }
    public function Index(){
        return view('front.index');
    }
    public function gly(){
        return view('front.gly');
    }    
    public function achievement()
    {
    $achievement = DB::table('achievements')->first();
    $achievementImages = DB::table('achievement_images')->where('achievement_id', $achievement->id)->get();
    return view('front.achievement', compact('achievement' , 'achievementImages'));
    } 
    public function academic_streams(){
        return view('front.academic-streams');
    }     
    public function About(){
        return view('front.about');
    }
    public function mission_vision(){
        return view('front.mission-vision');
    }
    public function school_ex_director(){
        return view('front.school-ex-director');
    }

    public function ncc()
    {       
       $ncc = DB::table('nccs')->first();
       $nccgalleries = DB::table('nccgalleries')->get();
       return view('front.ncc', compact('ncc', 'nccgalleries'));
    }     


    public function infrastructure()
    {       
       $infrastructures = DB::table('infrastructures')->first();
       $infrastructureImages = DB::table('infrastructure_images')->where('infrastructure_id', $infrastructures->id)->get();
       return view('front.infrastructure', compact('infrastructures' , 'infrastructureImages'));
    }     
    
    
    public function vidya_bharti_lakshay(){
        return view('front.vidya-bharti-lakshay');
    }     
    
    public function association_member(){
        return view('front.association-member');
    } 
     public function school_uniform(){
        return view('front.school-uniform');
    } 
    public function director_message(){
        return view('front.director-message');
    }    
    public function principle_message(){
        return view('front.principle-message');
    }        
    public function applynow(){
        return view('front.apply-now');
    }    
    public function Faculty(){
        return view('front.faculty');
    }
    public function Students(){
        return view('front.students');
    }
   
    public function alumni(){
        return view('front.alumni');
    }
    
    public function gallery(){
        return view('front.photogallery');
    }
    

    public function feepayment(){
        $bank = \App\Models\BankDetail::first();
        return view('front.fee-payment', compact('bank'));
    }
    
    public function social_activities($id)
    {       
        $socialactivities = DB::table('socialactivities')->where('slug',$id)->first();
        $socialactivitiesImages = DB::table('socialactivities_images')->where('socialactivities_id', $socialactivities->id)->get();
        return view('front.social-activities', compact('socialactivities' , 'socialactivitiesImages'));
    }   
    
    public function patrika(){
        return view('front.patrika');
    }
    public function admission_process(){
        return view('front.admission-process');
    }    
    public function facultulist(){
        return view('front.facultulist');
    }    
     public function feestructure(){
        $feedata = \App\Models\Feestructure::first();
        return view('front.fee-structure', compact('feedata'));
    }
    public function Oldfeestructure(){
        return view('front.Old-feestructure');
    }
      public function funddonation(){
        return view('front.fund-donation');
    }
      public function timecontribution(){
        return view('front.time-contribution');
    }
   public function othercontribution(){
        return view('front.other-contribution');
    }    
    
    public function visionmission(){
        return view('front.vision-mission');
    }

 
    public function Event()
    {       
       return view('front.event');
    }

    

    public function event_detail($id){
       $event = DB::table('events')->where('slug',$id)->first();
       return view('front.event-details', compact('event'));
    }    
    public function Blog(){
        return view('front.blog');
    }
    
    public function Blogdetail($slug){
       $result['blogdetails'] = $this->admin->getdatabycolumansingal('blog','slug',$slug);
        return view('front.blog-details',$result);
    }
    public function Coursedetail($slug){
       $result['coursedetails'] = $this->admin->getdatabycolumansingal('course','slug',$slug);
        return view('front.course-detail',$result);
    }
    
    //Contact
   public function Contact(){
        return view('front.contact');
    } 
    public function createcontact(Request $request){
    $this->validate($request, [
        'name' => 'required',
        'mobile' => 'required',
        'email' => 'required',
    ]);
    $data['name'] = $request->name;
    $data['mobile'] = $request->mobile;
    $data['email'] = $request->email;
    $data['subject'] = $request->subject;
    $data['message'] = $request->message;
  
    $result = $this->admin->insertdatagetid('contactquery', $data);
     if($result > 0){
            return redirect()->back()->with('success', 'Contact Query Successfully !');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    //End Contact
    
    //Query
  
    public function createquery(Request $request){
       // dd($request);
    $this->validate($request, [
        'mobile' => 'required',
        'email' => 'required',
    ]);
    $data['mobile'] = $request->mobile;
    $data['email'] = $request->email;
    $data['message'] = $request->message;
  
    $result = $this->admin->insertdatagetid('queries', $data);
     if($result > 0){
            return redirect()->back()->with('success', 'Contact Query Successfully !');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    //End Query
    public function createapply(Request $request){
       // dd($request);
    $this->validate($request, [
        'name' => 'required',
        'email' => 'required',
        'mobile' => 'required',
        'message' => 'required',
    ]);
    $data['name'] = $request->name;
    $data['email'] = $request->email;
    $data['mobile'] = $request->mobile;
    $data['message'] = $request->message;
    $data['course'] = $request->course;
  
    $result = $this->admin->insertdatagetid('applynow', $data);
     if($result > 0){
            return redirect()->back()->with('success', 'Contact Query Successfully !');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    //End Query
    
    public function createhelpdesk(Request $request){
       // dd($request);
    $this->validate($request, [
        'name' => 'required',
        'email' => 'required',
        'mobile' => 'required',
        'course' => 'required',
    ]);
    $data['name'] = $request->name;
    $data['email'] = $request->email;
    $data['mobile'] = $request->mobile;
    $data['course'] = $request->course;
  
    $result = $this->admin->insertdatagetid('helpdesk', $data);
     if($result > 0){
            return redirect()->back()->with('success', 'Contact Query Successfully !');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    
    
    
   
}

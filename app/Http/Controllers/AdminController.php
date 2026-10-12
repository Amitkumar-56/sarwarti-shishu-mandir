<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\SocialactivitiesImageController;
use App\Http\Controllers\EventImageController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AchievementImageController;
use App\Models\admin;
use App\Models\Ncc;
use App\Models\NccImage;
use App\Models\Nccgallery;
use App\Models\Topper;
use App\Models\Feedback;
use App\Models\Notification;
use App\Models\Socialactivities;
use App\Models\SocialactivitiesImage;
use App\Models\Infrastructure;
use App\Models\InfrastructureImage;
use App\Models\Exdirector;
use App\Models\Event;
use App\Models\EventImage;
use App\Models\Achievement;
use App\Models\AchievementImage;
use App\Models\Faculty;
use App\Models\Facultycategory;
use App\Models\Admissionprocess;
use App\Models\Feestructure;
use App\Models\BankDetail;
use Validator;
use Session;
use DB;
class AdminController extends Controller
{
    //auto load function
    protected $admin;
    public function __construct()
    {
         $this->admin = new admin();
    }
   public function raj(){

       return 'hello';
   }
   //admin login
   public function Admin(){

       return view('admin.login');
   }

   public function Loginchecks(Request $request){
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required',
        ]);

        $chack = DB::table('admin')->where(['email'=>$request->email,'password'=>$request->password])->first();
        if(!empty($chack)){

            session::put('id',$chack->id);
            return redirect('dashboard');
        } else {
            return redirect()->back()->with('success','Username & Password Not Match!');
        }

    }
    public function Dashboard(){
        $recent_registrations = \App\Models\OnlineRegistration::orderBy('created_at', 'desc')->take(5)->get();
        $total_registrations = \App\Models\OnlineRegistration::count();
        return view('admin.dashboard', compact('recent_registrations', 'total_registrations'));
    }

    public function Logout(){
        session()->forget('id');
        // return Redirect::to('admin');
        return redirect()->route('Admin');
     }
    // Add Banner
     public function banner(){
        $table = "banner";
        $result['banner'] = $this->admin->GetallData($table);
        return view('admin.banner.banner',$result)->with('i');
    }
    public function addbanner(Request $request){
        if(empty($request->id)){
                if (request()->hasFile('thumbnail')) {
                    $thumbnail = $request->file('thumbnail');
                    $thumbnail1 = "thumbnail".time().'.'.$thumbnail->getClientOriginalExtension();
                    $destinationPath = public_path('/admin/images');
                    $thumbnail->move($destinationPath, $thumbnail1);
                    $data['thumbnail'] = $thumbnail1;
                }
                
                $table = "banner";
                $result = $this->admin->insertdata($table, $data);
                if ($result==1) {
                    return response()->json(['status'=>200,'success'=>'Banner Successfully Create!']);
                } else {
                    return response()->json(['status'=>200,'success'=>'Query Not Run!']);
                }
            }
         else {
            if (request()->hasFile('thumbnail')) {
                $thumbnail = $request->file('thumbnail');
                $thumbnail1 = "thumbnail".time().'.'.$thumbnail->getClientOriginalExtension();
                $destinationPath = public_path('/admin/images');
                $thumbnail->move($destinationPath, $thumbnail1);
                $data['thumbnail'] = $thumbnail1;
            }
            $table = "banner";
            $result = $this->admin->UpdateItem($table,$request->id,$data);
            if ($result==1) {
                return response()->json(['status'=>200,'success'=>'Banner Successfully Update!']);
            } else {
                return response()->json(['status'=>200,'success'=>'Query Not Run!']);
            }
        }
    }

    public function EditBanner($id){
       $banner = $this->admin->EditeItem('banner',$id);
       return response()->json(['status'=>200,"data"=>$banner]);
    }

    public function deletebanner($id){
        $result = $this->admin->RemoveItem('banner',$id);
        if($result==1){
            return redirect()->back()->with('success', 'Remove Record Successfully!');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    //End Banner
    //About
    public function aboutlist(){
        $result['aboutlist'] = $this->admin->GetallData('about');
        return view('admin.about.aboutlist',$result)->with('i');
    }
    
    public function addabout(){
        $table = "about";
        $result['about'] = $this->admin->GetallData($table);
        return view('admin.about.addabout',$result)->with('i');
    }

    public function Createabout(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',       
           ]);
           $data['title'] = $request->title;
           $data['description'] = $request->description;
        if (request()->hasFile('image')) {
            $image = $request->file('image');
            $images = "image".time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image->move($destinationPath, $images);
            $data['image'] = $images;
        }
        if (request()->hasFile('image2')) {
            $image = $request->file('image2');
            $images = "image2".time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image->move($destinationPath, $images);
            $data['image2'] = $images;
        }        
      
        $result = $this->admin->insertdata('about', $data);
        if ($result ==1 ) {
            return redirect()->back()->with('success', 'About Successfully Add!');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    
    public function Editabout($id=""){
        $result['editabout'] = $this->admin->EditeItem('about',$id);
        return view('admin.about.editabout',$result);
    }
    
    public function aboutUpdate(Request $request){
        $data['title'] = $request->title;
        $data['description'] = $request->description;
        if (request()->hasFile('image')) {
            $image = $request->file('image');
            $images = "image".time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image->move($destinationPath, $images);
            $data['image'] = $images;
        }
        if (request()->hasFile('image2')) {
            $image = $request->file('image2');
            $images = "image2".time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image->move($destinationPath, $images);
            $data['image2'] = $images;
        }        
        $result = $this->admin->UpdateItem('about',$request->id,$data);
        if($result > 0){
            return redirect()->back()->with('success', 'Well Done Update About !');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    
    public function deleteabout($id=""){
        $result = $this->admin->RemoveItem('about',$id);
        if($result==1){
            return redirect()->back()->with('success', 'Remove Record Successfully!');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    
    //End About
 
    //faculty
    public function faculty(){
        $table = "faculty";
        $result['faculty'] = $this->admin->GetallData($table);
        return view('admin.faculty.faculty',$result)->with('i');
    }
    public function addfaculty(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'designation' => 'required'
           ]);
        if($validator->fails()) {
            return response()->json(['status'=>201,'error'=>$validator->errors()]);
        } else {
            $data['name'] = $request->name;
            $data['gender'] = $request->gender;
            $data['designation'] = $request->designation;
            if(empty($request->id)){
                $result = $this->admin->InsertData('faculty',$data);
                if($result==1){
                    return response()->json(['status'=>200,'success'=>'Record Successfully Create!']);
                } else {
                    return response()->json(['status'=>200,'success'=>'Record Not Update!']);
                }
           }else{
                $result = $this->admin->UpdateItem('faculty',$request->id,$data);
                if ($result==1) {
                    return response()->json(['status'=>200,'success'=>'Record Successful Update!']);
                } else {
                    return response()->json(['status'=>200,'success'=>'This Query Not Run!']);
                }
           }
        }
    }
    public function Editfaculty($id){
       $faculty = $this->admin->EditeItem('faculty',$id);
       return response()->json(['status'=>200,"data"=>$faculty]);
    }

    public function deletefaculty($id){
        $result = $this->admin->RemoveItem('faculty',$id);
        if($result==1){
            return redirect()->back()->with('success', 'Remove Record Successfully!');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }

    //End faculty
    //student
    public function student(){
        $table = "student";
        $result['student'] = $this->admin->GetallData($table);
        return view('admin.student.student',$result)->with('i');
    }
    public function addstudent(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required'
           ]);
        if($validator->fails()) {
            return response()->json(['status'=>201,'error'=>$validator->errors()]);
        } else {
            $data['name'] = $request->name;
            if (request()->hasFile('thumbnail')) {
                $thumbnail = $request->file('thumbnail');
                $thumbnail1 = "thumbnail".time().'.'.$thumbnail->getClientOriginalExtension();
                $destinationPath = public_path('/admin/images');
                $thumbnail->move($destinationPath, $thumbnail1);
                $data['thumbnail'] = $thumbnail1;
            }
            if(empty($request->id)){
                $result = $this->admin->InsertData('student',$data);
                if($result==1){
                    return response()->json(['status'=>200,'success'=>'Record Successfully Create!']);
                } else {
                    return response()->json(['status'=>200,'success'=>'Record Not Update!']);
                }
           }else{
                $result = $this->admin->UpdateItem('student',$request->id,$data);
                if ($result==1) {
                    return response()->json(['status'=>200,'success'=>'Record Successful Update!']);
                } else {
                    return response()->json(['status'=>200,'success'=>'This Query Not Run!']);
                }
           }
        }
    }
    public function Editstudent($id){
       $student = $this->admin->EditeItem('student',$id);
       return response()->json(['status'=>200,"data"=>$student]);
    }

    public function deletestudent($id){
        $result = $this->admin->RemoveItem('student',$id);
        if($result==1){
            return redirect()->back()->with('success', 'Remove Record Successfully!');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }

    //End student
    //gallerys
    public function gallerys(){
        $table = "gallery";
        $result['gallery'] = $this->admin->GetallData($table);
        return view('admin.gallery.gallery',$result)->with('i');
    }
    public function addgallery(Request $request){
        $validator = Validator::make($request->all(),[
            // 'title' => 'required'
           ]);
        if($validator->fails()) {
            return response()->json(['status'=>201,'error'=>$validator->errors()]);
        } else {
            // $data['title'] = $request->title;
            if (request()->hasFile('thumbnail')) {
                $thumbnail = $request->file('thumbnail');
                $thumbnail1 = "thumbnail".time().'.'.$thumbnail->getClientOriginalExtension();
                $destinationPath = public_path('/admin/images');
                $thumbnail->move($destinationPath, $thumbnail1);
                $data['thumbnail'] = $thumbnail1;
            }
            if(empty($request->id)){
                $result = $this->admin->InsertData('gallery',$data);
                if($result==1){
                    return response()->json(['status'=>200,'success'=>'Record Successfully Create!']);
                } else {
                    return response()->json(['status'=>200,'success'=>'Record Not Update!']);
                }
           }else{
                $result = $this->admin->UpdateItem('gallery',$request->id,$data);
                if ($result==1) {
                    return response()->json(['status'=>200,'success'=>'Record Successful Update!']);
                } else {
                    return response()->json(['status'=>200,'success'=>'This Query Not Run!']);
                }
           }
        }
    }
    public function Editgallery($id){
       $gallery = $this->admin->EditeItem('gallery',$id);
       return response()->json(['status'=>200,"data"=>$gallery]);
    }

    public function deletegallery($id){
        $result = $this->admin->RemoveItem('gallery',$id);
        if($result==1){
            return redirect()->back()->with('success', 'Remove Record Successfully!');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }

    //End gallerys
    //alumnis
    public function alumnis(){
        $table = "alumni";
        $result['alumni'] = $this->admin->GetallData($table);
        return view('admin.alumni.alumni',$result)->with('i');
    }
    public function addalumni(Request $request){
        $validator = Validator::make($request->all(),[
            'title' => 'required'
           ]);
        if($validator->fails()) {
            return response()->json(['status'=>201,'error'=>$validator->errors()]);
        } else {
            $data['title'] = $request->title;
            $data['year'] = $request->year;
            $data['designation'] = $request->designation;
            $data['desc'] = $request->desc;
            if (request()->hasFile('thumbnail')) {
                $thumbnail = $request->file('thumbnail');
                $thumbnail1 = "thumbnail".time().'.'.$thumbnail->getClientOriginalExtension();
                $destinationPath = public_path('/admin/images');
                $thumbnail->move($destinationPath, $thumbnail1);
                $data['thumbnail'] = $thumbnail1;
            }
            if(empty($request->id)){
                $result = $this->admin->InsertData('alumni',$data);
                if($result==1){
                    return response()->json(['status'=>200,'success'=>'Record Successfully Create!']);
                } else {
                    return response()->json(['status'=>200,'success'=>'Record Not Update!']);
                }
           }else{
                $result = $this->admin->UpdateItem('alumni',$request->id,$data);
                if ($result==1) {
                    return response()->json(['status'=>200,'success'=>'Record Successful Update!']);
                } else {
                    return response()->json(['status'=>200,'success'=>'This Query Not Run!']);
                }
           }
        }
    }
    public function Editalumni($id){
       $alumni = $this->admin->EditeItem('alumni',$id);
       return response()->json(['status'=>200,"data"=>$alumni]);
    }
    public function deletealumni($id){
        $result = $this->admin->RemoveItem('alumni',$id);
        if($result==1){
            return redirect()->back()->with('success', 'Remove Record Successfully!');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    //End alumnis
    

    
    //Course
    public function courselist(){
        $result['courselist'] = $this->admin->GetallData('course');
        return view('admin.course.courselist',$result)->with('i');
    }
    
    public function addcourse(){
        $table = "course";
        $result['course'] = $this->admin->GetallData($table);
        return view('admin.course.addcourse',$result)->with('i');
    }

    public function Createcourse(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',       
           ]);
           $data['title'] = $request->title;
           $data['slug'] = $request->slug;
           $data['course'] = $request->course;
           $data['duration'] = $request->duration;
           $data['description'] = $request->description;
        if (request()->hasFile('image')) {
            $image = $request->file('image');
            $images = "image".time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image->move($destinationPath, $images);
            $data['image'] = $images;
        }
      
        $result = $this->admin->insertdata('course', $data);
        if ($result ==1 ) {
            return redirect()->back()->with('success', 'course Successfully Add!');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    
    public function Editcourse($id=""){
        $result['editcourse'] = $this->admin->EditeItem('course',$id);
        return view('admin.course.editcourse',$result);
    }
    
    public function courseUpdate(Request $request){
           $data['title'] = $request->title;
           $data['slug'] = $request->slug;
           $data['course'] = $request->course;
           $data['duration'] = $request->duration;
           $data['description'] = $request->description;
        if (request()->hasFile('image')) {
            $image = $request->file('image');
            $images = "image".time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image->move($destinationPath, $images);
            $data['image'] = $images;
        }
        $result = $this->admin->UpdateItem('course',$request->id,$data);
        if($result > 0){
            return redirect()->back()->with('success', 'Well Done Update course !');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    
    public function deletecourse($id=""){
        $result = $this->admin->RemoveItem('course',$id);
        if($result==1){
            return redirect()->back()->with('success', 'Remove Record Successfully!');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    //End course
    //blog
    public function bloglist(){
        $result['bloglist'] = $this->admin->GetallData('blog');
        return view('admin.blog.bloglist',$result)->with('i');
    }
    
    public function addblog(){
        $table = "blog";
        $result['blog'] = $this->admin->GetallData($table);
        return view('admin.blog.addblog',$result)->with('i');
    }

    public function Createblog(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',       
           ]);
           $data['title'] = $request->title;
           $data['slug'] = $request->slug;
           $data['description'] = $request->description;
        if (request()->hasFile('image')) {
            $image = $request->file('image');
            $images = "image".time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image->move($destinationPath, $images);
            $data['image'] = $images;
        }
      
        $result = $this->admin->insertdata('blog', $data);
        if ($result ==1 ) {
            return redirect()->back()->with('success', 'blog Successfully Add!');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    
    public function Editblog($id=""){
        $result['editblog'] = $this->admin->EditeItem('blog',$id);
        return view('admin.blog.editblog',$result);
    }
    
    public function blogUpdate(Request $request){
           $data['title'] = $request->title;
           $data['slug'] = $request->slug;
           $data['description'] = $request->description;
        if (request()->hasFile('image')) {
            $image = $request->file('image');
            $images = "image".time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image->move($destinationPath, $images);
            $data['image'] = $images;
        }
        $result = $this->admin->UpdateItem('blog',$request->id,$data);
        if($result > 0){
            return redirect()->back()->with('success', 'Well Done Update blog !');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    
    public function deleteblog($id=""){
        $result = $this->admin->RemoveItem('blog',$id);
        if($result==1){
            return redirect()->back()->with('success', 'Remove Record Successfully!');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    //End blog
    //whyjanhit
    public function whyjanhitlist(){
        $result['whyjanhitlist'] = $this->admin->GetallData('whyjanhit');
        return view('admin.whyjanhit.whyjanhitlist',$result)->with('i');
    }
    
    public function addwhyjanhit(){
        $table = "whyjanhit";
        $result['whyjanhit'] = $this->admin->GetallData($table);
        return view('admin.whyjanhit.addwhyjanhit',$result)->with('i');
    }

    public function Createwhyjanhit(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',       
           ]);
           $data['title'] = $request->title;
           $data['description'] = $request->description;
        if (request()->hasFile('image')) {
            $image = $request->file('image');
            $images = "image".time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image->move($destinationPath, $images);
            $data['image'] = $images;
        }
      
        $result = $this->admin->insertdata('whyjanhit', $data);
        if ($result ==1 ) {
            return redirect()->back()->with('success', 'whyjanhit Successfully Add!');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    
    public function Editwhyjanhit($id=""){
        $result['editwhyjanhit'] = $this->admin->EditeItem('whyjanhit',$id);
        return view('admin.whyjanhit.editwhyjanhit',$result);
    }
    
    public function whyjanhitUpdate(Request $request){
        $data['title'] = $request->title;
        $data['description'] = $request->description;
        if (request()->hasFile('image')) {
            $image = $request->file('image');
            $images = "image".time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image->move($destinationPath, $images);
            $data['image'] = $images;
        }
        $result = $this->admin->UpdateItem('whyjanhit',$request->id,$data);
        if($result > 0){
            return redirect()->back()->with('success', 'Well Done Update whyjanhit !');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    
    public function deletewhyjanhit($id=""){
        $result = $this->admin->RemoveItem('whyjanhit',$id);
        if($result==1){
            return redirect()->back()->with('success', 'Remove Record Successfully!');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    
    //End whyjanhit
     //visionmission
    public function visionmissionlist(){
        $result['visionmissionlist'] = $this->admin->GetallData('visionmission');
        return view('admin.visionmission.visionmissionlist',$result)->with('i');
    }
    
    public function addvisionmission(){
        $table = "visionmission";
        $result['visionmission'] = $this->admin->GetallData($table);
        return view('admin.visionmission.addvisionmission',$result)->with('i');
    }

    public function Createvisionmission(Request $request){
        $validator = Validator::make($request->all(), [
            'title_vision' => 'required',
            'title_mission' => 'required',
            'description_vision' => 'required', 
            'description_mission' => 'required',
           ]);
           $data['title_vision'] = $request->title_vision;
           $data['title_mission'] = $request->title_mission;
           $data['description_vision'] = $request->description_vision;
           $data['description_mission'] = $request->description_mission;
        if (request()->hasFile('image_vision')) {
            $image = $request->file('image_vision');
            $images = 'vision'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image->move($destinationPath, $images);
            $data['image_vision'] = $images;
        }
        if (request()->hasFile('image_mission')) {
            $image = $request->file('image_mission');
            $images = 'mission'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image->move($destinationPath, $images);
            $data['image_mission'] = $images;
        }        
      
        $result = $this->admin->insertdata('visionmission', $data);
        if ($result ==1 ) {
            return redirect()->back()->with('success', 'visionmission Successfully Add!');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    
    public function Editvisionmission($id=""){
        $result['editvisionmission'] = $this->admin->EditeItem('visionmission',$id);
        return view('admin.visionmission.editvisionmission',$result);
    }
    
    public function visionmissionUpdate(Request $request){
           $data['title_vision'] = $request->title_vision;
           $data['title_mission'] = $request->title_mission;
           $data['description_vision'] = $request->description_vision;
           $data['description_mission'] = $request->description_mission;
        if (request()->hasFile('image_vision')) {
            $image = $request->file('image_vision');
            $images = 'vision'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image->move($destinationPath, $images);
            $data['image_vision'] = $images;
        }
        if (request()->hasFile('image_mission')) {
            $image = $request->file('image_mission');
            $images = 'mission'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image->move($destinationPath, $images);
            $data['image_mission'] = $images;
        }        
        $result = $this->admin->UpdateItem('visionmission',$request->id,$data);
        if($result > 0){
            return redirect()->back()->with('success', 'Well Done Update visionmission !');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    
    public function deletevisionmission($id=""){
        $result = $this->admin->RemoveItem('visionmission',$id);
        if($result==1){
            return redirect()->back()->with('success', 'Remove Record Successfully!');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    
    //End visionmission
    
    
     //Chairman’s Message
    public function chairmanmessagelist(){
        $result['chairmanmessagelist'] = $this->admin->GetallData('chairmanmessage');
        return view('admin.chairmanmessage.chairman-message-list',$result)->with('i');
    }
    
    public function addchairmanmessage(){
        $table = "chairmanmessage";
        $result['chairmanmessage'] = $this->admin->GetallData($table);
        return view('admin.chairmanmessage.add-chairman-message',$result)->with('i');
    }

    public function Createchairmanmessage(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',       
           ]);
           $data['title'] = $request->title;
           $data['description'] = $request->description;
        if (request()->hasFile('image')) {
            $image = $request->file('image');
            $images = "image".time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image->move($destinationPath, $images);
            $data['image'] = $images;
        }
      
        $result = $this->admin->insertdata('chairmanmessage', $data);
        if ($result ==1 ) {
            return redirect()->back()->with('success', 'chairmanmessage Successfully Add!');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    
    public function Editchairmanmessage($id=""){
        $result['editchairmanmessage'] = $this->admin->EditeItem('chairmanmessage',$id);
        return view('admin.chairmanmessage.edit-chairman-message',$result);
    }
    
    public function chairmanmessageUpdate(Request $request){
        $data['title'] = $request->title;
        $data['description'] = $request->description;
        if (request()->hasFile('image')) {
            $image = $request->file('image');
            $images = "image".time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image->move($destinationPath, $images);
            $data['image'] = $images;
        }
        $result = $this->admin->UpdateItem('chairmanmessage',$request->id,$data);
        if($result > 0){
            return redirect()->back()->with('success', 'Well Done Update chairmanmessage !');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    
    public function deletechairmanmessage($id=""){
        $result = $this->admin->RemoveItem('chairmanmessage',$id);
        if($result==1){
            return redirect()->back()->with('success', 'Remove Record Successfully!');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    
    //End chairmanmessage
    
    public function contactlist(){
            $result['contactlists'] = $this->admin->GetallData('contactquery');
            return view('admin.contactlist.contactlist',$result)->with('i');
        }
        public function querylist(){
            $result['querylist'] = $this->admin->GetallData('queries');
            return view('admin.contactlist.querylist',$result)->with('i');
        }
         public function applylist(){
            $result['applylist'] = $this->admin->GetallData('applynow');
            return view('admin.contactlist.applylist',$result)->with('i');
        }

        public function helpdesklist(){
            $result['helpdesklist'] = $this->admin->GetallData('helpdesk');
            return view('admin.contactlist.helpdesklist',$result)->with('i');
        }        
        //video
    public function videolist(){
        $result['videolist'] = $this->admin->GetallData('video');
        return view('admin.video.videolist',$result)->with('i');
    }
    
    public function addvideo(){
        $table = "video";
        $result['video'] = $this->admin->GetallData($table);
        return view('admin.video.addvideo',$result)->with('i');
    }

    public function Createvideo(Request $request){
        $validator = Validator::make($request->all(), [
            'link' => 'required'      
           ]);
           $data['link'] = $request->link;
      
      
        $result = $this->admin->insertdata('video', $data);
        if ($result ==1 ) {
            return redirect()->back()->with('success', 'video Successfully Add!');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    
    public function Editvideo($id=""){
        $result['editvideo'] = $this->admin->EditeItem('video',$id);
        return view('admin.video.editvideo',$result);
    }
    
    public function videoUpdate(Request $request){
        $data['link'] = $request->link;
       
        $result = $this->admin->UpdateItem('video',$request->id,$data);
        if($result > 0){
            return redirect()->back()->with('success', 'Well Done Update video !');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    
    public function deletevideo($id=""){
        $result = $this->admin->RemoveItem('video',$id);
        if($result==1){
            return redirect()->back()->with('success', 'Remove Record Successfully!');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    
    //End video
   
//Notification
    public function notificationlist(){
        $result['notificationlist'] = $this->admin->GetallData('notifications');
        return view('admin.notification.notificationlist',$result)->with('i');
    }
    
    public function addnotification(){
        $table = "notifications";
        $result['notifications'] = $this->admin->GetallData($table);
        return view('admin.notification.addnotification',$result)->with('i');
    }

    public function Createnotification(Request $request){
	
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'date' => 'required',       
           ]);
		   
           $data['title'] = $request->title;
           $data['date'] = $request->date;
           $data['description'] = $request->description;
           $data['link'] = $request->link;
		   
        if (request()->hasFile('file')) {
            $file = $request->file('file');
            $filename = "file".time().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $file->move($destinationPath, $filename);
            $data['file'] = $filename;
        }
      
        $result = $this->admin->insertdata('notifications', $data);
        if ($result ==1 ) {
            return redirect()->back()->with('success', 'Notification Successfully Add!');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    
    public function Editnotification($id=""){
        $result['editnotification'] = $this->admin->EditeItem('notifications',$id);
        return view('admin.notification.editnotification',$result);
    }
    
    public function notificationUpdate(Request $request){
        $data['title'] = $request->title;
        $data['date'] = $request->date;
        $data['description'] = $request->description;
        $data['link'] = $request->link;
        if (request()->hasFile('file')) {
            $file = $request->file('file');
            $filename = "file".time().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $file->move($destinationPath, $filename);
            $data['file'] = $filename;
        }
        $result = $this->admin->UpdateItem('notifications',$request->id,$data);
        if($result > 0){
            return redirect()->back()->with('success', 'Well Done Update Notification !');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    
    public function deletenotification($id=""){
        $result = $this->admin->RemoveItem('notifications',$id);
        if($result==1){
            return redirect()->back()->with('success', 'Remove Record Successfully!');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }   
    
    
// Toppers  
    public function toppers()
    {        
        $data = Topper::all();
        return view('admin.toppers.toppers', compact('data'));  
    }

    public function create_toppers()
    {
        return view('admin.toppers.create-toppers');
    }
    public function edit_toppers($id)
    {
        $data = Topper::find($id);
        return view('admin.toppers.edit-toppers', compact('data'));
    } 

    public function store_toppers(Request $request)
    {
       $data = new Topper; 
       $data->name = $request->input('name');
       $data->classs = $request->input('classs');
       $data->marks = $request->input('marks');
       if($request->hasfile('image'));
       {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('admin/img/', $filename);
        $data->image = $filename;
       }
       $data->save();
       return redirect('/admin/toppers')->with('status', 'Toppers Sucessfully Added');
    } 


    public function update_toppers(Request $request, Topper $data, $id)
    {
       $data = Topper::find($id);      
       $data->name = $request->input('name');
       $data->classs = $request->input('classs');
       $data->marks = $request->input('marks');
       if(isset($request->image))
        {       
      if($request->hasfile('image'));
      {
      $destination = 'admin/img/'.$data->image;   
      if(File::exists($destination)) 
      {
          File::delete($destination);
      }
      }
      $file = $request->file('image');
      $extension = $file->getClientOriginalExtension();
      $filename = time().'.'.$extension;
      $file->move('admin/img/', $filename);
      $data->image = $filename;
      } 
       $data->update();
       return redirect('/admin/toppers')->with('status', 'Toppers Sucessfully Added');
    }     
    public function destroy_toppers($id)    
    {
        $data = Topper::find($id);
        $data->delete();
        return redirect('/admin/toppers')->with('status', 'Toppers Deleted Sucessfully');
    }     
    
    
    //Director Message
    public function directormessagelist(){
        $result['directormessagelist'] = $this->admin->GetallData('directormessages');
        return view('admin.directormessage.director-message-list',$result)->with('i');
    }
    
    public function adddirectormessage(){
        $table = "directormessages";
        $result['directormessage'] = $this->admin->GetallData($table);
        return view('admin.directormessage.add-director-message',$result)->with('i');
    }

    public function Createdirectormessage(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',       
           ]);
           $data['title'] = $request->title;
           $data['description'] = $request->description;
        if (request()->hasFile('image')) {
            $image = $request->file('image');
            $images = "image".time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image->move($destinationPath, $images);
            $data['image'] = $images;
        }
      
        $result = $this->admin->insertdata('directormessages', $data);
        if ($result ==1 ) {
            return redirect()->back()->with('success', 'directormessage Successfully Add!');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    
    public function Editdirectormessage($id=""){
        $result['editdirectormessage'] = $this->admin->EditeItem('directormessages',$id);
        return view('admin.directormessage.edit-director-message',$result);
    }
    
    public function directormessageUpdate(Request $request){
        $data['title'] = $request->title;
        $data['description'] = $request->description;
        if (request()->hasFile('image')) {
            $image = $request->file('image');
            $images = "image".time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image->move($destinationPath, $images);
            $data['image'] = $images;
        }
        $result = $this->admin->UpdateItem('directormessages',$request->id,$data);
        if($result > 0){
            return redirect()->back()->with('success', 'Well Done Update directormessage !');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    
    public function deletedirectormessage($id=""){
        $result = $this->admin->RemoveItem('directormessages',$id);
        if($result==1){
            return redirect()->back()->with('success', 'Remove Record Successfully!');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    } 
    
    
    
    
    
    //Vice Principal's Message
    public function vpmessagelist(){
        $result['vpmessagelist'] = $this->admin->GetallData('vice_principal_messages');
        return view('admin.vpmessage.vice-principal-message-list',$result)->with('i');
    }
    
    public function addvpmessage(){
        $table = "vice_principal_messages";
        $result['vice_principal_messages'] = $this->admin->GetallData($table);
        return view('admin.vpmessage.add-vice-principal-message',$result)->with('i');
    }

    public function Createvpmessage(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',       
           ]);
           $data['title'] = $request->title;
           $data['description'] = $request->description;
        if (request()->hasFile('image')) {
            $image = $request->file('image');
            $images = "image".time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image->move($destinationPath, $images);
            $data['image'] = $images;
        }
      
        $result = $this->admin->insertdata('vice_principal_messages', $data);
        if ($result ==1 ) {
            return redirect()->back()->with('success', 'Vice Principal Message Successfully Add!');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    
    public function Editvpmessage($id=""){
        $result['editvpmessage'] = $this->admin->EditeItem('vice_principal_messages',$id);
        return view('admin.vpmessage.edit-vice-principal-message',$result);
    }
    
    public function vpmessageUpdate(Request $request){
        $data['title'] = $request->title;
        $data['description'] = $request->description;
        if (request()->hasFile('image')) {
            $image = $request->file('image');
            $images = "image".time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image->move($destinationPath, $images);
            $data['image'] = $images;
        }
        $result = $this->admin->UpdateItem('vice_principal_messages',$request->id,$data);
        if($result > 0){
            return redirect()->back()->with('success', 'Well Done Update Vice Principal Message !');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    
    public function deletevpmessage($id=""){
        $result = $this->admin->RemoveItem('vice_principal_messages',$id);
        if($result==1){
            return redirect()->back()->with('success', 'Remove Record Successfully!');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    } 
    
    
    //Associate Members
    
    public function associatememberlist(){
        $result['associatememberlist'] = $this->admin->GetallData('associate_members');
        return view('admin.associatemember.associate-member-list',$result)->with('i');
    }
    
    public function addassociatemember(){
        $table = "associate_members";
        $result['associatememberlist'] = $this->admin->GetallData($table);
        return view('admin.associatemember.add-associate-member',$result)->with('i');
    }

    public function Createassociatemember(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'designation' => 'required',       
           ]);
           $data['name'] = $request->name;
           $data['roll'] = $request->roll;
           $data['phone'] = $request->phone;
           $data['address'] = $request->address;
        $result = $this->admin->insertdata('associate_members', $data);
        if ($result ==1 ) {
            return redirect()->back()->with('success', 'Associate Member Successfully Add!');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    
    public function Editassociatemember($id=""){
        $result['editassociatemember'] = $this->admin->EditeItem('associate_members',$id);
        return view('admin.associatemember.edit-associate-member',$result);
    }
    
    public function associatememberUpdate(Request $request){
           $data['name'] = $request->name;
           $data['roll'] = $request->roll;
           $data['phone'] = $request->phone;
           $data['address'] = $request->address;
        $result = $this->admin->UpdateItem('associate_members',$request->id,$data);
        if($result > 0){
            return redirect()->back()->with('success', 'Well Done Update Associate Member !');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    
    public function deleteassociatemember($id=""){
        $result = $this->admin->RemoveItem('associate_members',$id);
        if($result==1){
            return redirect()->back()->with('success', 'Remove Record Successfully!');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }     
    
// infrastructure   
    public function infrastructure()
    {        
        $data = Infrastructure::all();
        return view('admin.infrastructure.infrastructure', compact('data'));  
    }

    public function create_infrastructure()
    {
        return view('admin.infrastructure.create-infrastructure');
    }
    public function edit_infrastructure($id)
    {
        $data = Infrastructure::find($id);
        return view('admin.infrastructure.edit-infrastructure', compact('data'));
    } 

    public function store_infrastructure(Request $request)
    {
        $data = new Infrastructure;
        $data->title = $request->input('title');
        $data->slug = $request->input('slug');
        $data->description = $request->input('description');        
        $data->save();
        return redirect('/admin/infrastructure')->with('status', 'infrastructure Sucessfully Added');
    } 


    public function update_infrastructure(Request $request, Infrastructure $data, $id)
    {
        $data = Infrastructure::find($id);      
        $data->title = $request->input('title');
        $data->slug = $request->input('slug');
        $data->description = $request->input('description');          
       $data->update();
       return redirect('/admin/infrastructure')->with('status', 'infrastructure Sucessfully Added');
    }     
    public function destroy_infrastructure($id)    
    {
        $data = Infrastructure::find($id);
        $data->delete();
        return redirect('/admin/infrastructure')->with('status', 'infrastructure Deleted Sucessfully');
    }
    
    
    
    //Vidya Bharti Lakshay
    public function vbllist(){
        $result['vidya_bharti_lakshay'] = $this->admin->GetallData('vidya_bharti_lakshay');
        return view('admin.vidya-bharti-lakshay.vidya-bharti-lakshay-list',$result)->with('i');
    }
    
    public function addvbl(){
        $table = "vidya_bharti_lakshay";
        $result['vidya_bharti_lakshay'] = $this->admin->GetallData($table);
        return view('admin.vidya-bharti-lakshay.add-vidya-bharti-lakshay',$result)->with('i');
    }

    public function Createvbl(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',       
           ]);
           $data['title'] = $request->title;
           $data['description'] = $request->description;
      
        $result = $this->admin->insertdata('vidya_bharti_lakshay', $data);
        if ($result ==1 ) {
            return redirect()->back()->with('success', 'vidya bharti lakshay Successfully Add!');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    
    public function Editvbl($id=""){
        $result['editvbl'] = $this->admin->EditeItem('vidya_bharti_lakshay',$id);
        return view('admin.vidya-bharti-lakshay.edit-vidya-bharti-lakshay',$result);
    }
    
    public function vblUpdate(Request $request){
        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $result = $this->admin->UpdateItem('vidya_bharti_lakshay',$request->id,$data);
        if($result > 0){
            return redirect()->back()->with('success', 'Well Done Update vidya bharti lakshay !');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    
    public function deletevbl($id=""){
        $result = $this->admin->RemoveItem('vidya_bharti_lakshay',$id);
        if($result==1){
            return redirect()->back()->with('success', 'Remove Record Successfully!');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }    
    
    
    //Patrika
    public function patrikalist(){
        $result['patrikalist'] = $this->admin->GetallData('patrika');
        return view('admin.patrika.patrika-list',$result)->with('i');
    }
    
    public function addpatrika(){
        $table = "patrika";
        $result['patrika'] = $this->admin->GetallData($table);
        return view('admin.patrika.add-patrika',$result)->with('i');
    }

    public function Createpatrika(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required',
           ]);
        $data['title'] = $request->title;
        $data['patrika_date'] = $request->patrika_date;
        if (request()->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $images = "thumbnail".time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image->move($destinationPath, $images);
            $data['thumbnail'] = $images;
        }           
        if (request()->hasFile('pdf_file')) {
            $image = $request->file('pdf_file');
            $images = "pdf".time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image->move($destinationPath, $images);
            $data['pdf_file'] = $images;
        }           
      
        $result = $this->admin->insertdata('patrika', $data);
        if ($result ==1 ) {
            return redirect()->back()->with('success', 'Patrika Successfully Add!');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    
    public function Editpatrika($id=""){
        $result['editpatrika'] = $this->admin->EditeItem('patrika',$id);
        return view('admin.patrika.edit-patrika',$result);
    }
    
    public function patrikaUpdate(Request $request){
        $data['title'] = $request->title;
        $data['patrika_date'] = $request->patrika_date;
        if (request()->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $images = "thumbnail".time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image->move($destinationPath, $images);
            $data['thumbnail'] = $images;
        }
        
        if (request()->hasFile('pdf_file')) {
            $image = $request->file('pdf_file');
            $images = "pdf_file".time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image->move($destinationPath, $images);
            $data['pdf_file'] = $images;
        }        

        $result = $this->admin->UpdateItem('patrika',$request->id,$data);
        if($result > 0){
            return redirect()->back()->with('success', 'Well Done Update Patrika !');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    }
    
    public function deletepatrika($id=""){
        $result = $this->admin->RemoveItem('patrika',$id);
        if($result==1){
            return redirect()->back()->with('success', 'Remove Record Successfully!');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
    } 
    
   
	
 // Social Activities  
    public function social_activities()
    {        
        $data = Socialactivities::all();
        return view('admin.social-activities.social-activities', compact('data'));  
    }

    public function create_social_activities()
    {
        return view('admin.social-activities.add-social-activities');
    }
    public function edit_social_activities($id)
    {
        $data = Socialactivities::find($id);
        return view('admin.social-activities.edit-social-activities', compact('data'));
    } 

    public function store_social_activities(Request $request)
    {
        $data = new Socialactivities;
        $data->title = $request->input('title');
        $data->slug = $request->input('slug');
        $data->description = $request->input('description');        
        $data->save();
        return redirect('/admin/social-activities')->with('status', 'infrastructure Sucessfully Added');
    } 


    public function update_social_activities(Request $request, Socialactivities $data, $id)
    {
       $data = Socialactivities::find($id);      
       $data->title = $request->input('title');
       $data->slug = $request->input('slug');
       $data->description = $request->input('description');          
       $data->update();
       return redirect('/admin/social-activities')->with('status', 'Socialactivities Sucessfully Added');
    }     
    public function destroy_social_activities($id)    
    {
        $data = Socialactivities::find($id);
        $data->delete();
        return redirect('/admin/social-activities')->with('status', 'Socialactivities Deleted Sucessfully');
    }  
    
// Testimonial of Feedback 
    public function testimonial()
    {        
        $data = Feedback::all();
        return view('admin.testimonial.testimonial', compact('data'));  
    }

    public function create_testimonial()
    {
        return view('admin.testimonial.add-testimonial');
    }
    public function edit_testimonial($id)
    {
        $data = Feedback::find($id);
        return view('admin.testimonial.edit-testimonial', compact('data'));
    } 

    public function store_testimonial(Request $request)
    {
        $data = new Feedback;
        $data->name = $request->input('name');  
        $data->place = $request->input('place');    
        $data->description = $request->input('description'); 
        if($request->hasfile('image'));
        {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = 'feedback'.time().'.'.$extension;
        $path = "public/uploads/images/";
        $file->move($path, $filename);
        $data->image = $filename;
        }                
        $data->save();
        return redirect('/admin/testimonial')->with('status', 'testimonial Sucessfully Added');
    } 


    public function update_testimonial(Request $request, Feedback $data, $id)
    {
        $data = Feedback::find($id);      
        $data->name = $request->input('name');  
        $data->place = $request->input('place');    
        $data->description = $request->input('description'); 
        if(isset($request->image))
        {
        if($request->hasfile('image'));
        {
        $destination = 'admin/img/'.$data->image;   
        if(File::exists($destination)) 
        {
            File::delete($destination);
        }
        }
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = 'feedback'.time().'.'.$extension;
        $file->move('public/uploads/images/', $filename);
        $data->image = $filename;
       }                 
       $data->update();
       return redirect('/admin/testimonial')->with('status', 'testimonial Sucessfully Added');
    }     
    public function destroy_testimonial($id)    
    {
        $data = Feedback::find($id);
        $data->delete();
        return redirect('/admin/testimonial')->with('status', 'testimonial Deleted Sucessfully');
    }    
    
    
    // NCC Gallery List 
    public function ncc_gallery_list()
    {        
        $data = Nccgallery::all();
        return view('admin.ncc.ncc-gallery-list', compact('data'));  
    }

    public function create_ncc_gallery()
    {
        return view('admin.ncc.add-ncc-gallery');
    }
    public function edit_ncc_gallery($id)
    {
        $data = Nccgallery::find($id);
        return view('admin.ncc.edit-ncc-gallery', compact('data'));
    } 

    public function store_ncc_gallery(Request $request)
    {
        $data = new Nccgallery;
        $data->title = $request->input('title');    
        $data->description = $request->input('description'); 
        if($request->hasfile('image'));
        {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = 'feedback'.time().'.'.$extension;
        $path = "public/uploads/images/";
        $file->move($path, $filename);
        $data->image = $filename;
        }                 
        $data->save();
        return redirect('/admin/ncc-gallery-list')->with('status', 'NCC Gallery Sucessfully Added');
    } 


    public function update_ncc_gallery(Request $request, Nccgallery $data, $id)
    {
        $data = Nccgallery::find($id);      
        $data->title = $request->input('title');
        $data->description = $request->input('description');  
         if(isset($request->image))
        {
        if($request->hasfile('image'));
        {
        $destination = 'admin/img/'.$data->image;   
        if(File::exists($destination)) 
        {
            File::delete($destination);
        }
        }
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = 'feedback'.time().'.'.$extension;
        $file->move('public/uploads/images/', $filename);
        $data->image = $filename;
       }             
       $data->update();
       return redirect('/admin/ncc-gallery-list')->with('status', 'Ncc Gallery Sucessfully Added');
    }     
    public function destroy_ncc_gallery($id)    
    {
        $data = Nccgallery::find($id);
        $data->delete();
        return redirect('/admin/ncc-gallery-list')->with('status', 'Ncc Gallery Deleted Sucessfully');
    } 
    
// NCC Text Route 
    public function ncc()
    {        
        $data = Ncc::all();
        return view('admin.ncc.ncc', compact('data'));  
    }

    public function create_ncc()
    {
        return view('admin.ncc.add-ncc');
    }
    public function edit_ncc($id)
    {
        $data = Ncc::find($id);
        return view('admin.ncc.edit-ncc', compact('data'));
    } 

    public function store_ncc(Request $request)
    {
        $data = new Ncc;
        $data->title = $request->input('title');    
        $data->description = $request->input('description');        
        $data->save();
        return redirect('/admin/ncc')->with('status', 'NCC Sucessfully Added');
    } 


    public function update_ncc(Request $request, Ncc $data, $id)
    {
        $data = Ncc::find($id);      
        $data->title = $request->input('title');
        $data->description = $request->input('description');          
       $data->update();
       return redirect('/admin/ncc')->with('status', 'Ncc Sucessfully Added');
    }     
    public function destroy_ncc($id)    
    {
        $data = Ncc::find($id);
        $data->delete();
        return redirect('/admin/ncc')->with('status', 'Ncc Deleted Sucessfully');
    }      
    
// Ex-Director  
    public function exdirector()
    {        
        $data = Exdirector::all();
        return view('admin.exdirector.exdirector', compact('data'));  
    }

    public function add_exdirector()
    {
        return view('admin.exdirector.add-exdirector');
    }
    public function edit_exdirector($id)
    {
        $data = Exdirector::find($id);
        return view('admin.exdirector.edit-exdirector', compact('data'));
    } 

    public function store_exdirector(Request $request)
    {
        $data = new Exdirector;
        $data->title = $request->input('title');
        $data->description = $request->input('description');        
        if($request->hasfile('image'));
        {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = 'about'.time().'.'.$extension;
        $path = "public/uploads/images/";
        $file->move($path, $filename);
        $data->image = $filename;
        }
        $data->save();
        return redirect('/admin/exdirector')->with('status', 'Exdirector Sucessfully Added');
    } 


    public function update_exdirector(Request $request, Exdirector $data, $id)
    {
        $data = Exdirector::find($id);      
        $data->title = $request->input('title');
        $data->description = $request->input('description');          
        if($request->hasfile('image'));
        {
        $destination = 'admin/img/'.$data->image;   
        if(File::exists($destination)) 
        {
            File::delete($destination);
        }
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = 'about'.time().'.'.$extension;

        $file->move('public/uploads/images/', $filename);
        $data->image = $filename;
        }
       $data->update();
       return redirect('/admin/exdirector')->with('status', 'Exdirector Sucessfully Added');
    }     
    public function destroy_exdirector($id)    
    {
        $data = Exdirector::find($id);
        $data->delete();
        return redirect('/admin/exdirector')->with('status', 'Exdirector Deleted Sucessfully');
    }    
// Events  
    public function event_list()
    {        
        $data = Event::all();
        return view('admin.event.event-list', compact('data'));  
    }
    public function add_event()
    {
        return view('admin.event.add-event');
    }
    public function edit_event($id)
    {
        $data = Event::find($id);
        return view('admin.event.edit-event', compact('data'));
    } 
    public function store_event(Request $request)
    {
        $data = new Event;
        $data->title = $request->input('title');
        $data->slug = $request->input('slug');
        $data->description = $request->input('description');       
        $data->save();
        return redirect('/admin/event-list')->with('status', 'Event Sucessfully Added');
    } 
    public function update_event(Request $request, Event $data, $id)
    {
        $data = Event::find($id);      
        $data->title = $request->input('title');
        $data->slug = $request->input('slug');
        $data->description = $request->input('description');
        $data->update();
       return redirect('/admin/event-list')->with('status', 'Event Sucessfully Added');
    }     
    public function destroy_event($id)    
    {
        $data = Event::find($id);
        $data->delete();
        return redirect('/admin/event-list')->with('status', 'Event Deleted Sucessfully');
    } 
    
//  Achievement  
    public function achievement_list()
    {        
        $achievement = Achievement::all();
        return view('admin.achievement.achievement-list', compact('achievement'));  
    }

    public function add_achievement()
    {
        return view('admin.achievement.add-achievement');
    }
    public function edit_achievement($id)
    {
        $achievement = Achievement::find($id);
        return view('admin.achievement.edit-achievement', compact('achievement'));
    }
    public function store_achievement(Request $request)
    {
        $achievement = new Achievement;
        $achievement->title = $request->input('title');
        $achievement->description = $request->input('description') ?? '';        
        $achievement->save();
        return redirect('/admin/achievement-list')->with('status', 'Achievement Sucessfully Added');
    } 
    public function update_achievement(Request $request, Achievement $data, $id)
    {
       $achievement = Achievement::find($id);      
       $achievement->title = $request->input('title');
       if ($request->has('description')) {
           $achievement->description = $request->input('description') ?? '';
       }
       $achievement->update();
       return redirect('/admin/achievement-list')->with('status', 'Achievement Sucessfully Updated');
    }     
    public function destroy_achievement($id)    
    {
        $achievement = Achievement::find($id);
        $achievement->delete();
        return redirect('/admin/achievement-list')->with('status', 'Achievement Deleted Sucessfully');
    } 
    
// Faculty Category 
    public function faculty_category_list()
    {        
        $fltctg = Facultycategory::all();
        return view('admin.faculty-category.faculty-category-list', compact('fltctg'));  
    }
    public function add_faculty_category()
    {
        return view('admin.faculty-category.add-faculty-category');
    }
    public function edit_faculty_category($id)
    {
        $fltctg = Facultycategory::find($id);
        return view('admin.faculty-category.edit-faculty-category', compact('fltctg'));
    } 

    public function store_faculty_category(Request $request)
    {
        $fltctg = new Facultycategory;
        $fltctg->name = $request->input('name');
        $fltctg->save();
        return redirect('/admin/faculty-category-list')->with('status', 'Faculty category Sucessfully Added');
    } 


    public function update_faculty_category(Request $request, Facultycategory $fltctg, $id)
    {
        $fltctg = Facultycategory::find($id);      
        $fltctg->name = $request->input('name');
        $fltctg->update();
        return redirect('/admin/faculty-category-list')->with('status', 'Faculty category Sucessfully Updated');
    }     
    public function destroy_faculty_category($id)    
    {
        $fltctg = Facultycategory::find($id);
        $fltctg->delete();
        return redirect('/admin/faculty-category-list')->with('status', 'Faculty category Deleted Sucessfully');
    }

// Faculty 
    public function faculty_list()
    {        
        $faculty = Faculty::all();
        return view('admin.faculty.faculty-list', compact('faculty'));
    }
    public function add_faculty()
    {
        return view('admin.faculty.add-faculty');
    }
    public function edit_faculty($id)
    {
        $faculty = Faculty::find($id);
        return view('admin.faculty.edit-faculty', compact('faculty'));
    } 
    public function store_faculty(Request $request)
    {
        $faculty = new Faculty;
        $faculty->faculty_id = $request->input('faculty_id'); 
        $faculty->name = $request->input('name');
        $faculty->gender = $request->input('gender');
        $faculty->designation = $request->input('designation');
        $faculty->save();
        return redirect('/admin/faculty-list')->with('status', 'Faculty Sucessfully Added');
    }
    public function update_faculty(Request $request, Faculty $faculty, $id)
    {
        $faculty = Faculty::find($id);    
        $faculty->faculty_id = $request->input('faculty_id');   
        $faculty->name = $request->input('name');
        $faculty->gender = $request->input('gender');
        $faculty->designation = $request->input('designation');
        $faculty->update();
        return redirect('/admin/faculty-list')->with('status', 'Faculty Sucessfully Updated');
    }     
    public function destroy_faculty($id)    
    {
        $faculty = Faculty::find($id);
        $faculty->delete();
        return redirect('/admin/faculty-list')->with('status', 'Faculty Deleted Sucessfully');
    }  
// Admission Process    
    public function admission_process_list()
    {        
        $apdata = Admissionprocess::all();
        return view('admin.admission-process.admission-process-list', compact('apdata'));
    }
    public function add_admission_process()
    {
        return view('admin.admission-process.add-admission-process');
    }
    public function edit_admission_process($id)
    {
        $apdata = Admissionprocess::find($id);
        return view('admin.admission-process.edit-admission-process', compact('apdata'));
    } 
    public function store_admission_process(Request $request)
    {
        $apdata = new Admissionprocess;
        $apdata->title = $request->input('title');
        $apdata->description = $request->input('description');
        $apdata->save();
        return redirect('/admin/admission-process-list')->with('status', 'Faculty Sucessfully Added');
    }
    public function update_admission_process(Request $request, Admissionprocess $faculty, $id)
    {
        $apdata = Admissionprocess::find($id);      
        $apdata->title = $request->input('title');
        $apdata->description = $request->input('description');
        $apdata->update();
        return redirect('/admin/admission-process-list')->with('status', 'Admission process Sucessfully Updated');
    }     
    public function destroy_admission_process($id)    
    {
        $apdata = Admissionprocess::find($id);
        $apdata->delete();
        return redirect('/admin/admission-process-list')->with('status', 'Admission process Deleted Sucessfully');
    }    

    // Fee Structure
    public function fee_structure_list()
    {        
        $feelist = Feestructure::all();
        return view('admin.fee-structure.fee-structure-list', compact('feelist'));
    }
    public function add_fee_structure()
    {
        return view('admin.fee-structure.add-fee-structure');
    }
    public function edit_fee_structure($id)
    {
        $feedata = Feestructure::find($id);
        return view('admin.fee-structure.edit-fee-structure', compact('feedata'));
    } 
    public function store_fee_structure(Request $request)
    {
        $feedata = new Feestructure;
        $feedata->title = $request->input('title');
        $feedata->description = $request->input('description');
        $feedata->save();
        return redirect('/admin/fee-structure-list')->with('status', 'Fee Structure Successfully Added');
    }
    public function update_fee_structure(Request $request, $id)
    {
        $feedata = Feestructure::find($id);      
        $feedata->title = $request->input('title');
        $feedata->description = $request->input('description');
        $feedata->save();
        return redirect('/admin/fee-structure-list')->with('status', 'Fee Structure Successfully Updated');
    }     
    public function destroy_fee_structure($id)    
    {
        $feedata = Feestructure::find($id);
        if ($feedata) {
            $feedata->delete();
        }
        return redirect('/admin/fee-structure-list')->with('status', 'Fee Structure Deleted Successfully');
    }    

    // Bank Details
    public function bank_details()
    {
        $bank = BankDetail::first();
        if (!$bank) {
            $bank = new BankDetail;
            $bank->account_holder = 'Kusum Goel Dr. Santosh Saraswati Vidya Mandir';
            $bank->bank_name = 'Bank Of Baroda';
            $bank->account_number = '21860200000865';
            $bank->ifsc_code = 'BARB0RAJNAG';
            $bank->branch = 'RDC Raj Nagar, Ghaziabad';
            $bank->save();
        }
        return view('admin.bank-details.edit', compact('bank'));
    }

    public function update_bank_details(Request $request)
    {
        $bank = BankDetail::first();
        if (!$bank) {
            $bank = new BankDetail;
        }

        $bank->account_holder = $request->input('account_holder');
        $bank->bank_name = $request->input('bank_name');
        $bank->account_number = $request->input('account_number');
        $bank->ifsc_code = $request->input('ifsc_code');
        $bank->branch = $request->input('branch');
        $bank->note = $request->input('note');

        if ($request->hasFile('qr_code')) {
            $file = $request->file('qr_code');
            $filename = 'qr_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/bank/'), $filename);
            $bank->qr_code = $filename;
        }

        $bank->save();
        return redirect()->back()->with('status', 'Bank Details Successfully Updated');
    }    
    
    public function online_registrations()
    {
        $registrations = \App\Models\OnlineRegistration::orderBy('created_at', 'desc')->get();
        return view('admin.online_registrations.list', compact('registrations'));
    }

    public function view_online_registration($id)
    {
        $registration = \App\Models\OnlineRegistration::findOrFail($id);
        return view('admin.online_registrations.view', compact('registration'));
    }
}
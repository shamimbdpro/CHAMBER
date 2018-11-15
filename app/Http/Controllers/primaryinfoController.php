<?php

namespace App\Http\Controllers;
use App\logo;
use App\organizationinfo;
use Illuminate\Http\Request;
use Image;
use Session;
use Carbon\Carbon;
class primaryinfoController extends Controller
{
     
    public function __construct()
    {
        $this->middleware('auth');
    }

  public function index(){
  	$logoInfo=logo::first();
  	 return view('backend.primary',compact('logoInfo'));
  }

  public function updatelogo(Request $request){

  	     $logoInfo=logo::first();
           $this->validate($request,[
        'logo' => 'mimes:jpeg,jpg,png,gif',
          ],[
        'logo.mimes' => 'image format allow only jpeg,jpg,png,gif',
          ]);
       if(!empty($_FILES['logo']['name'])){
      
        $updatelogo=logo::where('id',$logoInfo->id)->update([
         'logo' => 'sponsor.jpg',
         'Created_at' => Carbon::now()->toDateTimeString(),
        ]);
      
	     if($request->hasFile('logo')){
	       $image=$request->file('logo');
	       $imageName='updated_'.$updatelogo.'_'.time().'.'.$image->getClientOriginalExtension();
	       $unlik=Image::make($image)->resize('320','55')->save(public_path('/assets/uploads/logo/'.$imageName));
          
	       logo::where('id',$logoInfo->id)->update([
	         'logo' =>$imageName,
	       ]);
        if (file_exists(public_path().'/assets/uploads/logo/'.$logoInfo->logo)) {
             unlink(public_path().'/assets/uploads/logo/'.$logoInfo->logo);
         }else{
          return redirect(route('primary'));
         }
 
      }
    }else{
        $updatelogo=logo::where('id',$logoInfo->id)->update([
         'logo' =>$logoInfo->logo,
         'Created_at' => Carbon::now()->toDateTimeString(),

        ]);
    }
	      if($updatelogo){
	        Session::flash('status','value');
	          return redirect('primary');
	      }else{
	        Session::flash('error','value');
	          return redirect('primary');
	      }
	 
   }











  public function insertorginfo(Request $request){
         $organizationinfo=organizationinfo::first();
        $update_infos=organizationinfo::where('id',$organizationinfo->id)->update([
         'title' => $_POST['title'],
         'meta' => $_POST['meta'],
         'map' => $_POST['map'],
         'contact_details' => $_POST['contact_details'],
         'copyright' => $_POST['copyright'],
         'Created_at' => Carbon::now()->toDateTimeString(),
        ]);

        if($update_infos){
          Session::flash('status','value');
            return redirect('primary');
        }else{
          Session::flash('error','value');
            return redirect('primary');
        }
   
   }





}

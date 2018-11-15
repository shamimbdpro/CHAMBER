<?php

namespace App\Http\Controllers;
use App\slider;
use Image;
use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;

class sliderController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }
  public function allslider(){
  	$sliders=slider:: get();
    return view('backend.slider.allslider',compact('sliders'));
  }

  public function addslider(){
    return view('backend.slider.addslider');
  }





  /**************************************************************
						Add sider
  /**************************************************************/

  public function insertslider(Request $request){
   	     $this->validate($request,[
        'slider_img' => ' required|mimes:jpeg,jpg,png,gif',
          ],[
        'slider_img.mimes' => 'image format allow only jpeg,jpg,png,gif',
          ]);

        $insertslider=slider::insertGetId([
         'slider_img' => 'slider.jpg',
         'Created_at' => Carbon::now()->toDateTimeString(),
      ]);
     if($request->hasFile('slider_img')){
       $image=$request->file('slider_img');
       $imageName='slider_'.$insertslider.'_'.time().'.'.$image->getClientOriginalExtension();
       Image::make($image)->save(base_path('public/assets/uploads/slider/'.$imageName));
       slider::where('slider_id',$insertslider)->update([
         'slider_img' =>$imageName,
       ]);
      if($insertslider){
        Session::flash('status','value');
          return redirect('addslider');
      }else{
        Session::flash('error','value');
          return redirect('addslider');
      }
   }
  }   





  /**************************************************************
						Edit Slider
  /**************************************************************/

  public function editslider($id){
   	$editsliders =slider::where('slider_id',$id)->get();
    return view ('backend.slider.editslider',compact('editsliders'));
     }





  /**************************************************************
						UPDATE SLIDER
  /**************************************************************/



   public function updateslider(Request $request,$id){
      $image_path=slider::where('slider_id', $id)->FirstorFail();
    $this->validate($request,[
        'slider_img' => 'mimes:jpeg,jpg,png,gif',
          ],[
            'slider_img.mimes' => 'image format allow only jpeg,jpg,png,gif',
          ]);
       if(!empty($_FILES['slider_img']['name'])){
      
        $updateslider=slider::where('slider_id',$id)->update([
 
         'slider_img' =>$_FILES['slider_img']['name'],
     
         'Created_at' => Carbon::now()->toDateTimeString(),
        ]);
      
	     if($request->hasFile('slider_img')){
	       $image=$request->file('slider_img');
	       $imageName='slider_'.$updateslider.'_'.time().'.'.$image->getClientOriginalExtension();
	       $unlik=Image::make($image)->save(public_path('/assets/uploads/slider/'.$imageName));
          
	       slider::where('slider_id',$id)->update([
	         'slider_img' =>$imageName,
	       ]);
        if (file_exists(public_path().'/assets/uploads/slider/'.$image_path->slider_img)) {
             unlink(public_path().'/assets/uploads/slider/'.$image_path->slider_img);
         }else{
          return redirect(route('allslider'));
         }
 
      }
    }else{


        $updateslider=slider::where('slider_id',$id)->update([
         'slider_img' =>$image_path->slider_img,
         'Created_at' => Carbon::now()->toDateTimeString(),

        ]);
    }
	      if($updateslider){
	        Session::flash('status','value');
	          return redirect('allslider');
	      }else{
	        Session::flash('error','value');
	          return redirect('allslider');
	      }
	 
   }





  /**************************************************************
						Delete slider
  /**************************************************************/

  public function deleteslider($id){
    $image_path=slider::where('slider_id', $id)->FirstorFail();
     $delete_slider=slider::where('slider_id',$id)->delete();
 
      if (file_exists(public_path().'/assets/uploads/slider/'.$image_path->slider_img)) {
       unlink(public_path().'/assets/uploads/slider/'.$image_path->slider_img);
        return redirect(route('allslider'))->with('delete_slider','Data Deleted Sucessfuly');
 
     }else{
       return redirect(route('allslider'))->with('delete_slider','Data Deleted Sucessfuly');
     }  
  }






   
}

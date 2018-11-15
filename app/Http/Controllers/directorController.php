<?php

namespace App\Http\Controllers;
use App\director;
use Illuminate\Http\Request;
use Image;
use Session;
use Carbon\Carbon;
class directorController extends Controller
{


public function __construct(){
  $this->middleware('auth');
}


/* ****************************
        SHOW ALL DIRECTOR
*************************** */

  public function alldirectors(){
    $directors=director::orderBy('director_id','DESC')->get();
  	return view('backend.directors.alldirector',compact('directors'));
  }
  public function add_director(){
  		return view('backend.directors.adddirector');
  }

/* ****************************
        INSERT DORECTPR
*************************** */
  public function inser_director(Request $request){
   	     $this->validate($request,[
        'director_name' => 'required',
        'director_title' => 'required',
        'director_img' => ' required|mimes:jpeg,jpg,png,gif|max:1024',
          ],[
        'director_name.required' => 'Director name is required',
        'director_title.required' => 'Director title is required',
        'director_img.required' => 'Director image is required',
        'director_img.mimes' => 'image format allow only jpeg,jpg,png,gif',
          ]);

        $insertdirector=director::insertGetId([
         'director_name' =>$_POST['director_name'],
         'director_title' =>$_POST['director_title'],
         'director_email' =>$_POST['director_email'],
         'director_phone' =>$_POST['director_phone'],
         'director_message' =>$_POST['director_message'],
         'director_img' => 'Director.jpg',
         'Created_at' => Carbon::now()->toDateTimeString(),
      ]);
     if($request->hasFile('director_img')){
       $image=$request->file('director_img');
       $imageName='Director_'.$insertdirector.'_'.time().'.'.$image->getClientOriginalExtension();
       Image::make($image)->resize('220','290')->save(base_path('public/assets/uploads/directors/'.$imageName));
       director::where('director_id',$insertdirector)->update([
         'director_img' =>$imageName,
       ]);
      if($insertdirector){
        Session::flash('status','value');
          return redirect('add_director');
      }else{
        Session::flash('error','value');
          return redirect('add_director');
      }
   }
  }   


/* ****************************
        EDIT DIRECTOR
*************************** */

  public function edit_director($id){
   	$editdirector =director::where('director_id',$id)->FirstorFail();
    return view ('backend.directors.editdirector',compact('editdirector'));
     }


/* ****************************
       UPDATE DIRECTOR
*************************** */

   public function update_director(Request $request,$id){
      $image_path=director::where('director_id', $id)->FirstorFail();
         $this->validate($request,[
        'director_name' => 'required',
        'director_title' => 'required',
        'director_img' => 'mimes:jpeg,jpg,png,gif|max:1024',
          ],[
        'director_name.required' => 'Director name is required',
        'director_title.required' => 'Director title is required',
        'director_img' => 'Director image is required',
        'director_img.mimes' => 'image format allow only jpeg,jpg,png,gif',
          ]);
       if(!empty($_FILES['director_img']['name'])){
        $update_director=director::where('director_id',$id)->update([
              'director_name' =>$_POST['director_name'],
	         'director_title' =>$_POST['director_title'],
	         'director_email' =>$_POST['director_email'],
	         'director_phone' =>$_POST['director_phone'],
	         'director_message' =>$_POST['director_message'],
	         'director_img' => 'Director.jpg',
	         'Created_at' => Carbon::now()->toDateTimeString(),
           ]);
      
	     if($request->hasFile('director_img')){
	       $image=$request->file('director_img');
	       $imageName='updatedirector_'.$update_director.'_'.time().'.'.$image->getClientOriginalExtension();
	        Image::make($image)->resize('220','290')->save(base_path('public/assets/uploads/directors/'.$imageName));
          
	       director::where('director_id',$id)->update([
	         'director_img' =>$imageName,
	       ]);
        if (file_exists(public_path().'/assets/uploads/directors/'.$image_path->director_img)) {
             unlink(public_path().'/assets/uploads/directors/'.$image_path->director_img);
         }else{
          return redirect(route('alldirectors'));
         }
 
      }
    }else{
        $update_director=director::where('director_id',$id)->update([
            'director_name' =>$_POST['director_name'],
	         'director_title' =>$_POST['director_title'],
	         'director_email' =>$_POST['director_email'],
	         'director_phone' =>$_POST['director_phone'],
	         'director_message' =>$_POST['director_message'],
	         'Created_at' => Carbon::now()->toDateTimeString(),

        ]);
    }
	      if($update_director){
	        Session::flash('status','value');
	          return redirect('alldirectors');
	      }else{
	        Session::flash('error','value');
	          return redirect('alldirectors');
	      }
	 
   }


/* ****************************
        DELETE DIRECTOR
*************************** */


  public function delete_director($id){
    $image_path=director::where('director_id', $id)->FirstorFail();
     $delete_slider=director::where('director_id',$id)->delete();
 
      if (file_exists(public_path().'/assets/uploads/directors/'.$image_path->director_img)) {
       unlink(public_path().'/assets/uploads/directors/'.$image_path->director_img);
        return redirect(route('alldirectors'))->with('delete_director','Director Deleted Sucessfuly');
 
     }else{
       return redirect(route('alldirectors'))->with('delete_director','Director Deleted Sucessfuly');
     }  
  }



















}

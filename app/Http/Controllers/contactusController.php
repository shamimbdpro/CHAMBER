<?php

namespace App\Http\Controllers;
use App\contactus;
use Illuminate\Http\Request;
use Session;

class contactusController extends Controller
{

public function __construct(){
  $this->middleware('auth');
}
    
    public function contact_us(){
    	 $contact_us=contactus::orderBy('id','DESC')->get();
         return view('backend.contact.allcontact',compact('contact_us'));
    }


    public function view_contact($id){
    	$view_contact=contactus::where('id',$id)->FirstorFail();
    	return view('backend.contact.viewcontact',compact('view_contact'));
    } 

       public function editcontact($id){
    	$edit_contact=contactus::where('id',$id)->FirstorFail();
    	return view('backend.contact.editcontact',compact('edit_contact'));
    }

    public function updateContact($id){

    	$upcatContact=contactus::where('id',$id)->update([
               'contact_name' =>$_POST['contact_name'],
		         'contact_email' =>$_POST['contact_email'],
		         'contact_message' =>$_POST['contact_message'],
    	]);

    	if($upcatContact){
    		Session::flash('updatecontact','value');
    		return redirect(route('contact_us'));
    	}else{
    	   Session::flash('error','value');
            return redirect(route('contact_us'));   
    	}
    }


    public function deletecontact($id){
    	$delete_contact=contactus::where('id',$id)->delete();
    	if($delete_contact){
    	   Session::flash('deletecontact','value');
    	    return redirect(route('contact_us'));   
        }else{
          Session::flash('error','value');
            return redirect(route('contact_us'));   
        }
    }


}

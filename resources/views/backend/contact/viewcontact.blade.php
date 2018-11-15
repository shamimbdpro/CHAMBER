@extends('layouts.backend')
@section('contents')

   <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> All Contact</h1>
          <p>you can update, delete, edit from this page</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">All Contact</li>
        </ul>
      </div>
       <div class="row justify-content-md-center ">
       <div class="col-md-6 ">
        @if (Session('updatecontact'))
               <div class="alert alert-success text-center">
                <strong>Contact Updated Successfully</strong>
              </div>
          @endif
      </div>
      </div>    

         <div class="row justify-content-md-center ">
       <div class="col-md-6 ">
        @if (Session('deletecontact'))
               <div class="alert alert-danger text-center">
                <strong>Contact Deleted Successfully</strong>
              </div>
          @endif
      </div>
      </div>
      

      <div class="row justify-content-md-center">
          
    <div class="col-md-8">
              <div class="tile">
                <h3 class="tile-title">Contact Infomaiton</h3>
                <table class="table">
                  <div class="row view_m">
                  <div class="col-lg-3"><strong>Name :</strong></div>
                     <div class="col-lg-9">{{$view_contact->contact_name}}</div>
                 </div>

                  <div class="row view_m">
                  <div class="col-lg-3"><strong>Email :</strong></div>
                     <div class="col-lg-9">{{$view_contact->contact_email}}</div>
                 </div>   

                   <div class="row view_m">
                  <div class="col-lg-12"><strong>Message :</strong></div>
                     <div class="col-lg-12">{{$view_contact->contact_message}}</div>
                 </div>
                
                  </tbody>
                </table>
              </div>
            </div>
      </div>
    </main>

    <style>
       .view_m {
  border: 1px solid #000;
  padding: 20px 0px;
}

    </style>

    @endsection
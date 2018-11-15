 @extends('layouts.backend')
@section('contents')
 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i>Update Contact</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Update Contact</li>
        </ul>
      </div>

      <div class="row justify-content-md-center">
      	 
        <div class="col-md-10">
          
        	@if (Session('status'))
		     <div class="alert alert-success text-center">
                <strong>News added successfully</strong>
           </div>
		      @endif

          <div class="tile">
             <form action="{{route('updateContact',$edit_contact->id)}}" method="post">
             	@csrf
	            <div class="tile-body">

                <div class="form-group">
                  <label class="control-label">Contact Name</label>
                  <input type="text" class="form-control" name="contact_name" value="{{$edit_contact->contact_name}}">
                 
                </div>

                 <div class="form-group">
                  <label class="control-label">Contact Email</label>
                  <input type="email" class="form-control" name="contact_email" value="{{$edit_contact->contact_email}}">
               
                </div>  

                <div class="form-group">
                  <label class="control-label">News description</label>
                  <textarea id="summernote2" class="form-control" name="contact_message" rows="10">{{$edit_contact->contact_message}}</textarea>
                   
                </div>

	            </div>
	            <div class="tile-footer">
	              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Conact</button>
	            </div>
             </form>
          </div>
        </div>
        </div>
    





    </main>

    @endsection
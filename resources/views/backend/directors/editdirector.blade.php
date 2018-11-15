 @extends('layouts.backend')
@section('contents')
 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Update Director</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Update Director</li>
        </ul>
      </div>

      <div class="row justify-content-md-center">
         
        <div class="col-md-10">
      
        
          <div class="tile">
            <h3 class="tile-title">Update Director</h3>
             <form action="{{route('update_director',$editdirector->director_id)}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="tile-body">

                <div class="form-group">
                  <label class="control-label">Director Name <span class="required_filed">*</span></label>
                  <input type="text" class="form-control"  placeholder="Enter Director Name" name="director_name" value="{{$editdirector->director_name}}">
                     @if($errors->has('director_name'))
                                 <p class="help-block">{{$errors->first('director_name')}}</p>
                         @endif
                </div> 

                <div class="form-group">
                  <label class="control-label">Director Title <span class="required_filed">*</span></label>
                  <input type="text" class="form-control"  placeholder="Enter Director Title" name="director_title" value="{{$editdirector->director_title}}">
                     @if($errors->has('director_title'))
                                 <p class="help-block">{{$errors->first('director_title')}}</p>
                         @endif
                </div> 

                <div class="form-group">
                  <label class="control-label">Director Email</label>
                  <input type="email" class="form-control"  placeholder="Enter Director Email" name="director_email" value="{{$editdirector->director_email}}">
                </div> 

                <div class="form-group">
                  <label class="control-label">Director Phone</label>
                  <input type="text" class="form-control"  placeholder="Enter Director Phone Number" name="director_phone" value="{{$editdirector->director_phone}}">
                </div> 

               <div class="form-group">
                  <label class="control-label">Director Message</label>
                  <textarea id="summernote" class="form-control" placeholder="Director Message" name="director_message" rows="10" value="">{{$editdirector->director_message}}</textarea>
               </div>

                  <div class="form-group">
                    <label class="control-label">Add Director Image <span class="required_filed">*</span></label>
                    <input class="form-control" type="file" name="director_img" value="{{$editdirector->director_img}}">
                         @if($errors->has('director_img'))
                                 <p class="help-block">{{$errors->first('director_img')}}</p>
                         @endif
                          <img height="90" src="{{asset('assets/uploads/directors/')}}/{{$editdirector->director_img}}">
                  </div>

           

              </div>
              <div class="tile-footer">
                <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Director</button>
              </div>
             </form>
          </div>
        </div>
        </div>
    





    </main>

    @endsection
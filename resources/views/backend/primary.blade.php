@extends('layouts.backend')
@section('contents')

   <main class="app-content">
      @if (Session('status'))
          <p class="sucmsg">Infomation Updated successfully</p>
       @endif
      <div class="row">
          <div class="col-md-12">
          {{-- welcome message --}}
            <form action="{{route('updatelogo')}}" method="post" enctype="multipart/form-data">
              @csrf
            <div class="form-group row">
                  <label class="control-label col-md-2">Update Logo</label>
                  <div class="col-md-10">
                    <input type="file" name="logo" value="{{$logoInfo->logo}}">
                  </div>
                    <label class="control-label col-md-2"></label>
                  <div class="col-md-10">
                   <img width="200" height="100" src="{{asset('assets/uploads/logo')}}/{{$logoInfo->logo}}" alt="image">
                  </div>
                    
            </div>
               <div class="tile-footer text-right" style="margin-bottom: 20px">
                <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Logo</button>
               </div>
          </form>
          <form action="{{route('insertorginfo')}}" method="post">
            @csrf
            <div class="form-group row">
                  <label class="control-label col-md-2">Organization Title</label>
                  <div class="col-md-10">
                   <input type="text" name="title" class="form-control" value=" {{ $organizationinfo->title }}">
                  </div>
            </div> 

             <div class="form-group row">
                  <label class="control-label col-md-2">Meta Description</label>
                  <div class="col-md-10">
                    <textarea rows="6" class="form-control" name="meta">{{$organizationinfo->meta}}</textarea>
                  </div>
            </div>  
              <div class="form-group row">
                  <label class="control-label col-md-2">Google Map</label>
                  <div class="col-md-10">
                    <textarea class="form-control" name="map"> {{$organizationinfo->map }}</textarea>
                    {!!$organizationinfo->map !!}
                  </div>
            </div>  

           <div class="form-group row">
                  <label class="control-label col-md-2">Contact Information</label>
                  <div class="col-md-10">
                    <textarea id="summernote" class="form-control" name="contact_details">{{$organizationinfo->contact_details}}</textarea>
                  </div>
            </div>  

                <div class="form-group row">
                  <label class="control-label col-md-2">Copyright</label>
                  <div class="col-md-10">
                    <textarea class="form-control" name="copyright"> {{$organizationinfo->copyright }}</textarea>
                  </div>
            </div>
               <div class="tile-footer text-right" style="margin-bottom: 20px">
                <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update information</button>
               </div>
          </form>
             
           </div>
       
        
      </div>

       
    </main>


    @endsection
 @extends('layouts.backend')
@section('contents')
 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i>Update Social</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Update Social</li>
        </ul>
      </div>

      <div class="row justify-content-md-center">
      	 
        <div class="col-md-10">
          

          <div class="tile">
             <form action="{{route('updatesocial',$getsocial->id)}}" method="post">
             	@csrf
	            <div class="tile-body">

                <div class="form-group">
                  <label class="control-label">Social Name</label>
                  <input type="text" class="form-control" name="social_name" placeholder="Ex: fa-facebook" value="{{$getsocial->social_name}}">
                     @if($errors->has('social_name'))
                                 <p class="help-block">{{$errors->first('social_name')}}</p>
                    @endif
                </div>


                 <div class="form-group">
                  <label class="control-label">Social Link</label>
                  <input type="url" class="form-control" placeholder="Enter Social Link" name="social_link" value="{{$getsocial->social_link}}">
                    @if($errors->has('social_link'))
                                 <p class="help-block">{{$errors->first('social_link')}}</p>
                    @endif
                </div>  

                  <div class="form-group">
                    <label for="exampleSelect1">Social Status</label>
                    <select class="form-control" id="exampleSelect1" name="social_status">
                      <option value="1">Publish</option>
                      <option value="0">Unpublish</option>
                    </select>
                  </div>

	            </div>
	            <div class="tile-footer">
	              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add Social</button>
	            </div>
             </form>
          </div>
        </div>
        </div>
    





    </main>

    @endsection
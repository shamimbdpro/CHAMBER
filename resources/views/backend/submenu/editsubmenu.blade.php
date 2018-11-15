 @extends('layouts.backend')
@section('contents')
 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Update submenu</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Update submenu</li>
        </ul>
      </div>

      <div class="row justify-content-md-center">
      	 
        <div class="col-md-10">
          
        	@if (Session('status'))
		     <div class="alert alert-success text-center">
                <strong>Submenu Updated successfully</strong>
           </div>
		      @endif

          <div class="tile">
            <h3 class="tile-title">Update submenu</h3>
             <form action="{{route('updatesubmenu',$editsubmenu->id)}}" method="post">
             	@csrf
	            <div class="tile-body">
                <div class="form-group">
                  <label class="control-label">Submenu Name</label>
                  <input type="text" class="form-control"  placeholder="Submenu name" name="submenu_name" value="{{$editsubmenu->submenu_name}}">
                     @if($errors->has('submenu_name'))
                                 <p class="help-block">{{$errors->first('submenu_name')}}</p>
                     @endif
                </div>   
               <label class="control-label">Sub menu URL</label>
                <div class="input-group mb-2 mr-sm-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">{{Request::server ("SERVER_NAME")}} /</div>
                  </div>
                  <input type="text" class="form-control" id="url" placeholder="Submenu URl" name="submenu_url" value="{{$editsubmenu->submenu_url}}">
                </div>

                <div class="form-group">
                  <label class="control-label">Submenu Sirial</label>
                  <input type="number" class="form-control" max="10"  min="0" name="submenu_si" value="{{$editsubmenu->submenu_si}}">
           </div> 
           <input type="hidden" class="form-control" max="10"  min="0" name="menu_id" value="{{ $id }}">
          


                  <div class="form-group">
                    <label for="status">Publication Status</label>
                    <select class="form-control" id="status" name="submenu_status">
                      <option value="1">Publish</option>
                      <option @if($editsubmenu->submenu_status==0)
                               selected="selected"
                         @endif value="0">Unpublish</option>
                    </select>
                  </div>
	            </div>
	            <div class="tile-footer">
	              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Submenu</button>
	            </div>
             </form>
          </div>
        </div>
        </div>
    


    </main>

    @endsection
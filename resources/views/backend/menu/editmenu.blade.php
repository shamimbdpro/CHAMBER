 @extends('layouts.backend')
@section('contents')
 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Add New Menu</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">add New Menu</li>
        </ul>
      </div>

      <div class="row justify-content-md-center">
        <div class="col-md-10">
          <div class="tile">
            <h3 class="tile-title">Update Menu</h3>
             <form action="{{route('updatemenu',$editmenu->id)}}" method="post">
             	@csrf
	            <div class="tile-body">
                <div class="form-group">
                  <label class="control-label">Menu Name</label>
                  <input type="text" class="form-control"  placeholder="Menu name" name="menu_name" value="{{$editmenu->menu_name}}">
                     @if($errors->has('menu_name'))
                                 <p class="help-block">{{$errors->first('menu_name')}}</p>
                     @endif
                </div>   
               <label class="control-label">Menu URL</label>
                <div class="input-group mb-2 mr-sm-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">{{Request::server ("SERVER_NAME")}} /</div>
                  </div>
                  <input type="text" class="form-control" id="url" placeholder="URl" name="menu_url" value="{{$editmenu->menu_url}}">
                  
                </div>
                @if($errors->has('menu_url'))
                                 <p class="help-block">{{$errors->first('menu_url')}}</p>
                    @endif
                <div class="form-group">
                  <label class="control-label">Menu Sirial</label>
                  <input type="number" class="form-control" max="10"  min="0" name="menu_si" value="{{$editmenu->menu_si}}">
                   @if($errors->has('menu_si'))
                                 <p class="help-block">{{$errors->first('menu_si')}}</p>
                    @endif
                </div> 


                 <div class="form-group">
                    <label for="status">Where Want to Display</label>
                    <select class="form-control" id="status" name="menu_display">
                      <option value="11">header</option>
                      <option 
                          @if($editmenu->menu_display==00)
                               selected="selected"
                         @endif value="00">sidebar</option>
                    </select>
                       @if($errors->has('menu_display'))
                                 <p class="help-block">{{$errors->first('menu_display')}}</p>
                     @endif
                  </div>

                  <div class="form-group">
                    <label for="status">Publication Status</label>
                    <select class="form-control" id="status" name="menu_status">
                      <option value="1">Publish</option>
                        <option 
                          @if($editmenu->menu_status==0)
                               selected="selected"
                         @endif value="00">Unpublish</option>
                    </select>
                        @if($errors->has('menu_status'))
                                 <p class="help-block">{{$errors->first('menu_status')}}</p>
                     @endif
                  </div>
	            </div>
	            <div class="tile-footer">
	              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Menu</button>
	            </div>
             </form>
          </div>
        </div>
        </div>
    





    </main>

    @endsection
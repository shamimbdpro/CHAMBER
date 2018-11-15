 @extends('layouts.backend')
@section('contents')
 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Add submenu</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">add submenu</li>
        </ul>
      </div>

      <div class="row justify-content-md-center">
      	 
        <div class="col-md-10">
          
          @if (Session('status'))
         <div class="alert alert-success text-center">
                <strong>Submenu added successfully</strong>
           </div>
          @endif 
          	@if (Session('deletesubmenu'))
		     <div class="alert alert-danger text-center">
                <strong>Submenu Deleted successfully</strong>
           </div>
		      @endif

          <div class="tile">
            <h3 class="tile-title">Add submenu</h3>
             <form action="{{route('insertsubmenu')}}" method="post">
             	@csrf
	            <div class="tile-body">
                <div class="form-group">
                  <label class="control-label">Submenu Name</label>
                  <input type="text" class="form-control"  placeholder="Submenu name" name="submenu_name" value="{{old('submenu_name')}}">
                     @if($errors->has('submenu_name'))
                                 <p class="help-block">{{$errors->first('submenu_name')}}</p>
                     @endif
                </div>   
               <label class="control-label">Sub menu URL</label>
                <div class="input-group mb-2 mr-sm-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">{{Request::server ("SERVER_NAME")}} /</div>
                  </div>
                  <input type="text" class="form-control" id="url" placeholder="Submenu URl" name="submenu_url" value="{{old('submenu_url')}}">
                </div>

                <div class="form-group">
                  <label class="control-label">Submenu Sirial</label>
                  <input type="number" class="form-control" max="10"  min="0" name="submenu_si" value="{{old('submenu_si')}}">
                     @if($errors->has('submenu_si'))
                                 <p class="help-block">{{$errors->first('submenu_si')}}</p>
                     @endif
               </div> 
           <input type="hidden" class="form-control" max="10"  min="0" name="menu_id" value="{{ $id }}">
          


                  <div class="form-group">
                    <label for="status">Publication Status</label>
                    <select class="form-control" id="status" name="submenu_status">
                      <option value="1">Publish</option>
                      <option value="0">Unpublish</option>
                    </select>
                  </div>
	            </div>
	            <div class="tile-footer">
	              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add Submenu</button>
	            </div>
             </form>
          </div>
        </div>
        </div>
    


<!--****************************
        submenu list
****************************-->
<div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">All Submenu List</h3>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Submenu No</th>
                    <th>Submenu Name</th>
                 
                    <th>Parent URL</th>
                    <th>Submenu Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=0;?>
                  @foreach($submenuinfo as $submenu)
                     <?php $i++;?>
                  <tr>
                    <td>{{$i}}</td>
                    <td>{{$submenu->submenu_name}}</td>
                  
                    <td>{{$submenu->submenu_url}}</td>

                    <td>  @if($submenu->submenu_status ==1)
                       <a  href="{{route('unpublishsubmenu',$submenu->id)}}" class="btn btn-small btn-success ">Publish</a>
                     @else
                      <a href="{{route('publishsubmenu',$submenu->id)}}" class="btn btn-small btn-secondary ">Unpublish</a>
                     @endif </td>

                  <td>
                  <div class="btn-group action-group">
                         <a class="btn btn-primary" href="{{route('editsubmenu',$submenu->id)}}"><i class="fa fa-lg fa-edit"></i></a>  
                        <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#{{$submenu->id}}"><i class="fa fa-lg fa-trash"></i></a> 
                      </div>

                </td>

                  </tr>
      <!-- Modal -->
                  <div class="modal fade" id="{{$submenu->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">are you sure want to delete Submenu?</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                          <form action="{{route('deletesubmenu',$submenu->id)}}">
                          <button type="submit" id='deleted' class="btn btn-danger">Delete</button>
                        </form> 
                        </div>
                      </div>
                    </div>
                  </div>

                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>


    </main>

    @endsection
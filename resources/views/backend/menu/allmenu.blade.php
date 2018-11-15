@extends('layouts.backend')
@section('contents')

   <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> All Menu</h1>
          <p>you can update, delete, edit from this page</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">All Menu</li>
        </ul>
      </div>
       <div class="row justify-content-md-center ">
       <div class="col-md-6 ">
        @if (Session('deletemnu'))
               <div class="alert alert-danger text-center">
                <strong>{{session('deletemnu')}}</strong>
              </div>
          @endif
      </div>
      </div>  
        <div class="row justify-content-md-center ">
       <div class="col-md-6 ">
        @if (Session('status'))
               <div class="alert alert-success text-center">
                <strong>Menu Updated Successfully</strong>
              </div>
          @endif
      </div>
      </div>
      <div class="add-slider">
      	 <a class="btn btn-primary icon-btn" href="{{route('addmenu')}}"><i class="fa fa-plus"></i>Add menu</a>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Menu No</th>
                    <th>Menu Name</th>
                    <th>Submenu</th>
                    <th>Menu Dispaly</th>
                    <th>Menu Status</th>
                    <th>action</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <?php $x=0;?>
                  @foreach($allmenus as $allmenu)
                     <?php $x++;?>
                  <tr>
                    <td><?php echo $x;?></td>
                   
                    <td>{{$allmenu->menu_name}}</td>
                  
                 <td> <a  href="{{route('addsubmenu',$allmenu->id)}}" class="btn btn-small btn-warning ">Submenu</a></td>
                   <td>
                     @if($allmenu->menu_display ==11)
                      <button type="button" class="btn btn-outline-success">Header Menu</button>
                     @else
                     <button type="button" class="btn btn-outline-warning">Sidebar Menu</button>
                     @endif
                    </td>


                    <td>
                     @if($allmenu->menu_status ==1)
                       <a  href="{{route('unpublishmenu',$allmenu->id)}}" class="btn btn-small btn-success ">Publish</a>
                     @else
                     <a  href="{{route('publishmenu',$allmenu->id)}}" class="btn btn-small btn-secondary ">Unpublish</a>
                     @endif
                    </td>
                    <td>
                      
                      <div class="btn-group action-group">
                         <a class="btn btn-primary" href="{{route('editmenu',$allmenu->id)}}"><i class="fa fa-lg fa-edit"></i></a>  
                        <a class="btn btn-danger" href="#"  data-toggle="modal" data-target="#{{$allmenu->id}}"><i class="fa fa-lg fa-trash"></i></a> 
                      </div>
                    </td>
                   
                  </tr>


                  <!-- Modal -->
                  <div class="modal fade" id="{{$allmenu->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">are you sure want to delete Menu?</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                          <form action="{{route('delete_menu',$allmenu->id)}}">
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
      </div>
    </main>

    @endsection
@extends('layouts.backend')
@section('contents')

   <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> All Quick Link</h1>
          <p>you can update, delete, edit from this page</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">All Quick link</li>
        </ul>
      </div>
       <div class="row justify-content-md-center ">
       <div class="col-md-6 ">
        @if (Session('updatesocial'))
               <div class="alert alert-success text-center">
                <strong>Link Updated Successfully</strong>
              </div>
          @endif
      </div>
      </div>    

         <div class="row justify-content-md-center ">
       <div class="col-md-6 ">
        @if (Session('deletelink'))
               <div class="alert alert-danger text-center">
                <strong>Link Deleted Successfully</strong>
              </div>
          @endif
      </div>
      </div>
        <div class="add-slider">
         <a class="btn btn-primary icon-btn" href="{{route('addlink')}}"><i class="fa fa-plus"></i>Add New Link</a>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Link no</th>
                    <th>Link title</th>
                    <th>link url</th>
                    <th>action</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <?php $x=0;?>
                  @foreach($getlink as $link)
                     <?php $x++;?>
                  <tr>
                    <td><?php echo $x;?></td>
                   
                    <td>{{$link->link_title}}</td>
                    <td>{{$link->link_url}}</td>
                
                    <td>
                      <div class="btn-group action-group">
                         <a class="btn btn-primary" href="{{route('editlink',$link->id)}}"><i class="fa fa-lg fa-edit"></i></a>  
                        <a class="btn btn-danger" href="#"  data-toggle="modal" data-target="#{{$link->id}}"><i class="fa fa-lg fa-trash"></i></a> 
                      </div>
                    </td>
                   
                  </tr>


                  <!-- Modal -->
                  <div class="modal fade" id="{{$link->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">are you sure want to delete Quick link?</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                          <form action="{{route('deletelink',$link->id)}}">
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
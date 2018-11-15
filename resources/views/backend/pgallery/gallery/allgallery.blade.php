@extends('layouts.backend')
@section('contents')

   <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i>Photo Gallery</h1>
          <p>you can update, delete, edit from this page</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Photo Gallery</li>
        </ul>
      </div>
      <div class="add-slider">
      	 <a class="btn btn-primary icon-btn" href="{{route('addgallery')}}"><i class="fa fa-plus"></i>Add Gallery Image</a>
      </div>
          <div class="row justify-content-md-center ">
               <div class="col-md-6 ">
                @if (Session('deletegallery'))
                       <div class="alert alert-danger text-center">
                        <strong>Gallery Deleted Successfully</strong>
                      </div>
                  @endif
              </div>
            </div>
          @if (Session('updategallery'))
               <p class="sucmsg">Gallery Updated Suceesfully</p>
             @endif
             <div class="row justify-content-md-center ">
               <div class="col-md-6 ">
                @if (Session('deletepcat'))
                       <div class="alert alert-danger text-center">
                        <strong>{{session('deletegallery')}}</strong>
                      </div>
                  @endif
              </div>
            </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Gallery No</th>
                    <th>Gallery Image</th>
                    <th>Gallery Category</th>
                    <th>Gallery status</th>
                    <th>action</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <?php $x=0;?>
                  @foreach($pgallerys as $pgallery)
                  <?php $x++;?>
                  <tr>
                    <td>{{$x}}</td>
                    <td> <img height="50" width="100" src="{{asset('assets/uploads/photogallery/galleryimage')}}/{{$pgallery->pgallery_img}}" alt="Image"></td>
                    <td>{{$pgallery->catname->gallerycat_name}}</td>
                      <td>
                     @if($pgallery->pgallery_status ==1)
                       <a  href="{{route('unpublish_gallery',$pgallery->id)}}" class="btn btn-small btn-success ">Active</a>
                     @else
                      <a href="{{route('publish_gallery',$pgallery->id)}}" class="btn btn-small btn-secondary ">Deactive</a>
                     @endif
                    </td>
                    <td>
                      
                      <div class="btn-group action-group">
                        <a class="btn btn-primary" href="{{route('editpgallery',$pgallery->id)}}"><i class="fa fa-lg fa-edit"></i></a>
                        <a class="btn btn-danger" href="#"  data-toggle="modal" data-target="#{{$pgallery->id}}"><i class="fa fa-lg fa-trash"></i></a>
                      </div>
                    </td>
                   
                  </tr>


                  <!-- Modal -->
                  <div class="modal fade" id="{{$pgallery->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">are you want to sure delete Gallery?</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                          <form action="{{route('deletegallery',$pgallery->id)}}">
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
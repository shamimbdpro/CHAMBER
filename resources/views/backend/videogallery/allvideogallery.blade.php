@extends('layouts.backend')
@section('contents')

   <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> All Video</h1>
          <p>you can update, delete, edit from this page</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">All Video</li>
        </ul>
      </div>
      <div class="add-slider">
      	 <a class="btn btn-primary icon-btn" href="{{route('addvideovideogallery')}}"><i class="fa fa-plus"></i>Add Video  </a>
      </div>

          @if (Session('updategallery'))
               <p class="sucmsg">Video Updated Suceesfully</p>
             @endif
             <div class="row justify-content-md-center ">
               <div class="col-md-6 ">
                @if (Session('deletevideo'))
                       <div class="alert alert-danger text-center">
                        <strong>{{session('deletevideo')}}</strong>
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
                    <th>Video No</th>
                    <th>Video Thumbnail</th>
                    <th>Video Title</th>
                    <th>Video Link</th>
                    <th>action</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <?php $x=0;?>
                  @foreach($videogallerys as $videogallery)
                  <?php $x++;?>
                  <tr>
                    <td>{{$x}}</td>
                    <td> <img height="50" src="http://img.youtube.com/vi/{{$videogallery->video_thumb}}/0.jpg" alt="Image"></td>
                   
                    <td><p>{{str_limit($videogallery->video_title, 58, '...')}}</p></td>
                    <td>{{$videogallery->video_link}}</td>
                    <td>
                      
                      <div class="btn-group action-group">
                        <a class="btn btn-primary" href="{{route('editgallery',$videogallery->id)}}"><i class="fa fa-lg fa-edit"></i></a>
                        <a class="btn btn-danger" href="#"  data-toggle="modal" data-target="#{{$videogallery->id}}"><i class="fa fa-lg fa-trash"></i></a>
                      </div>
                    </td>
                   
                  </tr>
                  <!-- Modal -->
                  <div class="modal fade" id="{{$videogallery->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">are you want to sure delete Video?</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                          <form action="{{route('deletevideo',$videogallery->id)}}">
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



<script type="text/javascript">
  
  $('#deleted').click(function(){
    return true;

  });
</script>

    @endsection
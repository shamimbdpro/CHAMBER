@extends('layouts.backend')
@section('contents')

   <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> All Category</h1>
          <p>you can update, delete, edit from this page</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">All Category</li>
        </ul>
      </div>
      <div class="add-slider">
      	 <a class="btn btn-primary icon-btn" href="{{route('addpcat')}}"><i class="fa fa-plus"></i>Add Category  </a>
      </div>

          @if (Session('updatecat'))
               <p class="sucmsg">Category Updated Suceesfully</p>
             @endif
             <div class="row justify-content-md-center ">
               <div class="col-md-6 ">
                @if (Session('deletepcat'))
                       <div class="alert alert-danger text-center">
                        <strong>{{session('deletepcat')}}</strong>
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
                    <th>Category No</th>
                    <th>Category Image</th>
                    <th>Category Name</th>
                    <th>action</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <?php $x=0;?>
                  @foreach($pcats as $pcat)
                  <?php $x++;?>
                  <tr>
                    <td>{{$x}}</td>
                    <td> <img height="50" src="{{asset('assets/uploads/photogallery/catimage')}}/{{$pcat->gallerycat_img}}" alt="Image"></td>
                    <td>{{$pcat->gallerycat_name}}</td>
                    <td>
                      
                      <div class="btn-group action-group">
                        <a class="btn btn-primary" href="{{route('editpcat',$pcat->gallerycat_id)}}"><i class="fa fa-lg fa-edit"></i></a>
                        <a class="btn btn-danger" href="#"  data-toggle="modal" data-target="#{{$pcat->gallerycat_id}}"><i class="fa fa-lg fa-trash"></i></a>
                      </div>
                    </td>
                   
                  </tr>


                  <!-- Modal -->
                  <div class="modal fade" id="{{$pcat->gallerycat_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">are you want to sure delete Category?</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                          <form action="{{route('deletepcat',$pcat->gallerycat_id)}}">
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
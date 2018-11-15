 @extends('layouts.backend')
@section('contents')
 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Update Gallery</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Update Gallery</li>
        </ul>
      </div>

      <div class="row justify-content-md-center">
         
        <div class="col-md-10">
          @if (Session('status'))
          <p class="sucmsg">Gallery Updated successfully</p>
       @endif
          <div class="tile">
            <h3 class="tile-title">Update Gallery </h3>
             <form action="{{route('updategallery',$editgallery->id)}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="tile-body">
                    <div class="form-group">
                    <label class="control-label">Gallery Image</label>
                    <input class="form-control" type="file" name="pgallery_img" alt="Gallery Image" value="{{$editgallery->pgallery_img}}">
                         @if($errors->has('pgallery_img'))
                                 <p class="help-block">{{$errors->first('pgallery_img')}}</p>
                             @endif
                      <img height="80" width="120" src="{{asset('assets/uploads/photogallery/galleryimage')}}/{{$editgallery->pgallery_img}}" alt="Image">
                  </div>

                <div class="form-group">
                    <label for="exampleSelect1">Category</label>
                    <select class="form-control" id="ceategoru" name="pgallery_cat">

                   @foreach($categoryitems as $categoryitem)
                      <option
                        @if($categoryitem->gallerycat_id == $editgallery->pgallery_cat ? 'selected' : '')
                          selected='select'
                        @endif
                       value="{{$categoryitem->gallerycat_id}}">{{$categoryitem->gallerycat_name}}</option>
                      @endforeach
                    </select>
                 </div>


                <div class="form-group">
                    <label for="exampleSelect1">Publication Status</label>
                    <select class="form-control" id="exampleSelect1" name="pgallery_status">
                      <option value="1">Publish Gallery</option>
                      <option 
                    @if($editgallery->pgallery_status==0)
                         selected="selected"
                   @endif value="0">Unpublish Gallery</option>
                    </select>
                 </div>


              </div>
              <div class="tile-footer">
                <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Gallery</button>
              </div>
             </form>
          </div>
        </div>
        </div>
    
     
    </main>

    @endsection
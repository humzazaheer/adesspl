@extends('/admin/base')

@section('title','Edit Gallery')

@section('content')

    <h1 class="text-center my-5">Edit Gallery</h1>
    <form id="edit_gallery_form" style="color: #757575;" method="post" action="/admin/edit_gallery/{{$gallery->id}}"
          enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="modal-body mx-3">

            <div class="md-form">
                <input type="text" id="client_name" name="client_name" class="form-control validate" value="{{$gallery->gallery_description}}">
                <label data-error="wrong" data-success="right">Gallery Description</label>
            </div>
            <div class="md-form file-field">
                <div class="btn ad-orangeGradient btn-sm float-left text-white">
                    <span><i class="fas fa-cloud-upload-alt mr-2" aria-hidden="true"></i>Choose file</span>
                    <input type="file" name="gallery_thumbnail" id="gallery_thumbnail">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload gallery thumbnail">
                </div>
            </div>
            <label class="font-weight-bold">Current Thumbnail</label>
            <div class="current_thumbnail">
                <img src="{{asset('/uploads')}}/{{$gallery->gallery_thumbnail}}" alt="{{$gallery->gallery_thumbnail}}" class="img-fluid w-25">
                <input type="hidden" id="client_thumbnail" name="gallery_current_thumbnail" class="form-control validate" value="{{$gallery->gallery_thumbnail}}">
            </div>

        </div>

        <div class="d-flex justify-content-center">
            <input class="btn ad-orangeGradient text-white btn-block my-4 waves-effect z-depth-0"
                   type="submit" id="update_client" name="update_client" value="Save"/>
            <input type="button" class="btn ad-orangeGradient waves-effect z-depth-0 btn-black my-4" onclick="history.back();" value="Back">
        </div>
    </form>
@endsection

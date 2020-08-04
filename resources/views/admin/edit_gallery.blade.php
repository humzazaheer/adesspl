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
                <input type="text" id="client_name" name="gallery_description" class="form-control validate" value="{{$gallery->gallery_description}}">
                <label>Gallery Description</label>
            </div>
            <div class="md-form file-field">
                <div class="btn ad-orangeGradient btn-sm float-left text-white">
                    <span><i class="fas fa-cloud-upload-alt mr-2" aria-hidden="true"></i>Choose file</span>
                    <input type="file" name="gallery_thumbnail" id="gallery_thumbnail">
                </div>
                <div class="file-path-wrapper @error('gallery_thumbnail') is-invalid @enderror">
                    <input class="file-path validate" type="text" placeholder="Upload gallery thumbnail">
                </div>

                @error('gallery_thumbnail')
                <span class="invalid-feedback"> {{$message}} </span>
                @enderror
            </div>
            <label class="font-weight-bold mb-4">Current Thumbnail</label>
            <div class="current_thumbnail">
                <img src="{{asset('/uploads')}}/{{$gallery->gallery_thumbnail}}" alt="{{$gallery->gallery_thumbnail}}" class="img-fluid w-25">
                <input type="hidden" id="client_thumbnail" name="gallery_current_thumbnail" class="form-control validate" value="{{$gallery->gallery_thumbnail}}">
            </div>

            <div class="md-form file-field mt-5">
                <div class="btn ad-orangeGradient btn-sm float-left text-white">
                    <span><i class="fas fa-cloud-upload-alt mr-2" aria-hidden="true"></i>Choose file</span>
                    <input type="file" name="gallery_images[]" id="gallery_images" multiple onchange="preview_images()">
                </div>
                <div class="file-path-wrapper @error('gallery_images.*') is-invalid @enderror">
                    <input class="file-path validate" type="text" placeholder="Upload gallery images">
                </div>

                @error('gallery_images.*')
                <span class="invalid-feedback"> {{$message}} </span>
                @enderror
            </div>

            <label class="font-weight-bold">Current Gallery</label>
            <div class="row" id="gallery-preview">

                @foreach(explode('|', $gallery->gallery_images) as $g_images)

                <div class='col-md-3 col-sm-4 w-50'><img class='img-fluid mx-auto my-3' src="{{asset('/uploads')}}/{{$g_images}}"></div>
            @endforeach
                    <input type="hidden" id="client_gallery" name="gallery_current_images" class="form-control validate" value="{{$gallery->gallery_images}}">
            </div>
            <label class="font-weight-bold mt-5">Selected Gallery</label>
            <div class="row" id="image-preview"></div>

        </div>

        <div class="d-flex justify-content-center">
            <input class="btn ad-orangeGradient text-white btn-block my-4 waves-effect z-depth-0"
                   type="submit" id="update_client" name="update_client" value="Save"/>
            <input type="button" class="btn ad-orangeGradient waves-effect z-depth-0 btn-black my-4" onclick="history.back();" value="Back">
        </div>
    </form>
@endsection

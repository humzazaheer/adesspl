@extends('/admin/base')

@section('title','Gallery')

@section('content')


    <h1 class="h1-responsive text-center my-5">Your Gallery</h1>
    <div class="row my-5">
        @if($msg = Session::get('success'))
            <div id="toast-container">
                <div class="md-toast md-toast-success">
                    <div class="md-toast-message">{{$msg}}</div>
                </div>
            </div>
        @endif

        <div class="ml-auto">
            <button class="btn ad-orangeGradient" data-toggle="modal" data-target="#clientModalAddForm">Add new</button>
        </div>
    </div>
    <!--Table-->
    <table id="dtMaterialDesignExample" class="ad-datatable table table-responsive-lg" width="100%">
        <!--Table head-->
        <thead>
        <tr>
            <th class="th-sm">Sr.</th>
            <th class="th-sm">Gallery Description</th>
            <th class="th-sm">Gallery Thumbnail</th>
            <th class="th-sm">Gallery Images</th>
            <th class="th-sm">Created at</th>
            <th class="th-sm">Updated at</th>
            <th class="th-sm">Edit</th>
            <th class="th-sm">Delete</th>
        </tr>
        </thead>
        <!--End Table head-->
        <!--Table body-->
        <tbody>
        @if($galleryData ?? '')
            @php
                $sr = 0;
            @endphp

            @foreach($galleryData as $data)
                @php
                    $sr++;
                @endphp
                <tr>
                    <td>{{$sr}}</td>
                    <td>{{$data->gallery_description}}</td>
                    <td><img src="{{asset('/uploads')}}/{{$data->gallery_thumbnail}}" alt="{{$data->gallery_thumbnail}}"></td>
                    <td>{{$data->gallery_images}}</td>
                    <td>{{$data->created_at}}</td>
                    <td>{{$data->updated_at}}</td>
                    <td><a href="/admin/edit_experience/{{$data->id}}"><i class="fa fa-edit"></i></a></td>
                    <td>
                        <form method="post" action="/admin/gallery/{{$data->id}}"> @csrf @method('put')
                            <button type="submit" name="delete_gallery" value="{{$data->id}}"><i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </td>

                </tr>

            @endforeach
        @endif
        </tbody>

        <!--End Table body-->
        <!--Table footer-->
        <tfoot>
        <tr>
            <th class="th-sm">Sr.</th>
            <th class="th-sm">Gallery Description</th>
            <th class="th-sm">Gallery Thumbnail</th>
            <th class="th-sm">Gallery Images</th>
            <th class="th-sm">Created at</th>
            <th class="th-sm">Updated at</th>
            <th class="th-sm">Edit</th>
            <th class="th-sm">Delete</th>
        </tr>
        </tfoot>
        <!--End Table footer-->
    </table>
    <!--End Table-->

    <!--      Add Client Modal -->

    <div class="modal fade" id="clientModalAddForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center ad-orangeGradient text-white">
                    <h4 class="modal-title w-100">Add New Gallery</h4>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="message" class="m-4 list-unstyled">

                </div>
                <form id="gallery_form" style="color: #757575;" method="post" action="/admin/gallery/store"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body mx-3">

                        <div class="md-form">
                            <input type="text" id="gallery_description" name="gallery_description"
                                   class="form-control validate">
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
                        <div class="md-form file-field">
                            <div class="btn ad-orangeGradient btn-sm float-left text-white">
                                <span><i class="fas fa-cloud-upload-alt mr-2" aria-hidden="true"></i>Choose file</span>
                                <input type="file" name="gallery_images[]" id="gallery_images" multiple onchange="preview_images()">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload gallery images">
                            </div>
                        </div>

                        <div class="row" id="image-preview"></div>

                    </div>

                    <div class="modal-footer d-flex justify-content-center">
                        <input class="btn ad-orangeGradient text-white btn-block my-4 waves-effect z-depth-0"
                               type="submit" id="add_client" name="add_client" value="Save"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection

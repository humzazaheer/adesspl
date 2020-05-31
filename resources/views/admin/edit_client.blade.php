@extends('/admin/base')

@section('title','Edit Clients')

@section('content')

    <h4 class="text-center">Edit Client</h4>
    <form id="edit_client_form" style="color: #757575;" method="post" action="/admin/edit_client/{{$client->id}}"
          enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="modal-body mx-3">

            <div class="md-form">
                <input type="text" id="client_name" name="client_name" class="form-control validate" value="{{$client->client_name}}">
                <label data-error="wrong" data-success="right">Client name</label>
            </div>
            <select class="mdb-select md-form" id="locale" name="locale">
                @if($client->locale == 'National')
                <option value="{{$client->locale}}" selected>{{$client->locale}}</option>
                <option value="International">International</option>
                    @else
                    <option value="{{$client->locale}}" selected>{{$client->locale}}</option>
                    <option value="National">National</option>
                @endif

            </select>
            <div class="md-form file-field">
                <div class="btn ad-orangeGradient btn-sm float-left text-white">
                    <span><i class="fas fa-cloud-upload-alt mr-2" aria-hidden="true"></i>Choose file</span>
                    <input type="file" name="client_logo" id="client_logo">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload new logo">
                </div>
            </div>
            <label data-error="wrong" data-success="right" class="font-weight-bold">Current logo</label>
            <div class="current_logo">
                <img src="{{asset('/uploads')}}/{{$client->client_logo}}" alt="{{$client->client_logo}}" class="img-fluid w-25">
                <input type="hidden" id="client_current_logo" name="client_current_logo" class="form-control validate" value="{{$client->client_logo}}">
            </div>

        </div>

        <div class="d-flex justify-content-center">
            <input class="btn ad-orangeGradient text-white btn-block my-4 waves-effect z-depth-0"
                   type="submit" id="update_client" name="update_client" value="Save"/>
        </div>
    </form>
@endsection

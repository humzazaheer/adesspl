@extends('/admin/base')

@section('title','Edit Experience')

@section('content')

    <h1 class="text-center my-5">Edit Experience</h1>
    <form id="edit_client_form" style="color: #757575;" method="post" action="/admin/edit_experience/{{$exp->id}}"
          enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="modal-body mx-3">


            <select class="mdb-select md-form" id="client_id" name="client_id">

                    @if($clients)
                    @foreach($clients as $data)
                        <option value="{{$data->id}}" @if($data->id == $exp->client_id) selected @endif>{{$data->client_name}}</option>
                    @endforeach
                @endif



            </select>
            <div class="md-form">
                <input type="text" id="exp_description" name="exp_description" class="form-control validate" value="{{$exp->exp_description}}">
                <label data-error="wrong" data-success="right">Experience Description</label>
            </div>

        </div>

        <div class="d-flex justify-content-center">
            <input class="btn ad-orangeGradient btn-block my-4 waves-effect z-depth-0"
                   type="submit" id="update_client" name="update_client" value="Save"/>
            <input type="button" class="btn ad-orangeGradient waves-effect z-depth-0 btn-black my-5" onclick="history.back();" value="Back">
        </div>
    </form>
@endsection

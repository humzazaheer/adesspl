@extends('/admin/base')

@section('title','Clients')

@section('content')

@if($msg = Session::get('success'))
    {{$msg}}
    @endif
    <h1 class="h1-responsive text-center my-5">Your Clients</h1>
    <div class="text-right mb-5">
        <button class="btn btn-primary" data-toggle="modal" data-target="#clientModalAddForm">Add new</button>
    </div>
    <!--Table-->
    <table id="dtMaterialDesignExample" class="ad-datatable table table-responsive-md" width="100%">
        <!--Table head-->
        <thead>
        <tr>
            <th class="th-sm">Sr.</th>
            <th class="th-sm">Client Name</th>
            <th class="th-sm">Client Logo</th>
            <th class="th-sm">Locale</th>
            <th class="th-sm">Created at</th>
            <th class="th-sm">Updated at</th>
            <th class="th-sm">Edit</th>
            <th class="th-sm">Delete</th>
        </tr>
        </thead>
        <!--End Table head-->
        <!--Table body-->
        <tbody>
        @if($clientData)
            @foreach($clientData as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->client_name}}</td>
                    <td><img src="{{asset('/uploads')}}/{{$data->client_logo}}" alt="{{$data->client_logo}}"></td>
                    <td>{{$data->locale}}</td>
                    <td>{{$data->created_at}}</td>
                    <td>{{$data->updated_at}}</td>
                    <td><a  href="/admin/edit_client/{{$data->id}}"><i class="fa fa-edit"></i></a></td>
                    <td><form method="post" action="/admin/clients/{{$data->id}}"> @csrf @method('put') <button type="submit" name="delete_client" value="{{$data->id}}"><i class="fa fa-trash"></i></button></form></td>

                </tr>

            @endforeach
        @endif
        </tbody>

        <!--End Table body-->
        <!--Table footer-->
        <tfoot>
        <tr>
            <th class="th-sm">Sr.</th>
            <th class="th-sm">Client Name</th>
            <th class="th-sm">Client Logo</th>
            <th class="th-sm">Locale</th>
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
                    <h4 class="modal-title w-100">Add New Brand</h4>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="message" class="m-4 list-unstyled">

                </div>
                <form id="client_form" style="color: #757575;" method="post" action="/admin/clients/store"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body mx-3">

                        <div class="md-form">
                            <input type="text" id="client_name" name="client_name" class="form-control validate">
                            <label data-error="wrong" data-success="right">Client name</label>
                        </div>

                        <select class="mdb-select md-form" id="locale" name="locale">
                            <option value="" disabled selected>Choose your option</option>
                            <option value="National">National</option>
                            <option value="International">International</option>
                        </select>
                        <div class="md-form file-field">
                            <div class="btn ad-orangeGradient btn-sm float-left text-white">
                                <span><i class="fas fa-cloud-upload-alt mr-2" aria-hidden="true"></i>Choose files</span>
                                <input type="file" name="client_logo" id="client_logo">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload one or more files">
                            </div>
                        </div>

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

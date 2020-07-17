@extends('/admin/base')

@section('title','Work Experience')

@section('content')


    <h1 class="h1-responsive text-center my-5">Your Work Experience</h1>
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
    <table id="dtMaterialDesignExample" class="ad-datatable table table-responsive-md text-center" width="100%">
        <!--Table head-->
        <thead>
        <tr>
            <th class="th-sm">Sr.</th>
            <th class="th-sm">Client Name</th>
            <th class="th-sm">Client Logo</th>
            <th class="th-sm">Experience Description</th>
            <th class="th-sm">Created at</th>
            <th class="th-sm">Updated at</th>
            <th class="th-sm">Edit</th>
            <th class="th-sm">Delete</th>
        </tr>
        </thead>
        <!--End Table head-->
        <!--Table body-->
        <tbody>
        @if($expData)
            @php
                $sr = 0;
            @endphp

            @foreach($expData as $data)
                @php
                    $sr++;
                @endphp
                <tr>
                    <td>{{$sr}}</td>
                    <td>{{$data->client_name}}</td>
                    <td><img src="{{asset('/uploads')}}/{{$data->client_logo}}" alt="{{$data->client_logo}}"></td>
                    <td>{{$data->exp_description}}</td>
                    <td>{{$data->created_at}}</td>
                    <td>{{$data->updated_at}}</td>
                    <td><a href="/admin/edit_experience/{{$data->id}}"><i class="fa fa-edit"></i></a></td>
                    <td>
                        <form method="post" action="/admin/experience/{{$data->id}}"> @csrf @method('put')
                            <button type="submit" name="delete_exp" value="{{$data->id}}"><i class="fa fa-trash"></i>
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
            <th class="th-sm">Client Name</th>
            <th class="th-sm">Client Logo</th>
            <th class="th-sm">Experience Description</th>
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
                    <h4 class="modal-title w-100">Add New Experience</h4>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="message" class="m-4 list-unstyled">

                </div>
                <form id="client_form" style="color: #757575;" method="post" action="/admin/experience/store"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body mx-3">

                        <select class="mdb-select md-form" id="client" name="client_id">
                            <option value="" disabled selected>Choose client</option>
                            @if($clientData)
                                @foreach($clientData as $cl_data)
                                    <option value="{{$cl_data->id}}">{{$cl_data->client_name}}</option>
                                @endforeach
                            @endif
                        </select>
                        <div class="md-form">
                            <input type="text" id="exp_description" name="exp_description"
                                   class="form-control validate" required>

                            <label>Experience Description</label>
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

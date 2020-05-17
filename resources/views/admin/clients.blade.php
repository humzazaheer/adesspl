@extends('/admin/base')

@section('title','Brands')

@section('content')

<h1 class="h1-responsive text-center my-5">Your Clients</h1>
<div class="text-right mb-5">
    <button class="btn btn-primary" data-toggle="modal" data-target="#clientModalAddForm">Add new</button>
</div>
<!--Table-->
<table id="clientTable" class="table table-responsive-md" width="100%">
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

<!--      Add Brand Modal -->

<div class="modal fade" id="clientModalAddForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100">Add New Brand</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="message" class="m-4 list-unstyled">

            </div>
            <form id="clientForm" style="color: #757575;" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body mx-3">

                    <div class="md-form">
                        <input type="text" id="client_name" name="client_name" class="form-control validate">
                        <label data-error="wrong" data-success="right">Client name</label>
                    </div>
                    <div class="md-form file-field">
                        <a class="btn-floating peach-gradient mt-0 float-left">
                            <i class="fas fa-paperclip" aria-hidden="true"></i>
                            <input type="file">
                        </a>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Upload your file">
                        </div>
                    </div>


{{--                    <div class="md-form mb-4">--}}
{{--                        <div class="file-field">--}}
{{--                            <input class="file-name input-group form-control mb-2 " type="text" id="file-name" placeholder="Choose brand image" readonly="true">--}}
{{--                            <div class="btn btn-primary btn-sm file-input ml-0">--}}
{{--                                <span>Choose file</span>--}}
{{--                                <input type="file" id="fileInput" name="brand_img" onchange="changeText();" class="validate">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                </div>

                <div class="modal-footer d-flex justify-content-center">
                    <input class="btn btn-primary btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" id="addBrand" value="Save" />
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection

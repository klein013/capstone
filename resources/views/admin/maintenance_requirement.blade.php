<!DOCTYPE html>
<html>
<head>
    <title>Maintenance | Requirement</title>
    @include('admin.layout.head');
    <!-- JQuery DataTable Css -->
    <link href="{{asset('plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
</head>
<body class="theme-blue-grey">
    @include('admin.layout.nav');
    <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{asset($return['image'])}}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{$return['name']}}</div>
                    <div class="email">Official ID: <strong id="sessionpos">{{$return['official']}}</strong></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="{{URL('/profile')}}"><i class="material-icons">person</i>Profile</a></li>
                            <li><a href="{{URL('/logout')}}"><i class="material-icons">input</i>Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>



            @if($return['position']==0)
                @include('admin.aside_admin');
            @elseif($return['position']==1)
                @include('admin.aside_pb');
            @elseif($return['position']==2)
                @include('admin.aside_pb');
            @elseif($return['position']==3)
                @include('admin.aside_admin');
            @elseif($return['position']==4)
                @include('admin.aside_sec');
            @elseif($return['position']==5)
                @include('admin.aside_desk');
            @elseif($return['position']==6)
                @include('admin.aside_bpso');
            @elseif($return['position']==7)
                @include('admin.aside_cashier');
            @endif
</aside>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                <div class="col-lg-5 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-teal">
                        <div class="icon">
                            <i class="material-icons">add_location</i>
                        </div>
                        <div class="content">
                            <div class="text"><h3> REQUIREMENTS</h3></div>
                        </div>
                    </div>
                </div>


            </div>
            </div>
            <!-- Basic Table -->
            <div class="row clearfix">
                                    <div class="col-sm-2 col-sm-offset-10">
                                        <button type="button" class="btn bg-teal btn-lg waves-effect waves-float pull-right" data-toggle="modal" data-target="#defaultModal"><i class="material-icons">add</i>Add Requirement</button>
                                    </div>
                                </div>
                                <br>
            <div class="row">    
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body table-responsive">
                            <table class="table table-hover table-bordered table-striped table-condensed dataTable js-exportable" id="PosTable">
                                <thead>
                                    <tr class="bg-blue-grey">
                                        <th>ID</th>
                                        <th>Requirement Name</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                </div>
                </div>
            </div>
            
            <!-- #END# With Material Design Colors -->
        </div>
    </section>

     <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="row clearfix">
                                <div class="col-lg-9 col-md-3 col-sm-6 col-xs-12">
                                    <div class="info-box bg-teal">
                                        <div class="icon">
                                            <i class="material-icons">person_add</i>
                                        </div>
                                        <div class="content">
                                            <div class="text"><h3> ADD REQUIREMENT</h3></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <form id="positionform">
                                {{ csrf_field() }}
                                <label for="Position">Requirement Name</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="name" name="pos" class="form-control">
                                    </div>
                                </div>
                                <label for="Description">Description</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="desc" name="desc" class="form-control">
                                    </div>
                                </div>
                                <br>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn bg-teal btn-lg waves-effect" id="add">ADD</button>
                            <button type="button" class="btn bg-teal btn-lg waves-effect" data-dismiss="modal">CANCEL</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="row clearfix">
                <div class="col-lg-9 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-teal">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text"><h3>UPDATE REQUIREMENT</h3></div>
                        </div>
                    </div>
                </div>
                        </div>
                        <div class="modal-body">
                            <form id="updatePositionform">
                                {{ csrf_field() }}
                                <label for="Position">Requirement Name</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="upname" name="uppos" class="form-control">
                                    </div>
                                </div>
                                <label for="Description">Description</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="updesc" name="updesc" class="form-control">
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn bg-teal btn-lg waves-effect" id="upadd">UPDATE</button>
                            <button type="button" class="btn bg-teal btn-lg waves-effect" data-dismiss="modal">CANCEL</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
    @include('admin.layout.scripts');
    <script src="{{asset('plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
    <script>
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $(document).ready(function(){
            
            var table = $('#PosTable').DataTable({
                "bSort": false,
                "ajax" : {
                    "url": "/maintenance/clearance/requirement/getRequirements",
                    "dataSrc" : function (json) {
                        var return_data = new Array();
                        for(var i=0;i< json.length; i++){
                            return_data.push({
                            'ID' : json[i].requirement_id,
                            'Name' : json[i].requirement_name,
                            'Desc' : json[i].requirement_desc,
                            'Button': "<button type = 'button' class = 'update btn btn-space bg-blue waves-effect' data-toggle = 'tooltip' data-placement = 'bottom' title data-original-title='Update Record'><i class='material-icons'>create</i></button><button type = 'button' class = 'delete btn btn-space bg-red waves-effect' data-toggle = 'tooltip' data-placement = 'bottom' title data-original-title='Delete Record'><i class='material-icons'>delete</i></button>"
                            });
                        }     
                        return return_data;
                    }
                },
                "columns": [
                    { "data": "ID" },
                    { "data": "Name"},
                    { "data": "Desc"},
                    { "data": "Button" },
                ]
            });

            $.validator.addMethod("alpha", function(value, element) {
                return this.optional(element) || value == value.match(/^[a-zA-Z .,]*$/);
            },"Letters, spaces, period and comma only");

            $.validator.addMethod("letterwithbasicpunc", function(value, element) {
                return this.optional(element) || value == value.match(/^[a-zA-Z0-9 !()?.,]*$/);
            },"Letters and numbers with basic punctuations only");  

             $.validator.addMethod("alphanum", function(value, element) {
                return this.optional(element) || value == value.match(/^[a-zA-Z0-9 .,]*$/);
            },"Letters, Numbers, spaces, period and comma only");          

            $('#positionform').validate({
                rules: {
                    pos: {
                        required: true,
                        alpha: true,
                        maxlength: 30
                    }
                },
                submitHandler: function(form){
                    $.ajax({
                    url : '/maintenance/clearance/requirement',
                    method : 'POST',
                    data : {
                        _token : CSRF_TOKEN,
                        name : $('#name').val(),
                        desc : $('#desc').val()
                    },
                    dataType : 'json',
                    success : function(response){
                        if(response!=""){
                        $('#defaultModal').modal('toggle');
                        var newRow = "<tr><td>"+response.requirement_id+"</td><td>"+response.requirement_name+"</td><td>"+response.requirement_desc+"</td><td><button type = 'button' class = 'update btn btn-space bg-blue waves-effect' data-toggle = 'tooltip' data-placement = 'bottom' title data-original-title='Update Record'><i class='material-icons'>create</i></button><button type = 'button' class = 'delete btn btn-space bg-red waves-effect' data-toggle = 'tooltip' data-placement = 'bottom' title data-original-title='Delete Record'><i class='material-icons'>delete</i></button></td></tr>";
                        table.row.add($(newRow)).draw();
                        swal({
                            title : "Record Added",
                            type : "success",
                            timer : 1000,
                            showConfirmButton : false
                        });
                        }
                        else{
                            swal({
                                title: "Record not Added",
                                text: "Requirement exists",
                                type: "error",
                                timer: 1000,
                                showConfirmButton: false
                            });
                            $('#defaultModal').modal('toggle');
                        }
                    }
                    });
                },
                highlight: function (input) {
                    $(input).parents('.form-line').addClass('error');
                },
                unhighlight: function (input) {
                    $(input).parents('.form-line').removeClass('error');
                },
                errorPlacement: function (error, element) {
                    $(element).parents('.form-group').append(error);
                }
            });


            $('#PosTable tbody').on('click', 'button.delete', function(){
            var row = table.row($(this).parents('tr')).index();
            var id = table.row($(this).parents('tr')).data().ID;
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this record!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Delete",
                    cancelButtonText: "Cancel",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },  
                function(isConfirm) {
                    if (isConfirm){
                        $.ajax({
                            url : '/maintenance/clearance/requirement',
                            method : 'POST',
                            data : {
                                _token : CSRF_TOKEN,
                                _method : 'DELETE',
                                id : id 
                            },
                            success : function(response){
                                if(response=="success"){
                                    table.row(row).remove().draw();
                                    swal({
                                        title : "Deleted!", 
                                        text : "Record has been deleted",
                                        type :  "success",
                                        showConfirmButton : false,
                                        timer : 1000
                                  });
                                }
                                else{
                                    swal({
                                        title : "Error!", 
                                        text : "Record not Deleted",
                                        type :  "error",
                                        showConfirmButton : false,
                                        timer : 1500
                                    });
                                }
                            }
                        });
                    } 
                    else {
                        swal({
                            title : "Cancelled", 
                            text : "Record is not deleted",
                            type :  "error",
                            showConfirmButton : false,
                            timer : 1000
                        });
                    }
                }); 
            });    

            var count =1 ; 
            var finid;

            $('#PosTable tbody').on('click', 'button.update', function(){
                var id = table.row($(this).parents('tr')).data();
                finid = id.ID;
                $.ajax({
                    url: '/maintenance/clearance/requirement/'+id.ID,
                    method: 'GET',
                    data: {
                        id : id.ID
                    },
                    success: function(response){
                        $('#upname').val(response[0].requirement_name);
                        $('#updesc').val(response[0].requirement_desc);
                        $('#updateModal').modal('toggle');
                    }
                });
            });

            $('#updatePositionform').validate({
                rules: {
                    upname: {
                        required: true,
                        alpha: true,
                        maxlength: 30
                    },
                    updesc: {
                        required: false,
                        alphanum: true,
                        maxlength: 500
                    }

                },
                submitHandler: function(form){
                    $.ajax({
                    url : '/maintenance/clearance/requirement/update',
                    method : 'POST',
                    data : {
                        _token : CSRF_TOKEN,
                        id : finid,
                        name : $('#upname').val(),
                        desc : $('#updesc').val()
                    },
                    success : function(response){
                        $('#updateModal').modal('toggle');
                        table.ajax.reload();
                        if(response!=""){
                        swal({
                            title : "Updated!", 
                            text : "Record has been updated",
                            type :  "success",
                            showConfirmButton : false,
                            timer : 1000
                        });
                    }
                        else{
                            swal({
                            title : "Record is not updated", 
                            text : "Record already exists",
                            type :  "error",
                            showConfirmButton : false,
                            timer : 1000
                        });
                        }
                    }
                    });
                },
                highlight: function (input) {
                    $(input).parents('.form-line').addClass('error');
                },
                unhighlight: function (input) {
                    $(input).parents('.form-line').removeClass('error');
                },
                errorPlacement: function (error, element) {
                    $(element).parents('.form-group').append(error);
                }
            });
        });
    </script>
</body>
</html>
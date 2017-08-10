<!DOCTYPE html>
<html>
<head>
	<title>Barangay Blotter | Complaint</title>
	@include('admin.layout.head')
</head>
<body class="theme-blue-grey">
@include('admin.layout.nav');
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="../../images/human.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{$return['name']}}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li class="user-header">
                            <div class="imgcontainer">
                                <img src="../../{{$return['image']}}" alt="Avatar" class="avatar">
                            </div>
                            </li>
                            <li><a href="{{URL('/profile')}}"><i class="material-icons">person</i>Profile</a></li>
                            <li><a href="{{URL('/')}}"><i class="material-icons">input</i>Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            @if($return['position']==0)
                @include('admin.aside_admin');
            @elseif($return['position'==1])
                @include('admin.aside_pb');
            @elseif($return['position_id'==2])
                @include('admin.aside_pb');
            @elseif($return['position_id'==3])
                @include('admin.aside_admin');
            @elseif($return['position_id'==4])
                @include('admin.aside_sec');
            @elseif($return['position_id'==5])
                @include('admin.aside_desk');
            @elseif($return['position_id'==6])
                @include('admin.aside_bpso');
            @elseif($return['position_id'==7])
                @include('admin.aside_cashier');
            @endif
            

        </aside>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-teal">
                        <div class="icon">
                            <i class="material-icons">announcement</i>
                        </div>
                        <div class="content">
                            <div class="text"><h3>COMPLAINT</h3></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  	</div>
    <div class="col-lg-9 col-md-4 col-sm-12 col-xs-12 col-md-offset-2">
        <div class="card">
            <div class="body">
                <form  id="complaint">
                    <br>
                   	<div class="row clearfix">
                        <div class="col-md-4">
                            <a href="javascript:void(0)" data-toggle="tooltip" title="Add Complainant"><button type="button" class="btn bg-teal btn-circle waves-effect waves-circle waves-float" id="combtn" data-toggle="modal" data-target="#defaultModal"><i class="material-icons">add</i></button></a>
                       		<label>Complainant/s </label>
                        </div>
                        <div class="col-md-8" id='comcon' style="border-style:solid; border-color:#b3cccc; border-width:1px; border-radius: 3px;height: 75px;">
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-4"><button type="button" class="btn bg-teal btn-circle waves-effect waves-circle waves-float" id="resbtn" data-toggle="modal" data-target="#defaultModal2"><i class="material-icons">add</i></button></a>
                            <label>Respondent/s </label>
                        </div>
                        <div class="col-md-8" id="rescon" style="border-style:solid; border-color:#b3cccc; border-width: 1px; border-radius: 3px; height: 75px;">
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-4">
                            <label>Nature of Complaint</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control show-tick" id="case">
                                        <option value="">-- Please select the nature of case --</option>
                                        @foreach($cases as $case)
                                        <option value="{{ $case->caseskp_id }}">{{ $case->caseskp_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-4">
                            <label>Brief Statement of Complaint</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="10" id="statement" class="form-control no-resize" placeholder="Please type the details" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                    <div class="col-md-4">
                            <label>Turnover to</label>
                        </div>
                    <div class="col-md-8">
                    <div class="form-group">
                    <div class="form-line">
                        <select class="form-control show-tick" id="turnover">
                            <option value="Lupon">Lupon/Barangay Chairman for Hearing</option>
                            <option value="PS6">Police Station</option>
                            <option value="VAWC">Violence Against Women and their Children(VAWC)</option>
                        </select>
                    </div>
                </div>
                </div>
                </div>
                    <div class="row clearfix">
                        <div class="col-md-2 col-md-offset-10">
                            <button type="submit" data-color="teal" class="btn bg-teal waves-effect">SUBMIT</button>
                        </div>
                    </div>
	            </form>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box bg-teal">
                            <div class="icon"><i class="material-icons">person_add</i></div>
                            	<div class="content">
                            		<div class="text"><h3>PICK COMPLAINANT</h3></div>
                        		</div>
                    	</div>
	                </div>
                </div>
            </div>
            <div class="modal-body">
            	<div class="card">
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <table class="table dataTable" id="restable1">
                                <thead class="bg-blue-grey">
                                    <tr>
                                        <td>ID</td>
                                        <td>Resident Name</td>
                                        <td>Birthdate</td>
                                        <td>Address</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="defaultModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
	    <div class="modal-content">
            <div class="modal-header">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box bg-teal">
     	                    <div class="icon"><i class="material-icons">person_add</i></div>
                            <div class="content">
                            	<div class="text"><h3>PICK RESPONDENT</h3></div>
                        	</div>
                    	</div>
                	</div>
                </div>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <table class="table dataTable" id="restable">
                                <thead class="bg-blue-grey">
                                    <tr>
                                        <td>ID</td>
                                        <td>Resident Name</td>
                                        <td>Birthdate</td>
                                        <td>Address</td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.layout.scripts');

    <script src="{{asset('plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
<script>
	$(document).ready(function(){
		var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
		$('#dt').bootstrapMaterialDatePicker({
    			time : true,
    			format : 'YYYY-MM-DD HH:mm',
    			clearButton : false
    	});

        var used = [];
        var com = [];
        var res = [];
        var table1 = $("#restable1").DataTable();
        var table = $("#restable").DataTable();

        $('#combtn').on('click', function(){
            var return_data = new Array();
            table1.destroy();
            table1 = $('#restable1').DataTable({
            bSort: false,
            "ajax": {
                "url" : '/complaint_res',
                "dataType" : "json",
                "data" : {
                    used : used.join()
                },
                "dataSrc" : function (json) {
                        var return_data = new Array();
                        for(var i=0;i< json.length; i++){
                            return_data.push({
                            'resident_id' : json[i].resident_id,
                            'name' : json[i].name,
                            'resident_bdate' : json[i].resident_bdate,
                            'address' : json[i].address
                            });
                        } 
                        return return_data;
                }
            },
            "columns": [
                    { "data": 'resident_id' },
                    { "data": 'name' },
                    { "data": 'resident_bdate' },
                    { "data": 'address' },
            ]
            });

        });

        $('#resbtn').on('click', function(){
            var return_data = new Array();
            table.destroy();
            table = $('#restable').DataTable({
            bSort: false,
            "ajax": {
                "url" : '/complaint_res',
                "dataType" : "json",
                "data" : {
                    used : used.join()
                },
                "dataSrc" : function (json) {
                        var return_data = new Array();
                        for(var i=0;i< json.length; i++){
                            return_data.push({
                            'resident_id' : json[i].resident_id,
                            'name' : json[i].name,
                            'resident_bdate' : json[i].resident_bdate,
                            'address' : json[i].address
                            });
                        } 
                        return return_data;
                }
            },
            "columns": [
                    { "data": 'resident_id' },
                    { "data": 'name' },
                    { "data": 'resident_bdate' },
                    { "data": 'address' },
            ]
            });

        });

        $('#restable1 tbody').on('dblclick', 'tr', function () {
            var data = table1.row( this ).data();
            var $input = $('<button type="button" value='+data['resident_id']+' class="removecom btn btn-success waves-effect "><span>'+data['name']+'</span>  <i class="material-icons">remove</i></button>');
            $input.appendTo($("#comcon"));
            $('#defaultModal').modal('toggle');
            used.push(data['resident_id']);
            com.push(data['resident_id']);
        } );
        
		
        $(document).on("click", "button.removecom", function(){
            $(this).remove();
            for(var i = used.length; i--;) {
                if(used[i] == $(this).val()) {
                    used.splice(i, 1);
                }
            }
            for(var i = com.length; i--;) {
                if(com[i] == $(this).val()) {
                    com.splice(i, 1);
                }
            }
            
        });	

        $('#restable tbody').on('dblclick', 'tr', function () {
            var data = table.row( this ).data();
            var $input = $('<button type="button" value='+data['resident_id']+' class="removeres btn btn-success waves-effect "><span>'+data['name']+'</span>  <i class="material-icons">remove</i></button>');
            $input.appendTo($("#rescon"));
            $('#defaultModal2').modal('toggle');
            used.push(data['resident_id']);
            res.push(data['resident_id']);
        } );
        
        
        $(document).on("click", "button.removecom", function(){
            $(this).remove();
            for(var i = used.length; i--;) {
                if(used[i] == $(this).val()) {
                    used.splice(i, 1);
                }
            }
            for(var i = com.length; i--;) {
                if(res[i] == $(this).val()) {
                    res.splice(i, 1);
                }
            }
            
        }); 

        $.validator.addMethod("alphanum", function(value, element) {
                return this.optional(element) || value == value.match(/^[a-zA-Z0-9 .,]*$/);
            },"Letters, Numbers, spaces, period and comma only");

        $('#complaint').validate({
                rules: {
                    statement: {
                        required: true,
                        alphanum: true
                    }
                },
                submitHandler: function(form) { // for demo
                    var formData = new FormData();
                    formData.append('res', res.join());
                    formData.append('com', com.join());
                    formData.append('statement', $('#statement').val());
                    formData.append('case', $('#case').val());
                    formData.append('turnover', $('#turnover').val());
                    $.ajax({
                        url : '/complaint_process',
                        method : 'POST',
                        data : formData,
                        processData : false,
                        contentType : false,
                        cache : false,
                        headers : {
                            'X-CSRF-TOKEN' : CSRF_TOKEN
                        },
                        success : function(response){
                            if(response=="success"){
                            swal({
                                title : "Record Added",
                                type : "success",
                                timer : 1000,
                                showConfirmButton : false
                            });
                            $('#comcon').empty();
                            $('#rescon').empty();
                            com = [];
                            res = [];
                            used = [];
                            $('#statement').val()="";
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
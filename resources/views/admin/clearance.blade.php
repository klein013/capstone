<!DOCTYPE html>
<html>
<head>
	<title>Clearance | Requests</title>
	@include('admin.layout.head');
	<link href="{{asset('plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
</head>
<body class="theme-blue-grey">
@include('admin.layout.nav');
<aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="../{{$return['image']}}" width="48" height="48" alt="User" />
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
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-teal">
                        <div class="icon">
                            <i class="material-icons">border_color</i>
                        </div>
                        <div class="content">
                            <div class="text"><h3> REQUEST</h3></div>
                        </div>
                    </div>
                </div>


            </div>
            </div>
            <!-- Basic Table -->
            <div class="row clearfix">
                
                                    <div class="col-sm-2 col-sm-offset-10">
                                        <button type="button" class="btn bg-teal btn-lg waves-effect waves-float pull-right" id="openmodal"><i class="material-icons">add</i>Add Request</button>
                                    </div>
                                </div>
                                <br>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                	<div class="card">
                        <br>
                        <div class="body table-responsive">
                            <table class="table dataTable table-condensed table-bordered table-striped table-hover" width="100%" id="requestTable">
                                <thead>
                                    <tr class="bg-blue-grey">
                                        <th>ID</th>
                                        <th>Resident Name</th>
                                        <th>Date</th>
                                        <th>Clearance</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                               <tbody>
                               </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# With Material Design Colors -->
        </div>
    </section>
   

    <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="row clearfix">
                                <div class="col-lg-7 col-md-3 col-sm-6 col-xs-12">
                                    <div class="info-box bg-teal">
                                        <div class="icon">
                                            <i class="material-icons">border_color</i>
                                        </div>
                                    <div class="content">
                                        <div class="text"><h3> ADD REQUEST</h3></div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                        <form id="reqID">
                            <div class="row clearfix">
                                <div class="col-sm-10">
                                <label>Resident ID</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="resID" name="resID" class="form-control">
                                    </div>
                                </div>
                                </div>
                                <div class="col-sm-2">
                                <br>
                                <div class="form-group">
                                <span><button type="button" class="btn bg-teal btn-lg waves-effect" id="choose">Show Table</button></span>
                                </div>
                                </div>
                            </div>
                            <div class="row clearfix" id="lol" style="display:none;">
                                <div class="body table-responsive">
                                    <table class="table dataTable table-condensed table-bordered table-striped table-hover" width="100%" id="residentTable">
                                        <thead>
                                            <tr class="bg-blue-grey">
                                                <th>ID</th>
                                                <th>Resident Name</th>
                                                <th>Birthdate</th>
                                                <th>Address</th>
                                                <th>Contact Number</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <br>
                            <div class="row clearfix">
                                <div class="col-sm-5">
                                <label for="clearance_id">Clearance Type</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select class="form-control show-tick" id="ctype" name="ctype">
                                        <option value="" disabled>Pick a Clearance Type</option>
                                        @foreach($clearances as $clearance)
                                            <option value="{{ $clearance->clearance_id }},{{ $clearance->price_amt}},{{ $clearance->price_id }}">{{ $clearance->clearance_type }}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                </div>
                                </div>
                                <div class="col-sm-5">
                                <label>Purpose</label>
                                <div class="form-group">
                                    
                                        <input type="text" id="purpose" name="purpose" class="form-control">
                                    <div class="form-line">
                                    </div>
                                </div>
                                </div>
                                <div class="col-sm-2">
                                    <br>
                                    <button type="button" class="btn bg-teal waves-effect" id="addthis"><i class='material-icons'>add</i>  Add</button>
                                </div>
                            </div>
                            <div class="row clearfix" id="cl" style="display:none;">
                                <div class="col-sm-12">
                                <label>Added Clearances</label>
                                    <div class="col-sm-12">
                                        <table id="tbl" class="table table-responsive table-bordered table-condensed table-hover table-striped">
                                            <thead>
                                                <tr class="bg-teal">
                                                    <th><label>Clearance ID</label></th>
                                                    <th><label>Clearance Name</label></th>
                                                    <th><label>Purpose</label></th>
                                                    <th><label>Price</label></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th>Total</th> 
                                                    <th id="total">&#8369; </th>
                                                    <th></th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <div class="row clearfix">    
                            <div class="col-sm-4 col-sm-offset-8">
                            <button type="submit" class="btn bg-teal btn-lg waves-effect" id="add">Process Request</button>
                            <button type="button" class="btn bg-teal btn-lg waves-effect pull-right" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                        
                        </form>
                        </div>
                        
                    </div>
                </div>
            </div>

    <div class="modal fade" id="reqmodal" tabindex="-2" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="row clearfix">
                                <div class="col-lg-7 col-md-3 col-sm-6 col-xs-12">
                                    <h4>Requirement/s</h4>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row clearfix">
                                <div class="col-sm-12" id="reqcont">
                                </div>
                            </div>
                            <br>
                            <div class="row clearfix">
                                <div class="col-sm-3 col-sm-offset-9">
                                    <button type="button" class="btn btn-lg waves-effect bg-teal" id="reqproc">OK</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>

    <div class="modal fade" id="updatemodal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row clearfix">
                                <div class="col-lg-7 col-md-3 col-sm-6 col-xs-12">
                                    <h4>Update Request</h4>
                                </div>
                            </div>
                </div>
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-sm-4">
                            <label id="name"></label>
                            <br>
                            <label id="transaction"></label>
                        </div>
                        <br>
                        <div class="col-sm-12">
                            <table class="table table-responsive table-bordered table-condensed table-hover table-striped" id="editTable">
                                <thead>
                                    <tr class="bg-teal">
                                        <td><label>Clearance ID</label></td>
                                        <td><label>Clearance Name</label></td>
                                        <td><label>Price</label></td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody id="editTablebody">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('admin.layout.scripts');
<script>
	$(document).ready(function(){

        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        var id= {{$return['official']}};
        var selected = [];
        var prices = [];
        var pricesid = [];
        var purposes = [];
        var sr = [];

        $('#openmodal').on('click', function(){
            $.ajax({
                url: '/clearance/clearance/checkcap',
                method: 'GET',
                success: function(response){
                    if(response=="success"){
                        $('#defaultModal').modal('toggle');
                    }
                    else{
                         swal({
                            title: "Error",
                            text: "No Barangay Captain Found please set a barangay captain before requesting",
                            type: "warning",
                            confirmButtonClass: "btn-danger",
                            confirmButtonText: "OK",
                            closeOnConfirm: true
                        });
                    }
                }
            })
        });


        var tblreq = $('#requestTable').DataTable({
            'bSort': false,
            'ajax': {
                'url' : '/clearance/clearance/get',
                'method' : 'GET',
                'data' : 'json',
                'dataSrc' : function(json){
                     var return_data = new Array();
                        for(var i=0;i< json.length; i++){
                            if(json[i].trans_id!=null){
                            return_data.push({
                            'ID' : json[i].trans_id,
                            'Name' : json[i].name,
                            'RDate' : json[i].trans_date,
                            'Type': json[i].clearance_type,
                            'Buttons': '<button type="button" value="'+json[i].trans_id+'" class="update btn btn-lg btn-space bg-blue waves-effect"><i class="material-icons">create</i></button><button type="button" value="'+json[i].trans_id+'"  class="delete btn btn-lg bg-red waves-effect"><i class="material-icons">delete</i></button>'
                            });
                        }
                        }     
                        return return_data;

                }
            },
            'columns': [
                {'data' : 'ID'},
                {'data' : 'Name'},
                {'data' : 'RDate'},
                {'data' : 'Type'},
                {'data' : 'Buttons'}            ]


        });

        $('#requestTable').on('click', 'button.update', function(){
            $.ajax({
                url : '/clearance/clearance/clearancedetails/'+$(this).val(),
                method: 'GET',
                data: {
                    _token : CSRF_TOKEN
                },
                dataType: 'json',
                success: function(response){
                    console.log(response);
                    var text = "";
                    for (var i = 0; i < response.length; i++) {
                        text += "<tr id='"+response[i].request_id+"row'><td>"+response[i].clearance_id+"</td><td>"+response[i].clearance_name+"</td><td>"+response[i].price_amt+"</td><td><button type='button' value='"+response[i].request_id+"'  class='delete1 btn btn-lg bg-red waves-effect pull-right'><i class='material-icons'>delete</i></button></td></tr>";
                    }
                    $('#editTablebody').empty();
                    $('#editTablebody').append(text);

                }
            });
            $('#updatemodal').modal('toggle');
        });

        $('#editTablebody').on('click','button.delete1', function(){

            var id = $(this).val();
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
                            url : '/clearance/clearance/removerequest/'+id,
                            method : 'DELETE',
                            data : {
                                _token : CSRF_TOKEN,
                                _method: 'DELETE'
                            },
                            success : function(response){
                                if(response=="success"){
                                $('#'+id+'row').remove();
                                 swal({
                                    title : "Deleted!", 
                                    text : "Record has been deleted",
                                    type :  "success",
                                    showConfirmButton : false,
                                    timer : 1000
                                });
                                 tblreq.ajax.reload();
                             }
                             else{
                                $('#'+id+'row').remove();
                                 swal({
                                    title : "Deleted!", 
                                    text : "Record has been deleted",
                                    type :  "success",
                                    showConfirmButton : false,
                                    timer : 1000
                                });
                                 tblreq.ajax.reload();
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


        $('#requestTable').on('click', 'button.delete', function(){
            var id = $(this).val();
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
                            url : '/clearance/clearance/removetrans/'+id,
                            method : 'DELETE',
                            data : {
                                _token : CSRF_TOKEN,
                                _method: 'DELETE'
                            },
                            success : function(response){
                                if(response=="success"){
                                $('#'+id+'row').remove();
                                 swal({
                                    title : "Deleted!", 
                                    text : "Record has been deleted",
                                    type :  "success",
                                    showConfirmButton : false,
                                    timer : 1000
                                });
                                 tblreq.ajax.reload();
                             }
                             else{
                                $('#'+id+'row').remove();
                                 swal({
                                    title : "Deleted!", 
                                    text : "Record has been deleted",
                                    type :  "success",
                                    showConfirmButton : false,
                                    timer : 1000
                                });
                                 tblreq.ajax.reload();
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

        var caseid="";
        $('#addthis').on('click', function(){
            if($('#purpose').val()==""){
                $('#purpose').valid();
            }
            else{
            var dstring= $('#ctype').val()+"";
            var check = false;
            if(selected[0]!=null){
            $.each(selected, function(index, value){
                if($('#ctype').val()!=null){
                    if(value==dstring.split(',')[0]){
                        swal({
                            title : "Error!", 
                            text : "Clearance Already Selected",
                            type :  "error",
                            showConfirmButton : false,
                            timer : 1000
                        });
                        check = false;
                        return false;
                    }
                    else{
                        check = true;
                        return;
                    }
                }
                else{
                    return;
                }

            });
            }else{
                check = true;
            }
            if(check){
                selected.push(dstring.split(',')[0]);
                var text = "<tr><td>"+dstring.split(',')[0]+"</td><td>"+$('#ctype option:selected').text()+"</td><td>"+$('#purpose').val()+"</td><td>&#8369; "+parseFloat(dstring.split(',')[1], 10).toFixed(2)+"</td><td><button type='button' class='delete1 btn bg-red waves-effect pull-right'><i class='material-icons'>delete</i></button></td></tr>";
                $('#tbl').append(text);
                $('#cl').show();
                var sum = 0;
                prices.push(parseFloat(dstring.split(',')[1]));
                pricesid.push(parseInt(dstring.split(',')[2]));
                purposes.push($('#purpose').val());
                $.each(prices, function(index, value){
                    sum+=value;
                });
                $('#total').html("&#8369; "+sum.toFixed(2));
                caseid = dstring.split(',')[0];
                $.ajax({
                    url: '/clearance/getclearancereq/'+dstring.split(',')[0],
                    method: 'GET',
                    data:{
                        _token: CSRF_TOKEN
                    },
                    success: function(response){
                        if(response.length!=0){
                            $('#reqcont').empty();
                            console.log(response);
                            for(var i=0;i< response.length;i++){
                                $('#reqcont').append('<input type="checkbox" class="req" value="'+response[i].cr_clearance+','+response[i].requirement_id+'" id="'+response[i].cr_clearance+','+response[i].requirement_id+'" class="cbreq"/><label for="'+response[i].cr_clearance+','+response[i].requirement_id+'">'+response[i].requirement_name+'</label><br>');
                            }
                            $('#reqmodal').modal('toggle');
                            $('#defaultModal').modal('toggle');
                        }
                    }
                });
            }
            $('#purpose').val("");
            $('#ctype').val("");
            }
        });

        $('#reqproc').on('click', function(){
            $('#reqmodal').modal('toggle');
            $('#defaultModal').modal('toggle');

            var sThisVal = "";
            $('input:checkbox.req').each(function () {
                if($(this).is(":Checked")){
                    sr.push((($(this).val()).replace(',','|'))+"|1");
                }
                else{
                    sr.push((($(this).val()).replace(',','|'))+"|0");
                }
                
            });
        });


        $('#tbl').on('click', '.delete1', function(e){
            var row = $(this).closest('tr');
            var columns = row.find('td');
            var data = "";
            var index = 0;
            $.each(columns, function(){
                if(index==0){
                    data = $(this).html();
                    return false;
                }
            });

            $(this).closest('tr').remove();
            
            var index = $.inArray(data, selected);
            if(index!=-1){
                prices.splice(index-1,1);
                pricesid.splice(index-1, 1);
                purposes.splice(index-1, 1);
            }
            console.log("new prices "+prices );
            selected = jQuery.grep(selected, function(value) {
                return value != data;
            });
            var sum =0;
            $.each(prices, function(index, value){
                sum+=value;
            });
            $('#total').html("&#8369; "+sum.toFixed(2));
            console.log(pricesid);
        });
        
        var residentTable = $('#residentTable').DataTable({
            "bSort": false,
            "ajax": {
                "url" : "/clearance/getResidents/"+id,
                "method": "GET",
                "data" : "json",
                "dataSrc": function (json) {
                        var return_data = new Array();
                        for(var i=0;i< json.length; i++){
                            return_data.push({
                            'ID' : json[i].resident_id,
                            'Name' : json[i].name,
                            'Bdate' : json[i].resident_bdate,
                            'Address': json[i].address,
                            'Contact': json[i].contact
                            });
                        }     
                        return return_data;
                    }
            },
            "columns" : [
                {"data" : "ID"},
                {"data" : "Name"},
                {"data" : "Bdate"},
                {"data" : "Address"},
                {"data" : "Contact"}
            ]
        });

        $('#choose').on('click', function(){
            $('#lol').toggle();
            if(text=="Show"){
                $('#choose').html('Hide Table');
                text = "Hide";
            }
            else{
                $('#choose').html('Show Table');
                text = "Show";   
            }
        });

        var text = "Show";

        $('#residentTable tbody').on('dblclick', 'tr', function () {
            var data = residentTable.row( this ).data();
            $('#resID').val(data['ID']);
        } );

        $('#reqID').validate({
            rules: {
                resID:{
                    required: true
                }
            },
            submitHandler: function(form){
                console.log(selected);
                if(selected[0]==null){
                    $('#defaultModal').modal('toggle');
                    alert("Please select first a clearance before proceeding");
                }
                else{
                selected = jQuery.grep(selected, function(value) {
                    return value != null;
                });
                var tosend = [{"clearance": selected, "price" : pricesid, "purpose" : purposes, "submittedreq" : sr}] ;
                console.log(tosend);
                $.ajax({
                    url: '/clearance/storeClearance',
                    method: 'POST',
                    data: {
                        _token: CSRF_TOKEN,
                        resid: $('#resID').val(),
                        clearance: tosend,
                    },
                    success: function(response){
                        if(response=="success"){
                            swal({
                                title : "Success!", 
                                text : "Request Added",
                                type :  "success",
                                showConfirmButton : true
                            });
                        }
                        else{
                            swal({
                                title : "Request Failed!", 
                                text : response,
                                type :  "error",
                                showConfirmButton : true
                            });
                        }
                        $('#resID').val("");
                        $('#ctype').val("");
                        $('#purpose').val();
                        pricesid=[];
                        selected=[null];
                        prices=[];
                        purposes=[];
                        $('#editTable tbody').remove();
                        $('#defaultModal').modal('toggle');
                        tblreq.ajax.reload();
                    }   
                });
            }
            }
        })
	});
</script>
	<script src="{{asset('plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
   	<script src="{{asset('plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
</body>
</html>
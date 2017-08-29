<!DOCTYPE html>
<html>
<head>
    <title>Barangay Blotter | Record</title>
    @include('admin.layout.head')
</head>
<body class="theme-blue-grey">
@include('admin.layout.nav')
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
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-teal">
                        <div class="icon">
                            <i class="material-icons">book</i>
                        </div>
                        <div class="content">
                            <div class="text"><h3>RECORD</h3></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  	</div>
   <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="card">
                        <div class="body table-responsive">
                            <table class="table dataTable js-exportable" id='recordtable'>
                                <thead>
                                    <tr class="bg-blue-grey">
                                        <th>Case ID</th>
                                        <th>Complainant/s</th>
                                        <th>Respondent/s</th>
                                        <th>Witness/es</th>
                                        <th>Case</th>
                                        <th>Status</th>
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

  </div>
</section>

<div class="modal fade" id="yesu" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>List of Lupons</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row clearfix">
                                <h5>*Note: The list are arranged by least number of cases handled by an official</h5>
                            </div>
                            <br>
                            <div class="row clearfix">
                                <div class="col-sm-12" id="cont">

                                </div>
                            </div>
                            <br>
                            <div class="row-clearfix">
                                <div class="col-sm-3 col-sm-offset-9">
                                    <button type="button" class="save btn btn-lg bg-teal pull-right" id="save">SAVE</button>
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
</div>
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="body">
                            <div id="wizard_horizontal">
                                <h2>Mediation</h2>
                                <section>
                                    <div class="row clearfix">
                                        <div class="col-sm-12" class="body table-responsive">
                                            <table class="table table-bordered" id="mtable">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Hearing Date</th>
                                                        <th>Hearing Type</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </section>

                                <h2>Concillation</h2>
                                <section>
                                    <div class="row clearfix">
                                        <div class="col-sm-12" class="body table-responsive">
                                            <table class="table table-bordered" id="ctable">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Hearing Date</th>
                                                        <th>Hearing Type</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </section>

                                <h2>Arbitration</h2>
                                <section>
                                    <div class="row clearfix">
                                        <div class="col-sm-12" class="body table-responsive">
                                            <table class="table table-bordered" id="atable">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Hearing Date</th>
                                                        <th>Hearing Type</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.layout.scripts');
<script src="{{asset('plugins/jquery-steps/jquery.steps.js')}}"></script>
<script src="{{asset('plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
<script>
$(document).ready(function(){
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $('#wizard_horizontal').steps({
                headerTag: 'h2',
                bodyTag: 'section',
                transitionEffect: 'slideLeft',
                onInit: function (event, currentIndex) {
                    setButtonWavesEffect(event);
                    
                },
                onStepChanged: function (event, currentIndex, priorIndex) {
                    setButtonWavesEffect(event);
                }
            });
            function setButtonWavesEffect(event) {
                $(event.currentTarget).find('[role="menu"] li a').removeClass('waves-effect');
                $(event.currentTarget).find('[role="menu"] li:not(.disabled) a').addClass('waves-effect');
            }

    var table = $('#recordtable').DataTable({
        bSort : false,
        "ajax": {
                "url" : '/blotter/barangay/records',
                "dataSrc" : function (json) {
                        var return_data = new Array();
                        if(json.length!=0){
                        var id = json[0].case_id;
                        var com = "";
                        var res = "";
                        var wit = "";
                        for(var i=0;i< json.length; i++){
                            if(id==json[i].case_id){
                                if(json[i].personinvolve_type=='C'){
                                    com += json[i].name + "<br>";
                                }
                                else if(json[i].personinvolve_type=='R'){
                                    res += json[i].name + "<br>";
                                }
                                else{
                                    wit += json[i].name + "<br>";   
                                }
                                var button = "";
                                if(i==json.length-1){
                                    if((json[i].case_status=="Lupon")||(json[i].case_status=="Captain")||(json[i].cases_status=="Pangkat")){
                                        button = "<button type='button' class='assign btn btn-space bg-indigo waves-effect' data-toggle='tooltip' data-placement='bottom' title data-original-title='Assign Case'><i class='material-icons'>assignment_ind</i></button><button class='delete btn btn-space bg-red waves-effect'><i class='material-icons'>delete</i></button>";
                                    }
                                    else{
                                        button = "<button type = 'button' class = 'process btn btn-space bg-blue waves-effect'><i class='material-icons'>cached</i></button>";
                                    }
                                    return_data.push({
                                        'id' : json[i].case_id,
                                        'com' : com,
                                        'res' : res,
                                        'wit' : wit,
                                        'case' : json[i].caseskp_name,
                                        'status' : json[i].case_status,
                                        'action' : button
                                    });
                                }
                            }                                    
                            else{
                                var button="";
                                 if((json[i].case_status=="Lupon")||(json[i].case_status=="Captain")||(json[i].cases_status=="Pangkat")){
                                        button = "<button type='button' class='assign btn btn-space bg-indigo waves-effect' data-toggle='tooltip' data-placement='bottom' title data-original-title='Assign Case'><i class='material-icons'>assignment_ind</i></button><button class='delete btn btn-space bg-red waves-effect'><i class='material-icons'>delete</i></button>";
                                    }
                                    else{
                                        button = "<button type = 'button' class = 'process btn btn-space bg-blue waves-effect'><i class='material-icons'>cached</i></button>";
                                    }
                                 return_data.push({
                                        'id' : json[i-1].case_id,
                                        'com' : com,
                                        'res' : res,
                                        'wit' : wit,
                                        'case' : json[i-1].caseskp_name,
                                        'status' : json[i-1].case_status,
                                        'action' : button
                                    });
                                id = json[i].case_id;
                                com = "";
                                res = "";
                                wit = "";
                                if(json[i].personinvolve_type=='C'){
                                    com = json[i].name;
                                }
                                else if(json[i].personinvolve_type=='R'){
                                    res = json[i].name;
                                }
                                else{
                                    wit = json[i].name;   
                                }
                            }
                        }
                        } 
                        return return_data;
                }
            },
            "columns": [
                    { "data": 'id' },
                    { "data": 'com' },
                    { "data": 'res' },
                    { "data": 'wit' },
                    { "data": 'case' },
                    { "data": 'status' },
                    { "data": 'action' }
            ]
    });

    var id="";

    $('#recordtable tbody').on('click','button.assign', function(){
        var row = table.row($(this).parents('tr')).index();
        id = table.row($(this).parents('tr')).data().id;
        var stat = table.row($(this).parents('tr')).data().status;
        $.ajax({
            url : '/blotter/barangay/getcasestat',
            method: 'GET',
            data: {
                id : id,
                stat : stat
            },
            success: function(response){
                // console.log(response.length);
                for(var i = 0 ; i < response.length; i++){
                    $('#cont').append('<input type="radio" name="rbtnCount" id="'+response[i].id+'" value="'+response[i].id+'" /><label for="'+response[i].id+'">'+response[i].name+'</label><br>');
                }
                $('#yesu').modal('toggle');
                table.ajax.reload();
            }
        });
    });

    $('#recordtable tbody').on('click', 'button.delete', function(){
        var row = table.row($(this).parents('tr')).index();
        id = table.row($(this).parents('tr')).data().id;
        $.ajax({
            url: '/blotter/barangay/delete/'+id,
            method: 'DELETE',
            data:{
                _token: CSRF_TOKEN
            },
            success: function(response){
                if(response=="success"){
                    swal({
                        title: "Case Deleted!",
                        type: "success",
                        timer: 1000,
                        showConfirmButton: false
                    });
                }
                else{
                    swal({
                        title: "Case not Deleted",
                        type: "error",
                        timer: 1000,
                        showConfirmButton: false
                    });
                }
                table.ajax.reload();
            }
        });
    });

    $('#recordtable tbody').on('click', 'button.process', function(){
        var row = table.row($(this).parents('tr')).index();
        id = table.row($(this).parents('tr')).data().id;
        $('#largeModal').modal('toggle');
        $.ajax({
            url : '/blotter/barangay/getmed/'+id,
            method: 'get',
            data: {
                _token: CSRF_TOKEN
            },
            success: function(response){
                for(var i=0; i<response.length; i++){
                    var data = "<tr><td>"+response[i].hearing_id+"</td><td>"+response[i].hearing_sched+"</td><td>"+response[i].type+"</td><td><label>Respondent/s :</label><button type='button' class='printres btn btn-space bg-black waves-effect pull-right' value='"+response[i].hearing_id+"'><i class='material-icons'>print</i></button><br><br><label>Complainant/s</label><button type='button' class='printcom btn btn-space bg-black waves-effect pull-right' value='"+response[i].hearing_id+"'><i class='material-icons'>print</i></button><br><br><label>Witness/es</label><button type='button' class='printwit btn btn-space bg-black waves-effect pull-right' value='"+response[i].hearing_id+"'><i class='material-icons'>print</i></button>";
                    $('#mtable tbody').append(data);
                }

            }
        });
        $.ajax({
            url : '/blotter/barangay/getcon/'+id,
            method: 'get',
            data: {
                _token: CSRF_TOKEN
            },
            success: function(response){
                for(var i=0; i<response.length; i++){
                    var data = "<tr><td>"+response[i].hearing_id+"</td><td>"+response[i].hearing_sched+"</td><td>"+response[i].type+"</td><td><label>Respondent/s :</label><button type='button' class='printres btn btn-space bg-black waves-effect pull-right' value='"+response[i].hearing_id+"'><i class='material-icons'>print</i></button><br><br><label>Complainant/s</label><button type='button' class='printcom btn btn-space bg-black waves-effect pull-right' value='"+response[i].hearing_id+"'><i class='material-icons'>print</i></button><br><br><label>Witness/es</label><button type='button' class='printwit btn btn-space bg-black waves-effect pull-right' value='"+response[i].hearing_id+"'><i class='material-icons'>print</i></button>";
                    $('#ctable tbody').append(data);
                }
            }
        });
        $.ajax({
            url : '/blotter/barangay/getarb/'+id,
            method: 'get',
            data: {
                _token: CSRF_TOKEN
            },
            success: function(response){
                for(var i=0; i<response.length; i++){
                    var data = "<tr><td>"+response[i].hearing_id+"</td><td>"+response[i].hearing_sched+"</td><td>"+response[i].type+"</td><td><label>Respondent/s :</label><button type='button' class='printres btn btn-space bg-black waves-effect pull-right' value='"+response[i].hearing_id+"'><i class='material-icons'>print</i></button><br><br><label>Complainant/s</label><button type='button' class='printcom btn btn-space bg-black waves-effect pull-right' value='"+response[i].hearing_id+"'><i class='material-icons'>print</i></button><br><br><label>Witness/es</label><button type='button' class='printwit btn btn-space bg-black waves-effect pull-right' value='"+response[i].hearing_id+"'><i class='material-icons'>print</i></button>";
                    $('#atable tbody').append(data);
                }
            }
        });
    });

    $('#mtable tbody').on('click', 'button.printres', function(){
        window.open(window.location.href+'/mres/'+$(this).val(), '_blank');
        return false;
    });

    $('#mtable tbody').on('click', 'button.printcom', function(){
        window.open(window.location.href+'/mcom/'+$(this).val(), '_blank');
        return false;
    });

    $('#mtable tbody').on('click', 'button.printwit', function(){
        window.open(window.location.href+'/mwit/'+$(this).val(), '_blank');
        return false;
    });

    $('#ctable tbody').on('click', 'button.printres', function(){
        window.open(window.location.href+'/cres/'+$(this).val(), '_blank');
        return false;
    });

    $('#ctable tbody').on('click', 'button.printcom', function(){
        window.open(window.location.href+'/ccom/'+$(this).val(), '_blank');
        return false;
    });

    $('#ctable tbody').on('click', 'button.printwit', function(){
        window.open(window.location.href+'/cwit/'+$(this).val(), '_blank');
        return false;
    });

    $('#save').on('click', function(){
        $.ajax({
            url: '/blotter/barangay/allocatecase',
            method: 'POST',
            data: {
                _token : CSRF_TOKEN,
                offid : $('input[name=rbtnCount]:checked').val(),
                id: id
            },
            success: function(response){
                if(response.length!=0){
                    swal({
                        title: "Case Allocated!",
                        text: "Case Number: "+response[0].case+"\nScheduled Date: "+response[0].sched,
                        type: "success",
                        timer: 1000,
                        showConfirmButton: false
                    });
                }
                else{
                    swal({
                        title: "Error",
                        text: "Error",
                        type: "error",
                        timer: 1000,
                        showConfirmButton: false
                    });
                }
                $('#yesu').modal('toggle');
                table.ajax.reload();
            }
        }); 
    }); 

    
});
</script>
<script src="{{asset('plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
</body>
</html>
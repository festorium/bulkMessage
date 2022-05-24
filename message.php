<?php
include('../include/config.php');
include('../../../include/config.php');

// print_r($_SESSION);


$getallclass = $setup->getclassall();
$getstudentall = $setup->getstudentall();

// echo $STAFFID=implode(',', array_map(function($el){ return $el['idno']; }, get_user($_SESSION['loginid'])));



?>

<html lang="en">

<head>
    <!-- BEGIN STYLESHEETS -->
    
    <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
    <link type="text/css" rel="stylesheet" href="../assets/css/theme-default/bootstrap.css?1422792965" />
    <link type="text/css" rel="stylesheet" href="../assets/css/theme-default/materialadmin.css?1425466319" />
    <link type="text/css" rel="stylesheet" href="../assets/css/theme-default/font-awesome.min.css?1422529194" />
    <link type="text/css" rel="stylesheet" href="../assets/css/theme-default/material-design-iconic-font.min.css?1421434286" />
    <link rel="stylesheet" href="https:////cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <!--<link type="text/css" rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />-->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  <!--  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">-->
    
  <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
</head> 
 
<style>
    body {
      padding-top:25px;
      background-color:#ebebeb;
      margin-left:10px;
      margin-right:10px;
    }
    .container {
      max-width:600px;
      margin:0 auto;
      text-align:center;
      -webkit-border-radius:6px;
      -moz-border-radius:6px;
      border-radius:6px;
      background-color:#FAFAFA;
    }
    .head {
        -webkit-border-radius: 6px 6px 0px 0px;
        -moz-border-radius: 6px 6px 0px 0px;
        border-radius: 6px 6px 20px 20px;
        margin: 10px 10px 10px 10px;
        background-color: #2ABCA7;
        color: #FAFAFA;
    }
    h2 {
      text-align:center;
      padding:18px 0 18px 0;
      font-size: 1.4em;
    }
    input {
      margin-bottom:10px;
    }
    textarea {
      height:100px;
      margin-bottom:10px;
    }
    input:first-of-type
    {
      margin-top:35px;
    }
    input, textarea {
      font-size: 1em;
      padding: 4px 10px 10px;
      font-family: 'Source Sans Pro',arial,sans-serif;
      border: 1px solid #cecece;
      background: #f4fcfc;
      color:#000;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
      -moz-background-clip: padding;
      -webkit-background-clip: padding-box;
      background-clip: padding-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      width: 80%;
      max-width: 600px;
    }

    .select {
      font-size: 1em;
      padding: 15px 10px 10px 10px;
      font-family: 'Source Sans Pro',arial,sans-serif;
      border: 1px solid #cecece;
      background: #d7d7d7;
      color:#FAFAFA;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
      -moz-background-clip: padding;
      -webkit-background-clip: padding-box;
      background-clip: padding-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      width: 40%;
      max-width: 600px;
    }

    .select2 {
      font-size: 1em;
        padding: 15px 10px 10px 10px;
        font-family: 'Source Sans Pro',arial,sans-serif;
        border: 1px solid #cecece;
        background: #f4fcfc;
        color: #048c8c;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        -moz-background-clip: padding;
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        
        max-width: 600px;
        width: 400px;
        margin-left: 30;
    }
    
    .selectfield {
      font-size: 1em;
        padding: 15px 10px 10px 10px;
        font-family: 'Source Sans Pro',arial,sans-serif;
        border: 1px solid #cecece;
        background: #f4fcfc;
        color: #048c8c;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        -moz-background-clip: padding;
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        width: 25%;
        max-width: 600px;
        margin-left: 330;
    }
    
    #single {
      
      font-size: 1em;
      padding: 15px 10px 10px 10px;
      font-family: 'Source Sans Pro',arial,sans-serif;
      border: 1px solid #cecece;
      background: #f4fcfc;
        background-clip: border-box;
      background-clip: border-box;
      color: #048c8c;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
      -moz-background-clip: padding;
      -webkit-background-clip: padding-box;
      background-clip: padding-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      
      max-width: 600px;
      margin-left: 3;
      margin-top: 40;
    }
    
    .select2-container--default .select2-selection--single .select2-selection__rendered {
      color: #444;
      line-height: 28px;
      background: #f4fcfc;
      border-style: none;
    }

    #sendmessage{
        
      font-size: 1.2em;
        padding: 10px 10px 10px 10px;
        font-family: 'Source Sans Pro',arial,sans-serif;
        border: 1px solid #1cd223;
        background: #dae7e7;
        color: #048c8c;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        -moz-background-clip: padding;
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        width: 30%;
        max-width: 600px;
        margin-top: -10;
        margin-right: 20;

    }

    ::-webkit-input-placeholder {
      color: #FAFAFA;
    }
    :-moz-placeholder {
      color: #FAFAFA;  
    }
    ::-moz-placeholder {
      color: #FAFAFA; 
    }
    :-ms-input-placeholder {  
      color: #FAFAFA;  
    }
    button {
      margin-top:15px;
      margin-bottom:25px;
      background-color:#2ABCA7;
      padding: 12px 45px;
      -ms-border-radius: 5px;
      -o-border-radius: 5px;
      border-radius: 5px;
      border: 1px solid #2ABCA7;
      -webkit-transition: .5s;
      transition: .5s;
      display: inline-block;
      cursor: pointer;
      width:30%;
      color:#fff;
    }

    #search {
          margin-top: -73;
        margin-bottom: 0px;
        margin-left: 415;
        padding: 9px 2px;
        border-radius: 5px;
        border: 1px solid #2ABCA7;
        -webkit-transition: .5s;
        transition: .5s;
        display: inline-block;
        cursor: pointer;
        color: #fff;
    }
    
    #search2{
        margin-top: 40;
        margin-bottom: 0px;
        margin-left: 20;
        padding: 9px 2px;
        border-radius: 5px;
        border: 1px solid #2ABCA7;
        -webkit-transition: .5s;
        transition: .5s;
        display: inline-block;
        cursor: pointer;
        color: #fff;
    }


    button:hover, .button:hover {
      background:#19a08c;
    }
    label.error {
        font-family:'Source Sans Pro',arial,sans-serif;
        font-size:1em;
        display:block;
        padding-top:10px;
        padding-bottom:10px;
        background-color:#d89c9c;
        width: 80%;
        margin:auto;
        color: #FAFAFA;
        -webkit-border-radius:6px;
        -moz-border-radius:6px;
        border-radius:6px;
    }
    /* media queries */
    @media (max-width: 700px) {
      label.error {
        width: 90%;
      }
      input, textarea {
        width: 90%;
      }
      button {
        width:90%;
      }
      body {
      padding-top:10px;
      }  
    }
    .message {
        font-family:'Source Sans Pro',arial,sans-serif;
        font-size:1.1em;
        display:none;
        padding-top:10px;
        padding-bottom:10px;
        background-color:#2ABCA7;
        width: 80%;
        margin:auto;
        color: #FAFAFA;
        -webkit-border-radius:6px;
        -moz-border-radius:6px;
        border-radius:6px;
    }

    div.ex1 {
      background-color: #fff;
      height: 400px;
      width: auto;
      overflow-y: scroll;
    }

    button.multiselect {
      background-color: initial;
      border: 1px solid #ced4da;
      width: 200px;
    }

    table, th, td {
      border: 1px solid black;
    }

    div.modal-content {

      
      width: 700px;

      
    }

    ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
      color: #048c8c;
      opacity: 1; /* Firefox */
    }


    .loader {
      border: 16px solid #f3f3f3;
      border-radius: 50%;
      border-top: 16px solid #dae7e7;
      width: 120px;
      height: 120px;
      margin-left: 230px;
      -webkit-animation: spin 2s linear infinite; /* Safari */
      animation: spin 2s linear infinite;
    }

    /* Safari */
    @-webkit-keyframes spin {
      0% { -webkit-transform: rotate(0deg); }
      100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    .button2 {
        background-color: #548c94;
        border: none;
        color: white;
        padding: 15px 30px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 30px 19px 30px;
        cursor: pointer;
    }
    
    #selclass{
            display: block;
            margin-top: 30px;
    }
    
    .active {
      background-color: #19a08c;
      color: white;
    }
    
    #none{
        display:none;
    }
    
    .link {
        background-color: ;
        color: green;
        padding: 14px 25px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        right: 0;
        margin-left: 500;
        cursor: pointer;
        margin-bottom: -45;
        width: 30;
    }
    
    input:first-of-type {
      margin-top: 5px;
      margin-bottom: 5px;
    }
    
    #checkAll{
        margin-left: 500;
    }
    
    .previous {
      background-color: #f1f1f1;
      color: black;
      text-decoration: none;
      display: inline-block;
      padding: 8px 16px;
      margin-right: 550;
    }


</style>
 
 <body>

    <form id="contact">
      <div class="container">
          <h2 stlye="color:#2ABCA7;">Send SMS</h2>
        <div class="head" id="head">
          <!--<h2>Send SMS</h2>-->
            <button id="none" class="btn active">Single</button>
            <button id="singleb" class="button btn button2">Staff</button>
            <button id="bulk" class="button btn button2">Parent</button>
        </div>
        <div style="display:none;" id="selindv">
            <select  class="select2" name="single" id="single" class="form-control" required>
                        
                        <?php
                        // echo $getstudentall['getplandetailsclass'];
                        ?>
        </select><span><button id="search2" style="width:8%; background-color:#d7d7d7;"><i class="fa fa-search fa-2x"></i></button></span><br /><br /><br />
        </div>
        
        <div style="display:none;" id="selclass">
            <select  class="select classselect" name="classes[]" id="class" class="form-control" required multiple>
                        
                        <?php
                        echo $getallclass['getplandetailsclass'];
                        ?>
        </select><span><button id="search" style="width:8%; background-color:#d7d7d7;"><i class="fa fa-search fa-2x"></i></button></span><br /><br /><br />
        </div>
        
        
        <div style="display:none" class="loader"></div>
        
        <!--<select class="selectfield" name="fieldname" id="fieldname" class="form-control" style="display:none">-->
        <!--                <option value="">Select Fieldname</option>-->
        <!--                <option value="FULLNAME">FULLNAME</option>-->
        <!--                <option value="FIRSTNAME">FIRSTNAME</option>-->
                      
        <!--</select>-->
        <!--<textarea style="display:none" type="text" name="message" id="message" placeholder="Type Message"></textarea><br />-->
        <!--<div class="message">Message Sent</div>-->
        <!--<button style="display:none" id="submit" type="submit">-->
        <!--  Preview!-->
        <!--</button>-->
      </div>
    </form>

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" style="width:60" class="close" data-dismiss="modal">&times;</button>
              <h3 class="modal-title text-left text-success">Message Manager</h3>
            </div>
            <div class="modal-body">
              <div id="theresult" class="ex1"></div>
              
              <div style="display:none" class="loader"></div>
              
              <div class="container" style="display:none" id="cont">
        
                
                <select class="selectfield" name="fieldname" id="fieldname" class="form-control" style="display:none">
                                <option value="">Select Fieldname</option>
                                <option value="FULLNAME">FULLNAME</option>
                                <option value="FIRSTNAME">FIRSTNAME</option>
                                <option value="FINANCESTATUS">financestatusremark</option>
                              
                </select>
                <textarea style="display:" type="text" name="message" id="message" placeholder="Type Message"></textarea><br />
                <div class="message">Message Sent</div>
                <button style="display:none" id="submit" type="submit">
                  Preview!
                </button>
              </div>
            </div>
            <div class="modal-footer">
                <a style="display:none" href="#" class="previous">&laquo; Go back</a>
              <button type="button" class="btn btn-warning continue">Continue!</button>
            </div>
          </div>
          
        </div>
      </div>
        
      <div class="modal fade" id="preview" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-md">
              <div class="modal-content" role="document">
                  <div class="modal-header">
                      <button type="button" id="successclose" class="close" data-dismiss="modal">Edit Message</button>
                      <h3 class="modal-title text-left text-success" id="myModalLabel">Preview Message</h3>
                  </div>
                  <div class="modal-body">
                      <div id="thepreview" class="ex1"></div>
                      <div style="display:none" class="loader"></div>
                  </div>
                  <div class="modal-footer">
                      <select class="sendmessage" name="sendmessage" id="sendmessage" class="form-control">
                          <option value="">Send Message</option>
                          <option value="phone">To Phone</option>
                          <option value="email">To Email</option>
                          <option value="both">To Phone & Email</option>
                        
                      </select>
                  </div>
              </div>
          </div>
      </div>
  
  </body>

    
 
  
  <script src="../assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
<script src="../assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
<script src="../assets/js/libs/bootstrap/bootstrap.min.js"></script>
<script src="../assets/js/core/demo/Demo.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="https:////cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<link href="../multiselectjquery/jquery.multiselect.css" rel="stylesheet" type="text/css">
<script src="../multiselectjquery/jquery.multiselect.js"></script>
 <script>
 
 $('#single').select2()
 
 // jquery multiselect
    $('.classselect').multiselect({
        columns: 3,
        autoWidth: true,
        search   : true,
        selectAll: true,
        placeholder: 'select one or more class'
    });
    
    var header = document.getElementById("head");
    var btns = header.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
      });
    }
    
    
    
    $(document).on('click','#singleb', function(){
      event.preventDefault();
      $('#selclass').hide();
      $('.selectfield').hide();
      $('#message').hide();
      $('#selindv').show();
        
    });
    
    $(document).on('click','#bulk', function(){
      event.preventDefault();
      $('#selindv').hide();
      $('#selclass').show();
        
    });
    
    $(document).on('click','.continue', function(){
      event.preventDefault();
      $('#theresult').hide();
      $('.previous').show();
      $('.continue').hide();
      $('#cont').show();
        
    });
    
    $(document).on('click','.previous', function(){
      event.preventDefault();
      $('.previous').hide();
      $('.continue').show();
      $('#cont').hide();
      $('#theresult').show();
        
    });
 
 
 // Search for classes to send message
    $(document).on('click','#search', function(){
      event.preventDefault();
        var classall=$("#class").val();
        $('.loader').show();
        
        if(classall != null){
        // alert(classall)
            $.ajax({
                url:"messagecontrol.php",
                type:'POST',
                dataType:'text',
                data:{classall:classall,dataname:'getclassall'},
                success:function(response){
                    // console.log(response);
                    // debugger;
                    $('#cont').hide();
                    $('.previous').hide();
                    $('#theresult').html(response);
                    $('#myModal').modal({backdrop: "static"});
                    $('.selectfield').show();
                    $('#message').show();
                    $('#submit').show();
                    $('.continue').show();
                    $('#theresult').show();
                    $('.loader').hide();
                    
                }
            });
        }else{
            alert ('Select atleast a Class');
            $('.loader').hide();
        }
    });
    
    
    
    // Search for single Student
    $(document).on('click','#search2', function(){
      event.preventDefault();
        var single=$("#single").val();
        // $('.loader').show();
    
        
        // if(single != null){
        // // alert(single)
        //     $.ajax({
        //         url:"messagecontrol.php",
        //         type:'POST',
        //         dataType:'text',
        //         data:{single:single,dataname:'getsingle'},
        //         success:function(response){
        //             // console.log(response);
        //             // debugger;
        //             $('#cont').hide();
        //             $('.previous').hide();
        //             $('#theresult').html(response);
        //             $('#myModal').modal({backdrop: "static"});
        //             $('.selectfield').show();
        //             $('#message').show();
        //             $('#submit').show();
        //             $('.continue').show();
        //             $('#theresult').show();
        //             $('.loader').hide();
                    
        //         }
        //     });
        // }else{
        //     alert ('Select atleast a Class');
        //     $('.loader').hide();
        // }
    });
    
    
    
  // function to checkAll checkboxes
    $(document).on('click', '#checkAll', function() {
        $('input:checkbox').not(this).prop('checked', this.checked);
    });
    
    
    
  // function to insert filed name in the message box
    $(document).on('change', '#fieldname', function() {
      // event.preventDefault();
      var fieldname = $("#fieldname").val();
        // alert(fieldname);
        
        $('#message').val($('#message').val() +"#"+ fieldname)

    });
    
    
    
    $(document).ready( function () {
        $('#checktable').DataTable();
        $('#checktable_wrapper').find('label').each(function(){
          $(this).parent().append($(this).children());
        });
        
        $('#checktable_wrapper .datatables_filter').find('input').each(function(){
          const $this = $(this);
          $this.attr("placeholder", "search items...");
        })
    });
    



    // Function to preview message based on Student checked
    $("#submit").click(function () {
        var message = $("#message").val();
        var classall=$("#class").val();
        var allChecked = [];
        $('.loader').show();
        
        //Loop through all checked CheckBoxes in GridView.
        $("#checktable input[type=checkbox]:checked").each(function () {
            var row = $(this).closest("tr")[0];
            allChecked.push(row.cells[3].innerHTML);
        });

        if(message != ''){
        
            $.ajax({
                    url:"messagecontrol.php",
                    type:'POST',
                    dataType:'text',
                    data:{allChecked:allChecked,message:message,classall:classall,dataname:'premessage'},
                    success:function(response){
                        // console.log(response);
                        // console.log(lastRecords);
                        // debugger;
                        $('#thepreview').html(response);
                        $('#preview').modal();
                        $('.loader').hide();
                        
                    }
            });
        }else{
             alert('Type a message');
             $('.loader').hide();
        }
        
        return false;
    });
            
    
  

    // Function to Send message
    $(document).on('change', '.sendmessage', function() {

        var selValue = $(this).val();
        
        if(selValue == 'phone'){
            var allCheckedPhone = [];
            var allCheckedMessage = [];
            $('.loader').show();
            $('#thepreview').hide();
            
            
            $('#previewtable tr').each(function() {
                allCheckedPhone.push($(this).find("td").eq(0).html());
                allCheckedMessage.push($(this).find("td").eq(1).html());
                
                // console.log(toObject(allCheckedPhone, allCheckedMessage))
            });
            
            // var children = allCheckedPhone.concat(allCheckedMessage);
            
            // function toObject(allCheckedPhone, allCheckedMessage) {
            //     var result = {};
            //     for (var i = 0; i < allCheckedPhone.length; i++)
            //          result[allCheckedPhone[i]] = allCheckedMessage[i];
            //     return result;
            // }
            
            
            $.ajax({
                    url:"messagecontrol.php",
                    type:'POST',
                    dataType:'text',
                    data:{allCheckedPhone:allCheckedPhone,allCheckedMessage:allCheckedMessage,dataname:'sendmessage'},
                    success:function(response){
                        alert(response);
                        // debugger;
                        
                        window.location.href='message.php';
                    
                        
                    }
            });
        }
        
        if(selValue == 'email'){
            alert('send to mail');
        }
        
        if(selValue == 'both'){
            alert('send to both');
        }
        
    });
 
  
  
  
  </script>
  
  
  
  </html>
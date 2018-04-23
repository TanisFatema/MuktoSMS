@extends('adminlte::layouts.app')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="{{ asset('/js/jquery.tabledit.min.js') }}"></script>
@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')
	<div class="container-fluid spark-screen">

		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				
	<?php
$connect = mysqli_connect("localhost", "root", "", "admin");
$query = "SELECT * FROM contact ORDER BY id DESC";
$result = mysqli_query($connect, $query);
?>				

			
												
<!------ Include the above in your HEAD tag ---------->

    <div class="container">    
        <div id="loginbox" style="margin-top:50px;margin-right:35%;" >                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                     
                                            </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                           
  



                        </div>                     
                    </div>  
        </div>
       </div>
		
		
				
			</div>
		</div>
			<div class="container">  
   <br />  
   <br />  
   <br />  
            <div class="table-responsive">  
    <h3 align="center">Contact Message Box</h3><br />  
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
	  <th>ID</th>
       <th>Name</th>
       <th>Email</th>
	   <th>Message</th>
      </tr>
     </thead>
     <tbody>
    
   
 <?php
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>
	  <td>'.$row["id"].'</td>
       <td>'.$row["cname"].'</td>
       <td>'.$row["cemail"].'</td>
	    <td>'.$row["msg"].'</td>
			   	        </tr>
			
      ';
     }
     ?>
     </tbody>
    </table>
	
   </div>  
  </div>   
	</body>   
<script>  
( function($) {
$(document).ready(function(){  
     $('#editable_table').Tabledit({
      url:'contact.php',
      columns:{
       identifier:[0, "id"],
       editable:[]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#'+data.id).remove();
       }
      }
     });
 
});  } ) ( jQuery );
 </script>
	</div>
	<body> 


@endsection

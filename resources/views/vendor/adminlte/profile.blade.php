@extends('adminlte::layouts.app')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="{{ asset('/js/jquery.tabledit.min.js') }}"></script>
@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection
<style> 

div.b {
    white-space: nowrap; 
    width: 1px; 
    overflow: hidden;
    text-overflow: ellipsis; 
    border: 0px solid #000000;
}

</style>
@section('main-content')
	<div class="container-fluid spark-screen">

		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				
	<?php
$connect = mysqli_connect("localhost", "root", "", "admin");
$query = "SELECT * FROM users ORDER BY id DESC";
$result = mysqli_query($connect, $query);
?>				

			
												
<!------ Include the above in your HEAD tag ---------->
  <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{{ Auth::user()->avatar }}" alt="User profile picture">

              <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

              <p class="text-muted text-center">Software Engineer</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Followers</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Following</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Friends</b> <a class="pull-right">13,287</a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
            <!-- /.box-body -->
          </div>
    <div class="container">    
        
       </div>
		
		
				
			</div>
		</div>
			<div class="container">  
   <br />  
   <br />  
   <br />  
            <div class="table-responsive">  
    <h3 align="center">User Details Box</h3><br />  
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
	  <th>ID</th>
       <th>Name</th>
       <th>Email</th>
	   <th>Password</th>
	   <th>Avatar</th>
      </tr>
     </thead>
     <tbody>
    
   
 <?php
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>
	  <td>'.$row["id"].'</td>
       <td>'.$row["name"].'</td>
       <td>'.$row["email"].'</td>
	    <td><div class="b">'.$row["password"].'</div></td>
		<td><div class="b">'.$row["avatar"].'</div></td>
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
      url:'users.php',
      columns:{
       identifier:[0, "id"],
       editable:[[1, 'name'], [2, 'email'], [3, 'password'], [4, 'avatar']]
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

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
$query = "SELECT * FROM hmenu ORDER BY id DESC";
$result = mysqli_query($connect, $query);
?>				

	<div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Add Header Menu</h3>
            </div>
            <div class="box-body">
              <div class="row">
			  <form action="events.php" method="post">
                <div class="col-xs-3">
                  <input type="text" class="form-control" placeholder="Menu Title"  id="menu" name="menu" required="">
                </div>
                <div class="col-xs-3">
                  <input type="text" id="url" class="form-control" placeholder="Menu Url" name="url" required="">
                </div>
				<div class="col-xs-3">
                  <input type="text" id="favicon" class="form-control"  placeholder="Favicon fa fa-icon" name="favicon" >
                </div>
                <div class="col-xs-1">
                 <button type="submit" name="hmenu_btn" class="btn btn-success">Add Menu</button>
                </div>
              </div>
			  </form>
            </div>
            <!-- /.box-body -->
          </div>				
												
<!------ Include the above in your HEAD tag ---------->

    <div class="container">    
       
      
       </div>
		
		
				
			</div>
		</div>
			<div class="container">  
   <br />  
   <br />  
   <br />  
            <div class="table-responsive">  
    <h3 align="center">Header Menu Box</h3><br />  
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>ID</th>
       <th>Menu</th>
       <th>URL</th>
	   <th>Favicon</th>
      </tr>
     </thead>
     <tbody>
    
   
 <?php
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>
       <td>'.$row["id"].'</td>
       <td>'.$row["menu"].'</td>
       <td>'.$row["url"].'</td>
	   <td>'.$row["favicon"].'</td>
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
      url:'haction.php',
      columns:{
       identifier:[0, "id"],
       editable:[[1, 'menu'], [2, 'url'],[3, 'favicon']]
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
 
}); } ) ( jQuery );
 </script>
	</div>
	<body> 


@endsection
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
				


 <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Submit Result</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
       <form action="events.php" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label >Roll</label>
                  <input type="text" class="form-control"  id="roll" name="roll" required="">
                </div>
                <div class="form-group">
                  <label >Year</label>
                  <input type="text" id="year" class="form-control"  name="year" required="">
                </div>
				<div class="form-group">
                  <label >Grade</label>
                  <input type="text" id="grade" class="form-control"  name="grade" required="">
                </div>
				<div class="form-group">
                  <label >Class</label>
                   <select type="text" name="class" class="form-control" >
   <option value="#">Select Class</option>
					  <option value="6">Six</option>
		    <option value="7">Seven</option>
			  <option value="8">Eight</option>
  <option value="9">Nine</option>
    <option value="10">Ten</option>
</select>
                </div>
               <div class="form-group">
                  <label >Term</label>
                 <select type="text" name="term" class="form-control" >
         <option value="#">Select Term</option>
	  <option value="1">Mid Term</option>
		<option value="2">Final Term</option>
</select>
                </div>  
<div class="form-group">
                  <label >Section</label>
                  <select type="text" name="section" class="form-control" >
         <option value="#">Select Section</option>
	  <option value="1">Section A</option>
    <option value="2">Section B</option>
	  <option value="3">Section C</option>
	    <option value="4">Section D</option></select>
	  </select>	 
                </div>
				
              </div>			
				  <div align="center" class="box-footer">
                <button type="submit" name="result_btn" class="btn btn-primary">Add Result</button>
              </div>
            </form>
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
   <h3 align="center">Result Sheet</h3><br />  
    <table id="editable_table" class="table table-bordered table-striped"> 
     <thead>
      <tr>
	    <th>ID</th>
       <th>Roll</th>
       <th>Class</th>
	    <th>Term</th>
		<th>Year</th>
		<th>Section</th>
		<th>Grade</th>
      </tr>
     </thead>
     <tbody>

<?php
$connect = mysqli_connect("localhost", "root", "", "admin");
$query = "SELECT * FROM result";
$result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>
	   <td>'.$row["id"].'</td>
       <td>'.$row["roll"].'</td>
       <td>'.$row["class"].'</td>
	   <td>'.$row["term"].'</td>
	    <td>'.$row["year"].'</td>
		 <td>'.$row["section"].'</td>
		  <td>'.$row["grade"].'</td>
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
      url:'result.php',
      columns:{
       identifier:[0, "id"],
       editable:[[1, 'roll'], [2, 'class'], [3, 'term'], [4, 'year'], [5, 'section'], [6, 'grade']]
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
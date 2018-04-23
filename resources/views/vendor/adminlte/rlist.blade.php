@extends('adminlte::layouts.app')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 <script src="{{ asset('/js/jquery.tabledit.min.js') }}"></script>
@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				


<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Find Result/ Edit </h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
		<form method="post"  action="/rlist">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Section</label>
                <select name="section" class="form-control select2" style="width: 100%;">
                   <option value="#">Select Section</option>
	  <option value="1">Section A</option>
    <option value="2">Section B</option>
	  <option value="3">Section C</option>
	    <option value="4">Section D</option>
                </select>
              </div>
              <!-- /.form-group -->
           <div class="form-group">
                <label>Class</label>
                <select name="class" class="form-control select2" style="width: 100%;">
                     <option value="#">Select Class</option>
					  <option value="6">Six</option>
		    <option value="7">Seven</option>
			  <option value="8">Eight</option>
  <option value="9">Nine</option>
    <option value="10">Ten</option>
                              </select>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <label>Term</label>
                <select name="term" class="form-control select2" style="width: 100%;">
                    <option value="#">Select Term</option>
	  <option value="1">Mid Term</option>
		<option value="2">Final Term</option>
                           </select>
              </div>
              <!-- /.form-group -->
           <div class="form-group">
                <label>Year</label>
                <select name="year" class="form-control select2" style="width: 100%;">
                  <option value="#">Select Year</option>
	   <option value="2018">2018</option>
	  <option value="2017">2017</option>
	<option value="2016">2016</option>
                </select>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
			 <div align="center" class="form-group">
			<button type="submit" name="search_btn" class="btn btn-success">Search</button>
          </div>
		  </div>
          <!-- /.row -->
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
if(isset($_POST['search_btn']))
{ 
$year=$_GET['year'];
$term=$_GET['term'];
$section=$_GET['section'];
$class=$_GET['class'];
$query = "SELECT * FROM result WHERE year='$year' AND term='$term' AND section='$section' AND class='$class'";
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
}

?>	
     </tbody>
    </table>
	
   </div>  
  </div>   
	   
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
	


@endsection
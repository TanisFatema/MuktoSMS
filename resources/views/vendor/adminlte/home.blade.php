@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php
$conn=mysqli_connect("127.0.0.1","root","","admin");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql="select count('id') from users WHERE admin='0'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
echo "$row[0]";
mysqli_close($conn);
?></h3>

              <p>Total Student</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php
$conn=mysqli_connect("127.0.0.1","root","","admin");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql="select count('id') from users WHERE admin='1'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
echo "$row[0]";
mysqli_close($conn);
?><sup style="font-size: 20px"></sup></h3>

              <p>Total Teacher</p>
            </div>
            <div class="icon">
              <i class="fa fa-graduation-cap"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php
$conn=mysqli_connect("127.0.0.1","root","","admin");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql="select count('id') from users WHERE admin='2'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
echo "$row[0]";
mysqli_close($conn);
?></h3>

              <p>Total Staff</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
		<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php
$conn=mysqli_connect("127.0.0.1","root","","admin");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql="select count('id') from users WHERE admin='0'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
echo "$row[0]";
mysqli_close($conn);
?></h3>

              <p>Total Admin</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-secret"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
			<div class="col-md-8 col-md-offset-2">
				
			

											
<!------ Include the above in your HEAD tag ---------->

    <div class="container"> 

        <div id="loginbox" style="margin-top:50px;margin-right:35%;" >                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                          <div class="box box-danger direct-chat direct-chat-danger">
        <div class="box-header with-border">
          <h3 class="box-title">Shout Box</h3>
          <div class="box-tools pull-right">
          
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <!-- In box-tools add this button if you intend to use the contacts pane -->
           
            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div><!-- /.box-header -->
        <div class="box-body">
		<div class="direct-chat-messages">
		<?php
$connect = mysqli_connect("localhost", "root", "", "admin");
$query2 = "SELECT * FROM chat ORDER BY id DESC";
$result2 = mysqli_query($connect, $query2);

     while($row = mysqli_fetch_array($result2))
     {
      echo '
          <!-- Conversations are loaded here -->
          
            <!-- Message. Default to the left -->
            <div class="direct-chat-msg">
              <div class="direct-chat-info clearfix">
                <span class="direct-chat-name pull-left">'.$row["mname"].'</span>
                <span class="direct-chat-timestamp pull-right">'.$row["time"].'</span>
              </div><!-- /.direct-chat-info -->
              <img class="direct-chat-img" src="'.$row["cavatar"].'" alt="message user image"><!-- /.direct-chat-img -->
              <div class="direct-chat-text">
                '.$row["msg"].'
              </div><!-- /.direct-chat-text -->
            </div><!-- /.direct-chat-msg -->
			 ';
     }
     ?> 

          <!-- Contacts are loaded here -->
          
        <div class="box-footer" >
          <form class="input-group" action="events.php" method="post">
            <input type="text" name="msg" placeholder="Type Message ..." class="form-control">
			<input type="hidden" name="cavatar" value="{{ Auth::user()->avatar }}" class="form-control">
			<input type="hidden" name="mname" value="{{ Auth::user()->name }}" class="form-control">
            <span class="input-group-btn">
              <button type="submit" name="chat_btn" class="btn btn-danger btn-flat">Send</button>
            </span>
          </form>
        </div><!-- /.box-footer-->
      </div><!--/.direct-chat -->                
                    </div>  
        </div>
       </div>
		
		
				
			</div>
		</div>
			<div class="container">  
   <br />  
   <br />  
   <br />  
            <div class="table-responsive" style="margin-left:-10%; width:90%;overflow-x:auto;"> 
	<?php
$connect = mysqli_connect("localhost", "root", "", "admin");
$query = "SELECT * FROM news ORDER BY id DESC";
$result = mysqli_query($connect, $query);
	echo '	
<div align="center" class="box-header">
              <h3 class="box-title"><strong>Notice Board</strong></h3>
            </div>	
   <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body no-padding">
    <table class="table table-striped">
     <thead>
      <tr>
       <th>ID</th>
       <th>title</th>
       <th>body</th>
      </tr>
     </thead>
     <tbody>
      ';
     
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>
       <td>'.$row["id"].'</td>
       <td>'.$row["title"].'</td>
       <td>'.$row["body"].'</td>
	  	        </tr>
			
      ';
     }
     ?>
     </tbody>
    </table>
	</div>  
  </div> 
   </div>  
  </div>   
	</body>   
<script>  
$(document).ready(function(){  
     $('#editable_table').Tabledit({
      url:'events.php',
      columns:{
       identifier:[0, "id"],
       editable:[[1, 'title'], [2, 'body']]
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
 
});  
 </script>
	</div>
	<body> 
   
          
      
           	

@endsection

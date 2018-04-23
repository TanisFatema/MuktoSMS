
<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'admin');

	
?>
                        <?php

$dbc=mysqli_connect("localhost","root","","admin");
if(isset($_POST['register_btn']))
{   $title=mysqli_real_escape_string($dbc,$_POST['title']);
    $body=mysqli_real_escape_string($dbc,$_POST['body']);
  
   
            $sql="INSERT INTO news(title,body) VALUES('$title','$body')";
              mysqli_query($dbc,$sql);  
          
  
}
?>
   @extends('master')
   <title>Laravel</title>
@section('content')
<!--start-->
<!--start section-->
<section id="nicdark_parallax_countdown" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img-events">

    <div class="nicdark_filter greydark">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="nicdark_space40"></div>
            <div class="nicdark_space50"></div>
            <div class="nicdark_space100"></div>

            


        </div>
        <!--end nicdark_container-->

    </div>
            
</section>
<!--end section-->

<!--start section-->
<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">


        <div class="nicdark_space50"></div>


        <div class="grid grid_12">
            <h1 class="subtitle greydark">OUR EVENTS</h1>
            <div class="nicdark_space20"></div>
            <h3 class="subtitle grey">CHECK OUT OUR BEST EVENTS</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_green nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>


       

        <div class="nicdark_space10"></div>
 <?php $results = mysqli_query($db, "SELECT * FROM events"); ?> 
<?php while ($row = mysqli_fetch_array($results)) { ?>		
        <div class="grid grid_3">
              	   
            <!--archive1-->
            <div class="nicdark_archive1 nicdark_bg_green nicdark_radius nicdark_shadow">

               
                <img alt="" style="width: 280px; height:280px;" src="<?php echo $row['url']; ?>">
                
                <div class="nicdark_textevidence nicdark_bg_greydark">
                    <h4 class="white nicdark_margin20"><?php echo $row['title']; ?></h4>
                </div>
                
                <div class="nicdark_margin20">
                                        <div class="nicdark_space10"></div>
                    <h5 class="white"><i class="icon-clock-1"></i> <?php echo $row['time']; ?></h5>
                    <div class="nicdark_space20"></div>
                    <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                    <div class="nicdark_space20"></div>
                    <p class="white"><?php echo $row['body']; ?></p>
                    <div class="nicdark_space20"></div>
                                   </div>

            </div>
            <!--archive1-->

        </div>
	<?php } ?>



      


   </div>
   <!--end nicdark_container-->
            
</section>
<!--end section-->
 



@stop
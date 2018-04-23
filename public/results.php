 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */
</style>
<div class="text-center" style="background:#4CAF50; margin-left:-10px;margin-right:-10px;margin-top:-10px;">
<br>
<img style=" height:20%;" class="img-fluid" alt="Responsive image" src="http://facilityregistry.dghs.gov.bd/img/bangladesh_govt_logo.png"/>
<br>
<br>
</div>
 <h1 align="center">Result Sheet</h1><br />  
    <table id="customers" style=" margin-left:10%;width:80%;"> 
     <thead>
      <tr>
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
<div align="center">
  <button class="button" onclick="myFunction()"><i class="fa fa-print" aria-hidden="true"></i>&nbsp;Print</button>
  <button class="button" ><a style="color:white;" href="/"><i class="fa fa-hand-o-left" aria-hidden="true"></i>&nbsp;Back</a></button>
</div>
<script>
function myFunction() {
    window.print();
}
</script>  
                  
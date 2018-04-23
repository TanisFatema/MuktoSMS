<?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'admin');

$input = filter_input_array(INPUT_POST);

  $roll=mysqli_real_escape_string($connect,$_POST['roll']);
    $class=mysqli_real_escape_string($connect,$_POST['class']);
    $term=mysqli_real_escape_string($connect,$_POST['term']);
    $year=mysqli_real_escape_string($connect,$_POST['year']);
    $section=mysqli_real_escape_string($connect,$_POST['section']);
    $grade=mysqli_real_escape_string($connect,$_POST['grade']);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE result
 SET roll = '".$roll."', 
 class = '".$class."' , 
 term = '".$term."' , 
  year = '".$year."' ,
 section = '".$section."' , 
 grade = '".$grade."' 
 WHERE id = '".$input["id"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM result
 WHERE id = '".$input["id"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>
 <?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'admin');

$input = filter_input_array(INPUT_POST);

$title = mysqli_real_escape_string($connect, $input["title"]);
$body = mysqli_real_escape_string($connect, $input["body"]);


if($input["action"] === 'edit')
{
 $query = "
 UPDATE events 
 SET title = '".$title."', 
 body = '".$body."' 
   
 WHERE id = '".$input["id"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM events 
 WHERE id = '".$input["id"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>

    
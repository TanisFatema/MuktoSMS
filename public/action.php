                      <?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'admin');

$input = filter_input_array(INPUT_POST);

$title = mysqli_real_escape_string($connect, $input["menu"]);
$body = mysqli_real_escape_string($connect, $input["url"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE menu 
 SET menu = '".$title."', 
 url = '".$body."' 
 WHERE id = '".$input["id"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM menu 
 WHERE id = '".$input["id"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>

    
                                     <?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'admin');

$input = filter_input_array(INPUT_POST);

$name = mysqli_real_escape_string($connect, $input["name"]);
$email = mysqli_real_escape_string($connect, $input["email"]);
$password = mysqli_real_escape_string($connect, $input["password"]);
$avatar = mysqli_real_escape_string($connect, $input["avatar"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE users
 SET name = '".$name."', 
 email = '".$email."' ,
  password = '".$password."' ,
  avatar = '".$avatar."' 
 WHERE id = '".$input["id"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM users 
 WHERE id = '".$input["id"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>       
					 
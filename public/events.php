                        <?php

$dbc=mysqli_connect("localhost","root","","admin");
if(isset($_POST['register_btn']))
{   $title=mysqli_real_escape_string($dbc,$_POST['title']);
    $body=mysqli_real_escape_string($dbc,$_POST['body']);
  
   
            $sql="INSERT INTO news(title,body) VALUES('$title','$body')";
              mysqli_query($dbc,$sql);  
          header("Location: http://127.0.0.1:8000/notice");
die();
  
}

if(isset($_POST['menu_btn']))
{   $menu=mysqli_real_escape_string($dbc,$_POST['menu']);
    $url=mysqli_real_escape_string($dbc,$_POST['url']);
  
   
            $sql="INSERT INTO menu(menu,url) VALUES('$menu','$url')";
              mysqli_query($dbc,$sql);  
          header("Location: http://127.0.0.1:8000/menu");
die();
  
}
if(isset($_POST['event_btn']))
{   $title=mysqli_real_escape_string($dbc,$_POST['title']);
    $body=mysqli_real_escape_string($dbc,$_POST['body']);
  $url=mysqli_real_escape_string($dbc,$_POST['url']);
   
            $sql="INSERT INTO events(title,body,url) VALUES('$title','$body','$url')";
              mysqli_query($dbc,$sql);  
          header("Location: http://127.0.0.1:8000/event");
die();
  
}
if(isset($_POST['hmenu_btn']))
{   $menu=mysqli_real_escape_string($dbc,$_POST['menu']);
    $url=mysqli_real_escape_string($dbc,$_POST['url']);
	$favicon=mysqli_real_escape_string($dbc,$_POST['favicon']);
  
   
            $sql="INSERT INTO hmenu(menu,url,favicon) VALUES('$menu','$url','$favicon')";
              mysqli_query($dbc,$sql);  
          header("Location: http://127.0.0.1:8000/hmenu");
die();
  
}
if(isset($_POST['contact_btn']))
{   $title=mysqli_real_escape_string($dbc,$_POST['cname']);
    $body=mysqli_real_escape_string($dbc,$_POST['cemail']);
  $msg=mysqli_real_escape_string($dbc,$_POST['msg']);
   
            $sql="INSERT INTO contact(cname,cemail,msg) VALUES('$title','$body','$msg')";
              mysqli_query($dbc,$sql);  
          header("Location: http://127.0.0.1:8000/contact");
die();
  
}
if(isset($_POST['result_btn']))
{   $roll=mysqli_real_escape_string($dbc,$_POST['roll']);
    $class=mysqli_real_escape_string($dbc,$_POST['class']);
    $term=mysqli_real_escape_string($dbc,$_POST['term']);
    $year=mysqli_real_escape_string($dbc,$_POST['year']);
    $section=mysqli_real_escape_string($dbc,$_POST['section']);
    $grade=mysqli_real_escape_string($dbc,$_POST['grade']);
            $sql="INSERT INTO result(roll,class,term,year,section,grade) VALUES('$roll','$class','$term','$year','$section','$grade')";
              mysqli_query($dbc,$sql);  
          header("Location: http://127.0.0.1:8000/results");
die();
  
}
if(isset($_POST['chat_btn']))
{   $title=mysqli_real_escape_string($dbc,$_POST['mname']);
    $body=mysqli_real_escape_string($dbc,$_POST['cavatar']);
  $msg=mysqli_real_escape_string($dbc,$_POST['msg']);
   
            $sql="INSERT INTO chat(mname,cavatar,msg) VALUES('$title','$body','$msg')";
              mysqli_query($dbc,$sql);  
          header("Location: http://127.0.0.1:8000/home");
die();
  
}
?>
<?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'admin');

$input = filter_input_array(INPUT_POST);

$title = mysqli_real_escape_string($connect, $input["title"]);
$body = mysqli_real_escape_string($connect, $input["body"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE news 
 SET title = '".$title."', 
 body = '".$body."' 
 WHERE id = '".$input["id"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM news 
 WHERE id = '".$input["id"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>

    
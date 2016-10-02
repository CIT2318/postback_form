<?php 
$msg;
$user_ans=$_POST["capital"];
if($user_ans===""){
    $msg = "You need to answer the question";
}else{
    if($user_ans==="Paris"){
        $msg = "You are correct";
    }else{
        $msg = "You are wrong";
    }
}



?>
<!DOCTYPE html>
<html>
<head>
    <title>Capital Quiz</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<?php
echo "<p>".$msg."</p>";
?>
</body>
</html>

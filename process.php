<?php 
$msg;
if(isset($_POST["answerBtn"]))
{
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
}else{
	$msg="You shouldn't have got to this page";
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

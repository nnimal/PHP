<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo "This is Nims site's";?></title>
</head>
<body>
	<?php
	$num=1;
	$name='Alex';
	$status=true;
	// $password='passWord';
	// for ($i=0; $i <=10; $i++) { 
	// 	echo "{$i}" ;
	// 	if ($i !=10) {
	// 		echo ',';
	// 	}
	// 		if ($password=='passWord') {
	// 		echo "{$password}"."+";}
	// 		else{
	// 			echo 'Alex';
	// 		}
	// 	}
	$age=18;
	if ($age>=21) {
		echo 'you\'re eligible to drink beer in USA';
 	}
 	elseif ($age >=18) {
 		echo 'eligible drink beer in UK your age is'."{$age}";
 	}
 	else {
 		echo 'You\'re not dirnk any beer in USA and UK age is below '. "{$age}";
 		echo '<br>';
 		echo '135%2 is '. 135%2;
 	}
 	echo '<br>';
	echo ++$num;
	echo '<br>';
	echo $num;
	echo '<br>';
	echo $num++;
	echo '<br>';
	echo $num;
	echo '<br>';
if($age <> 18){
	echo 'its True';
	$status=false;
}
else {
	echo 'Not True';
}

if ($status==true) {
	echo '<br>';
	echo 'allowed';
	// code...
}
else
{
	echo '<br>';
	echo 'Not Allowed';

}
	?>



</body>
</html>
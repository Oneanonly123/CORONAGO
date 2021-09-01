<?php

$server = 'localhost:3307';
$user = 'root';
$password = ' ' ;
$db = 'coronadb' ;   


$con = mysqli_connect($server , $user , '',  $db);

if($con){
	?>
	<script >
		alert("connection successful");
	</script>
	<?php
}else{
	?>
	<script >
		alert(" no connection");
	</script>
	<?php
}

	?>
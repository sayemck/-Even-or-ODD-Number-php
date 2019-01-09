<?php
	if(isset($_GET['submit'])){
$num=$_GET['num'];
if($num%2==0){
	echo "Even Number";
}
else{
	echo "Odd Number";
	}
	}
?>

<form action="" method="get">
Enter Number: 
<input type="text" name="num"/>
<input type="submit" name="submit" value="submit"/>
</form>
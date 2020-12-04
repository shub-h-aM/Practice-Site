<?php 

if(isset($_POST['data_submit'])){
	$n= $_POST['name'];
	$a= $_POST['agee'];
	$c= $_POST['ccategory'];
	$adr= $_POST['Address'];

	echo "<br>Name : ".$n;
	echo "<br>Age : ".$a;
	echo "<br>Category : ".$c;
	echo "<br>Address : ".$adr;


}

?>
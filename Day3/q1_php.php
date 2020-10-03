<?php

$yourname = @$_POST["sname"];

$mk1 = @$_POST["mk1"];
$mk2 = @$_POST["mk2"];
$mk3 = @$_POST["mk3"];
$mk4 = @$_POST["mk4"];
$mk5 = @$_POST["mk5"];

$total=($mk1+$mk2+$mk3+$mk4+$mk5);
$per=($mk1+$mk2+$mk3+$mk4+$mk5)/500 *100;

$connect=mysqli_connect("localhost","root","") or die(mysql_error());

mysqli_select_db($connect,"result") or die("ERROR");

$write=mysqli_query($connect,"Insert into class1 values('','$yourname','$mk1','$mk2','$mk3','$mk4','$mk5','$total','$per')") or die(mysqli_error($connect));




if($yourname)
{
	echo "Total Marks Obtained: ".$total."<br>";
	echo "Total Marks: 500 <br>";
	echo "Percentage:".$per."%";
}
?>
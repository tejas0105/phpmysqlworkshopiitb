<?php
    
    if(isset($_POST['name'])&& isset($_POST['s1']) && isset($_POST['s2']) && isset($_POST['s3']) && isset($_POST['s4'])&& isset($_POST['s5']) ){
    $name=$_POST['name'];
    $s1 = $_POST['s1'];
    $s2 = $_POST['s2'];
    $s3 = $_POST['s3'];
    $s4 = $_POST['s4'];
    $s5 = $_POST['s5'];
    echo"<b>Name of Student:</b> $name<br><br>
    <b>Marks in Each Subject</b><br><br>
    <b>Subject 1:</b> $s1/100<br><br>
    <b>Subject 2:</b> $s2/100<br><br>
    <b>Subject 3:</b> $s3/100<br><br>
    <b>Subject 4:</b> $s4/100<br><br>
    <b>Subject 5:</b> $s5/100<br><br>
    <b>Total Marks Obtained:</b><br><br>
    <b>Total Marks : </b>".($s1+$s2+$s3+$s4+$s5)."/500<br><br>
    <b>Percentage : </b>".(($s1+$s2+$s3+$s4+$s5)/5);
    

   }


?>
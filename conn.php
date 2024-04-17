<?php

$conn = mysqli_connect('localhost','root','');
$db = mysqli_select_db($conn, "csdldb");


$get_sem = mysqli_query($conn,"SELECT * FROM semester");
while($sem = mysqli_fetch_object($get_sem)){
    $semester = $sem->semester;
    $school_year = $sem->school_year;
}
?>
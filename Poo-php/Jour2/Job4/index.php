<?php
require_once("./models/Student.php");

$student = new Student("John", "Doe", 145, "");
$student->add_credits(10);
$student->add_credits(10);
$student->add_credits(10);
echo $student->studentInfo();
?>
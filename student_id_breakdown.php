<!DOCTYPE html>
<html>
<body>

<?php

$inputStdId = "2018200010049";

function printYear($input) {
    $year = substr($input, 0, 4);
    echo "$year => Year";
    echo PHP_EOL;
}

function printSemester($input) {
    $semester = substr($input, 4, 1);
    if($semester == 0) echo "$semester => Spring";
    else if($semester == 1) echo "$semester => Summer";
    else if($semester == 2) echo "$semester => Fall";
    
    echo PHP_EOL;
}

function printInstitute($input) {
    $ins = substr($input, 5, 2);
    if($ins == '00') echo "$ins => School of Science and Engineering";
    echo PHP_EOL;
}

function printProgram($input) {
    $program = substr($input, 7, 2);
    if($program == '00') echo "$program => Bsc in CSE (Regular)";
    else if($program == '01') echo "$program => Bsc in CSE (Diploma)";
    else if($program == '02') echo "$program => Bsc in CSE (Weekend)";
    
    echo PHP_EOL;
}

function printDepartment($input) {
    $dep = substr($input, 9, 1);
    if($dep == '0') echo "$dep => Department of CSE";
    echo PHP_EOL;
}

function printStudentId($input) {
    $stdId = substr($input, 10, 3);
    echo "$stdId => Student ID";
    echo PHP_EOL;
}

printYear($inputStdId);
echo "<br>";
printSemester($inputStdId);
echo "<br>";
printInstitute($inputStdId);
echo "<br>";
printProgram($inputStdId);
echo "<br>";
printDepartment($inputStdId);
echo "<br>";
printStudentId($inputStdId);
echo "<br>";


?>

</body>
</html>

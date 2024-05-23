<?php
$jsonFile = 'students.json';

$jsonData = file_get_contents($jsonFile);

$students = json_decode($jsonData, true);

if(isset($_GET['sid'])) {
    $requestedSid = $_GET['sid'];
    $requestedStudent = null;
    foreach($students as $student) {
        if($student['sid'] === $requestedSid) {
            $requestedStudent = $student;
            break;
        }
    }
    if($requestedStudent !== null) {
        echo '<div class="container">';
        echo '<div class="table-responsive">';
        echo '<table class="table table-bordered table-striped">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>SID</th>';
        echo '<th>Name</th>';
        echo '<th>Age</th>';
        echo '<th>Address</th>';
        echo '<th>CGPA</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        echo '<tr>';
        echo '<td>'.$requestedStudent['sid'].'</td>';
        echo '<td>'.$requestedStudent['name'].'</td>';
        echo '<td>'.$requestedStudent['age'].'</td>';
        echo '<td>'.$requestedStudent['address'].'</td>';
        echo '<td>'.$requestedStudent['cgpa'].'</td>';
        echo '</tr>';
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
        echo '</div>';
    } else {
        echo 'Student not found';
    }
} else {
    echo '<div class="container">';
    echo '<div class="table-responsive">';
    echo '<table class="table table-bordered table-striped">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>SID</th>';
    echo '<th>Name</th>';
    echo '<th>Age</th>';
    echo '<th>Address</th>';
    echo '<th>CGPA</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    foreach($students as $student) {
        echo '<tr>';
        echo '<td>'.$student['sid'].'</td>';
        echo '<td>'.$student['name'].'</td>';
        echo '<td>'.$student['age'].'</td>';
        echo '<td>'.$student['address'].'</td>';
        echo '<td>'.$student['cgpa'].'</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
    echo '</div>';
    echo '</div>';
}
?>

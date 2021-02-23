<?php
require_once("database.php");

//Prepare command to be executed
$stmt = $conn->prepare("SELECT * FROM contactform");

//Execute command
$stmt->execute();

//Get all data
$result = $stmt->fetchAll();

//Write out data and put it into a table
$dataTable = "
<div class='container'>
    <table class='table'>
        <tr>
            <th>Name</th>
            <th>E-mail</th>
            <th>Message</th>
            <th>Admin</th>
        </tr>
    </div>";

foreach ($result as $key => $value) {

    $id = $value['id'];

    $dataTable .= "<tr>
            <td>$value[name]</td>
            <td>$value[email]</td>
            <td>$value[message]</td>
            <td><a href='remove.php?id=$value[id]'>Remove</a></td></tr>";
}

$dataTable .= "</table>";

echo $dataTable;

echo "<div class='container'><a href='remove.php?id=all' style='color: red'><h3>Remove All</h3></a></div>";

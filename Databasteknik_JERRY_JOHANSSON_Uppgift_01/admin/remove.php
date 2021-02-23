<?php
require_once("../database.php");
require_once("admin.php");


$id = htmlspecialchars($_GET['id']);

echo "<h2>Remove</h2>";

if ($id == "all") {
    $sql = "DELETE FROM contacts";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
} else {
    $sql = "DELETE FROM contacts WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $stmt->rowCount();
}

$refresh = $_SERVER['PHP_SELF'];
header("Location: " . basename("admin.php"));

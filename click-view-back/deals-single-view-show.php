<?php
include "config.php";
$id = $_GET["id"];
 $sql_query = "SELECT * FROM `user_deals_768` WHERE id = ?";
 $stmt = $conn->prepare($sql_query);
 $stmt->bind_param("s", $id);
 $stmt->execute();
 $result = $stmt->get_result();
 $row = $result->fetch_assoc();
?>
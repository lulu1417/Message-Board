<?php
session_start();
include "db.php";

$name = $_SESSION['username'];
$subject = $_POST["subject"];
$content = $_POST["content"];
$now = date('Y-m-d H:i:s');

$sql = "INSERT guestbook(name, subject, content, time) VALUES ('$name', '$subject', '$content', '$now')";

if (!mysqli_query($db, $sql)) {
	die(mysqli_error());
} else {
	echo "Syntax";
	header("location:view.php");

}

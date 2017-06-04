<?php
restrictPageForGuest();
$user = $_SESSION['username'];
$sql = "SELECT * FROM users WHERE username='$user'";
$query = mysqli_query($mysqli, $sql);
$result = mysqli_fetch_array($query,MYSQLI_ASSOC);

$templateParser->assign('naam',$result['fullname']);
$templateParser->assign('username',$result['username']);
$templateParser->assign('email',$result['email']);
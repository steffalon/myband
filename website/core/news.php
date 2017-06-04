<?php

$result_list = array();
//add model for articles

$sql = "SELECT * FROM article ORDER BY date DESC LIMIT 3";

$result = $mysqli->query($sql);
while ($item = $result->fetch_assoc()) {
    $result_list[] = $item;
}

$templateParser->assign('result_list',$result_list);
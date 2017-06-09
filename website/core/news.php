<?php

$i = 0;
$page = 3;

if (isset($_GET['morePage'])) {
    if (isset($_GET['backTo'])) {
        if ($_GET['morePage'] != 3) {
            $page = $_GET['morePage'];
            $page -= 3;
            $i = $page - 3;
        }
    } else {
        $page = $_GET['morePage'];
        $page += 3;
        $i = $page - 3;
    }
}

$result_list = array();
//add model for articles

$sql = "SELECT * FROM article ORDER BY date DESC LIMIT $i, $page";

$result = $mysqli->query($sql);
while ($item = $result->fetch_assoc()) {
    $result_list[] = $item;
}

$templateParser->assign('result_list',$result_list);

$templateParser->assign('nextPage',$page);
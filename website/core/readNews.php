<?php

//add model for articles

$id = $_GET['id'];

if (!empty($id)) {
    $sql = "SELECT * FROM article WHERE id='$id'";
    $query = mysqli_query($mysqli, $sql);
    if(mysqli_num_rows($query) == 0) {
        echo '<script type="text/javascript">window.location.replace("?page=404");</script>';
    }
    $result = mysqli_fetch_array($query,MYSQLI_ASSOC);
    $templateParser->assign('title',$result['title']);
    $templateParser->assign('description',$result['description']);
    $templateParser->assign('photo',$result['photo']);
    $templateParser->assign('date',$result['date']);
    $templateParser->assign('id',$result['id']);
} else {
    echo '<script type="text/javascript">window.location.replace("?page=404");</script>';
}
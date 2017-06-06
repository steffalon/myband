<?php
define('DB_HOST','localhost');
define('DB_NAME','dcartek');
define('DB_USERNAME','root');
define('DB_PASSWORD','root');


$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME );
if($mysqli->errno) {
    echo 'Error : ' . $mysqli->connect_error();
}


$result_list = array();


$sql = "SELECT * FROM events";

$result = $mysqli->query($sql);
while ($item = $result->fetch_assoc()) {
    $result_list[] = $item;
}


$page = $_GET['page'];

function getPage($p, $result) {
    echo "[";
    for ($i=$p; $i<($p+1); $i++) {
        if (!empty($result[$i])) {
            if ($i == ($p)) {
                echo json_encode($result[$i], JSON_PRETTY_PRINT);
            } else {
                echo json_encode($result[$i], JSON_PRETTY_PRINT), ",";
            }
        }
    }
    echo "]";
}

getPage($page, $result_list);


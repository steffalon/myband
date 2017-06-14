<?php

if (isset($_POST['save'])) {
    $sql = "SELECT * FROM users WHERE '$user'=username";
    $query = mysqli_query($mysqli, $sql);
    $result = mysqli_fetch_array($query, MYSQLI_ASSOC);
    if (!empty($_POST['username'])) {
        $username = $_POST['username'];
        if ($result['username'] != $username) {
            $sql = "UPDATE users SET username = '$username' WHERE username = '$user'";
            $query = mysqli_query($mysqli, $sql);
            $_SESSION['username'] = $username;
            $user = $_SESSION['username'];
        }
    }
    if (!empty($_POST['password']) && !empty($_POST['password2']) && $_POST['password'] == $_POST['password2']) {
        $password = $_POST['password'];
        $password = openssl_digest($password, 'sha512');
        $sql = "UPDATE users SET password = '$password' WHERE username = '$user'";
        $query = mysqli_query($mysqli, $sql);
    }
    echo '<script type="text/javascript">window.location.replace("?page=dashboard&setting=complete");</script>';
}
<?php
if (isset($_SESSION['username'])) {
    $user_check=$_SESSION['username'];
}

if (!empty($user_check)) {
    $templateParser->assign('navBarLogout',true);
} else {
    $templateParser->assign('navBarLogout',false);
}

if (isset($_GET['logout'])) {
    $_SESSION = array();

    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    session_destroy();
    echo '<script type="text/javascript">window.location.replace("?page=home?logout=done");</script>';
}

function restrictPagePreventWhileLoggedIn() {
    if (isset($_SESSION['username'])) {
        echo '<script type="text/javascript">window.location.replace("?page=home");</script>';
    }
}

function restrictPageForGuest() {
    if (!isset($_SESSION['username'])) {
        echo '<script type="text/javascript">window.location.replace("?page=home");</script>';
    }
}
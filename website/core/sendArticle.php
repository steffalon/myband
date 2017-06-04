<?php

$error = null;
if (isset($_POST['send'])) {
    $title = $_POST['title'];
    $message = $_POST['msg'];
    if (empty($title) || empty($message) || empty($_FILES['fileToUpload'])) {
        echo '<script type="text/javascript">window.location.replace("?page=dashboard&error=allFields");</script>';
    } else {
        if ($_FILES['fileToUpload']) {
            function generateRandomString($length = 50)
            { // function that creates a random string.
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $charactersLength = strlen($characters);
                $randomString = '';
                for ($i = 0; $i < $length; $i++) {
                    $randomString .= $characters[rand(0, $charactersLength - 1)];
                }
                return $randomString;
            }
            $setcode = generateRandomString();

            $file_name = $_FILES['fileToUpload']['name'];
            $file_size = $_FILES['fileToUpload']['size'];
            $file_tmp = $_FILES['fileToUpload']['tmp_name'];
            $file_type = $_FILES['fileToUpload']['type'];
            $file_ext = strtolower(end(explode('.', $_FILES['fileToUpload']['name'])));

            $expensions = array("jpeg", "jpg", "png");

            if (in_array($file_ext, $expensions) === false) {
                $error = "extension not allowed, please choose a JPG, JPEG, PNG file.";
                echo '<script type="text/javascript">window.location.replace("?page=dashboard&send=extensionFailed");</script>';
            }

            if ($file_size > 15097152) {
                echo '<script type="text/javascript">window.location.replace("?page=dashboard&send=overSized");</script>';
            }

            if (empty($error) == true) {
                $setcode = $setcode . '.' . $file_ext;

                $sql = "SELECT * FROM article WHERE photo = '$setcode'";
                $query = mysqli_query($mysqli, $sql);

                if(mysqli_num_rows($query) > 0) {
                    while (mysqli_num_rows($query) == 0) {
                        $setcode = generateRandomString();
                        $setcode = $setcode . '.' . $file_ext;
                        $query = mysqli_query($mysqli, $sql);
                    }
                }

                move_uploaded_file($file_tmp, "img/articlePhotos/" . $setcode);
                $sql = "INSERT INTO article (title, description, photo)
                VALUES ('$title', '$message', '$setcode')";
                $complete = mysqli_query($mysqli, $sql);
                echo '<script type="text/javascript">window.location.replace("?page=dashboard&send=done");</script>';
            }
        } else {
            echo '<script type="text/javascript">window.location.replace("?page=dashboard&send=failed");</script>';
        }
    }
}
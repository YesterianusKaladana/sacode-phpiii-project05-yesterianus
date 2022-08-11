<?php
if (isset($_POST['email'])) {
    //membuat variabel
    $alamat__email = $_POST['email'];
    if ($_POST['kata-sandi'] == '123') {
        echo "Welcome" . $alamat__email;
    }
} else {
    echo "Password atau email salah";
}

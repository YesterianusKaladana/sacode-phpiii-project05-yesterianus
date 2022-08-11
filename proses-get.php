<?php

//echo $_POST['email'];
//echo "<br>";
//echo $_POST['name'];
/*
    Fungsi isset() memeriksa apakah suatu
     variabel disetel.
     yang berarti variabel tersebut harus 
     dideklarasikan dan bukan NULL
     */

if (isset($_GET['email'])) {
    //Membuat Variabel
    $alamat_email = $_GET['email'];
    $name = $_GET['name'];

    // Menampilakan nilai variabel ke layar
    echo $alamat_email;
    echo "<br>";
    echo $name;
}

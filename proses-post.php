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

if (isset($_POST['email'])) {
    //Membuat Variabel
    $alamat_email = $_POST['email'];
    $name = $_POST['name'];

    // Menampilakan nilai variabel ke layar
    echo $alamat_email;
    echo "<br>";
    echo $name;
}

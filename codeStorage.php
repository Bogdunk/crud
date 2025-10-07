<?php
//NOTA @bogdan, acest fisier are rol de storage de cod, in tutorialul pe care il urmaresc nu stiu ce se face in acest moment
//cu codul acesta care a fost sters si pentru a nu ma munci degeaba imi colectez aici codul, putin ciudat, doar folosesc
//github =))
include "db_conn.php";
if (!isset($conn)) die('Conn missing after include');

if( isset($_POST['submit']) ){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO `crud`(`id`, `first_name`, `last_name`, `email`, `gender`) VALUES ('NULL','$first_name','$last_name','$email','$gender')";

    $result = mysqli_query( $conn, $sql);
    if( $result ){
        header('Location: index.php?msg=New record created successfully');
    }
    else {
        echo "Failed: " . mysqli_error($conn);
    }
}

?>
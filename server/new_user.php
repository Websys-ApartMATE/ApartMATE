<?php


function connect_database()
{
    $conn = new mysqli("localhost", "test", "kuzmin", "ApartMATE");
    if ($conn->connect_errno) {
        echo $conn->connect_error;
        return 0;
    }
    return $conn;
}

$conn = connect_database();

function new_user()
{
    $user = mysqli->escape_string($_POST['new_user']);
}

if ($conn) {
    echo "Connection Successful";
}

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

function new_user()
{
    $hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $new_user_state = mysqli->prepare("INSERT INTO users (email, password, full_name, phone_number) VALUES (?, ?, ?, ?)");
    $new_user_state->bind_param("ssssss", $_POST["email"], hash, $_POST["full_name"], $_POST["phone_number"]);
    $new_user_state->execute();
}

$conn = connect_database();


if ($conn) {
    echo "Connection Successful";
}

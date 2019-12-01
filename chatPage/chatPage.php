<!DOCTYPE html>
<?php

$con = new mysqli("localhost", 'test', 'kuzmin', 'ApartMATE');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $msg_to = $_POST['msg_to'];
    $msg_from = $_POST['msg_from'];
    $contents = $_POST['contents'];
    $post_query = "INSERT INTO chat (msg_to, msg_from, contents) VALUES ($msg_to, $msg_from, $contents)";
    $con->query($post_query);

}

$user_id = 1;

$query = "SELECT timestamp, msg_to, msg_from, u.full_name, u2.full_name, contents FROM chat
INNER JOIN users u on chat.msg_to = u.user_id
INNER JOIN users u2 on chat.msg_from = u2.user_id 
WHERE u.user_id = $user_id or u2.user_id = $user_id";

$result = $con->query($query);
$data = $result->fetch_all(MYSQLI_ASSOC);
$con->close();

function render_message($user_id, $data)
{
$datetime = new DateTime($data['timestamp']);
if ($data['msg_to'] == $user_id) {
?>
<div class="incomingMessage <?php echo "id-" . $data['msg_from'] ?>">
    <div class="incomingMessageImage"><img src="https://ptetutorials.com/images/user-profile.png" alt="sunil">
    </div>
    <div class="receivedMessage">
        <div class="receivedWithinMessage">
            <p><?php echo $data['contents']; ?></p>
            <span class="messageTimeDate"> <?php echo $datetime->format("g:h A") . ' | ' . $datetime->format("F j"); ?></span>
        </div>
    </div>
</div>
<?php
} else if ($data['msg_from'] == $user_id) {
    ?>
    <div class="outgoingMessage <?php echo "id-" . $data['msg_to'] ?>">
        <div class="sentMessage">
            <p><?php echo $data['contents']; ?></p>
            <span class="messageTimeDate"> <?php echo $datetime->format("g:h A") . ' | ' . $datetime->format("F j"); ?></span>
        </div>
    </div>
    <?php
}

}


?>
<html>
<head>
    <title>chatPage</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="chatPage.css" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="chatPage.js"></script>
</head>
<body>
<!--Navigation Bar--------------------------------------------------------------------------------------->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img id="piclogo" src="logo.png" alt="ApartMATE logo"/></a>
    <button class="navbar-light navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse navbar-light" id="collapsibleNavbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Rent</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Add a Listing</a>
            </li>
        </ul>
        <button type="button" class="btn btn-outline-secondary"
                onclick="window.location.href='../homePage/homePage.html'"
        ">Sign Out</button>
    </div>
</nav>

<!--Message Box--------------------------------------------------------------------------------------->
<div class="container">
    <h3 class=" text-center">Messaging</h3>
    <div class="messaging">
        <div class="inboxMsg">
            <div class="inboxPeople">
                <div class="inboxChat">
                    <?php $listOfConv = array();
                    for ($i = 0; $i < count($data); $i++) {
                        if (!in_array($data[$i]['msg_to'], $listOfConv) && !in_array($data[$i]['msg_from'], $listOfConv)) {
                            if ($data[$i]['msg_to'] != $user_id) {
                                array_push($listOfConv, $data[$i]['msg_to']);
                                $conversation_id = $data[$i]['msg_to'];
                            } else if ($data[$i]['msg_from'] != $user_id) {
                                array_push($listOfConv, $data[$i]['msg_from']);
                                $conversation_id = $data[$i]['msg_from'];
                            }
                            ?>
                            <div class="chatList <?php echo "conv-" . $conversation_id ?>">
                                <div class="chatPeople">
                                    <div class="chatImg"><img src="https://ptetutorials.com/images/user-profile.png"
                                                              alt="sunil"></div>
                                    <div class="chatIb">
                                        <h5> <?php echo $data[$i]['full_name'] ?> </h5>
                                        <p> Hello, you may come and visit the apartment tomorrow at noon .</p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="messageBox">
                <div class="messageHistory">
                    <?php
                    for ($i = 0; $i < $result->num_rows; $i++) {
                        render_message($user_id, $data[$i]);
                    }
                    ?>
                </div>
                <div class="typeMessage">
                    <div class="inputTypeMessage">
                        <input type="text" class="writeMessage" placeholder="Type a message"/>
                        <button class="messageSendBtn" type="button"><i class="fa fa-paper-plane-o"
                                                                        aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
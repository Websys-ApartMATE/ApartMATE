<!DOCTYPE html>
<html>
	<head>
		<title>chatPage</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="chatPage.css" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<!--Font awesome icons-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	</head>
	<body>
		<!--Navigation Bar--------------------------------------------->
		<?php include('../navBar/navBar.php')?>

		<!--Message Box--------------------------------------------------------------------------------------->
		<div class="container">
			<h3 class=" text-center">Messaging</h3>
			<div class="messaging">
				<div class="inboxMsg">
					<div class="inboxPeople">
						<div class="inboxChat">
							<div class="chatList activeChat">
								<div class="chatPeople">
									<div class="chatImg"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
									<div class="chatIb">
										<h5>Pete Robinson</h5>
										<p>Hello, you may come and visit the apartment tomorrow at noon.</p>
									</div>
								</div>
							</div>
							<div class="chatList">
								<div class="chatPeople">
									<div class="chatImg"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
									<div class="chatIb">
										<h5>Mary Tedisco</h5>
										<p>Rent is $500/month.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="messageBox">
						<div class="messageHistory">
							<div class="incomingMessage">
								<div class="incomingMessageImage"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
								<div class="receivedMessage">
									<div class="receivedWithinMessage">
										<p>The apartment will be available on June 10th.</p>
										<span class="messageTimeDate"> 11:01 AM    |    June 9</span></div>
								</div>
							</div>
							<div class="outgoingMessage">
								<div class="sentMessage">
									<p>Thank you! When can I meet with you to discuss the contract?</p>
									<span class="messageTimeDate"> 11:01 AM    |    June 9</span> </div>
							</div>
							<div class="incomingMessage">
								<div class="incomingMessageImage"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
								<div class="receivedMessage">
									<div class="receivedWithinMessage">
										<p>I can meet with you tomorrow at 3pm</p>
										<span class="messageTimeDate"> 11:01 AM    |    Yesterday</span></div>
								</div>
							</div>
						</div>
						<div class="typeMessage">
							<div class="inputTypeMessage">
								<input type="text" class="writeMessage" placeholder="Type a message" />
								<button class="messageSendBtn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
							</div>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</body>
</html>
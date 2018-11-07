<?php
    include("Includes/config.php");

    // LOGOUT
    // session_destroy();

    if(isset($_SESSION['userLoggedIn'])) {
        $userLoggedIn = $_SESSION['userLoggedIn'];
    }
    else {
        header("Location: register.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Spotify: Music for everyone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css" />
    <!-- <script src="main.js"></script> -->
</head>
<body>
    <div id="nowPlayingBarContainer">
        <div id="nowPlayingBar">
            <div id="nowPlayingLeft">

            </div>
            <div id="nowPlayingCenter">
                <div class="content playerControls">
                    <div class="buttons">
                        <button class="controlButton shuffle" title="Shuffle">
                            <img src="assets/images/Icons/shuffle.png" alt="Shuffle">
                        </button>
                        <button class="controlButton previous" title="Previous">
                            <img src="assets/images/Icons/previous.png" alt="Previous">
                        </button>
                        <button class="controlButton play" title="Play">
                            <img src="assets/images/Icons/play.png" alt="Play">
                        </button>
                        <button class="controlButton pause" title="Pause">
                            <img src="assets/images/Icons/pause.png" alt="Pause">
                        </button>
                        <button class="controlButton next" title="Next">
                            <img src="assets/images/Icons/next.png" alt="Next">
                        </button>
                        <button class="controlButton repeat" title="Repeat">
                            <img src="assets/images/Icons/repeat.png" alt="Repeat">
                        </button>
                    </div>
                </div>
            </div>
            <div id="nowPlayingRight">

            </div>
        </div>
    </div>
</body>
</html>
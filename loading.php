<?php
$development_mode = true;
$server_name = ($development_mode) ? "Example SteamID" :  $_GET["steamid"] || "Eample SteamID";
$server_map = ($development_mode) ? "Example Mapname" : $_GET["mapname"] || "Example Mapname";
$user_steamid = ($development_mode) ? "Example SteamID" :  $_GET["steamid"] || "Eample SteamID";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,600;1,400&display=swap');

        * {
            margin: 0;
            padding: 0;
            font-family: 'Rubik', sans-serif;
        }

        body {
            background: url("./assets/litteraly-a-tree.jpg") no-repeat center center fixed;
            background-size: cover;
        }

        .content {
            position: absolute;
            width: 100vw;
            height: 100vh;

            background: rgb(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
            color: white;
            padding: 2.5rem;
            box-sizing: border-box;
        }

        .content #server_name {
            font-weight: 600;
            font-size: 2.5rem;
        }

        .content .welcome_to {
            font-weight: 500;
            font-size: 1.25rem;
        }

        .content .server_user_details span {
            font-style: italic;
        }

        strong {
            font-weight: 600;
            font-style: normal;
        }
    </style>

</head>

<body>
    <div class="content">
        <p class="welcome_to">Welcome to...</p>
        <h1 id="server_name">Server Name</h1>
        <p class="server_user_details"><strong>SteamID:</strong> <span><?php echo $user_steamid; ?></span>, <strong>Map:</strong> <span><?php echo $server_map; ?></span></p>
    </div>
    <script>
        function setName(n) {
            let node = document.getElementById("server_name");
            node.innerText = n;
        }

        function GameDetails(servername, serverurl, mapname, maxplayers, steamid, gamemode, volume, language) {
            setName(n)
        }
    </script>
</body>

</html>

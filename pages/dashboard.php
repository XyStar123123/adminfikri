<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="website icon" href="../img/icon.png">
    <title>Admin Panel - Dashboard</title>
    <style>
        * {
            margin: 0;
            font-family: ui-sans-serif, sans-serif;
            /* overflow: hidden; */
        }
        .sidebar {
            margin-left: 0px;
            width: 195px;
            border-right: 1px solid rgba(59, 118, 209, .5);
            height: 100vh;
            padding: 20px;
        }
        .icon {
            display: flex;
            width: 5rem;
        }
        .logo-container {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        #admin {
            color: black;
            text-decoration: none;
            font-size: 1.2rem;
            font-weight: bold;
            transition: color 2s ease;
        }
        #adminSpan {
            color: #3b76d1;
            font-weight: bolder;
            transition: color 1.1s ease;
        }

        #admin:hover {
            color:  #3b76d1;
        }
        #admin:hover #adminSpan {
            color: black;
        }
        nav {
            margin-top: 20px;
        }
        .nav_a {
            display: block;
            padding: 10px 10px;
            text-decoration: none;
            font-size: 1rem;
            color: #6b7280;
            font-weight: bold;
            transition: all .4s ease;
            margin-top: 10px;
            /* border: 1px solid black; */
        }
        .nav_a:hover {
            color: black;
            box-shadow: 0 2px 6px rgba(0, 0, 0, .2);
        }

        .nav_a:active {
            box-shadow: inset 0 2px 6px rgba(0, 0, 0, .2);
        }

        footer {
            background-color: green;
            margin: 0;
        }
        main {
            padding: 10px;
            background-color: #f5f7fb;
        }
    </style>
</head>
<body>
    <div style="display: flex;">
    <aside class="sidebar">
        <div class="logo-container">
            <img src="../img/icon.png" class="icon" style="width: 60px;">
            <a href="about.php" id="admin">Admin<span id="adminSpan">Panel<span></a>
        </div>
        <nav>
            <a href="#" class="nav_a">Dashboard</a>
            <a href="#" class="nav_a">Tables</a>
            <a href="#" class="nav_a">Settings</a>
            <a href="about.php" class="nav_a">About</a>
            <a href="contact.php" class="nav_a">Contact</a>
        </nav>
    </aside>
    <main>
        <iframe id="13996405" allowtransparency="true" frameborder="0" style="height: 70vh; width: 100%; border:none;" src="https://www.chess.com/emboard?id=13996405"></iframe><script nonce="chesscom-diagram">window.addEventListener("message",e=>{e['data']&&"13996405"===e['data']['id']&&document.getElementById(`${e['data']['id']}`)&&(document.getElementById(`${e['data']['id']}`).style.height=`${e['data']['frameHeight']+37}px`)});</script>
        <iframe id="13996417" allowtransparency="true" frameborder="0" style="height: 70vh; width: 100%; border:none;" src="https://www.chess.com/emboard?id=13996417"></iframe><script nonce="chesscom-diagram">window.addEventListener("message",e=>{e['data']&&"13996417"===e['data']['id']&&document.getElementById(`${e['data']['id']}`)&&(document.getElementById(`${e['data']['id']}`).style.height=`${e['data']['frameHeight']+37}px`)});</script>
        <iframe id="13996455" allowtransparency="true" frameborder="0" style="height: 70vh; width: 100%; border:none;" src="https://www.chess.com/emboard?id=13996455"></iframe><script nonce="chesscom-diagram">window.addEventListener("message",e=>{e['data']&&"13996455"===e['data']['id']&&document.getElementById(`${e['data']['id']}`)&&(document.getElementById(`${e['data']['id']}`).style.height=`${e['data']['frameHeight']+37}px`)});</script>
    </main>
    </div>
</body>
</html>
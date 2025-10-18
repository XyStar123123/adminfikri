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
            overflow: hidden;
        }
        .sidebar {
            margin-left: 8px;
            width: 300px;
            border-right: 1px solid rgba(0,0,0,0.05);
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
            font-size: 1.7rem;
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
        .nav_a {
            display: block;
            padding: 10px 10px;
            text-decoration: none;
            font-size: 1.2rem;
            color: #6b7280;
            font-weight: bold;
            transition: all .4s ease;
        }
        .nav_a:hover {
            color: black;
        }

        footer {
            background-color: green;
            margin: 0;
        }
    </style>
</head>
<body>
    <div style="display: flex;">
    <aside class="sidebar">
        <div class="logo-container">
            <img src="../img/icon.png" class="icon">
            <a href="about.php" id="admin">Admin<span id="adminSpan">Panel<span></a>
        </div>
        <nav>
            <a href="#" class="nav_a">Dashboard</a>
            <a href="#" class="nav_a">Tables</a>
            <a href="#" class="nav_a">Settings</a>
            <a href="about.php" class="nav_a">About</a>
        </nav>
    </aside>
    <main>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe sunt fugit maiores, sint tempora, eligendi maxime sit harum, delectus non quis laudantium velit vel ipsam! Cupiditate debitis fugit facilis id sunt quia nisi fugiat provident ea impedit voluptatibus sequi, odit deleniti neque harum ut tenetur? Error blanditiis dolorum quaerat. Soluta unde, accusamus voluptates temporibus et, reiciendis impedit facilis sequi sed officia quam, quasi vitae maiores velit facere iure eligendi eaque? Nihil ex vel quaerat harum quia laboriosam voluptates quos modi ab voluptatem odit, placeat, ea, ipsam dignissimos atque doloremque temporibus unde quae minima possimus distinctio esse. Necessitatibus obcaecati quod quo?</p>
    </main>
    </div>
</body>
</html>
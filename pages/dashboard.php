<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="website icon" href="../img/icon.png">
    <title>Admin Panel - Dashboard</title>
    <style>
        .sidebar {
            width: 300px;
            border-right: 1px solid rgba(0,0,0,0.05);
            padding: 15px;
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
        }
        #adminSpan {
            color: #3b76d1;
            font-weight: bolder;
        }

        #admin:hover {
            color:  #3b76d1;
            transition: color 2s ease;    
        }
        #admin:hover #adminSpan {
            color: black;
            transition: color 1.1s ease;
        }
    </style>
</head>
<body>
    <aside class="sidebar">
        <div class="logo-container">
            <img src="../img/icon.png" class="icon">
            <a href="about.php" id="admin">Admin<span id="adminSpan">Panel<span></a>
        </div>
        <nav>
            <ul>
                <li>Dashboard</li>
                <li>About</li>
            </ul>
        </nav>
        <button>Dark Mode</button>
    </aside>
    <footer>

    </footer>
</body>
</html>
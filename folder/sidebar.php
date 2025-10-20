    <div style="display: flex;">
    <aside class="sidebar">
        <div class="logo-container">
            <img src="../img/icon.png" class="icon" style="width: 60px;">
            <a href="about.php" id="admin">Admin<span id="adminSpan">Panel<span></a>
        </div>
        <nav class="sidebar-link-container">
            <div>
                <div class="link-header">
                    <p>PAGES</p>
                    <hr>
                </div>
                <a href="../pages/dashboard.php" class="side-link <?= basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'side-active' : '' ?>">Dashboard</a>
                <a href="../pages/settings.php" class="side-link <?= basename($_SERVER['PHP_SELF']) == 'settings.php' ? 'side-active' : '' ?>">Settings</a>
                <a href="../pages/about.php" class="side-link <?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'side-active' : '' ?>">About</a>
                <a href="../pages/contact.php" class="side-link <?= basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'side-active' : '' ?>">Contact</a>
            </div>
        </nav>

        <nav class="sidebar-link-container">
            <div>
                <div class="link-header">
                    <p>TABLES</p>
                    <hr>
                </div>
                <a href="../pages/dashboard.php" class="side-link <?= basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'side-active' : '' ?>">Users</a>
                <a href="../pages/settings.php" class="side-link <?= basename($_SERVER['PHP_SELF']) == 'settings.php' ? 'side-active' : '' ?>">Product</a>
            </div>
        </nav>
    </aside>
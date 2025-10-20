    <div style="display: flex;">
    <aside class="sidebar">
        <div class="logo-container">
            <img src="../img/icon.png" class="icon" style="width: 60px;">
            <a href="about.php" id="admin">Admin<span id="adminSpan">Panel<span></a>
        </div>
        <nav class="sidebar-link-container">
            <a href="../pages/dashboard.php" class="side-link <?= basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'side-active' : '' ?>">Dashboard</a>
            <a href="#" class="side-link <?= basename($_SERVER['PHP_SELF']) == 'tables.php' ? 'side-active' : '' ?>">Tables</a>
            <a href="../pages/settings.php" class="side-link <?= basename($_SERVER['PHP_SELF']) == 'settings.php' ? 'side-active' : '' ?>">Settings</a>
            <a href="../pages/about.php" class="side-link <?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'side-active' : '' ?>">About</a>
            <a href="../pages/contact.php" class="side-link <?= basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'side-active' : '' ?>">Contact</a>
        </nav>
    </aside>
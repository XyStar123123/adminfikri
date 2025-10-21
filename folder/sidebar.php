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
                <a href="../pages/dashboard.php" class="side-link <?= basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'side-active' : '' ?>">
                    <i data-lucide="home" class="side-icon"></i>
                    <span class="side-span">Dashboard</span>
                </a>
                <a href="../pages/settings.php" class="side-link <?= basename($_SERVER['PHP_SELF']) == 'settings.php' ? 'side-active' : '' ?>">
                    <i data-lucide="user-square" class="side-icon"></i>
                    <span class="side-span">Profile</span>
                </a>
                <a href="../pages/about.php" class="side-link <?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'side-active' : '' ?>">
                    <i data-lucide="info" class="side-icon"></i>
                    <span class="side-span">About</span>
                </a>
                <a href="../pages/contact.php" class="side-link <?= basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'side-active' : '' ?>">
                    <i data-lucide="phone" class="side-icon"></i>
                    <span class="side-span">Contact</span>
                </a>
            </div>
        </nav>

        <nav class="sidebar-link-container">
            <div>
                <div class="link-header">
                    <p>TABLES</p>
                    <hr>
                </div>
                <a href="../pages/users.php" class="side-link <?= basename($_SERVER['PHP_SELF']) == 'users.php' ? 'side-active' : '' ?>">
                    <i data-lucide="user" class="side-icon"></i>
                    <span class="side-span">Users</span>
                </a>
                <a href="../pages/product.php" class="side-link <?= basename($_SERVER['PHP_SELF']) == 'product.php' ? 'side-active' : '' ?>">
                    <i data-lucide="box" class="side-icon"></i>
                    <span class="side-span">Product</span>
                </a>
            </div>
        </nav>
    </aside>
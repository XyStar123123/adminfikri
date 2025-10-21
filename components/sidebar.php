    <aside class="sidebar">
        <div class="sidebar-header">
            <img src="../img/icon.png" class="sidebar-header-icon">
            <a href="about.php" class="sidebar-header-title">Admin<span class="sidebar-header-title-admin">Panel<span></a>
        </div>
        <nav class="sidebar-link-container">
            <div>
                <div class="side-link-header">
                    <p>PAGES</p>
                    <hr>
                </div>
                <a href="../pages/dashboard.php" class="side-link <?= basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'side-active' : '' ?>">
                    <i data-lucide="home" class="side-icon"></i>
                    <span class="side-span">Dashboard</span>
                </a>
                <a href="../pages/profile.php" class="side-link <?= basename($_SERVER['PHP_SELF']) == 'profile.php' ? 'side-active' : '' ?>">
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
                <div class="side-link-header">
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
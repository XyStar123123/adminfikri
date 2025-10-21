<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Profile</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="website icon" href="../img/icon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <?php include '../components/sidebar.php'; ?>
        <main class="content">
            <?php include_once '../components/navbar.php' ?>
            <div class="content-section">
                <div class="profile-container">
                    <section class="profile-header-section">
                        <div class="profile-image">
                            <i data-lucide="user"></i>
                        </div>
                        <div class="profile-information">
                            <p class="username">John Doe</p>
                            <p class="role">Admin</p>
                            <p class="joined-date">
                                <i data-lucide="calendar" class="joined-date-icon"></i>
                                Join Date: 26 September 2019
                            </p>
                        </div>
                    </section>
                    <form class="profile-body-section">
                        <div class="profile-form-section">
                            <input type="text" value="John Doe" class="form-input">
                            <input type="password" value="Halolasjnd" class="form-input">
                            <textarea placeholder="Halo saya adalah orang yang bisa membaca dan menulis" class="form-input"></textarea>
                        </div>
                        <div class="profile-submit-btn-section">
                            <button class="submit-btn" type="submit">
                                <i data-lucide="edit"></i>
                                Save Edit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
<script src="https://unpkg.com/lucide@latest"></script>
<script>
    lucide.createIcons()
</script>
<script src="../js/index.js" type="module"></script>
</body>
</html>
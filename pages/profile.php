            <?php require_once '../includes/header.php' ?>
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
            <?php require_once '../includes/footer.php' ?>
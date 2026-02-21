<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings — Admin Panel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class="page-settings" data-page="settings">
    <div class="app-background">
        <div class="dashboard-wrapper">
            <aside class="sidebar" id="sidebar">
                <div class="sidebar-inner">
                    <a href="dashboard.php" class="logo"><span class="logo-icon material-icons">fitness_center</span><span class="logo-text">FITULE</span></a>
                    <nav class="sidebar-nav">
                        <a href="dashboard.php" class="nav-item" data-page="dashboard"><span class="material-icons nav-icon">dashboard</span><span class="nav-label">Dashboard</span></a>
                        <a href="users.php" class="nav-item" data-page="users"><span class="material-icons nav-icon">people</span><span class="nav-label">Users</span></a>
                        <a href="workouts.php" class="nav-item" data-page="workouts"><span class="material-icons nav-icon">fitness_center</span><span class="nav-label">Workouts</span></a>
                        <a href="diet.php" class="nav-item" data-page="diet"><span class="material-icons nav-icon">restaurant</span><span class="nav-label">Diet</span></a>
                        <a href="trainers.php" class="nav-item" data-page="trainers"><span class="material-icons nav-icon">person</span><span class="nav-label">Trainers</span></a>
                        <a href="blog.php" class="nav-item" data-page="blog"><span class="material-icons nav-icon">article</span><span class="nav-label">Blog</span></a>
                        <a href="settings.php" class="nav-item" data-page="settings"><span class="material-icons nav-icon">settings</span><span class="nav-label">Settings</span></a>
                    </nav>
                    <div class="sidebar-bottom">
                        <a href="#" class="nav-item nav-logout"><span class="material-icons nav-icon">logout</span><span class="nav-label">Logout</span></a>
                    </div>
                </div>
            </aside>
            <div class="main-area">
                <header class="top-navbar">
                    <h1 class="navbar-page-title">Settings</h1>
                    <div class="navbar-right">
                        <button type="button" class="navbar-search" aria-label="Search"><span class="material-icons">search</span></button>
                        <div class="profile-trigger-wrap">
                            <button type="button" class="profile-trigger" id="profileTrigger" aria-expanded="false" aria-haspopup="true">
                                <img src="../assets/image/WhatsApp Image 2026-02-18 at 10.44.00 AM.jpeg" alt="Admin" class="profile-avatar">
                                <div class="profile-info"><span class="profile-name">Admin</span><span class="profile-role">Administrator</span></div>
                                <span class="material-icons profile-chevron">expand_more</span>
                            </button>
                            <div class="profile-dropdown" id="profileDropdown" aria-hidden="true">
                                <a href="#" class="dropdown-item"><span class="material-icons">person</span><span>Profile</span></a>
                                <a href="settings.php" class="dropdown-item"><span class="material-icons">settings</span><span>Settings</span></a>
                                <a href="#" class="dropdown-item"><span class="material-icons">logout</span><span>Logout</span></a>
                            </div>
                        </div>
                    </div>
                </header>
                <main class="main-content">
                    <div class="page-header"><h2 class="page-title">Settings</h2></div>
                    <section class="content-card settings-form-wrap">
                        <form class="settings-form" id="settingsForm">
                            <div class="form-group">
                                <label class="form-label" for="siteName">Site Name</label>
                                <input type="text" id="siteName" class="form-input" value="FITULE" placeholder="Site name">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="adminEmail">Admin Email</label>
                                <input type="email" id="adminEmail" class="form-input" value="admin@fitule.com" placeholder="Admin email">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="timezone">Timezone</label>
                                <select id="timezone" class="form-input form-select">
                                    <option value="UTC">UTC</option>
                                    <option value="America/New_York">Eastern</option>
                                    <option value="America/Los_Angeles">Pacific</option>
                                    <option value="Europe/London">London</option>
                                    <option value="Asia/Kolkata">India</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="notifications">Email Notifications</label>
                                <label class="form-check"><input type="checkbox" id="notifications" class="form-checkbox" checked> Enable email notifications</label>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary"><span class="material-icons">save</span> Save Settings</button>
                            </div>
                        </form>
                    </section>
                </main>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>
</html>

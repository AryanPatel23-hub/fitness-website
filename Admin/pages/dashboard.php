<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard — Admin Panel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="page-dashboard" data-page="dashboard">
    <div class="app-background">
        <div class="dashboard-wrapper">
            <aside class="sidebar" id="sidebar">
                <div class="sidebar-inner">
                    <a href="dashboard.php" class="logo">
                        <span class="logo-icon material-icons">fitness_center</span>
                        <span class="logo-text">FITULE</span>
                    </a>
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
                    <h1 class="navbar-page-title">Dashboard</h1>
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

                    <section class="stats-row">

                        <div class="stat-card">
                            <div class="stat-accent"></div>
                            <div class="stat-icon"><span class="material-icons">people</span></div>
                            <div class="stat-body"><span class="stat-title">Total Users</span><span class="stat-value">1,250</span><span class="stat-sublabel">Total Users</span></div>
                        </div>

                        <div class="stat-card">
                            <div class="stat-accent"></div>
                            <div class="stat-icon"><span class="material-icons">fitness_center</span></div>
                            <div class="stat-body"><span class="stat-title">Workout Plans</span><span class="stat-value">320</span><span class="stat-sublabel">Workout Plans</span></div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-accent"></div>
                            <div class="stat-icon"><span class="material-icons">restaurant</span></div>
                            <div class="stat-body"><span class="stat-title">Diet Plans</span><span class="stat-value">180</span><span class="stat-sublabel">Diet Plans</span></div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-accent"></div>
                            <div class="stat-icon"><span class="material-icons">article</span></div>
                            <div class="stat-body"><span class="stat-title">Blog Posts</span><span class="stat-value">85</span><span class="stat-sublabel">Blog Posts</span></div>
                        </div>
                    </section>
                    <section class="content-card recent-users-section">
                        <div class="section-header">
                            <h2 class="section-title">Recent Users</h2><button type="button" class="section-more" aria-label="More"><span class="material-icons">more_vert</span></button>
                        </div>
                        <div class="table-wrap">
                            <table class="data-table recent-users-table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Created At</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Sarah Johnson</td>
                                        <td>sarah.j@example.com</td>
                                        <td>Feb 15, 2025</td>
                                        <td><span class="badge badge-active">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Michael Chen</td>
                                        <td>michael.c@example.com</td>
                                        <td>Feb 14, 2025</td>
                                        <td><span class="badge badge-active">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Emma Wilson</td>
                                        <td>emma.w@example.com</td>
                                        <td>Feb 13, 2025</td>
                                        <td><span class="badge badge-inactive">Inactive</span></td>
                                    </tr>
                                    <tr>
                                        <td>James Brown</td>
                                        <td>james.b@example.com</td>
                                        <td>Feb 12, 2025</td>
                                        <td><span class="badge badge-active">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Olivia Davis</td>
                                        <td>olivia.d@example.com</td>
                                        <td>Feb 11, 2025</td>
                                        <td><span class="badge badge-inactive">Inactive</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </main>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>

</html>
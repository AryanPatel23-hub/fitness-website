<!DOCTYPE html>
<html>
<head>
<title>User Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/style.css">
</head>

<body>

<?php include 'includes/user_sidebar.php'; ?>

<div class="main-content">

<!-- Welcome Box -->
<div class="welcome-box">
    <div class="profile-mini">
        <img src="download.jpg">
        <div>
            <h5 class="mb-0">Hello, Dhruvi 👋</h5>
            <small class="text-muted">Let’s achieve your fitness goals today!</small>
        </div>
    </div>
    <a href="edit_profile.php" class="btn btn-success btn-sm">Edit Profile</a>
</div>

<div class="container-fluid">

    <!-- Stats Row -->
    <div class="row g-4 mb-4">

        <div class="col-md-3">
            <div class="dashboard-card text-center">
                <p class="text-muted">Workouts</p>
                <div class="stat-number text-success">12</div>
                <small>This Month</small>
            </div>
        </div>

        <div class="col-md-3">
            <div class="dashboard-card text-center">
                <p class="text-muted">BMI</p>
                <div class="stat-number text-primary">22.0</div>
                <small>Healthy</small>
            </div>
        </div>

        <div class="col-md-3">
            <div class="dashboard-card text-center">
                <p class="text-muted">Weight</p>
                <div class="stat-number text-danger">60 kg</div>
                <small>Current</small>
            </div>
        </div>

        <div class="col-md-3">
            <div class="dashboard-card text-center">
                <p class="text-muted">Membership</p>
                <div class="stat-number text-warning">Gold</div>
                <small>25 Days Left</small>
            </div>
        </div>

    </div>

    <!-- Workout + Diet -->
    <div class="row g-4">

        <div class="col-md-6">
            <div class="dashboard-card">
                <div class="section-title">Next Workout</div>
                <h5>Leg Day</h5>
                <br>
                <p class="text-muted">Tomorrow - 7:00 AM</p>

                <div class="progress mt-3">
                    <div class="progress-bar bg-success" style="width:80%">80%</div>
                </div>
                <br>
                <small class="text-muted">4/5 Days Completed</small>
                
            </div>
        </div>

        <div class="col-md-6">
            <div class="dashboard-card">
                <div class="section-title">Diet Plan</div>
                <p>🥗 Morning: Oats & Fruits</p>
                <p>🍛 Lunch: Brown Rice + Veg</p>
                <p>🥣 Evening: Green Tea</p>
                <p>🍲 Dinner: Soup + Salad</p>
            </div>
        </div>

        <div class="col-md-12">
            <div class="dashboard-card">
                <div class="section-title">Personalized Plan</div>
                <p>🔥 45 Min Cardio</p>
                <p>🏋 Strength Training</p>
                <p>🧘 10 Min Stretching</p>
            </div>
        </div>

    </div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php include 'includes/user_footer.php'; ?>

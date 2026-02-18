<!DOCTYPE html>
<html>
<head>
    <title>My Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

<?php include 'includes/user_sidebar.php'; ?>
<div class="main-content">
    <div class="topbar"><h2>My Profile</h2></div>

 <div class="container mt-4">

    <div class="card shadow p-4">

        <!-- ================= PROFILE SECTION ================= -->
        <div class="row">

            <!-- Profile Image -->
            <div class="col-md-4 text-center border-end">
                <img src="download.jpg" class="rounded-circle mb-3" width="160" height="160">
                <h4>Dhruvi Tala</h4>
                <p class="text-muted">Gold Member</p>
                <a href="edit_profile.php"class="btn btn-success btn-sm">Edit Profile</a>
            </div>

            <!-- Personal Info -->
            <div class="col-md-8">
                <h3 class="mb-3">Personal Information</h3>
                <hr>
                <div class="row mb-2">
                    <div class="col-md-6"><strong><h5>Age:</strong> 21</h5></div>
                    <div class="col-md-6"><strong><h5>Gender:</strong> Female</h5></div>
                </div>

                <div class="row mb-2">
                    <div class="col-md-6"><strong><h5>Email:</strong> dhruvi@gmail.com</h5></div>
                    <div class="col-md-6"><strong><h5>Phone:</strong> 9876543210</h5></div>
                </div>

                <div class="row mb-2">
                    <div class="col-md-6"><strong><h5>Height:</strong> 165 cm</h5></div>
                    <div class="col-md-6"><strong><h5>Weight:</strong> 60 kg</h5></div>
                </div>

                <div class="row mb-2">
                    <div class="col-md-6"><strong><h5>Goal:</strong> Weight Loss</h5></div>
                    <div class="col-md-6"><strong><h5>BMI:</strong> 22.0</h5></div>
                </div>
            </div>

        </div>

        <hr class="my-4">
</div>

<hr>
        <!-- ================= DIET PLAN ================= -->
        <h4 class="mb-3">Diet Plan</h4>

        <div class="row g-4">

            <div class="col-md-6">
                <div class="card p-4 text-center shadow">
                    <h5>Breakfast</h5>
                    <p class="fs-5">🥗 Oats, Fruits & Milk</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card p-4 text-center shadow">
                    <h5>Lunch</h5>
                    <p class="fs-5">🍛 Brown Rice + Vegetables + Dal</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card p-4 text-center shadow">
                    <h5>Snacks</h5>
                    <p class="fs-5">🥜 Nuts + Green Tea</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card p-4 text-center shadow">
                    <h5>Dinner</h5>
                    <p class="fs-5">🍲 Soup + Salad</p>
                </div>
            </div>

        </div>

        <hr class="my-4">

        <!-- ================= PERSONALIZED PLAN  ================= -->
        <h4 class="mb-3">Personalized Workout Plan</h4>

        <div class="row g-4">

            <div class="col-md-6">
                <div class="card p-4 text-center shadow">
                    <h5>Cardio Training</h5>
                    <p class="fs-5">🔥 45 Minutes Running / Cycling</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card p-4 text-center shadow">
                    <h5>Strength Training</h5>
                    <p class="fs-5">🏋 4 Days Gym Workout</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card p-4 text-center shadow">
                    <h5>Stretching</h5>
                    <p class="fs-5">🧘 15 Minutes Daily</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card p-4 text-center shadow">
                    <h5>Weekly Target</h5>
                    <p class="fs-5">📅 5 Workout Sessions</p>
                </div>
            </div>

        </div>

    </div>

  </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<?php include 'includes/footer.php'; ?>

</body>
</html>

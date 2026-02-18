<!DOCTYPE html>
<html>
<head>
<title>Progress</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/style.css">

<style>
.card-box{
    border-radius:15px;
    box-shadow:0 5px 20px rgba(0,0,0,0.1);
}
.sidebar{
    width:250px;
    min-height:100vh;
    background:#212529;
    position:fixed;
}

.main-content{
    margin-left:250px;
    width:100%;
}

</style>
</head>
<body>
    <body>

<div class="d-flex">

    <!-- Sidebar -->
    <div class="sidebar">
        <?php include 'includes/user_sidebar.php'; ?>
    </div>

    <!-- Main Content -->
    <div class="main-content">
       <div class="topbar">
        <h3>My Progress</h3>
        </div>
        <div class="row">

            <div class="col-md-4">
                <div class="dashboard-card  text-center">
                    <h5>Weight Progress</h5>
                    <div class="progress">
                        <div class="progress-bar bg-success" style="width:70%">70%</div>
                    </div>
                    <p class="mt-2">60kg → 55kg</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="dashboard-card  text-center">
                    <h5>Workout Completion</h5>
                    <div class="progress">
                        <div class="progress-bar bg-primary" style="width:80%">80%</div>
                    </div>
                    <p class="mt-2">4/5 Days Completed</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="dashboard-card text-center">
                    <h5>Diet Follow</h5>
                    <div class="progress">
                        <div class="progress-bar bg-warning" style="width:60%">60%</div>
                    </div>
                    <p class="mt-2">Healthy Days</p>
                </div>
            </div>

        </div>

    </div>

</div>
</body>
</html>
<?php include 'includes/footer.php'; ?>

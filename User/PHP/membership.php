<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Membership Plans</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/style.css">

</head>

<body>

<?php include 'includes/user_sidebar.php'; ?>

<div class="main-content">
    <div class="topbar"><h3>Membership</h3></div>

<div class="container">

    <h3 class="mb-4 text-center">Choose Your Membership Plan</h3>

    <div class="row g-4">

        <!-- Silver Plan -->
        <div class="col-md-4">
            <div class="card shadow p-4 text-center">
                <h5>Silver Plan</h5>
                <h3 class="text-primary">₹999 / Month</h3>
                <ul class="list-unstyled mt-3">
                    <li>✔ Basic Workout Plan</li>
                    <li>✔ Diet Suggestions</li>
                    <li>❌ Personal Trainer</li>
                </ul>
                <button class="btn btn-outline-primary mt-3"
                        onclick="selectPlan('Silver')">
                        Select
                </button>
            </div>
        </div>

        <!-- Gold Plan -->
        <div class="col-md-4">
            <div class="card shadow p-4 text-center">
                <h5>Gold Plan</h5>
                <h3 class="text-warning">₹1999 / Month</h3>
                <ul class="list-unstyled mt-3">
                    <li>✔ Advanced Workout</li>
                    <li>✔ Personalized Diet Plan</li>
                    <li>✔ Email Support</li>
                </ul>
                <button class="btn btn-outline-warning mt-3"
                        onclick="selectPlan('Gold')">
                        Select
                </button>
            </div>
        </div>

        <!-- Platinum Plan -->
        <div class="col-md-4">
            <div class="card shadow p-4 text-center">
                <h5>Platinum Plan</h5>
                <h3 class="text-success">₹2999 / Month</h3>
                <ul class="list-unstyled mt-3">
                    <li>✔ Personal Trainer</li>
                    <li>✔ Full Diet Customization</li>
                    <li>✔ 24/7 Support</li>
                </ul>
                <button class="btn btn-outline-success mt-3"
                        onclick="selectPlan('Platinum')">
                        Select
                </button>
            </div>
        </div>

    </div>

    <hr class="my-5">

    <!-- Active Membership -->
    <div class="text-center">
        <h5>Your Active Plan:</h5><span id="activePlan" class="badge text-dark p-3 fs-6">
            None Selected
        </span>
    </div>

</div>
</div>

<script>
function selectPlan(plan){
    document.getElementById("activePlan").innerText =
        plan + " Plan Selected";
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php include 'includes/footer.php'; ?>

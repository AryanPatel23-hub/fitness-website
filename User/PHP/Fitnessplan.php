<!DOCTYPE html>
<html>
<head>
<title>User Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/style.css">

<style>
.sidebar{
    width:250px;
    min-height:100vh;
    background:#212529;
    position:fixed;
}
.main-content{
    margin-left:250px;
    padding:20px;
}
.dashboard-card{
    border-radius:15px;
    padding:20px;
    box-shadow:0 5px 20px rgba(0,0,0,0.1);
}
</style>

</head>
<body>

<!-- Sidebar -->
<div class="sidebar text-white p-3">
    <h4>Fitness App</h4>
    <hr>
    <ul class="nav flex-column">
        <li class="nav-item"><a href="#diet" class="nav-link text-white">My Diet</a></li>
        <li class="nav-item"><a href="#plan" class="nav-link text-white">Personalized Plan</a></li>
        <li class="nav-item"><a href="#progress" class="nav-link text-white">Progress</a></li>
        <li class="nav-item"><a href="dashboard.php" class="nav-link text-white">Dashboard</a></li>

    </ul>
</div>

<div class="main-content">
<div class="topbar"><h3>Fitness Plan</h3></div>
<br>
<!-- ================= DIET SECTION ================= -->
<h4 id="diet">My Diet</h4>
<div class="row mt-3">

<div class="col-md-4">
<div class="dashboard-card bg-light">
<h5>Morning</h5>
<ul>
<li>Milk</li>
<li>Apple</li>
<li>Oats</li>
</ul>
</div>
</div>

<div class="col-md-4">
<div class="dashboard-card bg-light">
<h5>Lunch</h5>
<ul>
<li>Brown Rice</li>
<li>Salad</li>
<li>Grilled Chicken</li>
</ul>
</div>
</div>

<div class="col-md-4">
<div class="dashboard-card bg-light">
<h5>Dinner</h5>
<ul>
<li>Vegetables</li>
<li>2 Roti</li>
<li>Buttermilk</li>
</ul>
</div>
</div>

</div>

<hr class="my-5">

<!-- ================= PERSONALIZED PLAN ================= -->
<h4 id="plan">Personalized Plan</h4>

<div class="card p-4 shadow">

<select id="goal" class="form-select mb-3">
<option value="loss">Weight Loss</option>
<option value="gain">Weight Gain</option>
<option value="muscle">Muscle Build</option>
</select>

<select id="dietType" class="form-select mb-3">
<option value="veg">Vegetarian</option>
<option value="nonveg">Non-Vegetarian</option>
</select>

<button class="btn btn-success" onclick="generatePlan()">Generate Plan</button>

<hr>
<div id="result"></div>

</div>

<hr class="my-5">

<!-- ================= PROGRESS SECTION ================= -->
<h4 id="progress">My Progress</h4>

<div class="row mt-3">

<div class="col-md-4">
<div class="dashboard-card text-center bg-light">
<h5>Weight Progress</h5>
<div class="progress">
<div class="progress-bar bg-success" style="width:70%">70%</div>
</div>
<p class="mt-2">60kg → 55kg</p>
</div>
</div>

<div class="col-md-4">
<div class="dashboard-card text-center bg-light">
<h5>Workout Completion</h5>
<div class="progress">
<div class="progress-bar bg-primary" style="width:80%">80%</div>
</div>
<p class="mt-2">4/5 Days Completed</p>
</div>
</div>

<div class="col-md-4">
<div class="dashboard-card text-center bg-light">
<h5>Diet Follow</h5>
<div class="progress">
<div class="progress-bar bg-warning" style="width:60%">60%</div>
</div>
<p class="mt-2">Healthy Days</p>
</div>
</div>

</div>

</div>

<script>
function generatePlan(){

let goal = document.getElementById("goal").value;
let diet = document.getElementById("dietType").value;

let output = "<h5>Your Plan:</h5>";

if(goal === "loss"){
    output += "<p>Cardio 5 days/week</p>";
}
else if(goal === "gain"){
    output += "<p>Strength training 5 days/week</p>";
}
else{
    output += "<p>Heavy workout + High protein</p>";
}

if(diet === "veg"){
    output += "<p>Veg protein included</p>";
}
else{
    output += "<p>Chicken & Eggs included</p>";
}

document.getElementById("result").innerHTML = output;
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

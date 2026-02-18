<!DOCTYPE html>
<html>
<head>
<title>Personalized Plan</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/style.css">

<style>
.main-content{
    margin-left:250px;
    padding:20px;
}
</style>

</head>
<body>

<?php include 'includes/user_sidebar.php'; ?>

<div class="main-content">

<div class="container">
<div class="topbar"><h3 class="mb-4">Personalized Plan</h3></div>

<div class="card shadow p-4">

<form id="planForm">

<div class="mb-3">
<label class="form-label">Select Goal</label>
<select class="form-select" id="goal">
<option value="loss">Weight Loss</option>
<option value="gain">Weight Gain</option>
<option value="muscle">Muscle Build</option>
</select>
</div>

<div class="mb-3">
<label class="form-label">Diet Preference</label>
<select class="form-select" id="diet">
<option value="veg">Vegetarian</option>
<option value="nonveg">Non-Vegetarian</option>
</select>
</div>

<button type="button" class="btn btn-success" onclick="generatePlan()">Generate Plan</button>

</form>

<hr>

<div id="result" class="mt-4"></div>

</div>

</div>
</div>

<script>
function generatePlan(){

let goal = document.getElementById("goal").value;
let diet = document.getElementById("diet").value;

let output = "<h5>Your Plan:</h5>";

if(goal === "loss"){
    output += "<p>🏃 Cardio 5 days/week</p>";
}else if(goal === "gain"){
    output += "<p>🏋 Strength training 5 days/week</p>";
}else{
    output += "<p>💪 Heavy weight + Protein diet</p>";
}

if(diet === "veg"){
    output += "<p>🥗 Veg Protein Sources Included</p>";
}else{
    output += "<p>🍗 Chicken & Eggs Included</p>";
}

document.getElementById("result").innerHTML = output;
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php include 'includes/footer.php'; ?>

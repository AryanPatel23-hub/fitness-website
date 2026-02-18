<?php
$bmi = "";
$status = "";

if(isset($_POST['submit'])){

    $weight = floatval($_POST['weight']);
    $height = floatval($_POST['height']);

    if($weight > 0 && $height > 0){

        $heightMeter = $height / 100;
        $bmi = $weight / ($heightMeter * $heightMeter);
        $bmi = round($bmi, 2);

        if($bmi < 18.5){
            $status = "Underweight";
        }
        elseif($bmi < 25){
            $status = "Normal";
        }
        elseif($bmi < 30){
            $status = "Overweight";
        }
        else{
            $status = "Obese";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>BMI Calculator</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/style.css">

</head>

<body>
<?php include 'includes/user_sidebar.php'; ?>

<div class="main-content"> 
<div class="topbar"><h3>BMI</h3></div>

<div class="container ">
<div class="card shadow p-4 col-md-6 mx-auto">

<h3 class="text-center mb-4">BMI Calculator</h3>

<form method="POST" id="bmiForm" novalidate>

<div class="mb-3">
<label class="form-label">Weight (kg)</label>
<input type="number" name="weight" class="form-control">
</div>

<div class="mb-3">
<label class="form-label">Height (cm)</label>
<input type="number" name="height" class="form-control">
</div>

<!-- 🔴 Error Message -->
<div id="errorMsg" class="text-danger fw-bold mb-3"></div>

<button type="submit" name="submit" class="btn btn-success w-100">
Calculate BMI
</button>

</form>

<?php if($bmi != ""){ ?>
<div class="mt-4 text-center">
<h5>Your BMI: <strong><?php echo $bmi; ?></strong></h5>
<h6>Status: <?php echo $status; ?></h6>
</div>
<?php } ?>

</div>
</div>
</div>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
$(document).ready(function(){

$("#bmiForm").on("submit", function(e){

let weight = $("input[name='weight']").val();
let height = $("input[name='height']").val();
let error = "";

// Empty check
if(weight === "" || height === ""){
    error = "All fields are required!";
}
// Number check
else if(isNaN(weight) || isNaN(height)){
    error = "Please enter numbers only!";
}
// Decimal height not allowed
else if(height.indexOf(".") !== -1){
    error = "Height must be whole number (no decimal allowed)!";
}
// Positive check
else if(parseFloat(weight) <= 0 || parseFloat(height) <= 0){
    error = "Values must be positive!";
}
// Unrealistic values
else if(parseFloat(weight) > 300){
    error = "Weight seems unrealistic!";
}
else if(parseFloat(height) < 50 || parseFloat(height) > 250){
    error = "Height must be between 50cm and 250cm!";
}

if(error !== ""){
    $("#errorMsg").text(error);
    e.preventDefault();
}
else{
    $("#errorMsg").text("");
}

});

});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php include 'includes/footer.php'; ?>

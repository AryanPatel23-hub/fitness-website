<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Profile</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
$(document).ready(function(){

    $("#ProfileForm").submit(function(e){

        let isValid = true;

        $(".text-danger").text(""); // clear old errors

        let name = $("#name").val().trim();
        let email = $("#email").val().trim();
        let age = $("#age").val().trim();
        let height = $("#height").val().trim();
        let weight = $("#weight").val().trim();
        let image = $("#imageUpload")[0].files[0];

        // Name validation
        if(name === ""){
            $("#nameError").text("Full name is required");
            isValid = false;
        }

        // Email validation
        let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        if(!email.match(emailPattern)){
            $("#emailError").text("Enter valid email");
            isValid = false;
        }

        // Age validation
        if(age === "" || isNaN(age) || age <= 0){
            $("#ageError").text("Enter valid age");
            isValid = false;
        }

        // Height validation
        if(height === "" || isNaN(height) || height <= 0){
            $("#heightError").text("Enter valid height");
            isValid = false;
        }

        // Weight validation
        if(weight === "" || isNaN(weight) || weight <= 0){
            $("#weightError").text("Enter valid weight");
            isValid = false;
        }

        // ✅ IMAGE VALIDATION
        if(!image){
            $("#imgerror").text("Please select profile image");
            isValid = false;
        } else {
            let allowedTypes = ["image/jpeg","image/png","image/jpg"];

            if(!allowedTypes.includes(image.type)){
                $("#imgerror").text("Only JPG and PNG allowed");
                isValid = false;
            }

            if(image.size > 2 * 1024 * 1024){
                $("#imgerror").text("Image size must be less than 2MB");
                isValid = false;
            }
        }

        if(!isValid){
            e.preventDefault(); // stop submit
        }

    });

});
</script>


<!-- Sidebar -->
    <?php include 'includes/user_sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content ">

<div class="topbar">
    <h5>Edit_Profile</h5></div>

<div class="container">

<div class="card shadow p-4 text-center">
<form id="ProfileForm">

<!-- Profile Image -->
<div class="text-center mb-4">
    <img id="profilePreview" src="https://via.placeholder.com/120" class="profile-img mb-3">
    <input type="file" id="imageUpload" class="form-control">
    <small class="text-danger" id="imgerror"></small>

</div>

<div class="row">

<div class="col-md-6 mb-3">
<label class="form-label">Full Name</label>
<input type="text" class="form-control"id="name" placeholder="Enter your name">
<small class="text-danger" id="nameError"></small>
</div>

<div class="col-md-6 mb-3">
<label class="form-label">Email</label>
<input type="email"id="email"  class="form-control" placeholder="Enter your email">
<small class="text-danger" id="emailError"></small>
</div>

<div class="col-md-4 mb-3">
<label class="form-label">Age</label>
<input type="number" id="age" class="form-control" placeholder="Enter your Age">
<small class="text-danger" id="ageError"></small>
</div>

<div class="col-md-4 mb-3">
<label class="form-label">Height (cm)</label>
<input type="text" id="height"class="form-control" placeholder="Enter your height">
<small class="text-danger" id="heightError"></small>
</div>

<div class="col-md-4 mb-3">
<label class="form-label">Weight (kg)</label>
<input type="text" id="weight"class="form-control" placeholder="Enter your weight">
<small class="text-danger" id="weightError"></small>
</div>

<div class="col-md-6 mb-3">
<label class="form-label">Gender</label>
<select id="gender"class="form-select">
    <option selected>Female</option>
    <option>Male</option>
    <option>Other</option>
</select>
</div>

<div class="col-md-6 mb-3">
<label class="form-label">Fitness Goal</label>
<select id="goal" class="form-select">
    <option selected>Weight Loss</option>
    <option>Weight Gain</option>
    <option>Muscle Build</option>
    <option>Maintain Fitness</option>
</select>
</div>

</div>

<div class="text-center mt-3">
<button type="submit" class="btn btn-success px-4">Save Changes</button>
<a href="profile.php" class="btn btn-secondary px-4">Cancel</a>
</div>

</form>

</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php include 'includes/footer.php'; ?>

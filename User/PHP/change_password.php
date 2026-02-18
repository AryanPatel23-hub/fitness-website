<!DOCTYPE html>
<html>
<head>
<title>Change Password</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/style.css">
</head>

<body>

<?php include 'includes/user_sidebar.php'; ?>

<div class="main-content">

<div class="topbar">
    <h5>Change Password</h5>
</div>

<div class="container mt-4">
<div class="card shadow p-4">

<form id="passwordForm">

<!-- Old Password -->
<div class="mb-3">
<label class="form-label">Old Password</label>
<input type="password" id="oldpass" class="form-control">
<small class="text-danger" id="oldError"></small>
</div>

<!-- New Password -->
<div class="mb-3">
<label class="form-label">New Password</label>
<div class="input-group">
    <input type="password" id="newpass" class="form-control">
    <button type="button" class="btn btn-outline-secondary togglePass">Show</button>
</div>
<small class="text-danger" id="newError"></small>
</div>

<!-- Confirm Password -->
<div class="mb-3">
<label class="form-label">Confirm Password</label>
<div class="input-group">
    <input type="password" id="confirmpass" class="form-control">
    <button type="button" class="btn btn-outline-secondary togglePass">Show</button>
</div>
<small class="text-danger" id="confirmError"></small>
</div>

<div class="text-center mt-3">
<button type="submit" class="btn btn-success px-4">Change Password</button>
<a href="profile.php" class="btn btn-secondary px-4">Cancel</a>
</div>

</form>

</div>
</div>
</div>

<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
$(document).ready(function(){

    // Show/Hide password
    $(".togglePass").click(function(){
        let input = $(this).closest(".input-group").find("input");
        let type = input.attr("type") === "password" ? "text" : "password";
        input.attr("type", type);
        $(this).text(type === "password" ? "Show" : "Hide");
    });

    // Form Validation
    $("#passwordForm").submit(function(e){

        let isValid = true;

        $(".text-danger").text("");

        let oldpass = $("#oldpass").val().trim();
        let newpass = $("#newpass").val().trim();
        let confirmpass = $("#confirmpass").val().trim();

        // Old password check
        if(oldpass === ""){
            $("#oldError").text("Old password is required");
            isValid = false;
        }

        // Strong password regex
        let passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@$!%*?&]).{8,}$/;

        if(!passwordRegex.test(newpass)){
            $("#newError").text("Password must be 8+ chars, include uppercase, lowercase, number & special character");
            isValid = false;
        }

        // Confirm password match
        if(newpass !== confirmpass){
            $("#confirmError").text("Passwords do not match");
            isValid = false;
        }

        if(!isValid){
            e.preventDefault();
        }

    });

});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php include 'includes/footer.php'; ?>

<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Store</title>

    <!-- bootstrap 5 CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="signup.css" />
    <!-- bootstrap 5 Js bundle CDN-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main-container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <form class="p-5 rounded shadow" style="max-width: 30rem; width: 100%" method="POST" action="php/signupAuth.php">

            <h1 class="text-center display-4 pb-5">SIGN UP</h1>
            <div class="input-container">
                <div class="input-group">
                    <label for="" class = "form-label">First Name</label>
                    <input type="text" class="form-control" name="fName" placeholder="John" required />
                </div>
                <div class="input-group">
                    <label for="" class = "form-label">Last Name</label>
                    <input type="text" class="form-control" name="lName" placeholder="Doe" required/>
                </div>

            </div>
            <div class="input-group">
                <label for="" class = "form-label">Email Address</label>
                <input type="email" class="form-control" name="userMail" placeholder="abc@gmail.com" required />
            </div>
            <div class="input-group">
                <label for="" class = "form-label">Mobile Number</label>
                <input type="number" name="userNumber" placeholder="+91 0000 00 0000" min="10" required />
            </div>
            <div class="input-group">
                <label for="" class = "form-label">Password</label>
                <input type="password" name="password" placeholder="Pass@123"class = "password" required />
            </div>
            <div class="input-group">
                <label for="" class = "form-label">Re-Type Password</label>
                <input type="password" name="rePassword" placeholder="Pass@123" class = "re_password"required />
            </div>
            <input type="submit" name="signUp" value="Sign Up" class="btn btn-success"/>
            <input type="reset" value="Reset" class="btn btn-info">
    </div>
    </form>
    </div>
</body>

</html>

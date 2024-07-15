<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>POSHAK | one stop thrift shop</title>
    <!-- url-icon --><link rel="shortcut icon" href="/POSHAK/logos/3-png.png" type="image/x-icon">
    <!-- bootstrap icons --><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- style.css --><link rel="stylesheet" href="/POSHAK/style.css">

    <!-- login css --><link rel="stylesheet" href="/POSHAK/components/login.css">
    
</head>
<body>

    <!-- login container -->

    <div class="login-container" id="login-container">
        <h1>Login</h1>

        <div class="login-content">

        <form method="post">
            <label >Username</label><br>
            <input type="text" name="username" required><br><br>
        
            <label >Password</label><br>
            <input type="password" name="password" required>

            <input type="submit" value="login" id="loginbtn" name="login"><br><br>
            <a href="#" onclick="handleSwitch1()">Dont have an account?</a>
        </form>
        </div>
    </div>

    <!-- signup container -->

    <div class="signup-container" id="signup-container">
        <h1>Signup</h1>

        <div class="signup-content">

        <form  method="post">
            <label >Username</label><br>
            <input type="text" name="signup-username" required><br><br>

            <label >Email</label><br>
            <input type="email" name="email" required><br><br>

            <label >Phone</label><br>
            <input type="text" name="phone" required><br><br>
        
            <label >Password</label><br>
            <input type="password" name="signup-password" required><br><br>

            <label >Confirm Password</label><br>
            <input type="password" name="cpassword" required>
        
            <input type="submit" value="signup" id="signupbtn" name="signup"><br><br>
            <a href="#" onclick="handleSwitch2()">Already have an account?</a>

        </form>
        </div>
    </div>


    <!-- script -->

    <script>
        async function handleSwitch1(){
            await (document.getElementById("login-container").classList.add("hide"));
            await (document.getElementById("signup-container").classList.add("show"));
        }
        async function handleSwitch2(){
            await (document.getElementById("signup-container").classList.remove("show"));
            await (document.getElementById("login-container").classList.remove("hide"));
        }
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>POSHAK | one stop thrift shop</title>
    <!-- url-icon --><link rel="shortcut icon" href="/POSHAK/logos/3-png.png" type="image/x-icon">
    <!-- bootstrap icons --><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- style.css --><link rel="stylesheet" href="/POSHAK/style.css">

    <!-- navbar css --><link rel="stylesheet" href="/POSHAK/components/navbar.css">

</head>
<body>
    
    <nav>
        <div class="navbar-contents">
            <div class="nav-left-content">
                <a  href="#" onclick="handleClick()"><i class="bi bi-list" id="burger-menu"></i></a>
            </div>
            <a href="/POSHAK/index.php" class="logo"><img src="/POSHAK/logos/2-png.png" alt="Poshak Logo"></a>

            <div class="nav-right-content">
                <a href="/POSHAK/pages/loginPage.php" class="sign-in"><i class="bi bi-person"></i></a>
            </div>
        </div>
        <div class="dropdown-menu" id="dropdown-menu">
            <div class="dropdown-contents">
                <a href=""><li>About Us</li></a>
                <a href=""><li>Contacts</li></a>
                <a href=""><li>FAQs</li></a>
            </div>
        </div>
    </nav>



    <!-- script -->

    <script>
        function handleClick(){
            let value = document.getElementById("burger-menu").className;
            if(value=="bi bi-list"){
                document.getElementById("burger-menu").className="bi bi-x";
                document.getElementById("dropdown-menu").classList.add("show");
            }
            if(value=="bi bi-x"){
                document.getElementById("burger-menu").className="bi bi-list";
                document.getElementById("dropdown-menu").classList.remove("show");
            }
        }
    </script>
</body>
</html>




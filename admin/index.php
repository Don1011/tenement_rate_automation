<?php
    session_start();
    include("assets/inc/conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Library</title>
    <link rel="stylesheet" href="./assets/css/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="./assets/css/copied_styles.css">
</head>
<body>
    
    <div class = "container">
        
        <div class="row justify-content-md-center text-center">
            <?php
                if(isset($_POST['email']) && isset($_POST['password'])){
                    if(!empty($_POST['email']) && !empty($_POST['password'])){
                        $email = $_POST['email'];
                        $password = $_POST['password'];

                        $sql_login = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
                        $query_login = mysqli_query($conn, $sql_login);
                        if(mysqli_num_rows($query_login)){
                            $fetch_login = mysqli_fetch_assoc($query_login);
                            $_SESSION['admin_id'] = $fetch_login['id'];
                            header("location: home.php");
                        }else{
                            echo "<script lang = 'javascript'>alert('Incorrect Login Details');</script>";
                        }
                    }
                }
            ?>
            <form action="index.php" method = "POST" class = "login-form" id = "login">
                <div>
                    <h1>Login</h1>
                </div>
                <div>
                    <input type="text" name="email" id="email" class = "form-control" placeholder = "Enter Email">
                </div>
                <div>
                    <input type="password" name="password" id="password" class = "form-control" placeholder= "Enter Password">
                </div>
                <div>
                    <button class = "btn btn-outline-light bg_black">Login</button>
                </div>
            </form>
            
        </div>

    </div>

    <script src= "./assets/bootstrap/js/bootstrap.js"></script>
    <script src= "./assets/js/jquery-3.4.1.js"></script>
    <script src= "./assets/js/script.js"></script>
    <script src= "./assets/js/common.min.js"></script>
    <script src= "./assets/js/custom.min.js"></script>
    <script src= "./assets/js/settings.js"></script>
    <script src= "./assets/js/gleek.js"></script>
    <script src= "./assets/js/styleSwitcher.js"></script>
</body>
</html>
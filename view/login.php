<?php
require '../core/function.php';
require '../model/M_login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Login - SMK YADIKA KALIJATI</title>
    <link rel="icon" type="image/x-icon" href="../img/yadika-logo-90529FB579-seeklogo.com.ico">
    <link href="css/styles.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body style="background-color: #6b96b8;" >
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="text-center mt-3" > 
                    <img src="assets/img/logistic.png" alt="login form" class="img-fluid" style="width: 30%;" />
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-8 col-sm-10 col-12"> <!-- Tambahkan class kolom sesuai kebutuhan -->
                        <div class="card shadow-lg border-0 rounded-lg mt-3">
                            <div class="card-header">
                                <h3 class="text-center font-weight-normal my-3">Login to your account</h3>
                            </div>
                            <div class="card-body">
                                <?php if (isset($message)) {
                                    echo '<div class="alert alert-danger">' . $message . '</div>';
                                } ?>
                                <form method="post">
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control form-control-md"
                                               id="inputUsername" type="username" placeholder="Username">
                                        <label class="form-label" for="inputUsername"
                                               style="font-size: 14px;">Username</label>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control form-control-md" name="password"
                                               id="inputPassword" type="password" placeholder="Password"/>
                                        <label class="form-label" for="inputPassword"
                                               style="font-size: 14px;">Password</label>
                                        <span class="password-toggle-icon" style="cursor: pointer;"
                                              onclick="togglePasswordVisibility()"><i class="fas fa-eye"></i></span>
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button class="btn btn-primary w-100" name="login">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/scripts.js"></script>
<script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementsByName("password")[0];
        var icon = document.querySelector(".password-toggle-icon i");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            icon.classList.remove("fa-eye");
            icon.classList.add("fa-eye-slash");
        } else {
            passwordInput.type = "password";
            icon.classList.remove("fa-eye-slash");
            icon.classList.add("fa-eye");
        }
    }
</script>
</body>
</html>

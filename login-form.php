<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="Pictures/maintenance_patch.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background-image: url('Pictures/background.png');
        }
    </style>
</head>

<body>
    <div class='container'>
        <div id="login-form">
            <form action="login.php" method="POST">
                <h1>Login</h1>
                <div class="input-box">

                    <input type="text" name="login_username" placeholder='Username' required  value="<?php echo isset($_COOKIE['remembered_username']) ? $_COOKIE['remembered_username'] : ''; ?>" />
                    <div class="login-icon">
                        <svg height="35" width="35" xmlns="http://127.0.0.1:5500/login.php/2000/svg">
                            <image height="35" width="35" href="Pictures/Login/user.svg" />
                        </svg>
                    </div>
                </div>
                <div class="input-box">
                    <input type="password" name="login_password" placeholder='Password' required />
                    <div class="login-icon">
                        <svg height="35" width="35" xmlns="http://127.0.0.1:5500/login.php/2000/svg">
                            <image height="35" width="35" href="Pictures/Login/lock.svg" />
                        </svg>
                    </div>
                </div>

                <div class="remember-forgot">
                <label>
                    <input type="checkbox" name="remember_me"
                    <?php if (isset($_COOKIE['remembered_username'])) echo 'checked'; ?> />
                        Remember username
                    </label>
                    <a id="forgot-password">Forgot password?</a>
                </div>

                <button type='submit' name='login' id="login_btn"></button>

                <div class="register-link">
                    <a id="register">
                        Don`t have an account?
                    </a>

                </div>
            </form>
        </div>
    </div>
    <footer id="footer" class="footer"></footer>

    <script src="config/login-form-config.php"></script>
    <script>
        document.getElementById("footer").textContent = FOOTER;
        document.getElementById("login_btn").textContent = LOGIN_BTN;
        document.getElementById("register").href = REGISTER;
        document.getElementById("forgot-password").href = FORGOT_PASSWORD;
    </script>
</body>

</html>
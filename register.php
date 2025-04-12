<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="Pictures/maintenance_patch.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background-image: url('Pictures/background.png');
        }
    </style>
</head>

<body>
    <div class='container-register'>
        <div id="register-form">
            <form action="register-function.php" method="POST">
                <h1>Register account</h1>
                <div class="input-box">
                    <input type="text" name="login_username" placeholder='Username' required />
                </div>

                <div class="input-box">
                    <input type="password" name="login_password" placeholder='Password' />
                </div>

                <div class="input-box">
                    <input name="firstName" id="firstName" type="text" autoComplete="given-name" placeholder='Firstname'
                        required />
                </div>

                <div class="input-box">
                    <input name="lastName" id="lastName" type="text" autoComplete="family-name" placeholder='Lastname'
                        required />
                </div>

                <div class="input-box">
                    <input type="text" placeholder='Employee number' name="employee_number" required />
                </div>

                <div class="input-box">
                    <input type="email" placeholder='Email' name="email" required />
                </div>

                <div class="input-box">
                    <input type="tel" placeholder='Phonenumber' name="phone" required />
                </div>

                <div class="input-box">
                    <select name='organisation' required>
                        <option value="">Select organisation</option>
                        <option value="1">133AW</option>
                        <option value="2">132AW</option>
                        <option value="3">131AW</option>
                    </select>
                </div>

                <div class="input-box">
                    <select name='department' required>
                        <option value="">Select department</option>
                        <option value="1">Maintenance Squadron</option>
                        <option value="2">333 Squadron</option>
                    </select>
                </div>

                <button type='submit' name='register' id="register_btn"></button>

                <div class="register-link">
                    <a id="login">Already have an account?</a>
                </div>
            </form>
        </div>
    </div>
    <footer id="footer" class="footer"></footer>

    <script src="config.js"></script>
    <script>
        document.getElementById("footer").textContent = FOOTER;
        document.getElementById("register_btn").textContent = REGISTER_BTN;
        document.getElementById("login").href = LOGIN;
    </script>
</body>

</html>
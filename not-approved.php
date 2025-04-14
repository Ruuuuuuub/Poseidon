<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="Pictures/maintenance_patch.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Poseidon Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background-image: url('Pictures/background.png');
        }
    </style>
</head>

<body>
    <!-- LOGIN & REGISTER BUTTON & LOGO IF COMMENTED BACK IN  -->
    <div class="navbar">

        <!-- <div class="logo">
                <img src="Pictures/Maintenance_Patch.png" alt="maint_patch" class="logo">
            </div> -->

        <!-- CLOCK -->
        <nav id="navbar"></nav>

        <div class="front-page-name">
            <!-- PROGRAM NAME BOX -->
            <H1 id="program_name"></H1>
        </div>

        <div class="navbar-login-register">
            <a id="login">
                <button id="login_btn"></button>
            </a>
            <a id="register">
                <button id="register_btn"></button>
            </a>
        </div>

    </div>
    <div class="not-approved">
        <h1>Not approved yet</h1>
    </div>
    <!-- FOOTER -->
    <footer id="footer" class="footer"></footer>

    <!-- SCRIPTS -->
    <script src="config/index-config.php"></script>
    <script src="scripts/main.js"></script>
    <script src="scripts/dateTime.js"></script>
    <script>
        document.getElementById("footer").textContent = FOOTER;
        document.getElementById("program_name").textContent = PROGRAM_NAME;
        document.getElementById("login_btn").textContent = LOGIN_BTN;
        document.getElementById("register_btn").textContent = REGISTER_BTN;
        document.getElementById("login").href = LOGIN;
        document.getElementById("register").href = REGISTER;
    </script>
</body>

</html>
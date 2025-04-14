<?php include 'session-redirect.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="../../Pictures/maintenance_patch.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Maintenance</title>
    <link rel="stylesheet" href="../../styles.css">
    <style>
        body {
            background-image: url('../../Pictures/background.png');
        }
    </style>
</head>

<body>
    <div class="page-navbar">
        <div>
            <div class="title">
                <h1 id="133-maint-maint"></h1>
            </div>
            <a href="/logout.php">
                <button>Logout</button>
            </a>
        </div>
    </div>
    <div class="mypage-container">
        <div class="mypage-user-info">
            <table>
                <thead>
                    <tr>
                        USER INFO
                    </tr>
                    <tr>
                        <td>USERNAME</td>
                        <td>EMPLOYEE_NUMBER</td>
                        <td>FIRSTNAME</td>
                        <td>LASTNAME</td>
                        <td>PHONE</td>
                        <td>EMAIL</td>
                        <td>ORGANISATION</td>
                        <td>DEPARTMENT</td>
                    </tr>
                </thead>
            </table>
        </div>
    </div>


    <footer id="footer" class="footer"></footer>
    <script src="../../config/maint-maint-config.php"></script>
    <script>
        document.getElementById("footer").textContent = FOOTER;
        document.getElementById("133-maint-maint").textContent = MAINT_MAINT;
    </script>

</html>
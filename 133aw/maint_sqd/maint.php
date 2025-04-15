<?php include 'session-redirect.php'; ?>
<?php require "../../php/function.php"; ?>

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
    <div>
        <h1>Maint</h1>
    </div>


    <footer id="footer" class="footer"></footer>
    <script src="../../config/maint-maint-config.php"></script>
    <script>
    document.getElementById("footer").textContent = FOOTER;
    document.getElementById("133-maint-maint").textContent = MAINT_MAINT;
    </script>

</body>

</html>
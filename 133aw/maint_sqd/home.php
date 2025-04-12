<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: /login.php");
    exit();
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="../../Pictures/Maintenance_Patch.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="../../styles.css">
    <style>
        body {
            background-image: url('../../Pictures/background.png');
        }
    </style>
</head>

<body>
    <div class="maint-home">
        <div class="maint-navbar">

        </div>
        <div class="maint-flexbox">
            <div class="maint-cards">
                <section class="tiles-container">

                    <a class="tile tileLinks" id="maint">
                        <div class="maintenanceTileHeaderText">
                            <h2>Maintenace</h2>
                        </div>
                        <div class="maintenanceTilePicture">
                            <img src="../../133aw/maint_sqd/pictures/tools.png" class="tilePicture">
                        </div>
                    </a>

                    <a class="tile tileLinks" id="qa">
                        <div class="maintenanceTileHeaderText">
                            <h2>QA</h2>
                        </div>
                        <div class="maintenanceTilePicture">
                            <img src="../../133aw/maint_sqd/pictures/shield-check.png" class="tilePicture">
                        </div>
                    </a>

                    <a class="tile tileLinks" id="bu">
                        <div class="maintenanceTileHeaderText">
                            <h2>BU</h2>
                        </div>
                        <div class="maintenanceTilePicture">
                            <img src="../../133aw/maint_sqd/pictures/tractor.png" class="tilePicture">
                        </div>
                    </a>

                    <a class="tile tileLinks" id="ru">
                        <div class="maintenanceTileHeaderText">
                            <h2>RU</h2>
                        </div>
                        <div class="maintenanceTilePicture">
                            <img src="../../133aw/maint_sqd/pictures/kayak.png" class="tilePicture">
                        </div>
                    </a>

                    <a class="tile tileLinks" id="moc">
                        <div class="maintenanceTileHeaderText">
                            <h2>MOC</h2>
                        </div>
                        <div class="maintenanceTilePicture">
                            <img src="../../133aw/maint_sqd/pictures/computer.png" class="tilePicture">
                        </div>
                    </a>

                    <a class="tile tileLinks" id="camo">
                        <div class="maintenanceTileHeaderText">
                            <h2>CAMO</h2>
                        </div>
                        <div class="maintenanceTilePicture">
                            <img src="../../133aw/maint_sqd/pictures/book.png" class="tilePicture">
                        </div>
                    </a>

                    <a class="tile tileLinks" id="lvt">
                        <div class="maintenanceTileHeaderText">
                            <h2>LVT</h2>
                        </div>
                        <div class="maintenanceTilePicture">
                            <img src="../../133aw/maint_sqd/pictures/rocket-planet.png" class="tilePicture">
                        </div>
                    </a>

                    <a class="tile tileLinks" id="leadership">
                        <div class="maintenanceTileHeaderText">
                            <h2>Leadership</h2>
                        </div>
                        <div class="maintenanceTilePicture">
                            <img src="../../133aw/maint_sqd/pictures/leadership-alt.png" class="tilePicture">
                        </div>
                    </a>

                    <a class="tile tileLinks" id="competence">
                        <div class="maintenanceTileHeaderText">
                            <h2>Competence Planner</h2>
                        </div>
                        <div class="maintenanceTilePicture">
                            <img src="../../133aw/maint_sqd/pictures/responsability.png" class="tilePicture">
                        </div>
                    </a>
                </section>
            </div>

            <!-- INFO SCREEN -->
            <div class="maint-info">
                <div class="maint-info-search">
                    INFO SCREEN
                </div>
                <div class="maint-info-main">
                    INFO SCREEN
                </div>
                <div class="maint-info-footer">
                    INFO SCREEN
                </div>


            </div>
        </div>
    </div>

    <footer id="footer" class="footer"></footer>

    <script src="../../config.js"></script>
    <script>
        document.getElementById("footer").textContent = FOOTER;
        document.getElementById("maint").href = MAINT;
        document.getElementById("qa").href = QA;
        document.getElementById("bu").href = BU;
        document.getElementById("ru").href = RU;
        document.getElementById("moc").href = MOC;
        document.getElementById("camo").href = CAMO;
        document.getElementById("lvt").href = LVT;
        document.getElementById("leadership").href = LEADERSHIP;
        document.getElementById("competence").href = COMPETENCE;
    </script>
</body>

</html>
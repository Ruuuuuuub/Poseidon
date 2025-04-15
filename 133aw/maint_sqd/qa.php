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

    <nav class="page-navbar">
        <div class="title">
            <h1 id="133-maint-qa"></h1>
        </div>
        <a href="/logout.php">
            <button>Logout</button>
        </a>
    </nav>
    <div class="main-qa">
        <aside class="sidebar">
            <div class="sidebar-clock-container">
                <div class="sidebar-clock-menu">
                    <div class="sidebar-clock-time">
                        <p class="clock-date"><span id="date"></span></p>
                        <p class="clock-time">
                            <span id="time"></span>
                            <span id="timeZulu"></span>
                            <br>
                            <span class="sidebar-clock-time-text">Local Zulu</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="sidebar-box">
                <a href=""><button>Test 1</button></a>
                <a href=""><button>Test 2</button></a>
                <a href=""><button>Test 3</button></a>
                <a href=""><button>Test 4</button></a>
                <a href=""><button>Test 5</button></a>
                <a href=""><button>Test 6</button></a>
                <a href=""><button>Test 7</button></a>
                <a href=""><button>Test 8</button></a>
                <a href=""><button>Test 9</button></a>
                <a href=""><button>Test 10</button></a>
                <a href=""><button>Test 11</button></a>
                <a href=""><button>Test 12</button></a>
                <a href=""><button>Test 13</button></a>
                <a href=""><button>Test 14</button></a>
                <a href=""><button>Test 15</button></a>
                <a href=""><button>Test 16</button></a>
                <a href=""><button>Test 17</button></a>
                <a href=""><button>Test 18</button></a>
                <a href=""><button>Test 19</button></a>
                <a href=""><button>Test 20</button></a>
            </div>

        </aside>


        <footer id="footer" class="footer"></footer>
        <script src="../../config/maint-maint-config.php"></script>
        <script>
        document.getElementById("footer").textContent = FOOTER;
        document.getElementById("133-maint-maint").textContent = MAINT_MAINT;
        </script>

</body>

</html>
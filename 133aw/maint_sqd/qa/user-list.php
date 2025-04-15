<?php include 'session-redirect.php'; ?>
<?php require "../../../php/function.php"; ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="../../../Pictures/maintenance_patch.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>QA</title>
    <link rel="stylesheet" href="../../../styles.css">
    <style>
    body {
        background-image: url('../../../Pictures/background.png');
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

        <section class="table-container">
            <table class="table-table">
                <thead class="table-head">
                    <tr class="table-header">
                        <th class="">Username</th>
                        <th class="">Firstname</th>
                        <th class="">Lastname</th>
                        <th class="">Employee-Number</th>
                        <th class="">Phone</th>
                        <th class="">Email</th>
                        <th class="">Position</th>
                    </tr>
                    <tr class="table-search-container table-search-row">
                        <th><input type="text" placeholder="Search" name="username" class="table-search-input"
                                data-column="0">
                        </th>
                        <th><input type="text" placeholder="Search" name="firstname" class="table-search-input"
                                data-column="1">
                        </th>
                        <th><input type="text" placeholder="Search" name="lastname" class="table-search-input"
                                data-column="2">
                        </th>
                        <th><input type="text" placeholder="Search" name="employee-number" class="table-search-input"
                                data-column="3">
                        </th>
                        <th> <input type="text" placeholder="Search" name="phone" class="table-search-input"
                                data-column="4">
                        </th>
                        <th><input type="text" placeholder="Search" name="email" class="table-search-input"
                                data-column="5">
                        </th>
                        <th><input type="text" placeholder="Search" name="position" class="table-search-input"
                                data-column="6">
                        </th>
                    </tr>
                </thead>

                <tbody class="table-body">
                    <tr>
                        <td>
                            <?php $users = getUsers() ?>
                            <?php foreach($users as $user){ ?>
                            <p><?php echo ucfirst($user['USERNAME']) ?></p>
                            <?php
            }
            ?>
                        </td>
                        <td>
                            <?php $users = getUsers() ?>
                            <?php foreach($users as $user){ ?>
                            <p><?php echo ucfirst($user['FIRSTNAME']) ?></p>
                            <?php
            }
            ?>
                        </td>
                        <td>
                            <?php $users = getUsers() ?>
                            <?php foreach($users as $user){ ?>
                            <p><?php echo ucfirst($user['LASTNAME']) ?></p>
                            <?php
            }
            ?>
                        </td>
                        <td>
                            <?php $users = getUsers() ?>
                            <?php foreach($users as $user){ ?>
                            <p><?php echo ucfirst($user['EMPLOYEE_NUMBER']) ?></p>
                            <?php
            }
            ?>
                        </td>
                        <td>
                            <?php $users = getUsers() ?>
                            <?php foreach($users as $user){ ?>
                            <p><?php echo ucfirst($user['PHONE']) ?></p>
                            <?php
            }
            ?>
                        </td>
                        <td>
                            <?php $users = getUsers() ?>
                            <?php foreach($users as $user){ ?>
                            <p><?php echo ucfirst($user['EMAIL']) ?></p>
                            <?php
            }
            ?>
                        </td>
                        <td>
                            <?php $users = getUsers() ?>
                            <?php foreach($users as $user){ ?>
                            <p><?php echo ucfirst($user['POSITION']) ?></p>
                            <?php
            }
            ?>
                        </td>
                    </tr>
                </tbody>
            </table>

        </section>
    </div>

    <footer id="footer" class="footer"></footer>
    <script src="../../../config/maint-qa-config.php"></script>
    <script>
    document.getElementById("footer").textContent = FOOTER;
    document.getElementById("133-maint-qa").textContent = MAINT_QA;
    </script>
    <script src="../../../scripts/dateTime.js"></script>

</body>

</html>
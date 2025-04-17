<?php include 'session-redirect.php'; ?>
<?php require "../../../../php/function.php"; ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="../../../../Pictures/maintenance_patch.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Maintenance</title>
    <link rel="stylesheet" href="../../../../styles.css">
    <style>
    body {
        background-image: url('../../../../Pictures/background.png');
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
                <a id="133-maint-qa-1-link"><button id="133-maint-qa-1"></button></a>
                <a id="133-maint-qa-2-link"><button id="133-maint-qa-2"></button></a>
                <a id="133-maint-qa-3-link"><button id="133-maint-qa-3"></button></a>
                <a id="133-maint-qa-4-link"><button id="133-maint-qa-4"></button></a>
                <a id="133-maint-qa-5-link"><button id="133-maint-qa-5"></button></a>
                <a id="133-maint-qa-6-link"><button id="133-maint-qa-6"></button></a>
                <a id="133-maint-qa-7-link"><button id="133-maint-qa-7"></button></a>
                <a id="133-maint-qa-8-link"><button id="133-maint-qa-8"></button></a>
                <a id="133-maint-qa-9-link"><button id="133-maint-qa-9"></button></a>
                <a id="133-maint-qa-10-link"><button id="133-maint-qa-10"></button></a>
                <a id="133-maint-qa-11-link"><button id="133-maint-qa-11"></button></a>
                <a id="133-maint-qa-12-link"><button id="133-maint-qa-12"></button></a>
                <a id="133-maint-qa-13-link"><button id="133-maint-qa-13"></button></a>
                <a id="133-maint-qa-14-link"><button id="133-maint-qa-14"></button></a>
                <a id="133-maint-qa-15-link"><button id="133-maint-qa-15"></button></a>
                <a id="133-maint-qa-16-link"><button id="133-maint-qa-16"></button></a>
                <a id="133-maint-qa-17-link"><button id="133-maint-qa-17"></button></a>
                <a id="133-maint-qa-18-link"><button id="133-maint-qa-18"></button></a>
                <a id="133-maint-qa-19-link"><button id="133-maint-qa-19"></button></a>
                <a id="133-maint-qa-20-link"><button id="133-maint-qa-20"></button></a>
            </div>

        </aside>

        <section class="table-container">
            <table class="table-table">
                <thead class="table-head">
                    <tr class="table-header">
                        <th class="">REPORT_NUMBER</th>
                        <th class="">MAIN_CATEGORY</th>
                        <th class="">SUB_CATEGORY </th>
                        <th class="">ADDED_DATE</th>
                        <th class="">FROM_NAME</th>
                        <th class="">FROM_USER_ID</th>
                        <th class="">FROM_DEPARTMENT </th>
                        <th class="">SHORT_DESCRIPTION</th>
                        <th class="">CLOSING</th>
                        <th class="">CLOSING_USER_ID</th>
                        <th class="">REMEDY</th>
                        <th class="">REMEDY_NUMBER</th>
                        <th class="">REMEDY_DUE</th>
                        <th class="">OCCURRENCE</th>
                        <th class="">OCCURRENCE_RAPORT_NUMBER</th>
                        <th class="">FOD</th>
                        <th class="">HMS_BASEN</th>
                        <th class="">CLOSING_DUE</th>
                        <th class="">CLOSED_DATE</th>
                        <th class="">FEEDBACK_SENDER</th>
                        <th class="">COMMENT</th>
                    </tr>
                    <tr class="table-search-container">
                        <th><input type="text" placeholder="Search" name="employee-number" class="table-search-input"
                                data-column="1">
                        </th>
                        <th><input type="text" placeholder="Search" name="firstname" class="table-search-input"
                                data-column="2">
                        </th>
                        <th><input type="text" placeholder="Search" name="lastname" class="table-search-input"
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
                        <th><input type="text" placeholder="Search" name="adress" class="table-search-input"
                                data-column="7">
                        </th>
                        <th><input type="text" placeholder="Search" name="city" class="table-search-input"
                                data-column="8">
                        </th>
                        <th><input type="text" placeholder="Search" name="zip" class="table-search-input"
                                data-column="9">
                        </th>
                        <th><input type="text" placeholder="Search" name="zip" class="table-search-input"
                                data-column="10">
                        </th>
                        <th><input type="text" placeholder="Search" name="zip" class="table-search-input"
                                data-column="11">
                        </th>
                        <th><input type="text" placeholder="Search" name="zip" class="table-search-input"
                                data-column="12">
                        </th>
                        <th><input type="text" placeholder="Search" name="zip" class="table-search-input"
                                data-column="13">
                        </th>
                        <th><input type="text" placeholder="Search" name="zip" class="table-search-input"
                                data-column="14">
                        </th>
                        <th><input type="text" placeholder="Search" name="zip" class="table-search-input"
                                data-column="15">
                        </th>
                        <th><input type="text" placeholder="Search" name="zip" class="table-search-input"
                                data-column="16">
                        </th>
                        <th><input type="text" placeholder="Search" name="zip" class="table-search-input"
                                data-column="17">
                        </th>
                        <th><input type="text" placeholder="Search" name="zip" class="table-search-input"
                                data-column="18">
                        </th>
                        <th><input type="text" placeholder="Search" name="zip" class="table-search-input"
                                data-column="19">
                        </th>
                        <th><input type="text" placeholder="Search" name="zip" class="table-search-input"
                                data-column="20">
                        </th>
                        <th><input type="text" placeholder="Search" name="zip" class="table-search-input"
                                data-column="21">
                        </th>
                    </tr>
                </thead>

                <tbody class="table-body">
                    <tr>
                        <td>
                            <?php $deviations = getDeviation() ?>
                            <?php foreach($deviations as $deviation){ ?>
                            <p><?php echo ucfirst($deviation['REPORT_NUMBER']) ?></p>
                            <?php
            }
            ?>
                        </td>
                        <td>
                            <?php $deviations = getDeviation() ?>
                            <?php foreach($deviations as $deviation){ ?>
                            <p><?php echo ucfirst($deviation['MAIN_CATEGORY']) ?></p>
                            <?php
            }
            ?>
                        </td>
                        <td>
                            <?php $deviations = getDeviation() ?>
                            <?php foreach($deviations as $deviation){ ?>
                            <p><?php echo ucfirst($deviation['SUB_CATEGORY']) ?></p>
                            <?php
            }
            ?>
                        </td>
                        <td>
                            <?php $deviations = getDeviation() ?>
                            <?php foreach($deviations as $deviation){ ?>
                            <p><?php echo ucfirst($deviation['ADDED_DATE']) ?></p>
                            <?php
            }
            ?>
                        </td>
                        <td>
                            <?php $deviations = getDeviation() ?>
                            <?php foreach($deviations as $deviation){ ?>
                            <p><?php echo ucfirst($deviation['FROM_NAME']) ?></p>
                            <?php
            }
            ?>
                        </td>
                        <td>
                            <?php $deviations = getDeviation() ?>
                            <?php foreach($deviations as $deviation){ ?>
                            <p><?php echo ucfirst($deviation['FROM_USER_ID']) ?></p>
                            <?php
            }
            ?>
                        </td>
                        <td>
                            <?php $deviations = getDeviation() ?>
                            <?php foreach($deviations as $deviation){ ?>
                            <p><?php echo ucfirst($deviation['FROM_DEPARTMENT ']) ?></p>
                            <?php
            }
            ?>
                        </td>
                        <td>
                            <?php $deviations = getDeviation() ?>
                            <?php foreach($deviations as $deviation){ ?>
                            <p><?php echo ucfirst($deviation['SHORT_DESCRIPTION']) ?></p>
                            <?php
            }
            ?>
                        </td>
                        <td>
                            <?php $deviations = getDeviation() ?>
                            <?php foreach($deviations as $deviation){ ?>
                            <p><?php echo ucfirst($deviation['CLOSING']) ?></p>
                            <?php
            }
            ?>
                        </td>
                        <td>
                            <?php $deviations = getDeviation() ?>
                            <?php foreach($deviations as $deviation){ ?>
                            <p><?php echo ucfirst($deviation['CLOSING_USER_ID']) ?></p>
                            <?php
            }
            ?>
                        </td>
                        <td>
                            <?php $deviations = getDeviation() ?>
                            <?php foreach($deviations as $deviation){ ?>
                            <p><?php echo ucfirst($deviation['REMEDY']) ?></p>
                            <?php
            }
            ?>
                        </td>
                        <td>
                            <?php $deviations = getDeviation() ?>
                            <?php foreach($deviations as $deviation){ ?>
                            <p><?php echo ucfirst($deviation['REMEDY_NUMBER']) ?></p>
                            <?php
            }
            ?>
                        </td>
                        <td>
                            <?php $deviations = getDeviation() ?>
                            <?php foreach($deviations as $deviation){ ?>
                            <p><?php echo ucfirst($deviation['REMEDY_DUE']) ?></p>
                            <?php
            }
            ?>
                        </td>
                        <td>
                            <?php $deviations = getDeviation() ?>
                            <?php foreach($deviations as $deviation){ ?>
                            <p><?php echo ucfirst($deviation['OCCURRENCE']) ?></p>
                            <?php
            }
            ?>
                        </td>
                        <td>
                            <?php $deviations = getDeviation() ?>
                            <?php foreach($deviations as $deviation){ ?>
                            <p><?php echo ucfirst($deviation['OCCURRENCE_RAPORT_NUMBER']) ?></p>
                            <?php
            }
            ?>
                        </td>
                        <td>
                            <?php $deviations = getDeviation() ?>
                            <?php foreach($deviations as $deviation){ ?>
                            <p><?php echo ucfirst($deviation['FOD']) ?></p>
                            <?php
            }
            ?>
                        </td>
                        <td>
                            <?php $deviations = getDeviation() ?>
                            <?php foreach($deviations as $deviation){ ?>
                            <p><?php echo ucfirst($deviation['HMS_BASEN']) ?></p>
                            <?php
            }
            ?>
                        </td>
                        <td>
                            <?php $deviations = getDeviation() ?>
                            <?php foreach($deviations as $deviation){ ?>
                            <p><?php echo ucfirst($deviation['CLOSING_DUE']) ?></p>
                            <?php
            }
            ?>
                        </td>
                        <td>
                            <?php $deviations = getDeviation() ?>
                            <?php foreach($deviations as $deviation){ ?>
                            <p><?php echo ucfirst($deviation['CLOSED_DATE']) ?></p>
                            <?php
            }
            ?>
                        </td>
                        <td>
                            <?php $deviations = getDeviation() ?>
                            <?php foreach($deviations as $deviation){ ?>
                            <p><?php echo ucfirst($deviation['FEEDBACK_SENDER']) ?></p>
                            <?php
            }
            ?>
                        </td>
                        <td>
                            <?php $deviations = getDeviation() ?>
                            <?php foreach($deviations as $deviation){ ?>
                            <p><?php echo ucfirst($deviation['COMMENT']) ?></p>
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
    <script src="../../../../config/maint-qa-config.php"></script>
    <script>
    document.getElementById("footer").textContent = FOOTER;
    document.getElementById("133-maint-qa-1").textContent = MAINT_QA_1;
    document.getElementById("133-maint-qa-2").textContent = MAINT_QA_2;
    document.getElementById("133-maint-qa-3").textContent = MAINT_QA_3;
    document.getElementById("133-maint-qa-4").textContent = MAINT_QA_4;
    document.getElementById("133-maint-qa-5").textContent = MAINT_QA_5;
    document.getElementById("133-maint-qa-6").textContent = MAINT_QA_6;
    document.getElementById("133-maint-qa-7").textContent = MAINT_QA_7;
    document.getElementById("133-maint-qa-8").textContent = MAINT_QA_8;
    document.getElementById("133-maint-qa-9").textContent = MAINT_QA_9;
    document.getElementById("133-maint-qa-10").textContent = MAINT_QA_10;
    document.getElementById("133-maint-qa-11").textContent = MAINT_QA_11;
    document.getElementById("133-maint-qa-12").textContent = MAINT_QA_12;
    document.getElementById("133-maint-qa-13").textContent = MAINT_QA_13;
    document.getElementById("133-maint-qa-14").textContent = MAINT_QA_14;
    document.getElementById("133-maint-qa-15").textContent = MAINT_QA_15;
    document.getElementById("133-maint-qa-16").textContent = MAINT_QA_16;
    document.getElementById("133-maint-qa-17").textContent = MAINT_QA_17;
    document.getElementById("133-maint-qa-18").textContent = MAINT_QA_18;
    document.getElementById("133-maint-qa-19").textContent = MAINT_QA_19;
    document.getElementById("133-maint-qa-20").textContent = MAINT_QA_20;

    document.getElementById("133-maint-qa-1-link").href = MAINT_QA_1_LINK;
    document.getElementById("133-maint-qa-2-link").href = MAINT_QA_2_LINK;
    document.getElementById("133-maint-qa-3-link").href = MAINT_QA_3_LINK;
    document.getElementById("133-maint-qa-4-link").href = MAINT_QA_4_LINK;
    document.getElementById("133-maint-qa-5-link").href = MAINT_QA_5_LINK;
    document.getElementById("133-maint-qa-6-link").href = MAINT_QA_6_LINK;
    document.getElementById("133-maint-qa-7-link").href = MAINT_QA_7_LINK;
    document.getElementById("133-maint-qa-8-link").href = MAINT_QA_8_LINK;
    document.getElementById("133-maint-qa-9-link").href = MAINT_QA_9_LINK;
    document.getElementById("133-maint-qa-10-link").href = MAINT_QA_10_LINK;
    document.getElementById("133-maint-qa-11-link").href = MAINT_QA_11_LINK;
    document.getElementById("133-maint-qa-12-link").href = MAINT_QA_12_LINK;
    document.getElementById("133-maint-qa-13-link").href = MAINT_QA_13_LINK;
    document.getElementById("133-maint-qa-14-link").href = MAINT_QA_14_LINK;
    document.getElementById("133-maint-qa-15-link").href = MAINT_QA_15_LINK;
    document.getElementById("133-maint-qa-16-link").href = MAINT_QA_16_LINK;
    document.getElementById("133-maint-qa-17-link").href = MAINT_QA_17_LINK;
    document.getElementById("133-maint-qa-18-link").href = MAINT_QA_18_LINK;
    document.getElementById("133-maint-qa-19-link").href = MAINT_QA_19_LINK;
    document.getElementById("133-maint-qa-20-link").href = MAINT_QA_20_LINK;

    document.getElementById("133-maint-qa").textContent = MAINT_QA_DEVIATION_JOURNAL;
    </script>
    <script src="../../../../scripts/dateTime.js"></script>

</body>

</html>
<?php include 'session-redirect.php'; ?>
<?php require "../../../../php/function.php"; $authP8 = getAuthP8();?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="../../../../Pictures/maintenance_patch.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Maintenance</title>
    <link rel="stylesheet" href="../../../../styles.css">
    <link rel="stylesheet" href="../../../../styles/table.css">
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
                        <th class="">NAME</th>
                        <th class="">USER_ID</th>
                        <th class="">CATEGORY</th>
                        <th class="">CS_MP_TT</th>
                        <th class="">MP_ORG</th>
                        <th class="">MP_DUE</th>
                        <th class="">CS_ORG</th>
                        <th class="">CS_DUE</th>
                        <th class="">CS_CAT_C_ORG</th>
                        <th class="">CS_CAT_C_DUE</th>
                        <th class="">QI_ORG</th>
                        <th class="">QI_DUE</th>
                        <th class="">OJT_SUPERVISOR_ORG</th>
                        <th class="">OJT_SUPERVISOR_DUE</th>
                        <th class="">ASSESSOR_ORG</th>
                        <th class="">ASSESSOR_DUE</th>
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
                                data-column="15">
                        </th>
                    </tr>
                </thead>

                <tbody class="table-body">
                    <?php foreach($authP8 as $authP8Row): ?>
                    <tr>
                        <td><?= isset($authP8Row['NAME']) ? ucfirst($authP8Row['NAME']) : 'N/A' ?></td>
                        <td><?= isset($authP8Row['USER_ID']) ? ucfirst($authP8Row['USER_ID']) : 'N/A' ?></td>
                        <td><?= isset($authP8Row['CAT']) ? ucfirst($authP8Row['CAT']) : 'N/A' ?></td>
                        <td><?= isset($authP8Row['AUTH']) ? ucfirst($authP8Row['AUTH']) : 'N/A' ?></td>
                        <td><?= (!empty($authP8Row['MP_ORG']) && $authP8Row['MP_ORG'] !== '0000-00-00') ? date("d.m.Y", strtotime($authP8Row['MP_ORG'])) : '' ?>
                        </td>
                        <td><?= (!empty($authP8Row['MP_DUE']) && $authP8Row['MP_DUE'] !== '0000-00-00') ? date("d.m.Y", strtotime($authP8Row['MP_DUE'])) : '' ?>
                        </td>
                        <td><?= (!empty($authP8Row['CS_ORG']) && $authP8Row['CS_ORG'] !== '0000-00-00') ? date("d.m.Y", strtotime($authP8Row['CS_ORG'])) : '' ?>
                        </td>
                        <td><?= (!empty($authP8Row['CS_DUE']) && $authP8Row['CS_DUE'] !== '0000-00-00') ? date("d.m.Y", strtotime($authP8Row['CS_DUE'])) : '' ?>
                        </td>
                        <td><?= (!empty($authP8Row['CS_CAT_C_ORG']) && $authP8Row['CS_CAT_C_ORG'] !== '0000-00-00') ? date("d.m.Y", strtotime($authP8Row['CS_CAT_C_ORG'])) : '' ?>
                        </td>
                        <td><?= (!empty($authP8Row['CS_CAT_C_DUE']) && $authP8Row['CS_CAT_C_DUE'] !== '0000-00-00') ? date("d.m.Y", strtotime($authP8Row['CS_CAT_C_DUE'])) : '' ?>
                        </td>
                        <td><?= (!empty($authP8Row['QI_ORG']) && $authP8Row['QI_ORG'] !== '0000-00-00') ? date("d.m.Y", strtotime($authP8Row['QI_ORG'])) : '' ?>
                        </td>
                        <td><?= (!empty($authP8Row['QI_DUE']) && $authP8Row['QI_DUE'] !== '0000-00-00') ? date("d.m.Y", strtotime($authP8Row['QI_DUE'])) : '' ?>
                        </td>
                        <td><?= (!empty($authP8Row['OJT_SUPERVISOR_ORG']) && $authP8Row['OJT_SUPERVISOR_ORG'] !== '0000-00-00') ? date("d.m.Y", strtotime($authP8Row['OJT_SUPERVISOR_ORG'])) : '' ?>
                        </td>
                        <td><?= (!empty($authP8Row['OJT_SUPERVISOR_DUE']) && $authP8Row['OJT_SUPERVISOR_DUE'] !== '0000-00-00') ? date("d.m.Y", strtotime($authP8Row['OJT_SUPERVISOR_DUE'])) : '' ?>
                        </td>
                        <td><?= (!empty($authP8Row['ASSESSOR_ORG']) && $authP8Row['ASSESSOR_ORG'] !== '0000-00-00') ? date("d.m.Y", strtotime($authP8Row['ASSESSOR_ORG'])) : '' ?>
                        </td>
                        <td><?= (!empty($authP8Row['ASSESSOR_DUE']) && $authP8Row['ASSESSOR_DUE'] !== '0000-00-00') ? date("d.m.Y", strtotime($authP8Row['ASSESSOR_DUE'])) : '' ?>
                        </td>

                    </tr>
                    <?php endforeach; ?>

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

    document.getElementById("133-maint-qa").textContent = MAINT_QA_AUTH_P8;
    </script>
    <script src="../../../../scripts/dateTime.js"></script>

    <?php closeDb(); ?>

</body>

</html>
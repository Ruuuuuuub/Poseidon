<?php include 'session-redirect.php'; ?>
<?php require "get-user.php";
$positions = $conn->query("SELECT ID, POSITION FROM tbl_position");
$organisations = $conn->query("SELECT ID, ORGANISATION FROM organisation");
$departments = $conn->query("SELECT ID, DEPARTMENT FROM department");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="../../../../Pictures/maintenance_patch.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($user['NAME']) ?></title>
    <link rel="stylesheet" href="../../../../styles.css">
    <link rel="stylesheet" href="user.css">
    <style>
    body {
        background-image: url('../../../../Pictures/background.png');
    }
    </style>
</head>

<body>
    <nav class="page-navbar">
        <div class="title">
            <h1>133AW/Maintenance Squadron/QA/User/<?= htmlspecialchars($user['NAME'] ?? 'N/A') ?></h1>

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
        <Section class="user-container">
            <form method="POST" action="update-user.php" class="user-card user-card-item-1">
                <table class="table-qa-user-view">
                    <tr>
                        <th colspan=2>
                            <h2><strong><?= htmlspecialchars($user['NAME']) ?></strong></h2>
                        </th>
                    </tr>
                    <tr>
                        <td width="160px">
                            <p><strong>Employee Number:</strong></p>
                        </td>
                        <td>
                            <p style="text-align: center"><?= htmlspecialchars($user['EMPLOYEE_NUMBER']) ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td width="160px">
                            <p><strong>Phone:</strong></p>
                        </td>
                        <td>
                            <input type="text" name="PHONE" value="<?= htmlspecialchars($user['PHONE']) ?>">
                        </td>
                    </tr>
                    <tr>
                        <td width="160px">
                            <p><strong>Email:</strong></p>
                        </td>
                        <td>
                            <input type="email" name="EMAIL" value="<?= htmlspecialchars($user['EMAIL']) ?>">
                        </td>
                    </tr>
                    <tr>
                        <td width="160px">
                            <p><strong>Address:</strong></p>
                        </td>
                        <td>
                            <input type="text" name="ADDRESS" value="<?= htmlspecialchars($user['ADDRESS'] ?? '') ?>">
                        </td>
                    </tr>
                    <tr>
                        <td width="160px">
                            <p><strong>City:</strong></p>
                        </td>
                        <td>
                            <input type="text" name="CITY" value="<?= htmlspecialchars($user['CITY'] ?? '') ?>">
                        </td>
                    </tr>
                    <tr>
                        <td width="160px">
                            <p><strong>ZIP:</strong></p>
                        </td>
                        <td>
                            <input type="text" name="ZIP" value="<?= htmlspecialchars($user['ZIP'] ?? '') ?>">
                        </td>
                    </tr>
                    <tr>
                        <td width="160px">
                            <p><strong>Position:</strong></p>
                        </td>
                        <td>
                            <select name="POS">
                                <?php while ($posOption = $positions->fetch_assoc()): ?>
                                <option value="<?= $posOption['ID'] ?>"
                                    <?php if ((string)$user['POSITION'] === (string)$posOption['ID']) echo 'selected'; ?>>
                                    <?= htmlspecialchars($posOption['POSITION']) ?>
                                </option>
                                <?php endwhile; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="160px">
                            <p><strong>Organisation:</strong></p>
                        </td>
                        <td>
                            <select name="ORG">
                                <?php while ($orgOption = $organisations->fetch_assoc()): ?>
                                <option value="<?= $orgOption['ID'] ?>"
                                    <?= $user['ORGANISATION'] == $orgOption['ID'] ? 'selected' : '' ?>>
                                    <?= htmlspecialchars($orgOption['ORGANISATION']) ?>
                                </option>
                                <?php endwhile; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="160px">
                            <p><strong>Department:</strong></p>
                        </td>
                        <td>
                            <select name="DEP">
                                <?php while ($depOption = $departments->fetch_assoc()): ?>
                                <option value="<?= $depOption['ID'] ?>"
                                    <?= $user['DEPARTMENT'] == $depOption['ID'] ? 'selected' : '' ?>>
                                    <?= htmlspecialchars($depOption['DEPARTMENT']) ?>
                                </option>
                                <?php endwhile; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <!-- Her trengst det en tittle for hover og kanskje et ? for å si hva dette betyr -->
                        <!-- FIKSE TITLE -->
                        <td>
                            <p title="Test"><strong>Approved:</strong></p>
                        </td>
                        <td>
                            <label>
                                <input type="checkbox" name="APPROVED" value="1"
                                    <?= !empty($user['APPROVED']) ? 'checked' : '' ?>>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><strong>User Created:</strong></p>
                        </td>
                        <td>
                            <p style="text-align: center"><?= htmlspecialchars($user['USER_CREATED']) ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan=2><button type="submit">Save Changes</button></td>
                    </tr>
                </table>
                <input type="hidden" name="EMPLOYEE_NUMBER" value="<?= htmlspecialchars($user['EMPLOYEE_NUMBER']) ?>">
            </form>

            <!--  AUTH  -->
            <div class="user-card user-card-item-2">
                READ AND SIGN
            </div>
            <!--  AUTH  -->
            <div class="user-card user-card-item-3">
                <div class="qa-user-view-tabs">
                    <input type="radio" class="qa-user-view-radio" name="qa-user-view" id="qa-user-view-tab-1" checked>
                    <label for="qa-user-view-tab-1" class="qa-user-view-label">P-8A</label>
                    <div class="qa-user-view-content">
                        <?php if (!empty($authorisations)): ?>
                        <?php foreach ($authorisations as $auth): ?>
                        <table class="auth-table">
                            <thead>
                                <tr>
                                    <th colspan="3"><?= htmlspecialchars($auth['CAT']) ?></th>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th>ORG</th>
                                    <th>DUE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>MP</td>
                                    <td><?= htmlspecialchars($auth['MP_ORG'] ?? '-') ?></td>
                                    <td><?= htmlspecialchars($auth['MP_DUE'] ?? '-') ?></td>
                                </tr>
                                <tr>
                                    <td>CS</td>
                                    <td><?= htmlspecialchars($auth['CS_ORG'] ?? '-') ?></td>
                                    <td><?= htmlspecialchars($auth['CS_DUE'] ?? '-') ?></td>
                                </tr>
                                <tr>
                                    <td>CS Cat C</td>
                                    <td><?= htmlspecialchars($auth['CS_CAT_C_ORG'] ?? '-') ?></td>
                                    <td><?= htmlspecialchars($auth['CS_CAT_C_DUE'] ?? '-') ?></td>
                                </tr>
                                <tr>
                                    <td>QI</td>
                                    <td><?= htmlspecialchars($auth['QI_ORG'] ?? '-') ?></td>
                                    <td><?= htmlspecialchars($auth['QI_DUE'] ?? '-') ?></td>
                                </tr>
                                <tr>
                                    <td>OJT Supervisor</td>
                                    <td><?= htmlspecialchars($auth['OJT_SUPERVISOR_ORG'] ?? '-') ?></td>
                                    <td><?= htmlspecialchars($auth['OJT_SUPERVISOR_DUE'] ?? '-') ?></td>
                                </tr>
                                <tr>
                                    <td>Assessor</td>
                                    <td><?= htmlspecialchars($auth['ASSESSOR_ORG'] ?? '-') ?></td>
                                    <td><?= htmlspecialchars($auth['ASSESSOR_DUE'] ?? '-') ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <?php endforeach; ?>
                        <?php else: ?>
                        <p>No authorisation records found.</p>
                        <?php endif; ?>


                    </div>
                    <input type="radio" class="qa-user-view-radio" name="qa-user-view" id="qa-user-view-tab-2">
                    <label for="qa-user-view-tab-2" class="qa-user-view-label">BU</label>
                    <div class="qa-user-view-content">
                        Content for tab 2
                    </div>
                    <input type="radio" class="qa-user-view-radio" name="qa-user-view" id="qa-user-view-tab-3">
                    <label for="qa-user-view-tab-3" class="qa-user-view-label">RU</label>
                    <div class="qa-user-view-content">
                        Content for tab 3
                    </div>
                    <input type="radio" class="qa-user-view-radio" name="qa-user-view" id="qa-user-view-tab-4">
                    <label for="qa-user-view-tab-4" class="qa-user-view-label">LVT</label>
                    <div class="qa-user-view-content">
                        Content for tab 4
                    </div>
                    <input type="radio" class="qa-user-view-radio" name="qa-user-view" id="qa-user-view-tab-5">
                    <label for="qa-user-view-tab-5" class="qa-user-view-label">BU Equipment</label>
                    <div class="qa-user-view-content">
                        Content for tab 5
                    </div>
                </div>
            </div>

        </Section>
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
    </script>
    <script src="../../../../scripts/dateTime.js"></script>
    <script src="../../../../scripts/table-sort.js"></script>
    <script src="../../../../scripts/table-search.js"></script>
    <?php closeDb(); ?>
</body>

</html>
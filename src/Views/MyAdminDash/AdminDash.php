<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="AdminDash.css">
    
</head>
<body style="background-color: rgb(173, 216, 230);">
<?php include 'navbar.php'; ?>
    
    <div id="mySidenav" class="sidenav" style="font-style: 'kalam';">
        <div class="menulink">
            <div class="image-icon">
                <img src="../Images/dashboard-icon-.jpg" alt="Dashboard Icon">
            </div>
            <a href="#home">Dashboard</a>
        </div>

        <div class="menulink">
            <div class="image-icon">
                <img src="../Images/fee-icon.jpg" alt="Manage Fee Icon">
            </div>
            <a href="#home">Manage Fee</a>
        </div>

        <div class="menulink">
            <div class="image-icon">
                <img src="../Images/tutor-icon.jpg" alt="Manage Teachers Icon">
            </div>
            <a href="#home">Manage Teachers</a>
        </div>

        <div class="menulink">
            <div class="image-icon">
                <img src="../Images/student-icon.jpg" alt="Manage Students Icon">
            </div>
            <a href="#home">Manage Students</a>
        </div>

        <div class="menulink">
            <div class="image-icon">
                <img src="../Images/finance-icon.jpg" alt="Financial Overview Icon">
            </div>
            <a href="#home">Financial Overview</a>
        </div>

        <div class="menulink">
            <div class="image-icon">
                <img src="../Images/settings-icon.jpg" alt="Settings Icon">
            </div>
            <a href="#home">Settings</a>
        </div>
    </div>

    <div class="calendar">
        <div class="header">
            <button class="calendar-btn" id="prevBtn">
                <
            </button>
            <div class="monthYear" id="monthYear"></div>
            <button class="calendar-btn" id="nextBtn">
                >
            </button>
        </div>
        <div class="days">
            <div class="day">Mon</div>
            <div class="day">Tue</div>
            <div class="day">Wed</div>
            <div class="day">Thu</div>
            <div class="day">Fri</div>
            <div class="day">Sat</div>
            <div class="day">Sun</div>
        </div>
        <div class="dates" id="dates"></div>
    </div>
    <script src="AdminDash.js"></script>
</body>
</html>
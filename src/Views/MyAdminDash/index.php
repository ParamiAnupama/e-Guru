<?php include 'NavCalenderSideNav/navbar.php'; ?>
<?php include 'NavCalenderSideNav/Calender.php'; ?>
<?php include 'NavCalenderSideNav/SideNav.php'; ?>

<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="AdminDash.css">
</head>
<body>

    <div class="clock-container">
        <h1 id="time"></h1>
    </div>

    <script>
        function updateTime() {
            const timeElement = document.getElementById('time');
            const now = new Date();
            const hours = now.getHours().toString().padStart(2, '0');
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const seconds = now.getSeconds().toString().padStart(2, '0');
            timeElement.textContent = `${hours}:${minutes}:${seconds}`;
        }

        // Update the time every second
        setInterval(updateTime, 1000);

        // Call the function once initially to display the time immediately
        updateTime();
    </script>
        
    <div class="main">        
        <?php include 'MainContent/WelcomeCard.php'; ?>
        <?php include 'MainContent/ManageFee.php'; ?>
        <?php include 'MainContent/ManageTutors.php'; ?>
        <?php include 'MainContent/ManageStudents.php'; ?>
        <?php include 'MainContent/FinancialOverview.php'; ?>
        <?php include 'MainContent/ManageSubject.php'; ?>
        <?php include 'MainContent/ManageSessions.php'; ?>
        <?php include 'MainContent/PendingRequests.php'; ?>
        <?php include 'MainContent/Settings.php'; ?>           
    </div>
    
    <script src="AdminDash.js">
    </script>
</body>
</html>
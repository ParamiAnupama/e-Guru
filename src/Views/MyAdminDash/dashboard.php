<?php include 'NavCalenderSideNav/navbar.php'; ?>

<?php include 'NavCalenderSideNav/SideNav.php'; ?>
<?php
session_start();
include_once 'Connection/dbconnection.php';
// Check if admin is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    // Redirect to login page if not logged in
    header('Location: index.php');
    exit();
}
?>

<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="AdminDash.css">
    <style>
       
    </style>
</head>
<body>
    <!--<?php include 'NavCalenderSideNav/Calender.php'; ?>-->
    <div class="bg-image"></div>
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
<?php $conn->close(); ?>
</html>
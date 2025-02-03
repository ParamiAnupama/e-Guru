<?php 
// Database connection settings
require_once '../Connection/dbconnection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Session Records</title>
    <link rel="stylesheet" type="text/css" href="../AdminDash.css">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th colspan="9">Session Overview</th>
            </tr>
        </thead>
        <thead>
            <tr>
                <th>Session ID</th>
                <th>Student ID</th>
                <th>Tutor ID</th>
                <th>Subject ID</th>
                <th>Scheduled Date</th>
                <th>Scheduled Time</th>
                <th>Progress</th>
                <th>Feedback</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // SQL query to retrieve data from the sessions table, including subject_id
            $sql = "SELECT * FROM sessions ORDER BY scheduled_date DESC, scheduled_time DESC";
            $result = $conn->query($sql);

            // Check if there are any records and display each row
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>" . $row["session_id"] . "</td>
                        <td>" . $row["student_id"] . "</td>
                        <td>" . $row["tutor_id"] . "</td>
                        <td>" . $row["subject_id"] . "</td>
                        <td>" . $row["scheduled_date"] . "</td>
                        <td>" . $row["scheduled_time"] . "</td>
                        <td>" . $row["progress"] . "</td>
                        <td>" . $row["feedback"] . "</td>
                        <td>" . $row["status"] . "</td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='9'>No sessions found</td></tr>";
            }

            // Close the database connection
            $conn->close();
            ?>
        </tbody>

    </table>
</body>
</html>

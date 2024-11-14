<?php 
// Database connection settings
require_once '../Connection/dbconnection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fee Request Records</title>
    <link rel="stylesheet" type="text/css" href="../AdminDash.css">
    <style>
        /* Table styling */
        
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th colspan="7">Financial Overview as per Tutor</th>
            </tr>
        </thead>
        <thead>
            <tr>
                <th>Request ID</th>
                <th>Teacher ID</th>
                <th>Date</th>
                <th>Attachments</th>
                <th>Current Fee</th>
                <th>Requested Fee</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // SQL query to retrieve data from the fee_request table, sorted by date in descending order
            $sql = "SELECT requestID, teacherID, date, attachments, status, current_fee, requested_fee FROM fee_request ORDER BY date DESC";
            $result = $conn->query($sql);

            // Check if there are any records and display each row
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td data-label='Request ID'>" . $row["requestID"] . "</td>
                        <td data-label='Teacher ID'>" . $row["teacherID"] . "</td>
                        <td data-label='Date'>" . $row["date"] . "</td>
                        <td data-label='Attachments'>" . (!empty($row["attachments"]) ? "<a href='uploads/" . $row["attachments"] . "'>" . $row["attachments"] . "</a>" : "No Attachment") . "</td>
                        <td data-label='Current Fee'>" . $row["current_fee"] . "</td>
                        <td data-label='Requested Fee'>" . $row["requested_fee"] . "</td>
                        <td data-label='Status'>" . $row["status"] . "</td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No records found</td></tr>";
            }

            // Close the database connection
            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>

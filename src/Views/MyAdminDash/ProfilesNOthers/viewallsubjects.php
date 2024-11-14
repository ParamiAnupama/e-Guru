<?php 
// Database connection settings
require_once '../Connection/dbconnection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Subject Records</title>
    <link rel="stylesheet" type="text/css" href="../AdminDash.css">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th colspan="9">Subject Overview</th>
            </tr>
        </thead>
        <thead>
            <tr>
                <th>Subject ID</th>
                <th>Subject Name</th>
                <th>Display Picture</th>
                <th>Grade 6</th>
                <th>Grade 7</th>
                <th>Grade 8</th>
                <th>Grade 9</th>
                <th>Grade 10</th>
                <th>Grade 11</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // SQL query to retrieve data from the subject table
            $sql = "SELECT * FROM subject ORDER BY subjectID ";
            $result = $conn->query($sql);

            // Check if there are any records and display each row
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>" . $row["subjectID"] . "</td>
                        <td>" . $row["subjectName"] . "</td>
                        <td>" . (!empty($row["displayPic"]) ? "<img src='./uploads/" . $row["displayPic"] . "' alt='Subject Image' style='width:50px;'>" : "No Image") . "</td>
                        <td>" . ($row["grade_6"] ? 'Yes' : 'No') . "</td>
                        <td>" . ($row["grade_7"] ? 'Yes' : 'No') . "</td>
                        <td>" . ($row["grade_8"] ? 'Yes' : 'No') . "</td>
                        <td>" . ($row["grade_9"] ? 'Yes' : 'No') . "</td>
                        <td>" . ($row["grade_10"] ? 'Yes' : 'No') . "</td>
                        <td>" . ($row["grade_11"] ? 'Yes' : 'No') . "</td>
                        <td>
                            <a href='editsubject.php?subjectID=" . $row["subjectID"] . "' class='btn btn-primary btn-sm'>Edit</a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='10'>No records found</td></tr>";
            }

            // Close the database connection
            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>
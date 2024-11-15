<?php
// Database connection settings
require_once '../Connection/dbconnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the subject name
    $subjectName = $_POST['subjectName'];

    // Get the grades from the checkboxes
    $grades = isset($_POST['grades']) ? $_POST['grades'] : [];

    // Ensure grades is always an array
    if (!is_array($grades)) {
        $grades = [$grades]; // Wrap the string in an array if it is not already an array
    }

    // Use in_array to set boolean values
    $grade_6 = in_array(6, $grades) ? true : false;
    $grade_7 = in_array(7, $grades) ? true : false;
    $grade_8 = in_array(8, $grades) ? true : false;
    $grade_9 = in_array(9, $grades) ? true : false;
    $grade_10 = in_array(10, $grades) ? true : false;
    $grade_11 = in_array(11, $grades) ? true : false;

    // Handle file upload
    $targetDir = "uploads/"; // Make sure this directory exists
    $uploadedFileName = basename($_FILES["subjectIcon"]["name"]); // Store the filename in a variable
    $targetFile = $targetDir . $uploadedFileName;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is an actual image or fake image
    $check = getimagesize($_FILES["subjectIcon"]["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size (example: limit to 1MB)
    if ($_FILES["subjectIcon"]["size"] > 1000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (!in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Proceed if no errors occurred
    if ($uploadOk == 1) {
        // Try to upload the file
        if (move_uploaded_file($_FILES["subjectIcon"]["tmp_name"], $targetFile)) {
            // File uploaded successfully, insert into database
            $sql = "INSERT INTO subject (subjectName, displayPic, grade_6, grade_7, grade_8, grade_9, grade_10, grade_11) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            
            if ($stmt === false) {
                die("Error preparing the statement: " . $conn->error);
            }
            
            // Bind parameters for the query
            $stmt->bind_param("ssiiiiii", $subjectName, $uploadedFileName, $grade_6, $grade_7, $grade_8, $grade_9, $grade_10, $grade_11);

            // Execute the statement and check for errors
            if ($stmt->execute()) {
                echo "New subject added successfully.";
            } else {
                echo "Error: " . $stmt->error;
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "Sorry, your file was not uploaded due to an error.";
    }

    // Close database connection
    $conn->close();
}
?>

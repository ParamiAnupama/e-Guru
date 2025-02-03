<?php
include '../Connection/dbconnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subjectId = $_POST['subjectID'];
    $subjectName = $_POST['subjectName'];
    $grades = isset($_POST['grades']) ? $_POST['grades'] : [];
    $grade_6 = in_array(6, $grades) ? 1 : 0;
    $grade_7 = in_array(7, $grades) ? 1 : 0;
    $grade_8 = in_array(8, $grades) ? 1 : 0;
    $grade_9 = in_array(9, $grades) ? 1 : 0;
    $grade_10 = in_array(10, $grades) ? 1 : 0;
    $grade_11 = in_array(11, $grades) ? 1 : 0;

    // First, get the current subject data
    $getCurrentImg = "SELECT displayPic FROM subject WHERE subjectID = ?";
    $stmtGet = $conn->prepare($getCurrentImg);
    $stmtGet->bind_param("i", $subjectId);
    $stmtGet->execute();
    $result = $stmtGet->get_result();
    $currentSubject = $result->fetch_assoc();
    $stmtGet->close();

    // Handle file upload
    if (isset($_FILES["subjectIcon"]) && $_FILES["subjectIcon"]["name"]) {
        // New file is being uploaded
        $targetDir = "uploads/";
        $uploadedFileName = basename($_FILES["subjectIcon"]["name"]);
        $targetFile = $targetDir . $uploadedFileName;
        
        // If upload is successful, use new filename
        if (move_uploaded_file($_FILES["subjectIcon"]["tmp_name"], $targetFile)) {
            // Delete old file if it exists
            if (!empty($currentSubject['displayPic'])) {
                $oldFile = $targetDir . $currentSubject['displayPic'];
                if (file_exists($oldFile)) {
                    unlink($oldFile);
                }
            }
        } else {
            // If upload fails, keep existing image
            $uploadedFileName = $currentSubject['displayPic'];
        }
    } else {
        // No new file uploaded, keep existing image
        $uploadedFileName = $currentSubject['displayPic'];
    }

    // Update query
    $sql = "UPDATE subject SET 
            subjectName = ?, 
            displayPic = ?, 
            grade_6 = ?, 
            grade_7 = ?, 
            grade_8 = ?, 
            grade_9 = ?, 
            grade_10 = ?, 
            grade_11 = ? 
            WHERE subjectID = ?";
            
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssiiiiiii", 
        $subjectName, 
        $uploadedFileName, 
        $grade_6, 
        $grade_7, 
        $grade_8, 
        $grade_9, 
        $grade_10, 
        $grade_11, 
        $subjectId
    );
    
    if ($stmt->execute()) {
        header("Location: ../dashboard.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
    
    $stmt->close();
    $conn->close();
}
?>
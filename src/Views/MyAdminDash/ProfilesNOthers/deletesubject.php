<?php
include '../Connection/dbconnection.php';

if (isset($_GET['subjectID'])) {
    $subjectId = $_GET['subjectID'];
    
    // First, get the current image filename
    $getCurrentImg = "SELECT displayPic FROM subject WHERE subjectID = ?";
    $stmtGet = $conn->prepare($getCurrentImg);
    $stmtGet->bind_param("i", $subjectId);
    $stmtGet->execute();
    $result = $stmtGet->get_result();
    $subject = $result->fetch_assoc();
    $stmtGet->close();

    // Delete the subject from the database
    $sql = "DELETE FROM subject WHERE subjectID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $subjectId);
    
    if ($stmt->execute()) {
        // If database deletion was successful, delete the image file
        if (!empty($subject['displayPic'])) {
            $imagePath = "uploads/" . $subject['displayPic'];
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        
        // Redirect back to the dashboard
        header("Location: ../dashboard.php");
        exit;
    } else {
        echo "Error deleting subject: " . $stmt->error;
    }
    
    $stmt->close();
} else {
    echo "No subject ID provided";
}

$conn->close();
?>
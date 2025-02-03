<?php
include '../Connection/dbconnection.php';

// Retrieve the subjectId from URL
$subjectId = $_GET['subjectID'];

// Query to fetch subject details
$sql = "SELECT * FROM subject WHERE subjectID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $subjectId);
$stmt->execute();
$result = $stmt->get_result();
$subject = $result->fetch_assoc();
?>

<html>
<head>
    <title>Edit Subject</title>
    <link rel="stylesheet" type="text/css" href="../AdminDash.css">
    <style>
        body,html {
            height: 100vh;
            margin: 0;
            margin-top:30px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    
    <center>
        <h2>Edit Subject</h2>
        <h3 class="">Subject ID: <?php echo $subjectId; ?></h3>
        
        <!-- Edit Form -->
        <form class="subject-form" id="subjectForm" method="POST" action="../ProfilesNOthers/updatesubject.php" enctype="multipart/form-data">
            <input type="hidden" name="subjectID" value="<?php echo $subjectId; ?>">
            <div class="container3">
                <!-- Subject Name -->
                <div class="form-group">
                    <label for="subjectName">Subject Name</label>
                    <input 
                        type="text" 
                        id="subjectName" 
                        name="subjectName" 
                        placeholder="Enter subject name"
                        value="<?php echo $subject['subjectName']; ?>"
                        required
                    >
                </div>

                <!-- Grades Selection -->
                <div class="form-group">
                    <label>Select Grades</label>
                    <div class="grades-container">
                        <?php
                        // Array to loop through grade checkboxes
                        for ($i = 6; $i <= 11; $i++) {
                            $checked = $subject["grade_$i"] ? "checked" : ""; // Check if the grade is already selected
                            echo "<div class='grade-checkbox-wrapper'>
                                    <input type='checkbox' id='grade-$i' name='grades[]' value='$i' $checked>
                                    <label for='grade-$i'>
                                        <div class='checkbox-custom'></div>
                                        Grade $i
                                    </label>
                                  </div>";
                        }
                        ?>
                    </div>
                </div>

                <!-- Subject Icon -->
                <div class="form-group">
                    <label for="subjectIcon">Subject Icon</label>
                    <div class="file-input-container">
                        <input 
                            type="file" 
                            id="subjectIcon" 
                            name="subjectIcon" 
                            accept="image/*"
                        >
                        <div class="file-preview">
                            <?php if (!empty($subject['displayPic'])): ?>
                                <img src="uploads/<?php echo $subject['displayPic']; ?>" alt="Preview" id="previewImage" style="max-width: 90px; max-height: 90px;">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <button type="submit" class="submit-btn">Update Subject</button>
                <button type="button" class="delete-button" onclick="confirmDelete(<?php echo $subjectId; ?>)">Delete Subject</button>
                </div>
        </form>            
    </center>
    <script>
    function confirmDelete(subjectId) {
        if (confirm('Are you sure you want to delete this subject? This action cannot be undone.')) {
            window.location.href = '../ProfilesNOthers/deletesubject.php?subjectID=' + subjectId;
        }
    }
    </script>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<section id="add-subject">
<div class="container">
        <center>
            <h2>Manage Subjects</h2>
            <h3>Recent Subjects</h3>
        </center>
        <!-- Repeat subject-card div for each subject -->
        <?php
        
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
        
            // SQL query to retrieve all subjects from the subject table
            $sql = "SELECT subjectID, subjectName, displayPic FROM subject ORDER BY subjectID DESC LIMIT 5"; // Adjust the LIMIT as needed
            $result = $conn->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
                    <div class="subject-card">
                        <img src="./ProfilesNOthers/uploads/<?php echo htmlspecialchars($row['displayPic']); ?>" alt="<?php echo htmlspecialchars($row['subjectName']); ?>" class="subject-image">
                        <div class="user-info">
                            <p class="subject-name"><?php echo htmlspecialchars($row["subjectName"]); ?></p>
                        </div>
                        <div class="view-button"><a href="./ProfilesNOthers/editsubject.php?subjectID=<?php echo htmlspecialchars($row['subjectID']); ?>">View</a></div>
                    </div>
        <?php
                } 
                echo' <div class="view-button"><a href="./ProfilesNOthers/viewallsubjects.php">View All Subjects</a></div>';

            } else {
                echo "<p>No subjects found.</p>";
            }
        ?>
    </div>

    <div class="container">
        <center>
            <h2>Manage Subject</h2>
        </center>
        <form class="subject-form" id="subjectForm" method="POST" action="../ProfilesNOthers/addsubject.php" enctype="multipart/form-data">

            <div class="container3">
                <!-- Subject Name -->
                <div class="form-group">
                    <label for="subjectName">Subject Name</label>
                    <input 
                        type="text" 
                        id="subjectName" 
                        name="subjectName" 
                        placeholder="Enter subject name"
                        required
                    >
                </div>

                <!-- Grades Selection -->
                <div class="form-group">
                    <label>Select Grades</label>
                    <div class="grades-container">
                        <div class="grade-checkbox-wrapper">
                            <input type="checkbox" id="grade-6" name="grades[]" value="6">
                            <label for="grade-6">
                                <div class="checkbox-custom"></div>
                                Grade 6
                            </label>
                        </div>
                        <div class="grade-checkbox-wrapper">
                            <input type="checkbox" id="grade-7" name="grades[]" value="7">
                            <label for="grade-7">
                                <div class="checkbox-custom"></div>
                                Grade 7
                            </label>
                        </div>
                        <div class="grade-checkbox-wrapper">
                            <input type="checkbox" id="grade-8" name="grades[]" value="8">
                            <label for="grade-8">
                                <div class="checkbox-custom"></div>
                                Grade 8
                            </label>
                        </div>
                        <div class="grade-checkbox-wrapper">
                            <input type="checkbox" id="grade-9" name="grades[]" value="9">
                            <label for="grade-9">
                                <div class="checkbox-custom"></div>
                                Grade 9
                            </label>
                        </div>
                        <div class="grade-checkbox-wrapper">
                            <input type="checkbox" id="grade-10" name="grades[]" value="10">
                            <label for="grade-10">
                                <div class="checkbox-custom"></div>
                                Grade 10
                            </label>
                        </div>
                        <div class="grade-checkbox-wrapper">
                            <input type="checkbox" id="grade-11" name="grades[]" value="11">
                            <label for="grade-11">
                                <div class="checkbox-custom"></div>
                                Grade 11
                            </label>
                        </div>
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
                            required
                        >
                        <div class="file-preview">
                            <img src="/api/placeholder/90/90" alt="Preview" id="previewImage" style="display: none;">
                        </div>
                    </div>
                </div>

                <button type="submit" class="submit-btn">Add Subject</button>
            </div>
        </form>
    </div>
</section>

</body>
</html>

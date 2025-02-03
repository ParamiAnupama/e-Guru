<html>
<section id="manage-fee">
            <div class="container">
                <center>
                    <h2>Manage Fee</h2>
                    <h3>Recent requests</h3>
                </center>
                <!-- Repeat user-card div for other tutors -->
                 <?php
            // SQL query to retrieve 5 top from the fee_request table, sorted by date in descending order
            $sql = "SELECT requestID, teacherID, date, attachments, status FROM fee_request ORDER BY date DESC LIMIT 5";
            $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
            ?>
                                <div class="user-card">
                                    
                                        <p class="user-name">Teacher ID: <?php echo $row["teacherID"]; ?></p>
                                        <p class="last-logged-in">Date: <?php echo $row["date"]; ?></p>
                                        <p class="last-logged-in">Status: <?php echo $row["status"]; ?></p>
                                    
                                    <div class="view-button"><a href="./ProfilesNOthers/FeeRequest.php">View</a></div>
                                </div>
            <?php
                            }
                        } else {
                            echo "<tr><td colspan='5'>No records found</td></tr>";
                        }
            

            
            
            ?>
            </div>
        </section>
</html>
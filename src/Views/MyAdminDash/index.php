<?php include 'navbar.php'; ?>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="AdminDash.css">
</head>
<body>
    <div id="mySidenav" class="sidenav" style="font-style: 'kalam';">
        <div class="menulink">
            <div class="image-icon">
                <img src="../Images/Dash.png" alt="Dashboard Icon">
            </div>
            <a href="#dashboard">Dashboard</a>
        </div>

        <div class="menulink">
            <div class="image-icon">
                <img src="../Images/fee.png" alt="Manage Fee Icon">
            </div>
            <a href="#manage-fee">Manage Fee</a>
        </div>

        <div class="menulink">
            <div class="image-icon">
                <img src="../Images/teacher.png" alt="Manage Teachers Icon">
            </div>
            <a href="#manage-tutors">Manage Teachers</a>
        </div>

        <div class="menulink">
            <div class="image-icon">
                <img src="../Images/student.png" alt="Manage Students Icon">
            </div>
            <a href="#manage-students">Manage Students</a>
        </div>

        <div class="menulink">
            <div class="image-icon">
                <img src="../Images/finance.png" alt="Financial Overview Icon">
            </div>
            <a href="#home">Financial Overview</a>
        </div>

        <div class="menulink">
            <div class="image-icon">
                <img src="../Images/book.png" alt="Create Subject Icon">
            </div>
            <a href="#create-subject">Create Subject</a>
        </div>

        <div class="menulink">
            <div class="image-icon">
                <img src="../Images/pending.png" alt="Pending Requests Icon">
            </div>
            <a href="#pending-requests">Pending Requests</a>
        </div>

        <div class="menulink">
            <div class="image-icon">
                <img src="../Images/settings1.png" alt="Settings Icon">
            </div>
            <a href="#settings">Settings</a>
        </div>
    </div>

    <div class="calendar">
        <div class="header">
            <button class="calendar-btn" id="prevBtn">
                <
            </button>
            <div class="monthYear" id="monthYear"></div>
            <button class="calendar-btn" id="nextBtn">
                >
            </button>
        </div>
        <div class="days">
            <div class="day">Sat</div>
            <div class="day">Sun</div>
            <div class="day">Mon</div>
            <div class="day">Tue</div>
            <div class="day">Wed</div>
            <div class="day">Thu</div>
            <div class="day">Fri</div>
        </div>
        <div class="dates" id="dates"></div>
    </div>
    <script src="AdminDash.js"></script>    

    <div class="main">
        <section>
        <div class="container" id="dashboard"></div>
            <div class="banner" >
                <div class="text">
                    <h2>Welcome back,</h2>
                    <p>Keep up the good work!</p>
                </div>
                <img src="./Images/admin.jpg" alt="People reading a book" class="image">
            </div>

            <div class="overview">
                <center>
                    <h2>Overview</h2>
                </center>
                <div class="stats">
                    <div class="stat">
                        <h3>Total Users</h3>
                        <p>150</p>
                    </div>
                    <div class="stat">
                        <h3>Total Tutors</h3>
                        <p>30</p>
                    </div>
                    <div class="stat">
                        <h3>Total Students</h3>
                        <p>45</p>
                    </div>
                    <div class="stat">
                        <h3>Pending Requests</h3>
                        <p>08</p>
                    </div>
                </div>
            </div>
        </section>  

        <section id="manage-fee">
            <div class="container">
                <center>
                    <h2>Manage Fee</h2>
                </center>
            
                <div class="user-card">
                    <img src="./Images/SV2.jpg" alt="User Image" class="user-image">
                    <div class="user-info">
                        <p class="user-name">Ms. Ava James</p>
                        <p class="last-logged-in">Grade : </p>
                        <p class="last-logged-in">Requested fee increment :</p>
                    </div>
                    <div class="menu-icon"> View  </div>
                </div>
                <!-- Repeat user-card div for other tutors -->
            </div>
        </section>

        <section id="manage-tutors">
            <div class="container">
                <center>
                    <h2>Manage Tutors</h2>
                </center>

                <div class="search-bar">
                    <input type="text" placeholder="Search Tutor" class="search-input">
                    <button type="submit" class="search-button">Search</button>
                </div>
            
                <div class="user-card">
                    <img src="./Images/SV2.jpg" alt="User Image" class="user-image">
                    <div class="user-info">
                        <p class="user-name">Ms. Ava James</p>
                        <p class="last-logged-in">Last Logged In: 25 July 2024 2:00 pm</p>
                        <p class="last-logged-in">Subjects :</p>
                    </div>
                    <div class="menu-icon"> View  </div>
                </div>
                <!-- Repeat user-card div for other tutors -->
            </div>
        </section>

        <section >
            <div class="container" id="manage-students">
                <center>
                    <h2>Manage Students</h2>
                </center>

                <div class="search-bar">
                    <input type="text" placeholder="Search Student" class="search-input">
                    <button type="submit" class="search-button">Search</button>
                </div>
            
                <div class="user-card">
                    <img src="./Images/SV2.jpg" alt="User Image" class="user-image">
                    <div class="user-info">
                        <p class="user-name">Ms. Ava James</p>
                        <p class="last-logged-in">Last Logged In: 25 July 2024 2:00 pm</p>
                        <p class="last-logged-in">Subjects :</p>
                    </div>
                    <div class="menu-icon"> View  </div>
                </div>
                <!-- Repeat user-card div for other students -->
            </div>
        </section>

        <section id="add-subject">
            <div class="container">
                
                <form class="subject-form" id="subjectForm">
                    <h2>Add New Subject</h2>
                    <div class = "container3">
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
                                <input type="checkbox" id="grade-6" name="grades" value="6">
                                <label for="grade-6">
                                    <div class="checkbox-custom"></div>
                                    Grade 6
                                </label>
                            </div>
                            <div class="grade-checkbox-wrapper">
                                <input type="checkbox" id="grade-7" name="grades" value="7">
                                <label for="grade-7">
                                    <div class="checkbox-custom"></div>
                                    Grade 7
                                </label>
                            </div>
                            <div class="grade-checkbox-wrapper">
                                <input type="checkbox" id="grade-8" name="grades" value="8">
                                <label for="grade-8">
                                    <div class="checkbox-custom"></div>
                                    Grade 8
                                </label>
                            </div>
                            <div class="grade-checkbox-wrapper">
                                <input type="checkbox" id="grade-9" name="grades" value="9">
                                <label for="grade-9">
                                    <div class="checkbox-custom"></div>
                                    Grade 9
                                </label>
                            </div>
                            <div class="grade-checkbox-wrapper">
                                <input type="checkbox" id="grade-10" name="grades" value="10">
                                <label for="grade-10">
                                    <div class="checkbox-custom"></div>
                                    Grade 10
                                </label>
                            </div>
                            <div class="grade-checkbox-wrapper">
                                <input type="checkbox" id="grade-11" name="grades" value="11">
                                <label for="grade-11">
                                    <div class="checkbox-custom"></div>
                                    Grade 11
                                </label>
                            </div>
                        </div>
                        <div class="error-message" id="gradeError">Please select at least one grade</div>
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
                </form>
                </div>
            </div>
        </section>

        <section id="pending-requests">
            <div class="container">
                <center>
                    <h2>Pending Requests</h2>
                </center>
                <div class="container2">
                    
                    <div class="user-card">
                    <div class="request-info">
                        <p><strong>Name:</strong> John Doe</p>
                        <p><strong>Email:</strong> john.doe@example.com</p>
                        <p><strong>Subjects:</strong> Mathematics, Physics</p>
                        <p><strong>Experience:</strong> 5 years</p>
                        <p><strong>Education:</strong> Ph.D. in Physics, University of Example</p>
                        <p><strong>Certifications:</strong> Certified Mathematics Tutor</p>
                        <p><strong>Availability:</strong> Weekdays 4PM-8PM, Weekends 10AM-4PM</p>
                        <p><strong>Additional Information:</strong> Specializes in AP Physics and Calculus. Has experience tutoring both high school and college students.</p>
                    </div>
                    <div class="actions">
                        <button class="accept-button" onclick="acceptRequest()">Accept</button>
                        <button class="reject-button" onclick="rejectRequest()">Reject</button>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="settings">
            <div class="container">
                <center>
                    <h2>Settings</h2>
                </center>
                <div class="settings-form">
                    <form>
                        <div class="form-group">
                            <label for="site-name">Site Name:</label>
                            <input type="text" id="site-name" name="site-name" value="TutorHub">
                        </div>
                        <div class="form-group">
                            <label for="admin-email">Admin Email:</label>
                            <input type="email" id="admin-email" name="admin-email" value="admin@tutorhub.com">
                        </div>
                        <div class="form-group">
                            <label for="timezone">Timezone:</label>
                            <select id="timezone" name="timezone">
                                <option value="UTC-8">Pacific Time (PT)</option>
                                <option value="UTC-5">Eastern Time (ET)</option>
                                <option value="UTC+0">Coordinated Universal Time (UTC)</option>
                                <option value="UTC+1">Central European Time (CET)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="maintenance-mode">Maintenance Mode:</label>
                            <input type="checkbox" id="maintenance-mode" name="maintenance-mode">
                        </div>
                        <button type="submit" class="save-button">Save Changes</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
    
    <script src="AdminDash.js">
        
    </script>
</body>
</html>
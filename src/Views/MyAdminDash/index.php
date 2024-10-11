<?php include 'navbar.php'; ?>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="AdminDash.css">
</head>
<body>

<div class="clock-container">
        <h1 id="time"></h1>
    </div>

    <script>
        function updateTime() {
            const timeElement = document.getElementById('time');
            const now = new Date();
            const hours = now.getHours().toString().padStart(2, '0');
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const seconds = now.getSeconds().toString().padStart(2, '0');
            timeElement.textContent = `${hours}:${minutes}:${seconds}`;
        }

        // Update the time every second
        setInterval(updateTime, 1000);

        // Call the function once initially to display the time immediately
        updateTime();
    </script>
    
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
            <a href="#add-subject">Manage Subject</a>
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
            <div class="container" id="dashboard">
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
                    <div class="menu-icon"><a href ="./FeeRequest.php">View</a></div>
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
                    <div class="menu-icon"><a href="./TeacherProfile.php"> View </a> </div>
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
                    <div class="menu-icon"><a href="./StudentProfile.php"> View </a></div>
                </div>
                <!-- Repeat user-card div for other students -->
            </div>
        </section>

        <section id="add-subject">
            <div class="container">
                <center>
                    <h2>Manage Subject</h2>
                </center>
                <form class="subject-form" id="subjectForm">
                    
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
            <center>
                <h2>Manage Subjects</h2>
            </center>
            <div class="container">
                <div class="search-bar">
                        <input type="text" placeholder="Search Subject" class="search-input">
                        <button type="submit" class="search-button">Search</button>
                </div>

                <div class="subject-card">
                        <img src="./Images/SV2.jpg" alt="Subject Image" class="subject-image">
                        <div class="user-info">
                            <p class="subject-name">Geography</p>
                        </div>
                        <div class="menu-icon"><a href="./Subject.php"> View </a></div>
                </div>
            </div>  
                <!-- Repeat subject-card div for other subjects -->
            

        </section>

        <section id="pending-requests">
            <div class="container">
                <center>
                    <h2>Pending Requests</h2>
                </center>
               
                <div class="user-card">
                    <div class="pending-user-info">
                        <p><strong>Name:</strong> John Doe</p>
                        <p><strong>Email:</strong> john.doe@example.com</p>
                        <p><strong>Subjects:</strong> Mathematics, Physics</p>
                        <p><strong>Experience:</strong> 5 years</p>
                        <p><strong>Education:</strong> Ph.D. in Physics, University of Example</p>
                    </div>
                    <div class="actions">
                        <button class="accept-button" onclick="acceptRequest()">Accept</button>
                        <button class="reject-button" onclick="rejectRequest()">Reject</button>
                        <button class="view-button"><a  href="./Pending.php"> View</a></button>
                    </div>
                </div>
                
            </div>
        </section>

        <section id="settings">
            
            <center>
                <div class="settings-header">
                    <h2>Admin Settings</h2>
                    <p>Manage your application settings</p>
                </div>
            </center>
            <div class="container">
            <div class="settings-container">
                <div class="setting-item">
                    <div class="setting-info">
                        <h3>Email Notifications</h3>
                        <p>Receive email updates for important system events</p>
                    </div>
                    <label class="toggle-switch">
                        <input type="checkbox" checked>
                        <span class="slider"></span>
                    </label>
                </div>

                <div class="setting-item">
                    <div class="setting-info">
                        <h3>Two-Factor Authentication</h3>
                        <p>Enhance security with 2FA verification</p>
                    </div>
                    <label class="toggle-switch">
                        <input type="checkbox">
                        <span class="slider"></span>
                    </label>
                </div>

                <div class="setting-item">
                    <div class="setting-info">
                        <h3>API Access</h3>
                        <p>Allow external API connections</p>
                    </div>
                    <label class="toggle-switch">
                        <input type="checkbox" checked>
                        <span class="slider"></span>
                    </label>
                </div>

                <div class="setting-item">
                    <div class="setting-info">
                        <h3>Maintenance Mode</h3>
                        <p>Temporarily disable public access</p>
                    </div>
                    <label class="toggle-switch">
                        <input type="checkbox">
                        <span class="slider"></span>
                    </label>
                </div>
            </div>
        </div>
        </section>
    </div>
    
    <script src="AdminDash.js">
        
    </script>
</body>
</html>
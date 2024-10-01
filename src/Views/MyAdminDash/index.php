
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="AdminDash.css">
    
</head>
<body style="background-color: rgb(173, 216, 230);">

<?php include 'navbar.php'; ?>
    <div id="mySidenav" class="sidenav" style="font-style: 'kalam';">
        <div class="menulink">
            <div class="image-icon">
                <img src="../Images/dashboard-icon-.jpg" alt="Dashboard Icon">
            </div>
            <a href="#dashboard">Dashboard</a>
        </div>

        <div class="menulink">
            <div class="image-icon">
                <img src="../Images/fee-icon.jpg" alt="Manage Fee Icon">
            </div>
            <a href="#">Manage Fee</a>
        </div>

        <div class="menulink">
            <div class="image-icon">
                <img src="../Images/tutor-icon.jpg" alt="Manage Teachers Icon">
            </div>
            <a href="#manage-tutors">Manage Teachers</a>
        </div>

        <div class="menulink">
            <div class="image-icon">
                <img src="../Images/student-icon.jpg" alt="Manage Students Icon">
            </div>
            <a href="#manage-students">Manage Students</a>
        </div>

        <div class="menulink">
            <div class="image-icon">
                <img src="../Images/finance-icon.jpg" alt="Financial Overview Icon">
            </div>
            <a href="#home">Financial Overview</a>
        </div>

        <div class="menulink">
            <div class="image-icon">
                <img src="../Images/settings-icon.jpg" alt="Settings Icon">
            </div>
            <a href="#home">Settings</a>
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
    <section id="dashboard">
        <div class="welcome-card">
            
                <div class="text">
                    <h2>Welcome back,</h2>
                    <p>Keep up the good work!</p>
                </div>
                <img src="./Images/SV2.jpg" alt="People reading a book" class="image">
            
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
    <section id="manage-tutors">
        <div class ="container">
            <center>
            <h2>Manage Tutors</h2>
            </center>

            <div class="search-bar">
            <input type="text" placeholder="Search Tutor" class="search-input">
            <button type="submit" class="search-button">Search</button>
            </div>
        </div>
        <div class="container">
            <div class="user-card">
                <img src="./Images/SV2.jpg" alt="User Image" class="user-image">
                <div class="user-info">
                    <p class="user-name">Ms. Ava James</p>
                    <p class="last-logged-in">Last Logged In: 25 July 2024 2:00 pm</p>
                    <p class="last-logged-in">Subjects :</p>
                </div>
                <div class="menu-icon">...</div>
            </div>
            <div class="user-card">
                <img src="./Images/SV2.jpg" alt="User Image" class="user-image">
                <div class="user-info">
                    <p class="user-name">Ms. Ava James</p>
                    <p class="last-logged-in">Last Logged In: 25 July 2024 2:00 pm</p>
                    <p class="last-logged-in">Subjects :</p>
                </div>
                <div class="menu-icon">...</div>
            </div>
            <div class="user-card">
                <img src="./Images/SV2.jpg" alt="User Image" class="user-image">
                <div class="user-info">
                    <p class="user-name">Ms. Ava James</p>
                    <p class="last-logged-in">Last Logged In: 25 July 2024 2:00 pm</p>
                    <p class="last-logged-in">Subjects :</p>
                </div>
                <div class="menu-icon">...</div>
            </div>
            <div class="user-card">
                <img src="./Images/SV2.jpg" alt="User Image" class="user-image">
                <div class="user-info">
                    <p class="user-name">Ms. Ava James</p>
                    <p class="last-logged-in">Last Logged In: 25 July 2024 2:00 pm</p>
                    <p class="last-logged-in">Subjects :</p>
                </div>
                <div class="menu-icon">...</div>
            </div>
        </div>
        
    </section>

    <section id="manage-students">
        <div class ="container">
            <center>
            <h2>Manage Students</h2>
            </center>

            <div class="search-bar">
            <input type="text" placeholder="Search Student" class="search-input">
            <button type="submit" class="search-button">Search</button>
            </div>
        </div>
        <div class="container">
            <div class="user-card">
                <img src="./Images/SV2.jpg" alt="User Image" class="user-image">
                <div class="user-info">
                    <p class="user-name">Ms. Ava James</p>
                    <p class="last-logged-in">Last Logged In: 25 July 2024 2:00 pm</p>
                    <p class="last-logged-in">Subjects :</p>
                </div>
                <div class="menu-icon">...</div>
            </div>
            <div class="user-card">
                <img src="./Images/SV2.jpg" alt="User Image" class="user-image">
                <div class="user-info">
                    <p class="user-name">Ms. Ava James</p>
                    <p class="last-logged-in">Last Logged In: 25 July 2024 2:00 pm</p>
                    <p class="last-logged-in">Subjects :</p>
                </div>
                <div class="menu-icon">...</div>
            </div>
            <div class="user-card">
                <img src="./Images/SV2.jpg" alt="User Image" class="user-image">
                <div class="user-info">
                    <p class="user-name">Ms. Ava James</p>
                    <p class="last-logged-in">Last Logged In: 25 July 2024 2:00 pm</p>
                    <p class="last-logged-in">Subjects :</p>
                </div>
                <div class="menu-icon">...</div>
            </div>
            <div class="user-card">
                <img src="./Images/SV2.jpg" alt="User Image" class="user-image">
                <div class="user-info">
                    <p class="user-name">Ms. Ava James</p>
                    <p class="last-logged-in">Last Logged In: 25 July 2024 2:00 pm</p>
                    <p class="last-logged-in">Subjects :</p>
                </div>
                <div class="menu-icon">...</div>
            </div>
        </div>
        
    </section>
    </div>
    
    
    
    
</body>
</html>
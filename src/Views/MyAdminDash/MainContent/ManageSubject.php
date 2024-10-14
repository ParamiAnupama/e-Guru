<html>
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
        </html>
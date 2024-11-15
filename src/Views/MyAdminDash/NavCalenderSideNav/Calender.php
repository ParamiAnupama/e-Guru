<html>
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
</html>
     
// calendar.js
const monthYearElement = document.getElementById('monthYear');
const datesElement = document.getElementById('dates');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

let currentDate = new Date();

let selectedDate   
 = null; // Store the selected date

const updateCalendar = () => {
    const currentYear = currentDate.getFullYear();
    const currentMonth = currentDate.getMonth();

    const firstDay = new Date(currentYear, currentMonth, 1);
    const lastDay = new Date(currentYear, currentMonth + 1, 0);
    const totalDays = lastDay.getDate();
    const firstDayIndex = firstDay.getDay();
    const lastDayIndex = lastDay.getDay();

    const monthYearString = currentDate.toLocaleString(
        'default',
        { month: 'long', year: 'numeric' }
    );
    monthYearElement.textContent = monthYearString;

    let datesHTML = '';

    // Handle previous month's days
    for (let i = firstDayIndex ; i >= 0; i--) {
        const prevDate = new Date(currentYear, currentMonth , 0 - i);
        datesHTML += `<div class="date blank">${prevDate.getDate()}</div>`;
    }

    // Handle current month's days
    for (let i = 1; i <= totalDays; i++) {
        const date = new Date(currentYear, currentMonth, i);
        const activeClass = date.toDateString() === new Date().
        toDateString() ? 'active' : '';
        datesHTML += `<div class="date ${activeClass}">${i}</div>`;
    }

    
    /*for (let i = 1; i <= 7 - lastDayIndex-firstDayIndex; i++) {
        const nextDate = new Date(currentYear, currentMonth +
             1, i);
        datesHTML += `<div class="date inactive">${nextDate.
            getDate()}</div>`;
    }*/

    datesElement.innerHTML = datesHTML;

        
}

if (prevBtn) {
  prevBtn.addEventListener('click', () => {
    currentDate.setMonth(currentDate.getMonth() - 1);
    updateCalendar();
});
}

if (nextBtn) {
    nextBtn.addEventListener('click', () => {
        currentDate.setMonth(currentDate.getMonth() + 1);
        updateCalendar();
    });
    }

updateCalendar();

function scrollToSection(sectionId) {
    var targetElement = document.getElementById(sectionId);
    var targetOffset = targetElement.offsetTop;
    window.scrollTo({
        top: targetOffset,
        behavior: 'smooth'
    });
}

document.querySelectorAll('menulink a').forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        var sectionId = this.getAttribute('href').substring(1); // Remove the "#"
        scrollToSection(sectionId);
    });
});


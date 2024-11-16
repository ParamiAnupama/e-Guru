<!-- src/Views/navbar.php -->
<nav>
    <ul>
        <li><a href="#home" id="nav-home">Home</a></li>
        <li><a href="#howitworks" id="nav-howitworks">How it Works</a></li>
        <li><a href="#why" id="nav-why">Why</a></li>
        <li><a href="#reviews" id="nav-reviews">Reviews</a></li>
        <li><a href="#tutors" id="nav-tutors">Tutors</a></li>
        <li><a href="#subjects" id="nav-subjects">Subjects</a></li>
        <li><a href="#search" id="nav-search">Search</a></li>
        <li><a href="#about" id="nav-about">About</a></li>
        <li><a href="#faq" id="nav-faq">FAQ</a></li>
        <li><a href="#forum" id="nav-forum">Forum</a></li>
        <li><a href="/tutor-login" id="nav-tutor-login">Tutor Login</a></li>
        <li><a href="/student-login" id="nav-student-login">Student Login</a></li>
    </ul>
</nav>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Function to remove the active class from all links
        function removeActiveClasses() {
            document.querySelectorAll("nav ul li a").forEach(link => {
                link.classList.remove("active");
            });
        }

        // Function to add the active class to the currently viewed section
        function addActiveClass() {
            const sections = document.querySelectorAll("section"); // Assuming each section has an id matching the href of nav links
            let scrollPos = window.scrollY + 100; // Add offset for better detection

            sections.forEach(section => {
                if (scrollPos >= section.offsetTop && scrollPos < section.offsetTop + section.offsetHeight) {
                    let id = section.getAttribute("id");
                    removeActiveClasses();
                    document.querySelector(`a[href="#${id}"]`).classList.add("active");
                }
            });
        }

        // Run addActiveClass on scroll and on page load
        window.addEventListener("scroll", addActiveClass);
        addActiveClass(); // Initial check on page load
    });
</script>

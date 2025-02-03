<!-- src/Views/navbar.php -->
<nav>
    
    <ul>
        <?php $current_page = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); ?>
        <li><a href="/" class="<?php echo ($current_page == '/' ? 'active' : ''); ?>">Home</a></li>
        <li><a href="/how-it-works" class="<?php echo ($current_page == '/how-it-works' ? 'active' : ''); ?>">How it Works</a></li>
        <li><a href="/why" class="<?php echo ($current_page == '/why' ? 'active' : ''); ?>">Why</a></li>
        <li><a href="/reviews" class="<?php echo ($current_page == '/reviews' ? 'active' : ''); ?>">Reviews</a></li>
        <li><a href="/tutors" class="<?php echo ($current_page == '/tutors' ? 'active' : ''); ?>">Tutors</a></li>
        <li><a href="/subjects" class="<?php echo ($current_page == '/subjects' ? 'active' : ''); ?>">Subjects</a></li>
        <li><a href="/search" class="<?php echo ($current_page == '/search' ? 'active' : ''); ?>">Search</a></li>
        <li><a href="/about" class="<?php echo ($current_page == '/about' ? 'active' : ''); ?>">About</a></li>
        <li><a href="/faq" class="<?php echo ($current_page == '/faq' ? 'active' : ''); ?>">FAQ</a></li>
        <li><a href="/forum" class="<?php echo ($current_page == '/forum' ? 'active' : ''); ?>">Forum</a></li>
        <li><a href="/tutor-login" class="<?php echo ($current_page == '/tutor-login' ? 'active' : ''); ?>">Tutor Login</a></li>
        <li><a href="/student-login" class="<?php echo ($current_page == '/student-login' ? 'active' : ''); ?>">Student Login</a></li>
    </ul>
</nav>

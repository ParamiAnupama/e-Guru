<h1>Welcome to Simple PHP MVC Starter!</h1>

<ul>
    <?php foreach ($tutors as $tutor) : ?>
        <li><?= $tutor->name ?> (<?= $tutor->tutorID ?>)</li>
    <?php endforeach; ?>
</ul>
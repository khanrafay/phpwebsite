<?php require base_path("views/partials/header.php") ?>
<?php require base_path("views/partials/nav.php") ?>

<?php require base_path("views/partials/banner.php") ?>


<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

        <p>Notes page</p>
        <?php foreach ($notes as $note) : ?>
            <ul>
                <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underulne">
                    <?= htmlspecialchars($note['body']) ?>
                </a>
            </ul>
        <?php endforeach ?>
        <div class="mt-10">
            <a href="/notes/create" class="text-blue-500 hover:underline font-bold size-10">Create a note</a>
        </div>
    </div>

</main>

<?php require base_path("views/partials/footer.php") ?>
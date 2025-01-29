<?php require base_path("views/partials/header.php") ?>
<?php require base_path("views/partials/nav.php") ?>

<?php require base_path("views/partials/banner.php") ?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

        <a href='/notes' class='text-blue-500 hover:underline'>Go Back</a>
        <p><?= htmlspecialchars($note['body']) ?></p>

        <form method="POST">
            <input name="id" hidden value="<?= $note['id'] ?>" />
            <input name="_method" hidden value="DELETE" />
            <button class="text-red-500 mt-10">Delete</button>
        </form>
    </div>
</main>

<?php require base_path("views/partials/footer.php") ?>
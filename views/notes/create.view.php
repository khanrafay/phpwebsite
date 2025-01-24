<?php require base_path("views/partials/header.php") ?>
<?php require base_path("views/partials/nav.php") ?>

<?php require base_path("views/partials/banner.php") ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <form class="max-w-sm" method="POST">
            <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Note</label>
            <textarea name="body" id="body" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Note..."><?= $_POST['body'] ?? '' ?></textarea>
            <p class="text-red-500 mt-2 text-xs ml-1"><?= $errors['body'] ?? '' ?></p>
            <button type="submit" class=" mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>

        </form>
    </div>
</main>

<?php require base_path("views/partials/footer.php") ?>
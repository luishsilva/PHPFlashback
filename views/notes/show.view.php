<?php 
  require(base_path('views/partials/head.php'));
  require(base_path('views/partials/nav.php'));
  require(base_path('views/partials/banner.php'));
?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <p class="mb-4">
      <a href="/notes" class="text-blue-500 underline">Go Back</a>
    </p>
      <p>
        <?= htmlspecialchars($note['body']) ?>
      </p>
  </div>
</main>

<?php require( base_path('views/partials/footer.php')); ?>
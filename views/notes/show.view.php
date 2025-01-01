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

      <footer class="mt-6">
        <a 
          href="/note/edit?id=<?= $note['id']?>" 
          class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            Edit
        </a>
      </footer>
      
      <!-- <form method="POST" class="mt-6">
        trick form to send a "DELETE METHOD"
        <input type="hidden" name="_method" value="DELETE">
        
        <input type="hidden" name="id" value="<?= $note['id']; ?>"/>
        <button class="text-sm text-red-500">Delete</button>
      </form> -->
  </div>
</main>

<?php require( base_path('views/partials/footer.php')); ?>
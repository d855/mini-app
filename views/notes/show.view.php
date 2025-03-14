<?php require base_path("views/partials/head.php") ?>
<?php require base_path("views/partials/nav.php") ?>
<?php require base_path("views/partials/banner.php") ?>
	
	<main>
		<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
			<h1 class="text-2xl font-semibold"><?= htmlspecialchars($note['title']) ?></h1>
			
			<p>
				<?= htmlspecialchars($note['body']) ?>
			</p>
			
			<form method="POST">
				<input type="hidden" name="id" value="<?= $note['id'] ?>">
				
				<input type="hidden" name="_method" value="DELETE">
				
				<button type="submit" class="block mt-10 bg-red-500 text-white w-fit px-3 py-2">Delete note</button>
			</form>
		</div>
	</main>

<?php require base_path("views/partials/footer.php") ?>
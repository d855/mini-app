<?php require base_path("views/partials/head.php") ?>
<?php require base_path("views/partials/nav.php") ?>
<?php require base_path("views/partials/banner.php") ?>
	
	<main>
		<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
			<h1 class="text-2xl font-semibold"><?= htmlspecialchars($note['title']) ?></h1>
			
			<p>
				<?= htmlspecialchars($note['body']) ?>
			</p>
		</div>
	</main>

<?php require base_path("views/partials/footer.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>ZiP - Home</title>
	<?php include 'moduler/head.php'; ?>
</head>

<body>
	<header id="top">
        <?php include 'moduler/header.php'; ?>
        <h1>Home</h1>
	</header>

	<main>
        <?php include 'moduler/pictureSlide.php'; ?>
            <h2>Siste nytt</h2>
            <?php include 'moduler/news.php'; ?>
            <?php include 'moduler/eventsList.php'; ?>
	</main>
	<aside>
        <h2>Streams</h2>
			<?php include 'moduler/twitter.php'; ?>
			<?php include 'moduler/tracksQuick.php'; ?>
	</aside>
    <?php include 'moduler/footer.php'; ?>
    <div class="clearfix"></div>
</body>
</html>

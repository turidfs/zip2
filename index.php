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
        <section class="news">
            <h2>Siste nytt</h2>
            <?php include 'moduler/news.php'; ?>
        </section>
        <section class="events">
            <h3>Events</h3>
            <?php include 'moduler/eventsList.php'; ?>
        </section>
	</main>
	<aside>
			<?php include 'moduler/twitter.php'; ?>
			<?php include 'moduler/tracksQuick.php'; ?>
	</aside>
    <?php include 'moduler/footer.php'; ?>
</body>
</html>

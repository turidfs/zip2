<!DOCTYPE html>
<html lang="en">
<head>
	<title>ZiP - Blog</title>
	<?php include 'moduler/head.php'; ?>
</head>
<body>
	<header>
        <?php include 'moduler/header.php'; ?>
		<h1>Blog</h1>
	</header>
	<main>
        <h2>Bloggerne</h2><br />
        <section class="bloggerne">
            <!-- <h2>Bloggerne</h2><br />--> <!-- Lagt til br fordi den ødelegger knappene -->
            <figure>
                <img src="image/blogSmall.png" />
                <figcaption>Felles</figcaption>
            </figure>
            <figure>
                <img src="image/blogSmall.png" />
                <figcaption>Natalie</figcaption>
            </figure>
            <figure>
                <img src="image/blogSmall.png" />
                <figcaption>Fredrik</figcaption>
            </figure>
            <figure>
                <img src="image/blogSmall.png" />
                <figcaption>Irene</figcaption>
            </figure>
        </section>

        <h2>Siste poster</h2>
        <article>
            <img src="image/blogSmall.png" align="left"/>
            <p>Tittel</p>
            <p>Dato etc</p>
            <details>
                <summary>Her kommer et sammendrag av blog posten.</summary>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam porta mattis lacus ornare convallis. Nam pretium lacinia congue. Suspendisse euismod nibh lorem, at suscipit nisi eleifend vitae. Maecenas vel varius sapien. Phasellus leo arcu, lacinia et sodales id, iaculis vitae tortor. Aenean porttitor nulla dapibus, rhoncus arcu et, volutpat magna. Cras mollis nec turpis eu rhoncus. Maecenas faucibus, velit hendrerit dictum porta, nisl est tincidunt tellus, sit amet tempus felis libero eget augue. Etiam non dolor eget ante bibendum suscipit pharetra id nisl. Curabitur euismod ultricies ante sed dignissim. Cras interdum ligula aliquet, congue nulla sed, viverra sem. Etiam imperdiet tempus mauris eu varius.</p>
            </details>
        </article>
        <article>
            <img src="image/blogSmall.png" align="left"/>
            <p>Tittel</p>
            <p>Dato etc</p>
            <details>
                <summary>Her kommer et sammendrag av blog posten.</summary>
                <p>Nullam gravida tempus nulla, ut tempor elit. Nam tincidunt massa arcu, id placerat dui convallis eu. Nullam est justo, vestibulum at venenatis nec, viverra at lacus. Quisque eu ipsum ac nunc accumsan suscipit. Vestibulum vel metus tortor. Aliquam eros dolor, aliquam quis volutpat et, rhoncus sed nunc. Etiam lacus ex, sagittis eu pellentesque volutpat, imperdiet non erat. Mauris vitae leo nec urna volutpat sollicitudin. Etiam semper molestie nisi, quis posuere enim accumsan at. Aenean sit amet orci libero. Curabitur vulputate consectetur lorem non facilisis. Curabitur pretium quam a magna consequat pretium. Mauris porttitor, metus vitae ornare tempus, quam felis molestie nisi, id finibus tortor elit sed nibh.</p>
            </details>
        </article>
        <article>
            <img src="image/blogSmall.png" align="left"/>
            <p>Tittel</p>
            <p>Dato etc</p>
            <details>
                <summary>Her kommer et sammendrag av blog posten.</summary>
                <p>Morbi quis imperdiet risus. Integer consectetur justo quis mauris blandit posuere. Suspendisse posuere leo eget varius rhoncus. Donec ut malesuada sem. Donec vitae condimentum felis, vitae eleifend velit. Aenean molestie orci dui, in dictum turpis volutpat a. In hac habitasse platea dictumst. Donec et turpis sodales, auctor diam ac, volutpat purus. Nullam ac elit id eros luctus facilisis.</p>
            </details>
        </article>
        <article>
            <img src="image/blogSmall.png" align="left"/>
            <p>Tittel</p>
            <p>Dato etc</p>
            <details>
                <summary>Her kommer et sammendrag av blog posten.</summary>
                <p>Duis eget auctor metus, eu euismod nulla. Aliquam molestie ipsum non finibus tristique. Pellentesque ac vestibulum augue. Morbi odio dolor, vehicula sed libero eu, consequat fermentum nunc. Aliquam erat volutpat. Nullam lobortis, sem nec congue laoreet, ex augue laoreet dui, id aliquam libero orci vitae arcu. In et scelerisque neque. Aliquam semper ligula a libero finibus, vitae auctor enim placerat.</p>
            </details>
        </article>
        <article>
            <img src="image/blogSmall.png" align="left"/>
            <p>Tittel</p>
            <p>Dato etc</p>
            <details>
                <summary>Her kommer et sammendrag av blog posten.</summary>
                <p>Aenean nec diam est. Nulla sollicitudin nisi vel diam consequat convallis. Quisque semper urna tellus, ut aliquet libero convallis fermentum. Sed a sem vel ligula maximus tincidunt. Sed nec vehicula nunc, at dictum neque. Fusce quis eros varius, tristique erat id, vestibulum metus. Cras ligula neque, convallis non lorem nec, ullamcorper fermentum odio.</p>
            </details>
        </article>
	</main>

	<aside>
			<h2>Streams</h2>
			<?php include 'moduler/twitter.php'; ?>
			<?php include 'moduler/tracksQuick.php'; ?>
	</aside>
	<?php include 'moduler/footer.php'; ?>
</body>
</html>

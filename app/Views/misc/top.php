<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arthur Lecomte - Développeur Fullstack</title>
    <link rel="stylesheet" href="/assets/css/styles.css">

</head>

<body>
<!-- Barre de navigation -->
 <nav>
	<ul>
		<li><a href="/"    class="<?= $_SERVER['REQUEST_URI'] === '/'    ? 'active' : '' ?>">Présentation</a></li>
		<li><a href="/dev" class="<?= $_SERVER['REQUEST_URI'] === '/dev' ? 'active' : '' ?>">Développement d'Applications</a></li>
		<li><a href="/bdd" class="<?= $_SERVER['REQUEST_URI'] === '/bdd' ? 'active' : '' ?>">Gestion de Bases de Données</a></li>
		<li><a href="/gpo" class="<?= $_SERVER['REQUEST_URI'] === '/gpo' ? 'active' : '' ?>">Gestion de Projets</a></li>
	</ul>
</nav>
<h1 style="text-align:center"><?= $title ?? ''?></h1>
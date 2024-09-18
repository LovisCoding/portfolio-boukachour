# Portfolio Arthur Lecomte CodeIgniter4

## Structure des fichiers

### Toutes les vues des pages se situent dans Views/nomPage/index.php

* Une page dispose de ses informations selon la compétence

* Le dossier misc contient l'entête et le footer des pages. 

Exemple de code d'une vue
*** 
``` html
<!-- /app/Views/bdd/index.php -->
<div class="container">
	<section id="base-de-donnees" class="section">
		<h1>Gérer des données et exploiter des bases de données</h1>
		<p>
			Cette compétence couvre la modélisation des bases de données, l’utilisation de systèmes de gestion de bases
			de données (SGBD), ainsi que la manipulation et l’exploitation des données pour répondre à des besoins
			métiers. Cela inclut des compétences en SQL, optimisation de requêtes, et en administration de bases de
			données.
		</p>

		<h2>Positionnement Personnel</h2>
		<p>
			J'ai une bonne maîtrise des bases de données relationnelles, notamment avec MySQL et PostgreSQL. J’ai
			travaillé sur plusieurs projets nécessitant la modélisation de données et l’écriture de requêtes complexes.
			Je souhaite approfondir mes connaissances sur les bases NoSQL et les techniques avancées d'optimisation des
			requêtes.
		</p>
	</section>
	<img src="/assets/img/c2.webp" alt="Gestion de Projets" class="img-comp" />
</div>
```
***


### Ces fichiers sont appelés dans les controllers respectifs des pages dans Controllers/PageNomPage

Exemple d'un controller
```php
# /app/Controllers/PageBDD.php
<?php

namespace App\Controllers;

class PageBDD extends BaseController
{
    public function index()
    {
      echo view('misc/top', ['title' => 'Compétence 2 : Analyser et optimiser des applications']);
	  echo view('bdd/index');
	  echo view('misc/bottom');
    }
}

```

## Tous les controllers sont appelés selon le routage du site

#### L'url  "/dev" ne va pas renvoyer les mêmes controllers que "/bdd"


```php
# /app/Config/Routes.php
<?php
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'PageHome::index');
$routes->get('/dev', 'PageDev::index');
$routes->get('/bdd', 'PageBDD::index');
$routes->get('/gpo', 'PageGPO::index');
```
### Ajout des images et css dans le dossier assets

* Les images sont stockées dans /public/assets/img
* Le css est stocké dans /public/assets/css, ici il n'y a pas besoin d'avoir plusieurs fichiers. Le css est importé en même temps que l'entête dans /app/Views/misc/top.php

### Conclusion

L'affichage du front avec CodeIgniter est assez simple avec les views, il faut néanmoins faire attention à ne pas ranger n'importe comment les fichiers sinon cela va definir assez rapidement illisible. Je préfère néanmoins dissocier le front et le back dans le code pour une meilleure modularité et clarté du code notamment en utilisant une REST API.

